<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function reports(){
        return view('pages.reports');
    }
    public function invoice(){
        return view('pages.invoice');
    }
    public function receivepayment(){
        return view('pages.receivepayment');
    }
    public function estimate(){
        return view('pages.estimate');
    }
    public function creditnotice(){
        return view('pages.creditnotice');
    }
    public function salesreceipt(){
        return view('pages.salesreceipt');
    }
    public function refundreceipt(){
        return view('pages.refundreceipt');
    }
    public function delayedcredit(){
        return view('pages.delayedcredit');
    }
    public function delayedcharge(){
        return view('pages.delayedcharge');
    }
    //
    public function expense(){
        return view('pages.expense');
    }
    public function cheque(){
        return view('pages.cheque');
    }
    public function bill(){
        return view('pages.bill');
    }
    public function paybills(){
        return view('pages.paybills');
    }
    public function purchaseorder(){
        return view('pages.purchaseorder');
    }
    public function suppliercredit(){
        return view('pages.suppliercredit');
    }
    public function creditcardcredit(){
        return view('pages.creditcardcredit');
    }
    //
    public function bankdeposit(){
        return view('pages.bankdeposit');
    }
    public function transfer(){
        return view('pages.transfer');
    }
    
    public function statements(){
        return view('pages.statements');
    }
    public function investqtyadj(){
        return view('pages.investqtyadj');
    }
    //  
    public function accountsandsettings(){
        return view('pages.accountsandsettings');
    }
    public function customformstyles(){
        return view('pages.customformstyles');
    }
    public function alllists(){
        return view('pages.alllists');
    }
    
    public function recurringtransactions(){
        return view('pages.recurringtransactions');
    }
    public function attachments(){
        return view('pages.attachments');
    }
    //
    public function importdata(){
        return view('pages.importdata');
    }
    public function exportdata(){
        return view('pages.exportdata');
    }
    public function auditlog(){
        return view('pages.auditlog');
    }
    

}
