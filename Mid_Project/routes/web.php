<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login','LoginController@index')->name('login.index2');;
Route::post('/login','LoginController@verify');
Route::get('/register', 'RegistrationController@index');
Route::post('/register', 'RegistrationController@store');

Route::group(['middleware' => 'sessionVerify'], function(){
    Route::get('/super_admin', 'SAController@index');
    Route::get('/accountant', 'HomeController@accountantIndex');
    Route::get('/logout','LogoutController@index');
    Route::get('/profile/{UserId}','HomeController@profile');
    Route::get('/generate_salary','HomeController@generate_salary');
    Route::post('/generate_salary', 'CalculationController@calculate_total')->name('calculate');

    Route::get('/refund','HomeController@sale_index');
    Route::get('/refund/{$sale_id}','HomeController@sale_refund')->name('sale_refund');

    Route::get('/verify_transaction','HomeController@verify_transaction_index');
    Route::post('/verify_transaction','HomeController@verify_transaction')->name('accountant.verify');
    Route::get('/generate_bonus','HomeController@generate_bonus');
    Route::get('/generate_voucher','HomeController@generate_voucher');
    Route::get('/salary_history','HomeController@show_transaction_list');
    Route::get('/salary_details','HomeController@show_salary_list');
    Route::get('/apply_leave/{UserId}','HomeController@apply_leave');
    Route::get('/send_for_salary_approval','CalculationController@send_for_salary_approval');
    Route::get('/notice', 'HomeController@show_notice')->name('notice');
    Route::get('/notice/delete/{notice_id}', 'SAController@delete_notice')->name('notice.delete');
    Route::post('/notice/delete/{notice_id}', 'SAController@destroy_notice')->name('notice.destroy');
    Route::post('/notice', 'SAController@add_notice');
    // Route::get('/delete_employee/{UserId}', 'SAController@delete_employee')->name('employee.delete');
    Route::get('/destroy_user/{UserId}', 'SAController@destroy_user')->name('user.destroy');
    Route::get('/search', 'SAController@search_index')->name('search.persons');
    Route::post('/search', 'SAController@search_persons')->name('search.persons');
    Route::get('/employee_list', 'SAController@employee_list')->name('employee.list');
    Route::get('/add_employee', 'SAController@add_employee_index')->name('employee.add');
    Route::post('/add_employee', 'SAController@add_employee')->name('employee.add');
    Route::get('/update_profile/{UserId}', 'HomeController@update_profile_index')->name('update_profile');
    Route::post('/update_profile/{UserId}', 'HomeController@store_profile_index')->name('store_profile');
   
    Route::get('/change_password/{UseId}', 'HomeController@change_password');
    Route::post('/change_password/{UseId}', 'HomeController@store_password');
    
});


