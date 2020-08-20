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
Route::get('/welcome', function () {
    return view('welcome');


});


Route::get('/', function () {
    return view('home');


});
Route::get('/contact', function () {
    return view('contactus');


});

Route::get('/about', function () {
    return view('aboutus');


});

Route::get('customer', 'CustomerController@list');


Route::post('customer', 'CustomerController@store');


Route::get('/editcustomer/{id}', 'CustomerController@edit');

// Route::get('/deletecustomer','CustomerController@destroy');
Route::get('deletecustomer/{id}', 'CustomerController@deleteUser');
