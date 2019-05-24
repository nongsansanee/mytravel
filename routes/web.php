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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});


//Route::get('/2562/{fname}/{lname}', function ($fn,$ln) {
   // return view('travel2562');
//});

Route::get('/2562', function () {
    return view('travel2562');
});

Route::get('/2561', function () {
    return view('travel2561');
});