<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Salary;

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
        $personlist = Person::paginate(15);
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

    

    public function download_salary_sheet(){

    }
}
