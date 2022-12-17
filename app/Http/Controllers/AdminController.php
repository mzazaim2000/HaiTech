<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Services;
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

    public function index(){
        $service= Services::all();
        return view('index', compact('services'));
    }

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
            // return view('pages/allServices')->with('services', $data);
            return redirect()->route('show', ['services' => $data]);
         
        } else{
        return back()->with('<h1>Insert Fail</h1>');
            } 
        }
    
    public function show(){
        
        $data = Services::all();
        return view('pages/adminAllServices')->with('services', $data);
        }
   

    public function update(Request $request){
        
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
    
        
        $id =$request->id;
        $name =$request->name;
        $phone =$request->phone;
        $email =$request->email;
        $company =$request->company;
        $services = implode(",", $request->services);
        $date =$request->date;
        $time =$request->time;
        $issue =$request->issue;

        $data = Services::where('id','=',$id)->update([
            'name'=>$name,
            'phone'=>$phone,
            'email'=>$email,
            'company'=>$company,
            'services'=>$services,
            'date'=>$date,
            'time'=>$time,
            'issue'=>$issue,
            ]);
    
        if ($data){

            //echo "Successfuly updated";
            $info = Services::all();
            // return view('pages/allServices')->with('services', $info);
            return redirect()->route('show', ['services' => $info]);


        }
    }

    public function delete(Request $request){
    
        $id =$request->id;
        $data=Services::where('id','=',$id)->delete();  
        if($data){
            // echo "Data deleted";
            $info = Services::all();
            // return view('pages/allServices')->with('services', $info);
            return redirect()->route('show', ['services' => $info]);

        }

    }

    public function editServiceData(Request $request){

        $data=Services::find($request->id);
        return response()->json($data);
    }

    public function showInProgress(){
        
        $data = Services::all();
        return view('pages/adminPending')->with('services', $data);
        }

    public function showRequest(){
        
        $data = Services::all();
        return view('pages/adminUpcoming')->with('services', $data);
        }

}
