<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
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
    
    //AllServices Tab
    public function showAll(){
        
        $data = Services::all();
        return view('pages/adminAllServices')->with('services', $data);
        }
   

    public function deleteAll(Request $request){
    
        $id =$request->id;
        $data=Services::where('id','=',$id)->delete();  
        if($data){
            $info = Services::all();
            return redirect()->route('showAll', ['services' => $info]);  
        }else {
            return view('pages/serverError');
        }

    }

    //Services in-progressTab
    public function showInProgress(){
    
        $info = Services::where("status", '!=', "Decline")->get();

        if($info){
            return view('pages/adminPending')->with('services', $info);

        }else {
            return view('pages/clientErrorPage');;
        }
      
    }

    public function deleteServ(Request $request){
    
        $id =$request->id;
        $data=Services::where('id','=',$id)->delete();  
        if($data){
            $info = Services::all();
            return redirect()->route('showInProgress', ['services' => $info]);
        }else{
            return view('pages/serverError');;
        }

    }

    public function updateServ(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'company' => 'required',
            'services' => 'required',
            'date' => 'required',
            'time' => 'required',
            // 'issue' => 'required'
        ]);
    
        
        $id =$request->id;
        $name =$request->name;
        $phone =$request->phone;
        $email =$request->email;
        $company =$request->company;
        $services = implode(", ", $request->services);
        $date =$request->date;
        $time =$request->time;
        // $issue =$request->issue;

        $data = Services::where('id','=',$id)->update([
            'name'=>$name,
            'phone'=>$phone,
            'email'=>$email,
            'company'=>$company,
            'services'=>$services,
            'date'=>$date,
            'time'=>$time,
            // 'issue'=>$issue,
            ]);
    
        if ($data){
            return redirect()->back();
    
        }else {
            return view('pages/serverError');
        }
    }

    public function editServicesData(Request $request){

        $data=Services::find($request->id);
        return response()->json($data);
    }

    public function inprogress($id){
        
        $data = Services::find($id);
        $data->status='In-Progress';
      
        if ($data->update()){
            return redirect()->back();
        }

        }    

    public function complete($id){
        
        $data = Services::find($id);
        $data->status='Completed';
     
        if ($data->update()){
            return redirect()->back();

        }
       
        }    

    //Services upcomingTab    
    public function showRequest(){
        $data = Services::where("status", "Pending")->get();
        return view('pages/adminUpcoming')->with('services', $data);
        }

    public function approved($id){
        
        $data = Services::find($id);
        $data->status='Approved';
        $data->update();

        return redirect()->route('showRequest', ['services' => $data]);

        }    

    public function canceled($id){
        
        $data = Services::find($id);
        $data->status='Decline';
        $data->update();

        return redirect()->route('showRequest', ['services' => $data]);
        }            
        
    //clientTab
    public function showUser(){
        
        $data = User::all();
        return view('pages/adminClient')->with('user', $data);
        }
    
    public function addClient(Request $request){
        
            $this->validate($request, [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required',
                'contact' => 'required',
            ]);
            
            $id =$request->id;
            $firstname=$request->fname;
            $surname=$request->lname;
            $email=$request->email;
            $contact=$request->contact;
            
            $data = new User;
            $data->firstname = $firstname;
            $data->surname = $surname;
            $data->email = $email;
            $data->contact = $contact;
            $data->password = $surname."123";
            if ($data->save()){
                return redirect()->route('showUser', ['user' => $data]);
            }
    }

    public function editClientData(Request $request){

        $data=User::find($request->id);
        return response()->json($data);
    }

    public function updateClient(Request $request){
        
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'contact' => 'required',
        ]);
        
        $id =$request->id;
        $firstname=$request->fname;
        $surname=$request->lname;
        $email=$request->email;
        $contact=$request->contact;
        
        $data = User::where('id','=',$id)->update([
            'firstname'=>$firstname,
            'surname'=>$surname,
            'email'=>$email,
            'contact'=>$contact,
            ]);
    
        if ($data){

            return redirect()->back();

        }
    }

    public function deleteClient(Request $request){
    
        $id =$request->id;
        $data=User::where('id','=',$id)->delete();  
        if($data){

            $info = User::all();
            return redirect()->route('showUser', ['user' => $info]);

        }

    }
}
