<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Client;

 
class AuthController extends Controller
{
    public function home()
    {
        return view('index');
    } 
 
    public function index()
    {
        return view('login');
    }  
       
    function storeData(Request $request){

        return "Form Data";
        print_r($request->input());
        // $firstname=$request->input('fname');
        // $surname=$request->input('lname');
        // $email=$request->input('email');
        // $contact=$request->input('contact');
        // $password=$request->input('password');

    //     $isInsertSuccess = Client_tb::insert(['firstname'=>$firstname,
    //                                         'surname'=> $surname,
    //                                         'email'=> $email,
    //                                         'contact'=> $contact,
    //                                         'password'=> $password,
    // ]);
    //     if($isInsertSuccess) echo '<h1>Insert Success</h1>';
    //     else echo '<h1>Insert Failed</h1>';
    }

    public function create(Request $req)
    {
        $user = new Client();
        $user->firstname=$req('fname');
        $user->surname=$req('lname');
        $user->email=$req('email');
        $user->contact=$req('contact');
        $user->password=$req('password');
        $user->save();

        return view('login');
    }
}