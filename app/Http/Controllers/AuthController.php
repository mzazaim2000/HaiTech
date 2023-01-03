<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    public function login(Request $request)
    {
    $user = User::where('email', $request->email)->first();
   
        if(!$user == DB::table('user')) {
            return view('pages/loginClient');
        }else{
            $credentials = User::where('password',$request->password)->first();
            if(!$credentials == DB::table('user')){
                echo "Wrong Password!";
            }else{
                return view('pages/clientServices');
            }
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
            return view('pages/serverError');} 
        } 

  
}