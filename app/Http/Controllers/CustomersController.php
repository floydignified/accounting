<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use App\SalesTransaction;
use App\StInvoice;
use App\StEstimate;
use App\StSalesReceipt;
use App\ProductsAndServices;

class CustomersController extends Controller
{
    public function add_customer(Request $request)
    {
        $customer = new Customers;
        $customer->customer_id = Customers::count() + 1;
        $customer->f_name = $request->f_name;
        $customer->l_name = $request->l_name;
        $customer->email = $request->email;
        $customer->company = $request->company;
        $customer->phone = $request->phone;
        $customer->mobile = $request->mobile;
        $customer->fax = $request->fax;
        $customer->display_name = $request->display_name;
        $customer->other = $request->other;
        $customer->website = $request->website;
        $customer->street = $request->street;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->postal_code = $request->postal_code;
        $customer->country = $request->country;
        $customer->payment_method = $request->payment_method;
        $customer->terms = $request->terms;
        $customer->opening_balance = $request->opening_balance;
        $customer->as_of_date = $request->as_of_date;
        $customer->account_no = $request->account_no;
        $customer->business_id_no = $request->business_id_no;
        $customer->notes = $request->notes;
        $customer->attachment = $request->attachment;
        $customer->save();
    }

    public function add_invoice(Request $request)
    {
        $sales_number = SalesTransaction::count() + 1001;

        $sales_transaction = new SalesTransaction;
        $sales_transaction->st_no = $sales_number;
        $sales_transaction->st_date = $request->date;
        $sales_transaction->st_type = $request->transaction_type;
        $sales_transaction->st_term = $request->term;
        $sales_transaction->st_customer_id = $request->customer;
        $sales_transaction->st_due_date = $request->due_date;
        $sales_transaction->st_status = 'Open';
        $sales_transaction->st_action = '';
        $sales_transaction->st_email = $request->email;
        $sales_transaction->st_send_later = $request->send_later;
        $sales_transaction->st_bill_address = $request->bill_address;
        $sales_transaction->st_note = $request->note;
        $sales_transaction->st_memo = $request->memo;
        $sales_transaction->st_i_attachment = $request->attachment;
        $sales_transaction->st_balance = $request->total_balance;
        $sales_transaction->save();

        $customer = new Customers;
        $customer = Customers::find($request->customer);

        for($x=0;$x<$request->product_count;$x++){
            $st_invoice = new StInvoice;
            $st_invoice->st_i_no = $sales_number;
            $st_invoice->st_i_product = $request->input('select_product_name'.$x);
            $st_invoice->st_i_desc = $request->input('select_product_description'.$x);
            $st_invoice->st_i_qty = $request->input('product_qty'.$x);
            $st_invoice->st_i_rate = $request->input('select_product_rate'.$x);
            $st_invoice->st_i_total = $request->input('product_qty'.$x) * $request->input('select_product_rate'.$x);
            $st_invoice->st_p_method = null;
            $st_invoice->st_p_reference_no = null;
            $st_invoice->st_p_deposit_to = null;
            $st_invoice->save();

            $customer->opening_balance = $customer->opening_balance + $request->input('product_qty'.$x) * $request->input('select_product_rate'.$x);
            $customer->save();
        }

        if($request->sales_transaction_number_estimate != '0'){
            $sales_transaction_estimate = SalesTransaction::where('st_no', $request->sales_transaction_number_estimate)->first();
            $sales_transaction_estimate->st_status = "Closed";
            $sales_transaction_estimate->save();
        }
    }

    public function add_payment(Request $request){

        $customer = Customers::find($request->payment_customer_id);
        $customer->opening_balance = $customer->opening_balance - $request->p_amount;
        $customer->save();

        $sales_number = SalesTransaction::count() + 1001;

        $sales_transaction = new SalesTransaction;
        $sales_transaction->st_no = $sales_number;
        $sales_transaction->st_date = $request->p_date;
        $sales_transaction->st_type = 'Payment';
        $sales_transaction->st_term = null;
        $sales_transaction->st_customer_id = $request->payment_customer_id;
        $sales_transaction->st_due_date = null;
        $sales_transaction->st_status = 'Closed';
        $sales_transaction->st_action = '';
        $sales_transaction->st_email = $request->p_email;
        $sales_transaction->st_send_later = $request->p_send_later;
        $sales_transaction->st_bill_address = null;
        $sales_transaction->st_note = null;
        $sales_transaction->st_memo = $request->p_memo;
        $sales_transaction->st_i_attachment = $request->p_attachment;
        $sales_transaction->st_amount_paid = $request->p_amount;
        $sales_transaction->st_payment_for = $request->sales_transaction_number;
        $sales_transaction->save();

        $st_invoice = new StInvoice;
        $st_invoice = StInvoice::where('st_i_no', $request->sales_transaction_number)->first();
        $st_invoice->st_p_method = $request->p_payment_method;
        $st_invoice->st_p_reference_no = $request->p_reference_no;
        $st_invoice->st_p_deposit_to = $request->p_deposit_to;
        $st_invoice->st_p_amount = $request->p_amount;
        $st_invoice->save();

        $old_invoice_transaction = SalesTransaction::find($request->sales_transaction_number);
        if($old_invoice_transaction->st_balance <= $request->p_amount){
            $old_invoice_transaction->st_balance = $old_invoice_transaction->st_balance - $request->p_amount;
            $old_invoice_transaction->st_status = 'Closed';
            $old_invoice_transaction->save();
        }else{
            $old_invoice_transaction->st_balance = $old_invoice_transaction->st_balance - $request->p_amount;
            $old_invoice_transaction->save();
        }
        

    }

