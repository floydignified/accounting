<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\SalesTransaction;
use App\StCreditNote;

class PdfController extends Controller
{
    public function generate()
    {

        $data = ['title' => 'CREDIT NOTE'];
        $sales_transaction = SalesTransaction::all();
        $credit_note = StCreditNote::all();

        $pdf = PDF::loadView('myPDF', compact('data', 'sales_transaction', 'credit_note'));

        return $pdf->stream('credit_notice.pdf');

    }
}
