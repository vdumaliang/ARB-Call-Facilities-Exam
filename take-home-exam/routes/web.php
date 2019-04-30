<?php

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

// type of user login route
Route::get('admin','userController@admin');
Route::get('customer','userController@customer');

//register customer
Route::get('register','userController@register');
Route::post('register-user','userController@registerUser');

//login users
Route::get('login','userController@login');
Route::post('login-user','userController@loginUser');

//user check login
Route::get('userLogin', 'userController@loginUser');
Route::get('userLogout', 'userController@logout');

//Customer Purchase
Route::resource('purchase','purchaseController');

//Admin Purchase List
Route::get('admin-purchase','purchaseController@adminPurchaseList');
Route::get('admin-category/{request}', 'purchaseController@adminCategory');




