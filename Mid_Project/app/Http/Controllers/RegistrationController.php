<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class RegistrationController extends Controller
{
    public  function index(){
        return view('register.index');
    }
    public function store(Request $req){

        // $validated = $req->validated();

        $user = new Person();
        $user->UserId           = $req->UserId;
        $user->Email            = $req->Email;
        $user->Name             =  $req->Name;
        $user->Gender           = $req->Gender;
        $user->Type             = $req->Type;
        $user->PhoneNo          = $req->PhoneNo;
        $user->Status           = "Pending";
        $user->DOB              = $req->DOB;
        $user->Password         = $req->Password;

        $user->save();

        return view('login.index2');

    }
}
