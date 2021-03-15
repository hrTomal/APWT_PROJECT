<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){

        //$validated = $req->validated();

        $user = DB::table('persons')
                    ->where('Password', $req->Password)
                    ->where('UserId', $req->UserId)
                    ->get();

        if($req->UserId == "" || $req->Password == ""){
           $req->session()->flash('msg', 'user id and username cannot be empty');
           return redirect('/login');

        }elseif(count($user) > 0 ){
            $user = Person::find($req->UserId);
            $req->session()->put('Name', $user->Name);
            if($user->Type == 'accountant'){
                return redirect('/accountant');
            }
            elseif($user->Type == 'admin'){
                //return redirect('/admin');
            }
            elseif($user->Type == 'super_admin'){
                return redirect('/super_admin');
            }
            else{
                echo "something went wrong!";
            }          

        }else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }
}
