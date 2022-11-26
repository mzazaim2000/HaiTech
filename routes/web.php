<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ProfileController;


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
    return view('pages/loginClient');
});

// Route::get('/index', function () {
//     return view('layouts/frontend');
// });

Route::get('/login', function () {
    return view('pages/loginClient');
});
Route::post('/login', [AuthController::class, 'login'])->name("login");

Route::get('/register', function () {
    return view('pages/clientSignup');
});
Route::post('/register', [AuthController::class, 'signup'])->name("signup");

Route::get('/loginAdmin', function () {
    return view('pages/loginAdmin');
});
Route::post('/loginAdmin', [AdminController::class, 'checklogin'])->name("checklogin");

Route::get('/forgotClient', function () {
    return view('pages/forgotclientPassword');
});
Route::get('/resetPass', function () {
    return view('pages/resetPassword');
});

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/admindashboard', function () {
    return view('pages/adminDashboard');
});

Route::get('/updateprofileClient', function () {
    return view('pages/updateProfile');
});
Route::post('/updateprofileClient', [ProfileController::class, 'showProfile'])->name("showProfile");


Route::get('/navbar', function () {
    return view('pages/frontend2');
});

Route::get('/serviceForm', function () {
    return view('pages/requestForm');
});

Route::get('/home', function () {
    return view('pages/clientServices');
});



 