<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@verify');
Route::get('/register', 'RegistrationController@index');
Route::post('/register', 'RegistrationController@store');

Route::get('/accountant', 'HomeController@accountantIndex');
Route::get('/logout','LogoutController@index');
Route::get('/profile/{UserId}','HomeController@profile');
Route::get('/generate_salary','HomeController@generate_salary');
Route::get('/generate_bonus','HomeController@generate_bonus');
Route::get('/generate_voucher','HomeController@generate_voucher');
Route::get('/salary_history','HomeController@show_transaction_list');
Route::get('/salary_details','HomeController@show_salary_list');
Route::get('/apply_leave/{UserId}','HomeController@apply_leave');
Route::post('/generate_salary', 'CalculationController@calculate_total')->name('calculate');
Route::get('/send_for_salary_approval','CalculationController@send_for_salary_approval');
Route::get('/change_password/{UseId}', 'HomeController@change_password');

