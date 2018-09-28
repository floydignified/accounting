<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Customers;
use App\SalesTransaction;
use App\StInvoice;
use App\StEstimate;
use App\StSalesReceipt;
use App\StRefundReceipt;
use App\StDelayedCharge;
use App\StDelayedCredit;
use App\StCreditNote;
use App\ProductsAndServices;
use PDF;

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

        if($request->sales_transaction_number_delayed_charge != '0'){
            $sales_transaction_delayed_charge = SalesTransaction::where('st_no', $request->sales_transaction_number_delayed_charge)->first();
            $sales_transaction_delayed_charge->st_status = "Closed";
            $sales_transaction_delayed_charge->save();
        }

        if($request->sales_transaction_number_delayed_credit != '0'){
            $sales_transaction_delayed_credit = SalesTransaction::where('st_no', $request->sales_transaction_number_delayed_credit)->first();
            $sales_transaction_delayed_credit->st_status = "Closed";
            $sales_transaction_delayed_credit->save();
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
            $old_invoice_transaction->st_status = 'Paid';
            $old_invoice_transaction->save();
        }else{
            $old_invoice_transaction->st_balance = $old_invoice_transaction->st_balance - $request->p_amount;
            $old_invoice_transaction->st_status = 'Partially paid';
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
            $st_sales_receipt->st_p_method = $request->sr_payment_method;
            $st_sales_receipt->st_p_reference_no = $request->sr_reference_number;
            $st_sales_receipt->st_p_deposit_to = $request->sr_deposit_to;
            $st_sales_receipt->st_p_amount = $request->sr_amount_paid;
            $st_sales_receipt->save();

        }
    }

    public function add_refund_receipt(Request $request)
    {
        $sales_number = SalesTransaction::count() + 1001;

        $sales_transaction = new SalesTransaction;
        $sales_transaction->st_no = $sales_number;
        $sales_transaction->st_date = $request->rr_date;
        $sales_transaction->st_type = $request->transaction_type_refund_receipt;
        $sales_transaction->st_term = null;
        $sales_transaction->st_customer_id = $request->rr_customer;
        $sales_transaction->st_due_date = null;
        $sales_transaction->st_status = 'Closed';
        $sales_transaction->st_action = '';
        $sales_transaction->st_email = $request->rr_email;
        $sales_transaction->st_send_later = $request->rr_send_later;
        $sales_transaction->st_bill_address = $request->rr_bill_address;
        $sales_transaction->st_note = $request->rr_note;
        $sales_transaction->st_memo = $request->rr_memo;
        $sales_transaction->st_i_attachment = $request->rr_attachment;
        $sales_transaction->st_balance = 0;
        $sales_transaction->save();

        $customer = new Customers;
        $customer = Customers::find($request->rr_customer);

        for($x=0;$x<$request->product_count_refund_receipt;$x++){
            $st_refund_receipt = new StRefundReceipt;
            $st_refund_receipt->st_r_no = $sales_number;
            $st_refund_receipt->st_r_product = $request->input('select_product_name_refund_receipt'.$x);
            $st_refund_receipt->st_r_desc = $request->input('select_product_description_refund_receipt'.$x);
            $st_refund_receipt->st_r_qty = $request->input('product_qty_refund_receipt'.$x);
            $st_refund_receipt->st_r_rate = $request->input('select_product_rate_refund_receipt'.$x);
            $st_refund_receipt->st_r_total = $request->input('product_qty_refund_receipt'.$x) * $request->input('select_product_rate_refund_receipt'.$x);
            $st_refund_receipt->st_p_method = $request->rr_payment_method;
            $st_refund_receipt->st_p_reference_no = null;
            $st_refund_receipt->st_p_deposit_to = $request->rr_refund_from;
            $st_refund_receipt->st_p_amount = $request->rr_amount_refunded;
            $st_refund_receipt->save();

        }
    }


    public function add_delayed_charge(Request $request)
    {
        $sales_number = SalesTransaction::count() + 1001;

        $sales_transaction = new SalesTransaction;
        $sales_transaction->st_no = $sales_number;
        $sales_transaction->st_date = $request->dc_date;
        $sales_transaction->st_type = $request->transaction_type_delayed_charge;
        $sales_transaction->st_term = null;
        $sales_transaction->st_customer_id = $request->dc_customer;
        $sales_transaction->st_due_date = $request->dc_date;
        $sales_transaction->st_status = 'Open';
        $sales_transaction->st_action = '';
        $sales_transaction->st_email = null;
        $sales_transaction->st_send_later = null;
        $sales_transaction->st_bill_address = null;
        $sales_transaction->st_note = null;
        $sales_transaction->st_memo = $request->dc_memo;
        $sales_transaction->st_i_attachment = $request->dc_attachment;
        $sales_transaction->st_balance = 0;
        $sales_transaction->save();

        $customer = new Customers;
        $customer = Customers::find($request->dc_customer);

        for($x=0;$x<$request->product_count_delayed_charge;$x++){
            $st_delayed_charge = new StDelayedCharge;
            $st_delayed_charge->st_dc_no = $sales_number;
            $st_delayed_charge->st_dc_product = $request->input('select_product_name_delayed_charge'.$x);
            $st_delayed_charge->st_dc_desc = $request->input('select_product_description_delayed_charge'.$x);
            $st_delayed_charge->st_dc_qty = $request->input('product_qty_delayed_charge'.$x);
            $st_delayed_charge->st_dc_rate = $request->input('select_product_rate_delayed_charge'.$x);
            $st_delayed_charge->st_dc_total = $request->input('product_qty_delayed_charge'.$x) * $request->input('select_product_rate_delayed_charge'.$x);
            $st_delayed_charge->st_p_method = null;
            $st_delayed_charge->st_p_reference_no = null;
            $st_delayed_charge->st_p_deposit_to = null;
            $st_delayed_charge->st_p_amount = null;
            $st_delayed_charge->save();

        }
    }

    public function add_delayed_credit(Request $request)
    {
        $sales_number = SalesTransaction::count() + 1001;

        $sales_transaction = new SalesTransaction;
        $sales_transaction->st_no = $sales_number;
        $sales_transaction->st_date = $request->dcredit_date;
        $sales_transaction->st_type = $request->transaction_type_delayed_credit;
        $sales_transaction->st_term = null;
        $sales_transaction->st_customer_id = $request->dcredit_customer;
        $sales_transaction->st_due_date = $request->dcredit_date;
        $sales_transaction->st_status = 'Open';
        $sales_transaction->st_action = '';
        $sales_transaction->st_email = null;
        $sales_transaction->st_send_later = null;
        $sales_transaction->st_bill_address = null;
        $sales_transaction->st_note = null;
        $sales_transaction->st_memo = $request->dcredit_memo;
        $sales_transaction->st_i_attachment = $request->dcredit_attachment;
        $sales_transaction->st_balance = 0;
        $sales_transaction->save();

        $customer = new Customers;
        $customer = Customers::find($request->dc_customer);

        for($x=0;$x<$request->product_count_delayed_credit;$x++){
            $st_delayed_credit = new StDelayedCredit;
            $st_delayed_credit->st_dcredit_no = $sales_number;
            $st_delayed_credit->st_dcredit_product = $request->input('select_product_name_delayed_credit'.$x);
            $st_delayed_credit->st_dcredit_desc = $request->input('select_product_description_delayed_credit'.$x);
            $st_delayed_credit->st_dcredit_qty = $request->input('product_qty_delayed_credit'.$x);
            $st_delayed_credit->st_dcredit_rate = $request->input('select_product_rate_delayed_credit'.$x);
            $st_delayed_credit->st_dcredit_total = -$request->input('product_qty_delayed_credit'.$x) * $request->input('select_product_rate_delayed_credit'.$x);
            $st_delayed_credit->st_p_method = null;
            $st_delayed_credit->st_p_reference_no = null;
            $st_delayed_credit->st_p_deposit_to = null;
            $st_delayed_credit->st_p_amount = null;
            $st_delayed_credit->save();

        }
    }

    public function add_credit_note(Request $request)
    {
        $sales_number = SalesTransaction::count() + 1001;

        $sales_transaction = new SalesTransaction;
        $sales_transaction->st_no = $sales_number;
        $sales_transaction->st_date = $request->cn_date;
        $sales_transaction->st_type = $request->transaction_type_credit_note;
        $sales_transaction->st_term = null;
        $sales_transaction->st_customer_id = $request->cn_customer;
        $sales_transaction->st_due_date = null;
        $sales_transaction->st_status = 'Closed';
        $sales_transaction->st_action = '';
        $sales_transaction->st_email = $request->cn_email;
        $sales_transaction->st_send_later = $request->cn_send_later;
        $sales_transaction->st_bill_address = $request->cn_bill_address;
        $sales_transaction->st_note = $request->cn_note;
        $sales_transaction->st_memo = $request->cn_memo;
        $sales_transaction->st_i_attachment = $request->cn_attachment;
        $sales_transaction->st_amount_paid = -$request->total_balance_credit_note;
        $sales_transaction->save();

        $customer = new Customers;
        $customer = Customers::find($request->cn_customer);

        for($x=0;$x<$request->product_count_credit_note;$x++){
            $st_credit_note = new StCreditNote;
            $st_credit_note->st_cn_no = $sales_number;
            $st_credit_note->st_cn_product = $request->input('select_product_name_credit_note'.$x);
            $st_credit_note->st_cn_desc = $request->input('select_product_description_credit_note'.$x);
            $st_credit_note->st_cn_qty = $request->input('product_qty_credit_note'.$x);
            $st_credit_note->st_cn_rate = $request->input('select_product_rate_credit_note'.$x);
            $st_credit_note->st_cn_total = $request->input('product_qty_credit_note'.$x) * $request->input('select_product_rate_credit_note'.$x);
            $st_credit_note->st_p_method = null;
            $st_credit_note->st_p_reference_no = null;
            $st_credit_note->st_p_deposit_to = null;
            $st_credit_note->st_p_amount = null;
            $st_credit_note->save();

        }

        $data = array(
            'name' => $customer->display_name,
            'email' => $request->cn_email,
            'title' => 'CREDIT NOTE'
        );

        $pdf = PDF::loadView('credit_note_pdf', $data);

        $attachment = $pdf->stream('credit_notice.pdf');

        Mail::send(['text'=>'mail'], $data, function($message) use ($data)
        {
            $pdf = PDF::loadView('credit_note_pdf', $data);
            $attachment = $pdf->stream('credit_notice.pdf');
            $message->attachData($attachment, 'invoice.pdf');

            $message->to($data['email'],'Hello Mr/Mrs '.$data['name'])->subject('This is a credit note for '.$data['name']);
            $message->from('floydignified@gmail.com','Floyd Matabilas');
        });

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
            if($sales_transaction->st_status == "Open" && $sales_transaction->st_type == "Invoice" || $sales_transaction->st_status == "Partially paid" && $sales_transaction->st_type == "Invoice"){
                return '<span class="table-add mb-3 mr-2"><a class="text-info receive_payment" id="'.$sales_transaction->st_no.'" href="#" data-toggle="modal" data-target="#receivepaymentmodal"><i aria-hidden="true">Receive Payment</i></a></span>';
            }else if($sales_transaction->st_status == "Pending" && $sales_transaction->st_type == "Estimate"){
                return '<span class="table-add mb-3 mr-2"><a class="text-info create_invoice_estimate" id="'.$sales_transaction->st_no.'" href="#" data-toggle="modal" data-target="#invoicemodal"><i aria-hidden="true">Create Invoice</i></a></span>';
            }else if($sales_transaction->st_status == "Open" && $sales_transaction->st_type == "Charge"){
                return '<span class="table-add mb-3 mr-2"><a class="text-info create_invoice_delayed_charge" id="'.$sales_transaction->st_no.'" href="#" data-toggle="modal" data-target="#invoicemodal"><i aria-hidden="true">Create Invoice</i></a></span>';
            }else if($sales_transaction->st_status == "Open" && $sales_transaction->st_type == "Credit"){
                return '<span class="table-add mb-3 mr-2"><a class="text-info create_invoice_delayed_credit" id="'.$sales_transaction->st_no.'" href="#" data-toggle="modal" data-target="#invoicemodal"><i aria-hidden="true">Create Invoice</i></a></span>';
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
            }else if($sales_transaction->st_type == "Refund Receipt"){
                return 'PHP '.number_format($sales_transaction->refund_receipt_info->sum('st_r_total'), 2);  
            }else if($sales_transaction->st_type == "Charge"){
                return 'PHP '.number_format($sales_transaction->delayed_charge_info->sum('st_dc_total'), 2);  
            }else if($sales_transaction->st_type == "Credit"){
                return 'PHP '.number_format($sales_transaction->delayed_credit_info->sum('st_dcredit_total'), 2);  
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
            if($sales_transaction->st_status == "Open" || $sales_transaction->st_status == "Partially paid"){
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

    public function get_all_delayed_charge(Request $request){
        $st_delayed_charge = StDelayedCharge::where('st_dc_no', $request->id)->get();
        $products = ProductsAndServices::all();

        foreach($st_delayed_charge as $delayed_charge){
            foreach($products as $product){
                if($delayed_charge->st_dc_product == $product->product_id){
                    $delayed_charge['st_dc_product_name'] = $product->product_name;
                }
            }
         }

        return $st_delayed_charge;
    }

    public function get_all_delayed_credit(Request $request){
        $st_delayed_credit = StDelayedCredit::where('st_dcredit_no', $request->id)->get();
        $products = ProductsAndServices::all();

        foreach($st_delayed_credit as $delayed_credit){
            foreach($products as $product){
                if($delayed_credit->st_dcredit_product == $product->product_id){
                    $delayed_credit['st_dcredit_product_name'] = $product->product_name;
                }
            }
         }

        return $st_delayed_credit;
    }
}