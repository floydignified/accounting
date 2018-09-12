<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Sales;
use App\Expenses;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function update_company(Request $request)
    {
        $company = new Company;
        $company = Company::first();
        $company->company_name = $request->company_name;
        $company->company_legal_name = $request->legal_name;
        $company->company_business_id_no = $request->business_id_no;
        $company->company_tax_form = $request->tax_form;
        $company->company_industry = $request->industry;
        $company->company_email = $request->company_email;
        $company->company_customer_facing_email = $request->customer_facing_email;
        $company->company_phone = $request->company_phone;
        $company->company_website = $request->website;
        $company->company_address = $request->company_address;
        $company->company_customer_facing_address = $request->customer_facing_address;
        $company->company_legal_address = $request->legal_address;
        $company->save();
    }

    public function update_sales(Request $request)
    {
        $sales = new Sales;
        $sales = Sales::first();
        $sales->sales_preferred_invoice_term = $request->preferred_invoice_term;
        $sales->sales_preferred_delivery_method = $request->preferred_delivery_method;
        $sales->sales_shipping = $request->shipping;
        $sales->sales_custom_field = $request->custom_field;
        $sales->sales_custom_transaction_number = $request->custom_transaction_number;
        $sales->sales_service_date = $request->service_date;
        $sales->sales_discount = $request->discount;
        $sales->sales_deposit = $request->deposit;
        $sales->sales_show_product_column = $request->show_product_column;
        $sales->sales_show_sku_column = $request->show_sku_column;
        $sales->sales_track_quantity_and_price = $request->track_quantity_and_price;
        $sales->sales_track_quantity_on_hand = $request->track_quantity_on_hand;
        $sales->sales_form_email_message = $request->form_email_message;
        $sales->sales_default_reminder_message = $request->default_reminder_message;
        $sales->sales_email_option = $request->email_option;
        $sales->sales_show_aging_table = $request->show_aging_table;
        $sales->save();
    }

    public function update_expenses(Request $request)
    {
        $expenses = new Expenses;
        $expenses = Expenses::first();
        $expenses->expenses_show_items_table = $request->show_items_table;
        $expenses->expenses_track_expense_and_item_by_customer = $request->track_expense_and_item_by_customer;
        $expenses->expenses_billable = $request->billable;
        $expenses->expenses_bill_payment_terms = $request->bill_payment_terms;
        $expenses->expenses_use_purchase_order = $request->use_purchase_order;
        $expenses->expenses_purchase_order_email_message = $request->purchase_order_email_message;
        $expenses->save();
    }
}