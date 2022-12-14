<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        
        $user = Auth::user();
        $user = User::find('id', $request->id);
        return response()->json($user);
      
        // $info = $user->User::update([
            
        //     'firstname'=>$request->fname,
        //     'surname'=>$request->lname,
        //     'email'=>$request->email,
        //     'contact'=>$request->contact,
        //     'company' =>$request->company

        // ]);
        // if($info){
        //     return view('pages/updateProfile');
        // }
        
      
        } 

        public function editProfile(Request $request){

            $data=User::find($request->id);
            return response()->json($data);
        }
}