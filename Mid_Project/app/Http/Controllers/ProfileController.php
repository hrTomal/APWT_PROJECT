<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PersonRequest;
use App\Person;

class ProfileController extends Controller
{
    public function show(Request $requ){

        $UserId = $requ->session()->get('name');
        $person = Person::find($UserId);

        return view('seller.profile.index')->with('person',$person);
    }

    public function edit(Request $requ){

        $UserId = $requ->session()->get('name');
        $person = Person::find($UserId);

        return  view('seller.profile.edit')->with('person',$person);
    }

    public function update(PersonRequest $requ){
       
        //update into db or model

        $UserId = $requ->session()->get('name');
        $person =  Person::find($UserId);
        
        $person->name  =  $requ->name;
        $person->email      =  $requ->email;
        $person->password       =  $requ->password;
        $person->gender     =  $requ->gender;
        $person->status   =  $requ->status;
        $person->phone     =  $requ->phone;
        $person->salary      =  $requ->salary;
        $person->dob   =  $requ->DOB;

        $person->save();
        session()->flash('success', 'Profile has been updated successfully');
        return  redirect()->route('profile');
      
    }

}
 