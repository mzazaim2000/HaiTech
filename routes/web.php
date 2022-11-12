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
    return view('welcome');
});

Route::get('/haitech', function () {
    return view('pages/loginClient');
});

Route::get('/signup', function () {
    return view('pages/signUpClient');
});

Route::get('/loginAdmin', function () {
    return view('pages/loginAdmin');
});