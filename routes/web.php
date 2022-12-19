<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientServicesController;


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
Route::post('/updateprofileClient', [ProfileController::class, 'updateProfile'])->name("updateProfile");
Route::get('/profile/edit/{id}', [ProfileController::class, 'editServiceData']);


Route::get('/navbar', function () {
    return view('pages/frontend2');
});

Route::get('/serviceForm', function () {
    return view('pages/requestForm');
});
Route::get('/allServices', [ClientServicesController::class, 'show'])->name("show");
Route::post('/serviceForm', [ClientServicesController::class, 'insert'])->name("insert");
Route::post('/allServices/update', [ClientServicesController::class, 'update'])->name("update");
Route::post('/allServices/delete', [ClientServicesController::class, 'delete'])->name("delete");
Route::get('/service/edit/{id}', [ClientServicesController::class, 'editServiceData']);

Route::get('/home', function () {
    return view('pages/clientServices');
});

Route::get('/allServices/home', function () {
    return view('pages/clientServices');
}); 


Route::get('/adminAllServices', [AdminController::class, 'showAll'])->name("showAll");
Route::post('/adminAllServices/delete', [AdminController::class, 'delete'])->name("delete");

Route::get('/adminPending', [AdminController::class, 'showInProgress'])->name("showInProgress");
Route::post('/adminPending/update', [AdminController::class, 'updateService'])->name("updateService");
Route::post('/adminPending/delete', [AdminController::class, 'deleteService'])->name("deleteService");
Route::get('/service/edit/{id}', [AdminController::class, 'editServiceData']);


Route::get('/adminUpcoming', [AdminController::class, 'showRequest'])->name("showRequest");
Route::get('/approved/{id}', [AdminController::class, 'approved']);
Route::get('/canceled/{id}', [AdminController::class, 'canceled']);



Route::get('/adminClient', function () {
    return view('pages/adminClient');
});

Route::get('/adminClient', [AdminController::class, 'showUser'])->name("showUser");
Route::post('/adminClient/addClient', [AdminController::class, 'addClient'])->name("addClient");
Route::post('/adminClient/updateClient', [AdminController::class, 'updateClient'])->name("updateClient");
Route::post('/adminClient/deleteClient', [AdminController::class, 'deleteClient'])->name("deleteClient");
Route::get('/client/edit/{id}', [AdminController::class, 'editClientData']);


Route::get('/invoice', function () {
    return view('pages/adminInvoice');
});

Route::get('/clientForm', function () {
    return view('pages/clientForm');
});

