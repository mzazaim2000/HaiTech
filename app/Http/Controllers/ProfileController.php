<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function showProfile(Request $request)
    {
        
    $user = User::find(auth()->id());
    $user->firstname=$request->fname;
    $user = auth()->user()->firstname;
    $user->surname=$request->lname;
    $user->email=$request->email;
    $user->contact=$request->contact;
    $user->password=$request->password;

    }
       
    public function updateProfile(Request $request){
        
        $user = auth()->user();
        print_r($user);
        $user = User::select('email', $request->email)->first();
        $user->User::update([
            'firstname'=>$request->fname,
            'surname'=>$request->lname,
            'email'=>$request->email,
            'contact'=>$request->contact,
        ]);
        
    
      
        } 

  
}