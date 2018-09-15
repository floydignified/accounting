<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use App\SalesTransaction;
use App\StInvoice;

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
        $sales_number = SalesTransaction::count() + 1;

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
            $st_invoice->st_p_amount = null;
            $st_invoice->save();

            $customer->opening_balance = $customer->opening_balance + $request->input('product_qty'.$x) * $request->input('select_product_rate'.$x);
            $customer->save();
        }
    }

    public function add_payment(Request $request){

        $customer = Customers::find($request->payment_customer_id);
        $customer->opening_balance = $customer->opening_balance - $request->p_amount;
        $customer->save();

        $sales_number = SalesTransaction::count() + 1;

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
        $sales_transaction->st_i_attachment = $request->attachment;
        $sales_transaction->save();

        $st_invoice = new StInvoice;
        $st_invoice = StInvoice::where('st_i_no', $request->sales_transaction_number)->first();
        $st_invoice->st_p_method = $request->p_payment_method;
        $st_invoice->st_p_reference_no = $request->p_reference_no;
        $st_invoice->st_p_deposit_to = $request->p_deposit_to;
        $st_invoice->st_p_amount = $request->p_amount;
        $st_invoice->save();

        $old_invoice_transaction = SalesTransaction::find($request->sales_transaction_number);
        $old_invoice_transaction->st_status = 'Closed';
        $old_invoice_transaction->save();

    }
}