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
        $arrayTostring= implode(',', $request->input('services'));
        $service['services']=$arrayTostring;
        $service->issue=$request->issue;
        
        $save = $service->save();
    
        if($save){
        //     return view('pages/allServices');
         return back()->with('<h1>Insert Success</h1>');
        } else{
        return back()->with('<h1>Insert Fail</h1>');
            } 
        }
    
    public function view(){
    $data = Services::all();
    return view('pages/allServices')->with('services', $data);

    // DB::select('select * from services');
    // return view('pages/allServices',['services'=>$data]);
    // return view('pages/allServices', $data);
        }

    public function update(){
        
    }

    public function delete(){

    }

   
    
}