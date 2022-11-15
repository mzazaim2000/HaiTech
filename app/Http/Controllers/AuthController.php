<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;
 
class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    } 
 
    public function register()
    {
        return view('auth.register');
    }  
       
    public function save(Request $request){
        
        $user = new User;
        $user->firstname=$request->fname;
        $user->surname=$request->lname;
        $user->email=$request->email;
        $user->contact=$request->contact;
        $user->password=$request->password;
        $save = $user->save();

        if($save){
            return back()->with('<h1>Insert Success</h1>');} 
         else{
            return back()->with('<h1>Insert Fail</h1>');} 
        } 

    //     $firstname=$request->input('fname');
    //     $surname=$request->input('lname');
    //     $email=$request->input('email');
    //     $contact=$request->input('contact');
    //     $password=$request->input('password');

    //     $isInsertSuccess = Client::insert(['firstname'=>$firstname,
    //                                         'surname'=> $surname,
    //                                         'email'=> $email,
    //                                         'contact'=> $contact,
    //                                         'password'=> $password,
    // ]);
    //     if($isInsertSuccess) echo '<h1>Insert Success</h1>';
    //     else echo '<h1>Insert Failed</h1>';
    // public function store(Request $request)
    // {
    //     // $user = new User();
    //     // $user->firstname=$request->input('fname');
    //     // $user->surname=$request->input('lname');
    //     // $user->email=$request->input('email');
    //     // $user->contact=$request->input('contact');
    //     // $user->password=$request->input('password');
    //     // $user->save();
        
    //     // return view('login');
    // }
}