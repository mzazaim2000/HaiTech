<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
   
    public function generate_pdf()
    {
   
    $pdf = Pdf::loadView('pages.invoice');
    return $pdf->stream('invoice.pdf');
     }

    public function download_pdf()
    {
       
        $pdf = Pdf::loadView('pages.invoice');
        return $pdf->download('id-invoice.pdf');
    }

    public function export_pdf(){
        $pdf = Pdf::loadView('pdf.invoice');
        return $pdf->stream('invoice.pdf');
    }
}
