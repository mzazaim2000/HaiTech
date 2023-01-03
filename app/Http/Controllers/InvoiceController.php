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
       
        $data = Services::where("paymentstatus", "Paid")->get();
        return view('pages/adminInvoice')->with('services', $data);

       }
    }

    public function showUnpaidInvoice(){
      
        if($data = Services::where("status", "Completed")->get()){

         $data = Services::where("paymentstatus", "Unpaid")->get();
         return view('pages/adminUnpaidInvoice')->with('services', $data);

        }
 
         }

    public function editInvoiceData(Request $request){

        $data=Services::find($request->id);
        return response()->json($data);
    }
    
    public function updateInvoice(Request $request){
        
        $this->validate($request, [
               
                'amount' => 'required',
                
            ]);
            
        $id =$request->id;
        $amount =$request->amount;
        $data = Services::where('id','=',$id)->update([
                'amount'=>$amount,
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
