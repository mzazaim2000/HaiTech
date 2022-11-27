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
        $service->time=$request->time;
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
        // $data= Services::findOrFail($request->$email); //need to display based on user email only
        return view('pages/allServices')->with('services', $data);
        }

    public function edit($email){
        
        }    

    public function update(Request $request){
        $data = Services::findOrFail();

        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'company' => 'required',
            'services' => 'required',
            'date' => 'required',
            'time' => 'required',
            'issue' => 'required'
        ]);
    
        $input = $request->all();
        $data->fill($input)->save();
    
        if ($data){
            echo "Data updated Successfully";
        }
    }

    public function delete(Request $request){
    
    $service=$request->select;
    $data = Services::whereIn('id',$service)->delete();
   
    if($data){
        return view('pages/allServices')->with('services', $service);
    }
    }

   
    
}