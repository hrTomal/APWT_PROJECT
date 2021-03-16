<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;

class CalculationController extends Controller
{
    public function calculate_total(Request $req){
        $months = $req->numberOfMonths;

        $monthly_salary = DB::table('persons')->get()->sum('Salary');
        
        $total = $monthly_salary*$months;

        $req->session()->put('total_salary', $total);

        return view('accountant.generate_salary');

    }
}
