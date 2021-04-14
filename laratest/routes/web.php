<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login.welcome');
});
/*
Route::get('login', function () {
    return view('login.test');
});
*/
    Route::get('/login','loginController@index');
    Route::post('/login','loginController@verify');
    //Route::get('/test','loginController@test');

    Route::group(['middleware'=>('sess')], function(){

    Route::get('/home','HomeController@index');
    Route::get('/home/userlist','HomeController@userlist');
    //another way making route by array
    //Route::get('/home',['uses'=> 'HomeController@index]);
    Route::get('/home/create','HomeController@create');
    Route::post('/home/create','HomeController@store');
    Route::get('/home/userlist','HomeController@userlist');
    Route::get('/home/edit/{id}','HomeController@edit');
    Route::post('/home/edit/{id}','HomeController@update');
    Route::get('/home/delete/{id}','HomeController@delete');
    Route::post('/home/delete/{id}','HomeController@destroy');
    Route::get('/home/details/{id}','HomeController@show');

    });

   /* Route::group(['middleware'=>('type')], function(){

    Route::get('/home','HomeController@index');
    //another way making route by array
    Route::get('/home',['uses'=> 'HomeController@index]);
    Route::get('/home/create','HomeController@create');
    Route::post('/home/create','HomeController@store');
    Route::get('/home/userlist','HomeController@userlist');
    Route::get('/home/edit/{id}','HomeController@edit');
    Route::post('/home/edit/{id}','HomeController@update');
    Route::get('/home/delete/{id}','HomeController@delete');
    Route::post('/home/delete/{id}','HomeController@destroy');
    });*/




    Route::get('/logout','LogoutController@index');
