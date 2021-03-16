<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@verify');

Route::get('/accountant', 'HomeController@accountantIndex');
Route::get('/logout','LogoutController@index');
Route::get('/profile','HomeController@profile');
Route::get('/generate_salary','HomeController@generate_salary');
Route::get('/generate_bonus','HomeController@generate_bonus');
Route::get('/generate_voucher','HomeController@generate_voucher');
Route::get('/salary_history','HomeController@salary_history');
Route::get('/salary_details','HomeController@salary_details');
Route::get('/apply_leave','HomeController@apply_leave');
Route::post('/generate_salary', 'CalculationController@calculate_total')->name('calculate');

