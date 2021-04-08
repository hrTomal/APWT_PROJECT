<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Person;
use App\Salary;
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
    
    public function send_for_salary_approval( Request $req ){
        $salary_id =  uniqid();
        
        $salaryId = DB::table('salary')
                    ->where('salary_id', $salary_id)
                    ->get();
        
        $salary = new Salary();
        $total_salary  = $req->session()->get('total_salary');

        if($total_salary > 0){
            $salary->salary_id = $salary_id;
            $salary->total_salary = $total_salary;
            $salary->save();
            return view('accountant.accountant_index');
        }
        else{
            echo "Please calculate salary first";
        }
        
        
        

    }
}
