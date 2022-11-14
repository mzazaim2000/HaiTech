<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Models\User;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('pages/loginClient');
});

Route::get('/signup', function () {
    return view('pages/signUpClient');
});

//Route::view('signup','pages/signUpClient');
Route::post('DataInsert',[CustomAuthController::class,'DataInsert']);
// Route::get('/signup', function(){
//     User::create([
//         'firstname'=>request('fname'),
//         'surname'=>request('lname'),
//         'email'=>request('email'),
//         'contact'=>request('contact'),
//         'password'=>request('password')
//     ]);

// });
//Route::post('signup', 'CustomAuthController@create');

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



 