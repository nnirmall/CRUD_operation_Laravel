<?php

use Illuminate\Support\Facades\Route;


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
Route::get('deletecustomer/{id}', 'CustomerController@deleteUser');
Route::post('updatecustomer', 'CustomerController@update');

