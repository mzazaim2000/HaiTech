<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;


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

Route::get('/signup', function () {
    return view('pages/signUpClient');
});
// Route::view('pages/signupClient');
// Route::post('/signup',[AuthController::class,'store']);

// Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
// Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
// Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
// Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

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

Route::get('/updateprofileClient', function () {
    return view('pages/updateProfile');
});

Route::get('/navbar', function () {
    return view('pages/frontend2');
});





 