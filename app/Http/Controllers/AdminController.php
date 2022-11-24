<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
 
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

//     public function login(Request $request){
//     $request->validate([
//         'email' => 'required|email',
//         'password' => 'required|alphaNum|min:8'
//     ]);   

//    // $userInfo = Admin::where('email','=', $request->input('email'))->first();

//     if(Auth::check($userInfo)){
//         return back()->with('error', 'Wrong Email! The provided credentials do not match our records.');
//     }
//     else{
//           if(Auth::check($request->password , $userInfo->password)){
//             return view('layouts/frontend');
//         }
//         else{
//             return back()-with('error', 'Wrong Login! The password is incorrect.');
//         }
          
//     }}
}
