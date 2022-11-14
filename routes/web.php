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

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('pages/loginClient');
});

Route::get('/signup', function () {
    return view('pages/signUpClient');
});

Route::get('/loginAdmin', function () {
    return view('pages/loginAdmin');
});
Route::get('/forgotpass', function () {
return view('pages/forgotPassword');
});
Route::get('/resetpass', function () {
    return view('pages/forgotclientpassword');
    });