    public function add_estimate(Request $request)
    {
        $sales_number = SalesTransaction::count() + 1001;

        $sales_transaction = new SalesTransaction;
        $sales_transaction->st_no = $sales_number;
        $sales_transaction->st_date = $request->e_date;
        $sales_transaction->st_type = $request->transaction_type_estimate;
        $sales_transaction->st_term = null;
        $sales_transaction->st_customer_id = $request->e_customer;
        $sales_transaction->st_due_date = $request->e_due_date;
        $sales_transaction->st_status = 'Pending';
        $sales_transaction->st_action = '';
        $sales_transaction->st_email = $request->e_email;
        $sales_transaction->st_send_later = $request->e_send_later;
        $sales_transaction->st_bill_address = $request->e_bill_address;
        $sales_transaction->st_note = $request->e_note;
        $sales_transaction->st_memo = $request->e_memo;
        $sales_transaction->st_i_attachment = $request->e_attachment;
        $sales_transaction->st_balance = $request->total_balance_estimate;
        $sales_transaction->save();


        for($x=0;$x<$request->product_count_estimate;$x++){
            $st_estimate = new StEstimate;
            $st_estimate->st_e_no = $sales_number;
            $st_estimate->st_e_product = $request->input('select_product_name_estimate'.$x);
            $st_estimate->st_e_desc = $request->input('select_product_description_estimate'.$x);
            $st_estimate->st_e_qty = $request->input('product_qty_estimate'.$x);
            $st_estimate->st_e_rate = $request->input('select_product_rate_estimate'.$x);
            $st_estimate->st_e_total = $request->input('product_qty_estimate'.$x) * $request->input('select_product_rate_estimate'.$x);
            $st_estimate->st_p_method = null;
            $st_estimate->st_p_reference_no = null;
            $st_estimate->st_p_deposit_to = null;
            $st_estimate->save();
            
        }
    }

    public function add_sales_receipt(Request $request)
    {
        $sales_number = SalesTransaction::count() + 1001;

        $sales_transaction = new SalesTransaction;
        $sales_transaction->st_no = $sales_number;
        $sales_transaction->st_date = $request->sr_date;
        $sales_transaction->st_type = $request->transaction_type_sales_receipt;
        $sales_transaction->st_term = null;
        $sales_transaction->st_customer_id = $request->sr_customer;
        $sales_transaction->st_due_date = null;
        $sales_transaction->st_status = 'Closed';
        $sales_transaction->st_action = '';
        $sales_transaction->st_email = $request->sr_email;
        $sales_transaction->st_send_later = $request->sr_send_later;
        $sales_transaction->st_bill_address = $request->sr_bill_address;
        $sales_transaction->st_note = $request->sr_note;
        $sales_transaction->st_memo = $request->sr_memo;
        $sales_transaction->st_i_attachment = $request->sr_attachment;
        $sales_transaction->st_balance = 0;
        $sales_transaction->save();

        $customer = new Customers;
        $customer = Customers::find($request->sr_customer);

        for($x=0;$x<$request->product_count_sales_receipt;$x++){
            $st_sales_receipt = new StSalesReceipt;
            $st_sales_receipt->st_s_no = $sales_number;
            $st_sales_receipt->st_s_product = $request->input('select_product_name_sales_receipt'.$x);
            $st_sales_receipt->st_s_desc = $request->input('select_product_description_sales_receipt'.$x);
            $st_sales_receipt->st_s_qty = $request->input('product_qty_sales_receipt'.$x);
            $st_sales_receipt->st_s_rate = $request->input('select_product_rate_sales_receipt'.$x);
            $st_sales_receipt->st_s_total = $request->input('product_qty_sales_receipt'.$x) * $request->input('select_product_rate_sales_receipt'.$x);
            $st_sales_receipt->st_p_method = null;
            $st_sales_receipt->st_p_reference_no = null;
            $st_sales_receipt->st_p_deposit_to = null;
            $st_sales_receipt->st_p_amount = $request->sr_amount_paid;
            $st_sales_receipt->save();

        }
    }

    public function refresh_customers_table(){
        $customers = Customers::all();
        return \DataTables::of($customers)
        ->addColumn('action', function($customers){
            $sales_transaction = SalesTransaction::where('st_customer_id', $customers->customer_id)->first();
            
            if($sales_transaction){
                if($sales_transaction->st_status == "Open"){
                    return '<span class="table-add mb-3 mr-2"><a class="text-info receive_payment" id="'.$sales_transaction->st_no.'" href="#" data-toggle="modal" data-target="#receivepaymentmodal"><i aria-hidden="true">Receive Payment</i></a></span>';
                }else{
                    return '<span class="table-add mb-3 mr-2">N/A</span>';
                }
            }else{
                return '<span class="table-add mb-3 mr-2">N/A</span>';
            }
            
                         
        })
        ->make(true);
    }

