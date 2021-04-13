<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Salary;
use App\Notice;
use App\Sale;
use App\Http\Requests\PassRequest;
use App\Http\Requests\TransactionRequest;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function accountantIndex(){
        return view('accountant.accountant_index');
    }
    public function generate_salary( Request $req){
        $req->session()->forget('total_salary');
        return view('accountant.generate_salary');
    }
    public function generate_bonus(){
        return view('accountant.generate_bonus');
    }
    public function generate_voucher(){
        return view('accountant.generate_voucher');
    }
    public function salary_details(){
        return view('accountant.salary_details');
    }
    public function salary_history(){
        return view('accountant.salary_history');
    }
    
    public function profile($UserId){
        $user = Person::find($UserId);
        return view('home.profile')->with('user', $user);
    }

    public function show_salary_list(){
        $personlist = DB::table('persons')
                    ->whereNotIn('Type', ['customer'])
                    ->get();
        return view('accountant.salary_details')->with('personlist', $personlist);
    }

    public function show_transaction_list(){
        $transactionlist = Salary::paginate(10);
        return view('accountant.salary_history')->with('transactionlist', $transactionlist);
    }
    public function apply_leave($UserId){
        DB::table('persons')->where('UserId', $UserId)->update(array('Status' => "Applied for leave"));
        // echo "Success";
    }

    public function change_password($UserId){
        $user = Person::find($UserId);
        return view('home.change_password')->with('user', $user);
    }
    public function store_password($UserId, PassRequest $req){

        $validated = $req->validated();

        $user = Person::find($UserId);
        $user->Password = $req->newPassword;
        $user->save();

        $req->session()->flush();
        return redirect()->route('login.index2');
    }

    public function verify_transaction_index(){
        return view('accountant.verify_transaction');
    }

    public function verify_transaction(TransactionRequest $req){

        $validated = $req->validated();

        $transaction = DB::table('salary')
                        ->where('salary_id', $req->transaction_id )
                        ->get();
        
        $transaction_ = Salary::find($req->transaction_id);

        if(count($transaction) > 0){
            return redirect()->route('accountant.verify')
                    ->with(['transaction_message' => "{$req->transaction_id} Transaction id FounD ,
                                Transaction Amount: {$transaction_->total_salary}",
                                    'alert' => 'alert-success']);
        }
        else{
            return redirect()->route('accountant.verify')
                    ->with(['transaction_message' => "{$req->transaction_id} Transaction id not FounD ",
                     'alert' => 'alert-success']);
        }
        
    }    

    public function show_notice(){
        $active_notice = DB::table('notice')
                    ->whereNotIn('status', ['over'])
                    ->get();
        return view('home.notice')->with('active_notice', $active_notice);
    }
    public function update_profile_index($UserId){
        $user = Person::find($UserId);
        return view('home.update_profile')->with('user', $user);
    }
    public function store_profile_index($UserId,Request $req){

        if($req->hasFile('img')){
            $file = $req->file('img');
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('profile_pic', $filename);

            $user = Person::find($UserId);
        
            $user->Email            = $req->Email;
            $user->Name             = $req->Name;
            $user->Gender           = $req->Gender;
            $user->Type             = $req->Type;
            $user->PhoneNo          = $req->PhoneNo;
            $user->Status           = "active";
            $user->DOB              = $req->DOB;
            $user->profile_pic      = $filename;
            $user->save();

            return view('home.profile')->with('user', $user);
        }
        else{
            echo "Upload profile pic.";
        }
    }

    public function sale_index(){

        $sale = Sale::all();

        return view('accountant.refund')->with('sale', $sale);
    }

    public function sale_refund($sale_id){
        $salex = Sale::find($sale_id);

        $salex->status = "refunded";
        $salex->save();

        $sales = Sale::all();

        return view('accountant.refund')->with('sale', $sales);
    }

    public function download_salary_sheet(){

    }
}
