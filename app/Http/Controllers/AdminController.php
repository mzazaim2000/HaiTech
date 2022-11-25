<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function checklogin(Request $request)
    {

        $user = Admin::where('email', $request->email)->first();
   
        if(!$user == DB::table('admin')) {
            return view('pages/loginAdmin');
        }else{
            $credentials = Admin::where('password',$request->password)->first();
            if(!$credentials == DB::table('admin')){
                echo "Wrong Password!";
                
            }else{
                return view('pages/adminDashboard');
            }
            
            };
 
    } 

}
