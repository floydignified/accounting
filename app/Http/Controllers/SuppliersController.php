<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseTransaction;
use App\EtItemDetail;
use App\EtAccountDetail;
use App\Customers;

class SuppliersController extends Controller
{
    public function add_expense(Request $request)
    {
        $expense_number = ExpenseTransaction::count() + 1001;

        $expense_transaction = new ExpenseTransaction;
        $expense_transaction->et_no = $expense_number;
        $expense_transaction->et_customer = $request->expense_customer;
        $expense_transaction->et_account = $request->expense_account;
        $expense_transaction->et_date = $request->expense_date;
        $expense_transaction->et_payment_method = $request->expense_payment_method;
        $expense_transaction->et_reference_no = $request->expense_reference_no;
        $expense_transaction->et_memo = $request->expense_memo;
        $expense_transaction->et_attachment = $request->expense_attachment;
        $expense_transaction->et_type = 'Expense';
        $expense_transaction->save();

        $customer = new Customers;
        $customer = Customers::find($request->customer);

        for($x=0;$x<$request->item_count_expenses;$x++){
            $et_item = new EtItemDetail;
            $et_item->et_id_no = $expense_number;
            $et_item->et_id_product = $request->input('select_product_name_expense'.$x);
            $et_item->et_id_desc = $request->input('select_product_description_expense'.$x);
            $et_item->et_id_qty = $request->input('product_qty_expense'.$x);
            $et_item->et_id_rate = $request->input('select_product_rate_expense'.$x);
            $et_item->et_id_total = $request->input('select_product_rate_expense'.$x) * $request->input('product_qty_expense'.$x);;
            $et_item->save();

            // $customer->opening_balance = $customer->opening_balance + $request->input('product_qty'.$x) * $request->input('select_product_rate'.$x);
            // $customer->save();
        }

        for($x=0;$x<$request->account_count_expenses;$x++){
            $et_account = new EtAccountDetail;
            $et_account->et_ad_no = $expense_number;
            $et_account->et_ad_product = $request->input('select_account_expense'.$x);
            $et_account->et_ad_desc = $request->input('select_description_expense'.$x);
            $et_account->et_ad_total = $request->input('select_expense_amount'.$x);
            $et_account->save();

            // $customer->opening_balance = $customer->opening_balance + $request->input('product_qty'.$x) * $request->input('select_product_rate'.$x);
            // $customer->save();
        }

    }

    public function add_cheque(Request $request)
    {
        $expense_number = ExpenseTransaction::count() + 1001;

        $expense_transaction = new ExpenseTransaction;
        $expense_transaction->et_no = $expense_number;
        $expense_transaction->et_customer = $request->cheque_customer;
        $expense_transaction->et_account = $request->cheque_account;
        $expense_transaction->et_billing_address = $request->cheque_billing_address;
        $expense_transaction->et_date = $request->cheque_date;
        $expense_transaction->et_reference_no = $request->cheque_no;
        $expense_transaction->et_memo = $request->cheque_memo;
        $expense_transaction->et_attachment = $request->cheque_attachment;
        $expense_transaction->et_type = 'Cheque';
        $expense_transaction->save();

        $customer = new Customers;
        $customer = Customers::find($request->customer);

        for($x=0;$x<$request->item_count_cheques;$x++){
            $et_item = new EtItemDetail;
            $et_item->et_id_no = $expense_number;
            $et_item->et_id_product = $request->input('select_product_name_cheque'.$x);
            $et_item->et_id_desc = $request->input('select_product_description_cheque'.$x);
            $et_item->et_id_qty = $request->input('product_qty_cheque'.$x);
            $et_item->et_id_rate = $request->input('select_product_rate_cheque'.$x);
            $et_item->et_id_total = $request->input('select_product_rate_cheque'.$x) * $request->input('product_qty_cheque'.$x);;
            $et_item->save();

            // $customer->opening_balance = $customer->opening_balance + $request->input('product_qty'.$x) * $request->input('select_product_rate'.$x);
            // $customer->save();
        }

        for($x=0;$x<$request->account_count_cheques;$x++){
            $et_account = new EtAccountDetail;
            $et_account->et_ad_no = $expense_number;
            $et_account->et_ad_product = $request->input('select_account_cheque'.$x);
            $et_account->et_ad_desc = $request->input('select_description_cheque'.$x);
            $et_account->et_ad_total = $request->input('select_cheque_amount'.$x);
            $et_account->save();

            // $customer->opening_balance = $customer->opening_balance + $request->input('product_qty'.$x) * $request->input('select_product_rate'.$x);
            // $customer->save();
        }

    }

    public function add_bill(Request $request)
    {
        $expense_number = ExpenseTransaction::count() + 1001;

        $expense_transaction = new ExpenseTransaction;
        $expense_transaction->et_no = $expense_number;
        $expense_transaction->et_customer = $request->bill_customer;
        $expense_transaction->et_terms = $request->bill_terms;
        $expense_transaction->et_billing_address = $request->bill_billing_address;
        $expense_transaction->et_bill_no = $request->bill_bill_no;
        $expense_transaction->et_date = $request->bill_date;
        $expense_transaction->et_due_date = $request->bill_due_date;
        $expense_transaction->et_memo = $request->bill_memo;
        $expense_transaction->et_attachment = $request->bill_attachment;
        $expense_transaction->et_type = 'Bill';
        $expense_transaction->save();

        $customer = new Customers;
        $customer = Customers::find($request->customer);

        for($x=0;$x<$request->item_count_bills;$x++){
            $et_item = new EtItemDetail;
            $et_item->et_id_no = $expense_number;
            $et_item->et_id_product = $request->input('select_product_name_bill'.$x);
            $et_item->et_id_desc = $request->input('select_product_description_bill'.$x);
            $et_item->et_id_qty = $request->input('product_qty_bill'.$x);
            $et_item->et_id_rate = $request->input('select_product_rate_bill'.$x);
            $et_item->et_id_total = $request->input('select_product_rate_bill'.$x) * $request->input('product_qty_bill'.$x);;
            $et_item->save();

            // $customer->opening_balance = $customer->opening_balance + $request->input('product_qty'.$x) * $request->input('select_product_rate'.$x);
            // $customer->save();
        }

        for($x=0;$x<$request->account_count_bills;$x++){
            $et_account = new EtAccountDetail;
            $et_account->et_ad_no = $expense_number;
            $et_account->et_ad_product = $request->input('select_account_bill'.$x);
            $et_account->et_ad_desc = $request->input('select_description_bill'.$x);
            $et_account->et_ad_total = $request->input('select_bill_amount'.$x);
            $et_account->save();

            // $customer->opening_balance = $customer->opening_balance + $request->input('product_qty'.$x) * $request->input('select_product_rate'.$x);
            // $customer->save();
        }

    }
}
