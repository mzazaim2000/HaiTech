<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\DB;

class ClientServicesController extends Controller{

    public function insert(Request $request){
        $service = new Services;
        $service->firstname=$request->name;
        $service->phone=$request->phone;
        $service->email=$request->email;
        $service->company=$request->company;
        $service->services=$request->services;
        $service->issue=$request->issue;
        $save = $service->save();

        if($save){
            return view('pages/allServices');
        }
         else{
            return back()->with('<h1>Insert Fail</h1>');} 
        } 


    public function update(){
 
    }

    public function delete(){

    }

    public function view(){

    }
    
}