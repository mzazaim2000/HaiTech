<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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
    return view('layouts/frontend');
});

Route::get('/index', function () {
    return view('layouts/frontend');
});

Route::get('/login', function () {
    return view('pages/loginClient');
});

Route::view('/signup', function () {
    return view('pages/signUpClient');
});

Route::get('/signup',[AuthController::class,'store']);


Route::get('/loginAdmin', function () {
    return view('pages/loginAdmin');
});

Route::get('/forgotAdmin', function () {
return view('pages/forgotPassword');
});

Route::get('/resetAdmin', function () {
    return view('pages/resetPassword');
});

Route::get('/forgotClient', function () {
    return view('pages/forgotclientPassword');
});

Route::get('/resetClient', function () {
    return view('pages/resetclientPassword');
});

Route::get('/admindashboard', function () {
    return view('pages/adminDashboard');
});

Route::get('/updateprofileAdmin', function () {
    return view('pages/updateProfile');
});





 