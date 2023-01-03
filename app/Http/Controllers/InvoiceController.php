<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Services;

class InvoiceController extends Controller
{
   
    public function generate_pdf(){
    
    $pdf = Pdf::loadView('pages.invoice');
    return $pdf->stream('invoice.pdf');
     }

    public function download_pdf(){
       
        $pdf = Pdf::loadView('pages.invoice');
        return $pdf->download('id-invoice.pdf');
    }

    public function showInvoice(){

       if($data = Services::where("status", "Completed")->get()){
        return view('pages/adminInvoice')->with('services', $data);
       }

        }

    public function editInvoiceData(Request $request){

        $data=Services::find($request->id);
        return response()->json($data);
    }
    
    public function updateInvoice(Request $request){
            
            $this->validate($request, [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'company' => 'required',
                'services' => 'required',
                'date' => 'required',
            ]);
            
        $id =$request->id;
        $name =$request->name;
        $phone =$request->phone;
        $email =$request->email;
        $company =$request->company;
        $services =$request->services;
        $date =$request->date;
        $amount =$request->amount;
        $paymentStatus =$request->paymentStatus;

            
            $data = Services::where('id','=',$id)->update([
                'name'=>$name,
                'phone'=>$phone,
                'email'=>$email,
                'company'=>$company,
                'services'=>$services,
                'date'=>$date,
                'amount'=>$amount,
                'paymentStatus'=>$paymentStatus,
                ]);
        
            if ($data){
    
                return redirect()->back();
    
            }
            else {
                return view('pages/serverError');
            }
    }    

    public function deleteInvoice(Request $request){
    
        $id =$request->id;
        $data=Services::where('id','=',$id)->delete();  
        if($data){

            $info = Services::all();
            return redirect()->route('showInvoice', ['services' => $info]);

        }

    }

    public function paid($id){
        
        $data = Services::find($id);
        $data->paymentStatus='Paid';
     
        if ($data->update()){
            return redirect()->back();

        }
       
        }    
}
