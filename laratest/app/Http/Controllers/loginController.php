<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;



class loginController extends Controller
{
    public function index(Request $req){
        if($req->session()->has('name')){
            return redirect('/home');
            } 
        return view('login.index');
    }
    public function verify(Request $req){
       // echo "Posted!";
       //echo $req->username."<br>";
       //echo $req->password;
       /*
       $userlogin = Person::where('Password',$req->password)
                            ->where('UserId',$req->username)
                            ->get();
        */                    

        // user Query Builer class use for login//alternate way

        $userlogin = DB::table('persons')
                            ->where('Password',$req->password)
                            ->where('UserId',$req->username)
                            ->get();

       if($req->username==""  || $req->password==""){
        // echo "Null Submission";
        $req->session()->flash('msg', 'Null Submission');
        return redirect('/login');

      }elseif(count($userlogin) > 0){
           //echo "Valid User";
            //$req->session()->put('name', $req->username);
           //$req->session()->put('password', $req->password);

          // $req->session()->get('name');
          // $req->session()->forget('name');
           //$req->session()->flush(); 

           //$req->session()->has();
          // $req->session()->flash('msg',"Invalid username....");
          // $req->session()->flash('error',"bad request error....");
        //single call
           /* $req->session()->get('msg');
           $req->session()->keep('msg');
           $req->session()->get('msg');
           //double call
           $req->session()->reflash(); */
           //use both regular and flsh data
           //$req->session()->pull('name');

        //$userInfo = Person::all();
        //print_r($userInfo);
           
        $req->session()->put('name', $req->username);
        
        
        return redirect('/home'); 
        
       }else{
        $req->session()->flash('msg', 'invalid username and password');
        return redirect('/login');
       }
    }
    
    public function test(){
        return view('login.test');
    }

}
