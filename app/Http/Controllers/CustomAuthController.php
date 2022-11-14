<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Client_tb;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
class CustomAuthController extends Controller
{
    public function home()
    {
        return view('index');
    } 
 
    public function index()
    {
        return view('login');
    }  
       
    function DataInsert(Request $request){

        $firstname=$request->input('fname');
        $surname=$request->input('lname');
        $email=$request->input('email');
        $contact=$request->input('contact');
        $password=$request->input('password');

        $isInsertSuccess = Client_tb::insert(['firstname'=>$firstname,
                                            'surname'=> $surname,
                                            'email'=> $email,
                                            'contact'=> $contact,
                                            'password'=> $password,
    ]);
        if($isInsertSuccess) echo '<h1>Insert Success</h1>';
        else echo '<h1>Insert Failed</h1>';
    }

    // public function create()
    // {
    //     $user = new User;
    //     $user->firstname=request('fname');
    //     $user->surname=request('lname');
    //     $user->email=request('email');
    //     $user->contact=request('contact');
    //     $user->password=request('password');
    //     $user->save();

    //     // var_dump(request('fname'));
    //     // var_dump(request('lname'));
    //     // var_dump(request('email'));
    //     // var_dump(request('contact'));
    //     // var_dump(request('password'));
    
    // }   


}