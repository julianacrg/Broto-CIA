<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function getPDF(){
      $pdf=PDF::loadView('#view pra transformar em pdf');
      return $pdf->stream('customer.pdf');
    }
}
