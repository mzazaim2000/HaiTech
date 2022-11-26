<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\DB;

class ClientServicesController extends Controller{

    public function insert(Request $request){
        
        $service = new Services;
        $service->name=$request->name;
        $service->phone=$request->phone;
        $service->email=$request->email;
        $service->company=$request->company;
        $arrayTostring= implode(', ', $request->input('services'));
        $service['services']=$arrayTostring;
        $service->date=$request->date;
        $service->issue=$request->issue;
        
        $save = $service->save();

        if($save){
            $data = Services::all();
            return view('pages/allServices')->with('services', $data);
         
        } else{
        return back()->with('<h1>Insert Fail</h1>');
            } 
        }
    
    public function show(Request $request){
    $data = Services::all();
    $user = Services::where('email', $request->email)->first(); //need to display based on user email only
        return view('pages/allServices')->with('services', $data);
        }

    public function edit(){
        
        }    

    public function update(){
        
    }

    public function delete($email){
    $data = Services::find($email);
    $data->delete(); 
 
        // return redirect('/')->with('success', 'Services cancel.');  
    }

   
    
}