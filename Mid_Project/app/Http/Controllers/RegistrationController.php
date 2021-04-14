<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Person;

class RegistrationController extends Controller
{
    public function index(){
    return view('registration.register');
    }


    public function register(RegistrationRequest $requ){

        $person = new Person();

        if($requ->hasFile('myfile'))
        {
        $file = $requ->file('myfile');
        
        $filename =  time().".".$file->getClientOriginalExtension();
        $file->move('images/profile_upload', $filename);
        
        
         $person->name  =  $requ->sellerName;
         $person->password   =  $requ->password;
         $person->email      =  $requ->email;
         $person->id       =  $requ->id;
         $person->gender     =  $requ->gender;
         $person->status   =  $requ->status;
         $person->phone     =  $requ->phone;
         $person->salary      =  $requ->salary;
         
         $person->dob   =  $requ->dob;
         $person->type   =  $requ->type;
         $person->profile_image = $filename;
         
         $person->save();
         return redirect()->route('login');

        }
        
    }
}
