<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Company;
use App\Sales;
use App\Expenses;
use App\Advance;
use App\Customers;
use App\ProductsAndServices;
USE App\SalesTransaction;

class PagesController extends Controller
{
    public function reports(){
        $customers = Customers::all();
        $products_and_services = ProductsAndServices::all();
        return view('pages.reports', compact('customers', 'products_and_services'));
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
    public function sales(){
        $customers = Customers::all();
        $products_and_services = ProductsAndServices::all();
        $sales_transaction = SalesTransaction::all();
        return view('pages.sales', compact('customers', 'products_and_services', 'sales_transaction'));
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
        $customers = Customers::all();
        $products_and_services = ProductsAndServices::all();
        $sales_transaction = SalesTransaction::all();
        return view('pages.statements', compact('customers', 'products_and_services', 'sales_transaction'));
    }
    public function investqtyadj(){
        return view('pages.investqtyadj');
    }
    //  
    public function accountsandsettings(){
        $company = Company::first();
        $sales = Sales::first();
        $expenses = Expenses::first();
        $advance = Advance::first();
        $customers = Customers::all();
        $products_and_services = ProductsAndServices::all();
        return view('pages.accountsandsettings', compact('company', 'sales', 'expenses', 'advance', 'customers', 'products_and_services'));
    }
    public function customformstyles(){
        $customers = Customers::all();
        $products_and_services = ProductsAndServices::all();
        $sales_transaction = SalesTransaction::all();
        return view('pages.customformstyles', compact('customers', 'products_and_services', 'sales_transaction'));
    }
    public function alllists(){
        return view('pages.alllists');
    }
    
    public function recurringtransactions(){
        $customers = Customers::all();
        $products_and_services = ProductsAndServices::all();
        $sales_transaction = SalesTransaction::all();
        return view('pages.recurringtransactions', compact('customers', 'products_and_services', 'sales_transaction'));
    }
    public function attachments(){
        $customers = Customers::all();
        $products_and_services = ProductsAndServices::all();
        $sales_transaction = SalesTransaction::all();
        return view('pages.attachments', compact('customers', 'products_and_services', 'sales_transaction'));
    }
    //
    public function importdata(){
        $customers = Customers::all();
        $products_and_services = ProductsAndServices::all();
        $sales_transaction = SalesTransaction::all();
        return view('pages.importdata', compact('customers', 'products_and_services', 'sales_transaction'));
    }
    public function exportdata(){
        $customers = Customers::all();
        $products_and_services = ProductsAndServices::all();
        $sales_transaction = SalesTransaction::all();
        return view('pages.exportdata', compact('customers', 'products_and_services', 'sales_transaction'));
    }
    public function auditlog(){
        $customers = Customers::all();
        $products_and_services = ProductsAndServices::all();
        $sales_transaction = SalesTransaction::all();
        return view('pages.auditlog', compact('customers', 'products_and_services', 'sales_transaction'));
    }
    

}
