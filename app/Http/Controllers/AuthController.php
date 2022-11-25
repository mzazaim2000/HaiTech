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
            return back()->with('<h1>Insert Fail</h1>');} 
        } 

    public function forgotPasswordValidate($token)
        {
            $user = User::where('token', $token)->where('is_verified', 0)->first();
            if ($user) {
                $email = $user->email;
                return view('pages/resetPassword', compact('email'));
            }
            return redirect()->route('forgotPass')->with('failed', 'Password reset link is expired');
        }    

    public function forgotPass(Request $request){
        

        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('failed', 'Failed! email is not registered.');
        }

        $token = Str::random(30);

        $user['token'] = $token;
        $user['is_verified'] = 0;
        $user->save();

        //Mail::to($request->email)->send( new VerifyEmail($user->email, $token));

        if(Mail::failures() != 0) {
            return back()->with('success', 'Success! password reset link has been sent to your email');
        }
        return back()->with('failed', 'Failed! there is some issue with email provider');

    }

    public function updatePassword(Request $request) {
    
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user['password'] = ($request->password);
            $user->save();
            return view('pages/loginClient');
        }
        return redirect()->route('resetPass')->with('failed', 'Failed! something went wrong');
    }

}