<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

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
    return view('welcome');
});

// frontend

 Route::get('/home','PagesController@index')->name('index');
 Route::get('/products','PagesController@products')->name('products');

 //login & logout

 Route::get('/login','LoginController@index')->name('login');
 Route::post('/login','LoginController@verify');
 Route::get('/logout','LogoutController@index')->name('logout');

 //registration

 Route::get('/registration','RegistrationController@index')->name('register');
 Route::post('/registration','RegistrationController@register');

Route::group(['middleware'=>('sess')], function(){

 Route::group(['prefix' =>'seller'],function(){

 	//seller Dashboard

 	Route::get('/','SellerController@index')->name('seller.pages.index');

 		
 	//profile routes

 	Route::get('/profile','ProfileController@show')->name('profile');
    Route::get('/profile/edit','ProfileController@edit')->name('profile.edit');
    Route::post('/profile/edit','ProfileController@update')->name('profile.update');

 	//product route


 	Route::get('/products/create','SellerController@create_product')->name('seller.product.create');
 	Route::post('/products/create','SellerController@store_product')->name('seller.product.create');
 	Route::get('/products/view','SellerController@products_view')->name('seller.products.view');
 	Route::get('/products/edit/{id}','SellerController@products_edit')->name('seller.products.edit');
 	Route::post('/products/edit/{id}','SellerController@products_update')->name('seller.products.edit');
 	Route::post('/products/delete/{id}','SellerController@products_delete')->name('seller.products.delete');
 	Route::get('/products/quantity','SellerController@products_quantity')->name('seller.products.quantity');
 	Route::get('/upcomingproducts','ProductController@upcoming_products')->name('seller.upcoming.products');
 	Route::post('/upcomingproducts','ProductController@insert_upcoming_products')->name('seller.upcoming.products');
 	Route::post('/search/product','ProductController@search_product')->name('search.product');



//category route


 	Route::get('/category/view','SellerController@category_view')->name('seller.category.category_view');
 	Route::get('/category/create','SellerController@create_category')->name('seller.category.create_category');
 	Route::post('/category/create','SellerController@store_category')->name('seller.category.create_category');
 	Route::get('/category/edit/{id}','SellerController@edit_category')->name('seller.category.edit_category');
 	Route::post('/category/edit/{id}','SellerController@update_category')->name('seller.category.edit_category');
 	Route::post('/category/delete/{id}','SellerController@delete_category')->name('seller.category.delete_category');


 });
 
///order routes.................................

 Route::group(['prefix' =>'order'],function(){

 	Route::get('/','SellerController@order_view')->name('order.order_view');
 	Route::get('/details/{id}','SellerController@order_details')->name('order.order_details');
 	Route::post('/delete/{id}','SellerController@order_delete')->name('order.order_delete');
 	Route::get('/totalorder','SellerController@total_order')->name('order.order_total');
 	Route::get('/totalamount','SellerController@total_amount')->name('order.order_amount');


 });

//notice routes

 Route::get('/notice','NoticeController@index')->name('notice');

 //sms routes

 Route::get('send-sms-notification', [NotificationController::class, 'sendSmsNotificaition'])->name('sms');

 //buyer routes

 Route::get('buyer/list','BuyerController@buyer_list')->name('buyer.list');
 Route::get('buyer/message/{id}','BuyerController@buyer_message')->name('buyer.message');
 Route::post('buyer/message/{id}','BuyerController@send_message')->name('buyer.message');

 });



