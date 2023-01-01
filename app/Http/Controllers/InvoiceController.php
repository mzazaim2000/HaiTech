<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
   
    public function generate_pdf()
    {
        $data = 'webjourney.dev';
        $pdf = Pdf::loadView('billing',compact('data'));
        return $pdf->stream('billing-invoice');
    }

    public function download_pdf()
    {
        $data = 'webjourney.dev';
        $pdf = Pdf::loadView('billing',compact('data'));
        return $pdf->download('billing-invoice.pdf');
    }
}
