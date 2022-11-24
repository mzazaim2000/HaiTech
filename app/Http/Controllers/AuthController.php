<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

 
class AuthController extends Controller
{
    public function login(Request $request)
    {
    
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:8'
        ]);   

        $user = User::where('email','=', $request->input('email'))->get();

        if(Auth::check($user)){
            
            if(Auth::check($request->password , $user->password)){
                return view('layouts/frontend');
            }
            else{
                return back()-with('error', 'Wrong Login! The password is incorrect.');
            }
        }
        else{
            return back()->with('error', 'Wrong Email! The provided credentials do not match our records.');
        }

    } 
       
    public function signup(Request $request){
        
        $user = new User;
        $user->firstname=$request->fname;
        $user->surname=$request->lname;
        $user->email=$request->email;
        $user->contact=$request->contact;
        $user->password=$request->password;
        $save = $user->save();

        if($save){
            return view('pages/loginClient');
        }
         else{
            return back()->with('<h1>Insert Fail</h1>');} 
        } 


}