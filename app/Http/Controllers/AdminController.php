<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class AdminController extends Controller
{
    public function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:8'
        ]);   

        $credentials = array(
            'email'=> $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($credentials)){
            return view('pages/admindashboard');
        }
        else{
            return back()-with('error', 'Wrong Login! The provided credentials do not match our records.');
        }
    } 

}