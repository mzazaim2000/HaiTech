<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Client;
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
       
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->with('message', 'Signed in!');
        }
   
        return redirect('/login')->with('message', 'Login details are not valid!');
    }
 
    public function signup()
    {
        return view('/signup');
    }
       
    public function signupsave(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("dashboard");
    }
 
    public function create(array $data)
    {
        
      return User::create([
        'firstname' => $data['fname'],
        'surname' => $data['lname'],
        'email' => $data['email'],
        'contact' => $data['contact'],
        'password' => $data['password']
      ]);
    }    
    
    public function register(Request $req)
    {
        $user = new User;
        $user->firstname=$req->fname;
        $user->surname=$req->lname;
        $user->email=$req->email;
        $user->contact=$req->contact;
        $user->password=$req->password;
        $user->save();
    }   

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('/login');
    }
     
    public function signOut() {
        
        Auth::logout();
        return redirect('login');
    }
}