<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function accountantIndex(){
        return view('accountant.accountant_index');
    }
    public function generate_salary(){
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
    
    public function profile(){
        return view('home.profile');
    }

    public function show_salary_list(){
        $personlist = Person::paginate(15);
        return view('accountant.salary_details')->with('personlist', $personlist);
    }
}
