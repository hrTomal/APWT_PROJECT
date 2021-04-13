<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NoticeRequest;
use Illuminate\Support\Facades\DB;
use App\Notice;
use App\Person;
use App\Salary;
use App\Http\Requests\RegRequest;


class SAController extends Controller
{
    public function index(){
        $person = DB::table('persons')
                ->get()->count();
        $banned_customer = DB::table('persons')
            ->where('Status', 'banned')
            ->where('Type', 'customer')
            ->get()->count();
        $active_customer = DB::table('persons')
            ->where('Status', 'active')
            ->where('Type', 'customer')
            ->get()->count();
        $admin = DB::table('persons')
            ->where('Type', 'admin')
            ->get()->count();
        $notice = DB::table('notice')
                ->where('status', 'active')
                ->get()->count();
        $salary = DB::table('salary')
                ->where('status', 'Pending Approval')
                ->get()->count();


        return view('super_admin.index',compact(['person','notice','salary','active_customer','admin',
                                                    'banned_customer']));
    }
    public function add_notice(NoticeRequest $req){

        $validated = $req->validated();

        $last_element = DB::table('notice')->orderBy('notice_id', 'DESC')->first();
        $last_id = $last_element->notice_id;
        $new_id = ((int)$last_id) + 1;

        $notice = new Notice();

        $notice->notice_id = $new_id;
        $notice->details   = $req->notice_text;

        $notice->save();
        return redirect()->route('notice')
                ->with(['message' => "Notice created,ID: {$new_id}", 'alert' => 'alert-success']);


    }
    public function delete_notice($notice_id){

        $notice = Notice::find($notice_id);

        return view('super_admin.delete_notice')->with('notice', $notice);
    }

    public function destroy_notice($notice_id){
        if(Notice::destroy($notice_id)){
            return redirect('/notice');
        }else{
            return redirect('/notice'.$notice_id);
        }
    }
    public function search_index(){
        return view('super_admin.search');
    }
    public function search_persons(Request $req){

        $user = Person::find($req->search_text);

        return view('home.delete_profile')->with('user', $user);
    }
    public function destroy_user($UserId){
        if(Person::destroy($UserId)){
            return redirect('/employee_list');
        }else{
            return redirect('/employee_list'.$UserId);
        }
    }
    public function employee_list(){
        $employee = Person::all();
        return view('super_admin.employee_list')->with('employee', $employee);
    }
    public function add_employee_index(){
        return view('super_admin.add_employee');
    }
    public function add_employee(RegRequest $req){
        
        $validated = $req->validated();

        $last_element = DB::table('persons')->orderBy('UserId', 'DESC')->first();
        $last_id = $last_element->UserId;
        $new_id = ((int)$last_id) + 1;

        if($req->hasFile('img')){
            $file = $req->file('img');
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('profile_pic', $filename);        

            $user = new Person();
            $user->UserId           = $new_id;
            $user->Email            = $req->Email;
            $user->Name             = $req->Name;
            $user->Gender           = $req->Gender;
            $user->Type             = $req->Type;
            $user->PhoneNo          = $req->PhoneNo;
            $user->Status           = "active";
            $user->DOB              = $req->DOB;
            $user->Password         = $req->Password;
            $user->profile_pic      = $filename;
            $user->save();
        
            return redirect()->route('employee.list')
                ->with(['message' => "Account created,ID: {$new_id}", 'alert' => 'alert-success']);
        }
        else{
            echo "NO image found";
        }
    }
}
