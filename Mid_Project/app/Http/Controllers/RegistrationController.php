<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegRequest;
use App\Person;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public  function index(){
        return view('register.index');
    }
    public function store(RegRequest $req){

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
        
            return redirect()->route('login.index2')
                ->with(['message' => "Account created,ID: {$new_id}", 'alert' => 'alert-success']);
        }
        else{
            echo "NO image found";
        }
        
    }
}
