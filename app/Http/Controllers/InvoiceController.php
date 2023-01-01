<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
   
    public function generate_pdf()
    {
    $data = 'webjourney.dev';
    $pdf = Pdf::loadView('pdf.invoice');
    return $pdf->stream('invoice.pdf');
     }

    public function download_pdf()
    {
        $data = 'webjourney.dev';
        // $pdf = Pdf::loadView('billing_invoice',compact('data'));
        // return $pdf->download('billing-invoice.pdf');
    }

    public function export_pdf(){
        $pdf = Pdf::loadView('pdf.invoice');
        return $pdf->stream('invoice.pdf');
    }
}
