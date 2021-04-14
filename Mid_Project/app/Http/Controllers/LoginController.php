<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login.login');
    }

    public function verify(Request $req){

      $userlogin = DB::table('people')
                            ->where('Password',$req->password)
                            ->where('id',$req->username)
                            ->get();



       if($req->username==""  || $req->password==""){
        
        $req->session()->flash('msg', 'Null Submission');
        return redirect('/login');

      }elseif(count($userlogin) > 0){
           
        $req->session()->put('name', $req->username);
         
         return redirect()->route('seller.pages.index');
        
       }else{
        $req->session()->flash('msg', 'invalid username and password');
        return redirect('/login');
       }
    }


}