    public function refresh_sales_table(){
        $sales_transaction = SalesTransaction::all();

        return \DataTables::of($sales_transaction)
        ->addColumn('checkbox', function($sales_transaction){
            return '<span> try </span>';
        })
        ->addColumn('action', function($sales_transaction){
            if($sales_transaction->st_status == "Open" && $sales_transaction->st_type == "Invoice"){
                return '<span class="table-add mb-3 mr-2"><a class="text-info receive_payment" id="'.$sales_transaction->st_no.'" href="#" data-toggle="modal" data-target="#receivepaymentmodal"><i aria-hidden="true">Receive Payment</i></a></span>';
            }else if($sales_transaction->st_status == "Pending" && $sales_transaction->st_type == "Estimate"){
                return '<span class="table-add mb-3 mr-2"><a class="text-info create_invoice" id="'.$sales_transaction->st_no.'" href="#" data-toggle="modal" data-target="#invoicemodal"><i aria-hidden="true">Create Invoice</i></a></span>';
            }else{
                return '<span class="table-add mb-3 mr-2">N/A</span>';
            }                
        })
        ->addColumn('customer_name', function($sales_transaction){
            return $sales_transaction->customer_info->display_name;             
        })
        ->addColumn('customer_balance', function($sales_transaction){
            return 'PHP '.number_format($sales_transaction->st_balance, 2);             
        })
        ->addColumn('transaction_total', function($sales_transaction){
            if($sales_transaction->st_type == "Invoice"){
                return 'PHP '.number_format($sales_transaction->invoice_info->sum('st_i_total'), 2);  
            }else if($sales_transaction->st_type == "Estimate"){
                return 'PHP '.number_format($sales_transaction->estimate_info->sum('st_e_total'), 2);  
            }else if($sales_transaction->st_type == "Sales Receipt"){
                return 'PHP '.number_format($sales_transaction->sales_receipt_info->sum('st_s_total'), 2);  
            }else{
                return 'PHP '.number_format($sales_transaction->st_amount_paid, 2);  
            }           
        })
        ->editColumn('st_due_date', function ($data) {
            if($data->st_due_date == NULL){
                return "N/A";
            }else{
                return $data->st_due_date;
            }
        })
        ->make(true);
    }

    public function refresh_sales_table_invoice(){
        $sales_transaction = SalesTransaction::where('st_type', 'Invoice');

        return \DataTables::of($sales_transaction)
        ->addColumn('checkbox', function($sales_transaction){
            return '<span> try </span>';
        })
        ->addColumn('action', function($sales_transaction){
            if($sales_transaction->st_status == "Open"){
                return '<span class="table-add mb-3 mr-2"><a class="text-info receive_payment" id="'.$sales_transaction->st_no.'" href="#" data-toggle="modal" data-target="#receivepaymentmodal"><i aria-hidden="true">Receive Payment</i></a>
                <select>
                <option></option>
                <option>Print</option>
                <option>Send</option>
                <option>View/Edit</option>
                <option>Send Reminder</option>
                <option>Print packing slip</option>
                <option>Copy</option>
                <option>Delete</option>
                <option>Void</option>
                </select></span>';
            }else{
                return '<span class="table-add mb-3 mr-2">Received
                <select>
                <option></option>
                <option>Print</option>
                <option>Send</option>
                <option>View/Edit</option>
                <option>Send Reminder</option>
                <option>Print packing slip</option>
                <option>Copy</option>
                <option>Delete</option>
                <option>Void</option>
                </select></span>';
            }                
        })
        ->addColumn('customer_name', function($sales_transaction){
            return $sales_transaction->customer_info->display_name;             
        })
        ->addColumn('customer_balance', function($sales_transaction){
            return 'PHP '.number_format($sales_transaction->st_balance, 2);             
        })
        ->addColumn('transaction_total', function($sales_transaction){
            return 'PHP '.number_format($sales_transaction->invoice_info->sum('st_i_total'), 2);             
        })
        ->editColumn('st_due_date', function ($data) {
            if($data->st_due_date == NULL){
                return "N/A";
            }else{
                return $data->st_due_date;
            }
        })
        ->make(true);
    }

    public function get_all_transactions(Request $request){
        $sales_transaction = SalesTransaction::where('st_no', $request->id)->first();
        return $sales_transaction;
    }

    public function get_all_estimates(Request $request){
        $st_estimates = StEstimate::where('st_e_no', $request->id)->get();
        $products = ProductsAndServices::all();

        foreach($st_estimates as $estimate){
            foreach($products as $product){
                if($estimate->st_e_product == $product->product_id){
                    $estimate['st_e_product_name'] = $product->product_name;
                }
            }
         }

        return $st_estimates;
    }
}