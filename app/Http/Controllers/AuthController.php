<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;
 
class AuthController extends Controller
{
    public function home()
    {
        return view('index');
    } 
 
    public function login()
    {
        echo "Login data";
        return view('login');
    }  
       
    function storeData(Request $request){

    
        $firstname=$request->input('fname');
        $surname=$request->input('lname');
        $email=$request->input('email');
        $contact=$request->input('contact');
        $password=$request->input('password');

        $isInsertSuccess = Client::insert(['firstname'=>$firstname,
                                            'surname'=> $surname,
                                            'email'=> $email,
                                            'contact'=> $contact,
                                            'password'=> $password,
    ]);
        if($isInsertSuccess) echo '<h1>Insert Success</h1>';
        else echo '<h1>Insert Failed</h1>';
    }

    public function store(Request $request)
    {
        // $user = new Client();
        // $user->firstname=$req('fname');
        // $user->surname=$req('lname');
        // $user->email=$req('email');
        // $user->contact=$req('contact');
        // $user->password=$req('password');
        // $user->save();

        $user = new User();
        $user->firstname=$request->input('fname');
        $user->surname=$request->input('lname');
        $user->email=$request->input('email');
        $user->contact=$request->input('contact');
        $user->password=$request->input('password');
        $user->save();
        
        return view('login');
    }
}