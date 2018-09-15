@extends('layout.initial')


@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <!-- <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">Basic table</li>
                </ol>
            </div>
        </div>
        </div> -->
</div>
<div class="card-body">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Company</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Billing and Subscription</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Sales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="extra-tab" data-toggle="tab" href="#extra" role="tab" aria-controls="extra" aria-selected="false">Expenses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="advance-tab" data-toggle="tab" href="#advance" role="tab" aria-controls="advance" aria-selected="false">Advance</a>
        </li>
    </ul>
    <div class="tab-content pl-3 p-1" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form action="#" class="form-horizontal " id="company_form">
        {{ csrf_field() }}
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Company Name</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Company Name</p>
                    <p class="text-dark">Legal Name</p>
                    <p class="text-dark">Business ID No.
                    <p>
                </div>
                <div class="col-md-4">
                    <input class="text-dark" id="company_name" name="company_name" type="text" value="{{$company->company_name}}" readonly>
                    <input class="text-dark" id="legal_name" name="legal_name" type="text" value="{{$company->company_legal_name}}" readonly>
                    <input class="text-dark" id="business_id_no" name="business_id_no" type="text" value="{{$company->company_business_id_no}}" readonly>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_company_name" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Company Type</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Tax Form</p>
                    <p class="text-dark">Industry</p>
                </div>
                <div class="col-md-4">
                    <input list="tax_forms_list" class="text-dark" id="tax_form" name="tax_form" type="text" value="{{$company->company_tax_form}}" readonly>
                    <datalist id="tax_forms_list">
                        <option>Sole proprietor (Form 1040)</option>
                        <option>Partnership or limited liability company (Form 1065)</option>
                        <option>Small business corporation, two or more owners (Form 11205)</option>
                        <option>Corporation, one or more shareholders (Form 1120)</option>
                        <option>Nonprofit organization (Form 990)</option>
                        <option>Limited liability</option>
                        <option>Not sure/Other/None</option>
                    </datalist>  
                    <input class="text-dark" id="industry" name="industry" type="text" value="{{$company->company_industry}}" readonly>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_company_type" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Contact Info</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Company Email</p>
                    <p class="text-dark">Customer-facing Email</p>
                    <p class="text-dark">Company Phone</p>
                    <p class="text-dark">Website</p>
                </div>
                <div class="col-md-4">
                    <input class="text-dark" id="company_email" name="company_email" type="email" value="{{$company->company_email}}" readonly>
                    <input class="text-dark" id="customer_facing_email" name="customer_facing_email" type="email" value="{{$company->company_customer_facing_email}}" readonly>
                    <input class="text-dark" id="company_phone" name="company_phone" type="tel" value="{{$company->company_phone}}" readonly>
                    <input class="text-dark" id="website" name="website" type="url" value="{{$company->company_website}}" readonly>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_contact_info" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Address</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Company Address</p>
                    <p class="text-dark">Customer-facing Address</p>
                    <p class="text-dark">Legal Address</p>
                </div>
                <div class="col-md-4">
                    <input class="text-dark" id="company_address" name="company_address" type="text" value="{{$company->company_address}}" readonly>
                    <input class="text-dark" id="customer_facing_address" name="customer_facing_address" type="text" value="{{$company->company_customer_facing_address}}" readonly>
                    <input class="text-dark" id="legal_address" name="legal_address" type="text" value="{{$company->company_legal_address}}" readonly>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_address" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Communications with Intuit</p>
                </div>
                <div class="col-md-4">
                    <p class="text-info"><a href="https://c17.qbo.intuit.com/qbo17/redir/privacy" class="text-info">View Privacy Statement</a></p>
                </div>
            </div>
            <div class="float-right mb-5">
                <button type="button" id="update_company" class="btn btn-success rounded">Save</button>
            </div>
        </form>
        </div>
        <!-- =========================================================================================== SECOND TAB--> 
        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <!-- <h3>Sales Transactions</h3> -->
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Quickbooks</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Subscription Status</p>
                    <p class="text-dark">Plan Details</p>
                    <p class="text-dark">Next Charge</p>
                </div>
                <div class="col-md-4">
                    <p class="text-danger">Trial Ends in 28 days!</p>
                    <p class="text-dark">Sample Plan Details</p>
                    <p class="text-dark">9/19/2018</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="float-right mb-5">
                <button class="btn btn-success rounded">Save</button>
            </div>
        </div>
        <!-- ==============================================================================================THIRD TAB -->
        <div class="tab-pane fade show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <form action="#" class="form-horizontal " id="sales_form">
        {{ csrf_field() }}
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Customise</p>
                </div>
                <div class="col-md-5">
                    <p class="text-dark">Customise the way forms look to your customers</p>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success px-3 font-weight-bold rounded">Customise look and feel</button>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Sales form content</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Preferred invoice terms</p>
                    <p class="text-dark">Preferred delivery method</p>
                    <p class="text-dark">Shipping</p>
                    <p class="text-dark">Custom fields</p>
                    <p class="text-dark">Custom transaction numbers</p>
                    <p class="text-dark">Service Date</p>
                    <p class="text-dark">Discount</p>
                    <p class="text-dark">Deposit</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <input class="text-dark font-weight-bold" list="invoice" id="preferred_invoice_term" name="preferred_invoice_term" type="text" value="{{$sales->sales_preferred_invoice_term}}" readonly>
                    <datalist id="invoice">
                        <option>Due on receipt</option>
                        <option>Net 15</option>
                        <option>Net 30</option>
                        <option>Net 60</option>
                    </datalist>  
                    <input class="text-dark font-weight-bold" list ="delivery" id="preferred_delivery_method" name="preferred_delivery_method" type="text" value="{{$sales->sales_preferred_delivery_method}}" readonly>
                    <datalist id="delivery">
                        <option>Print later</option>
                        <option>Send later</option>
                        <option>None</option>
                    </datalist>  
                    <select class="text-dark font-weight-bold" id="shipping" name="shipping" disabled>
                        <option value="On" {{$sales->sales_shipping == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$sales->sales_shipping == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="custom_field" name="custom_field" disabled>
                        <option value="On" {{$sales->sales_custom_field == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$sales->sales_custom_field == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="custom_transaction_number" name="custom_transaction_number" disabled>
                        <option value="On" {{$sales->sales_custom_transaction_number == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$sales->sales_custom_transaction_number == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="service_date" name="service_date" disabled>
                        <option value="On" {{$sales->sales_service_date == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$sales->sales_service_date == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="discount" name="discount" disabled>
                        <option value="On" {{$sales->sales_discount == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$sales->sales_discount == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="deposit" name="deposit" disabled>
                        <option value="On" {{$sales->sales_deposit == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$sales->sales_deposit == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_sales_form" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Product and Services</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Show Product/Service column on sales forms</p>
                    <p class="text-dark ml-3">Show SKU column</p>
                    <p class="text-dark">Track quantity and price/rate</p>
                    <p class="text-dark">Track inventory quantity on hand</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="show_product_column" name="show_product_column" disabled>
                        <option value="On" {{$sales->sales_show_product_column == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$sales->sales_show_product_column == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="show_sku_column" name="show_sku_column" disabled>
                        <option value="On" {{$sales->sales_show_sku_column == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$sales->sales_show_sku_column == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="track_quantity_and_price" name="track_quantity_and_price" disabled>
                        <option value="On" {{$sales->sales_track_quantity_and_price == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$sales->sales_track_quantity_and_price == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="track_quantity_on_hand" name="track_quantity_on_hand" disabled>
                        <option value="On" {{$sales->sales_track_quantity_on_hand == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$sales->sales_track_quantity_on_hand == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_products_and_services" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Messages</p>
                </div>
                <div class="col-md-4">
                    <input class="text-dark" id="form_email_message" name="form_email_message" type="text" value="{{$sales->sales_form_email_message}}" readonly>
                </div>
                <div class="col-md-4 font-weight-bold">
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_sales_messages" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Reminders</p>
                </div>
                <div class="col-md-4">
                    <input class="text-dark" id="default_reminder_message" name="default_reminder_message" type="text" value="{{$sales->sales_default_reminder_message}}" readonly>
                </div>
                <div class="col-md-4 font-weight-bold">
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_reminders" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Online Delivery</p>
                </div>
                <div class="col-md-4">
                    <input class="text-dark" id="email_option" name="email_option" type="text" value="{{$sales->sales_email_option}}" readonly>
                </div>
                <div class="col-md-4 font-weight-bold">
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_online_delivery" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Statements</p>
                </div>
                <div class="col-md-4">
                <p class="text-dark">Show aging table at bottom of statement</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="show_aging_table" name="show_aging_table" disabled>
                        <option value="On" {{$sales->sales_show_aging_table == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$sales->sales_show_aging_table == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_statements" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="float-right mb-5">
                <button type="button" id="update_sales" class="btn btn-success rounded">Save</button>
            </div>
        </form>
        </div>
        <!-- =============================================================================================FOURTH TAB-->
        <div class="tab-pane fade show" id="extra" role="tabpanel" aria-labelledby="extra-tab">
        <form action="#" class="form-horizontal " id="expenses_form">
        {{ csrf_field() }}
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Bills and Expenses</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Show Items table on the expense and purchase forms</p>
                    <p class="text-dark">Track expense and items by customer</p>
                    <p class="text-dark">Make expense and items billable</p>
                    <p class="text-dark">Default bill payment terms</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="show_items_table" name="show_items_table" disabled>
                        <option value="On" {{$expenses->expenses_show_items_table == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->expenses_show_items_table == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="track_expense_and_item_by_customer" name="track_expense_and_item_by_customer" disabled>
                        <option value="On" {{$expenses->expenses_track_expense_and_item_by_customer == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->expenses_track_expense_and_item_by_customer == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="billable" name="billable" disabled>
                        <option value="On" {{$expenses->expenses_billable == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->expenses_billable == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <input class="text-dark" id="bill_payment_terms" name="bill_payment_terms" type="text" value="{{$expenses->expenses_bill_payment_terms}}" readonly>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_bills_and_expenses" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Purchase orders</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Use purchase orders</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="use_purchase_order" name="use_purchase_order" disabled>
                        <option value="On" {{$expenses->expenses_use_purchase_order == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->expenses_use_purchase_order == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_purchase_orders" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Messages</p>
                </div>
                <div class="col-md-4">
                    <input class="text-dark" id="purchase_order_email_message" name="purchase_order_email_message" type="text" value="{{$expenses->expenses_purchase_order_email_message}}" readonly>
                </div>
                <div class="col-md-4 font-weight-bold">
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_expense_messages" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="float-right mb-5">
                <button id="update_expenses" class="btn btn-success rounded">Save</button>
            </div>
        </form>
        </div>
        <!--=============================================================================================FIFTH TAB-->
        <div class="tab-pane fade show" id="advance" role="tabpanel" aria-labelledby="advance-tab">
        <form action="#" class="form-horizontal " id="advance_form">
        {{ csrf_field() }}
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Accounting</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">First month of fiscal year</p>
                    <p class="text-dark">First month of tax year</p>
                    <p class="text-dark">Accounting method</p>
                    <p class="text-dark">Close the books</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="first_month_of_fiscal_year" name="first_month_of_fiscal_year" disabled>
                        <option value="January" {{$advance->advance_first_month_of_fiscal_year == "January" ? 'selected' : ''}}>January</option>
                        <option value="February" {{$advance->advance_first_month_of_fiscal_year == "February" ? 'selected' : ''}}>February</option>
                        <option value="March" {{$advance->advance_first_month_of_fiscal_year == "March" ? 'selected' : ''}}>March</option>
                        <option value="April" {{$advance->advance_first_month_of_fiscal_year == "April" ? 'selected' : ''}}>April</option>
                        <option value="May" {{$advance->advance_first_month_of_fiscal_year == "May" ? 'selected' : ''}}>May</option>
                        <option value="June" {{$advance->advance_first_month_of_fiscal_year == "June" ? 'selected' : ''}}>June</option>
                        <option value="July" {{$advance->advance_first_month_of_fiscal_year == "July" ? 'selected' : ''}}>July</option>
                        <option value="August" {{$advance->advance_first_month_of_fiscal_year == "August" ? 'selected' : ''}}>August</option>
                        <option value="September" {{$advance->advance_first_month_of_fiscal_year == "September" ? 'selected' : ''}}>September</option>
                        <option value="October" {{$advance->advance_first_month_of_fiscal_year == "October" ? 'selected' : ''}}>October</option>
                        <option value="November" {{$advance->advance_first_month_of_fiscal_year == "November" ? 'selected' : ''}}>November</option>
                        <option value="December" {{$advance->advance_first_month_of_fiscal_year == "December" ? 'selected' : ''}}>December</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="first_month_of_tax_year" name="first_month_of_tax_year" disabled>
                        <option value="January" {{$advance->advance_first_month_of_tax_year == "January" ? 'selected' : ''}}>January</option>
                        <option value="February" {{$advance->advance_first_month_of_tax_year == "February" ? 'selected' : ''}}>February</option>
                        <option value="March" {{$advance->advance_first_month_of_tax_year == "March" ? 'selected' : ''}}>March</option>
                        <option value="April" {{$advance->advance_first_month_of_tax_year == "April" ? 'selected' : ''}}>April</option>
                        <option value="May" {{$advance->advance_first_month_of_tax_year == "May" ? 'selected' : ''}}>May</option>
                        <option value="June" {{$advance->advance_first_month_of_tax_year == "June" ? 'selected' : ''}}>June</option>
                        <option value="July" {{$advance->advance_first_month_of_tax_year == "July" ? 'selected' : ''}}>July</option>
                        <option value="August" {{$advance->advance_first_month_of_tax_year == "August" ? 'selected' : ''}}>August</option>
                        <option value="September" {{$advance->advance_first_month_of_tax_year == "September" ? 'selected' : ''}}>September</option>
                        <option value="October" {{$advance->advance_first_month_of_tax_year == "October" ? 'selected' : ''}}>October</option>
                        <option value="November" {{$advance->advance_first_month_of_tax_year == "November" ? 'selected' : ''}}>November</option>
                        <option value="December" {{$advance->advance_first_month_of_tax_year == "December" ? 'selected' : ''}}>December</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="accounting_method" name="accounting_method" disabled>
                        <option value="Accrual" {{$advance->advance_accounting_method == "Accrual" ? 'selected' : ''}}>Accrual</option>
                        <option value="Cash" {{$advance->advance_accounting_method == "Cash" ? 'selected' : ''}}>Cash</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="close_book" name="close_book" disabled>
                        <option value="On" {{$expenses->advance_close_book == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_close_book == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_accounting" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Company Type</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Tax form</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <input list="tax_forms_list" class="text-dark" id="advance_tax_form" name="advance_tax_form" type="text" value="{{$advance->advance_tax_form}}" readonly>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_advance_company_type" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Chart of Accounts</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Enable account numbers</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="enable_acc_number" name="enable_acc_number" disabled>
                        <option value="On" {{$expenses->advance_enable_acc_number == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_enable_acc_number == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_chart_of_accounts" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Categories</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Track Classes</p>
                    <p class="text-dark">Track Locations</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="track_classes" name="track_classes" disabled>
                        <option value="On" {{$expenses->advance_track_classes == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_track_classes == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="track_location" name="track_location" disabled>
                        <option value="On" {{$expenses->advance_track_location == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_track_location == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_categories" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Automation</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Pre-fill forms with previously entered content</p>
                    <p class="text-dark">Automatically apply credits</p>
                    <p class="text-dark">Automatically invoice unbilled activity</p>
                    <p class="text-dark">Automatically apply bill payments</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="prefill_form" name="prefill_form" disabled>
                        <option value="On" {{$expenses->advance_prefill_form == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_prefill_form == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="apply_credit" name="apply_credit" disabled>
                        <option value="On" {{$expenses->advance_apply_credit == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_apply_credit == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="invoice_unbilled_activity" name="invoice_unbilled_activity" disabled>
                        <option value="On" {{$expenses->advance_invoice_unbilled_activity == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_invoice_unbilled_activity == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="apply_bill_payment" name="apply_bill_payment" disabled>
                        <option value="On" {{$expenses->advance_apply_bill_payment == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_apply_bill_payment == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_automation" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Time tracking</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Add Service field to timesheets</p>
                    <p class="text-dark">Make Single-Time Activity Billable to Customer</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="add_service_field" name="add_service_field" disabled>
                        <option value="On" {{$expenses->advance_add_service_field == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_add_service_field == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="single_time_activity_billable" name="single_time_activity_billable" disabled>
                        <option value="On" {{$expenses->advance_single_time_activity_billable == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_single_time_activity_billable == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_time_tracking" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Language</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Language</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="language" name="language" disabled>
                        <option value="English" {{$expenses->advance_language == "English" ? 'selected' : ''}}>English</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_language" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Currency</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Home Currency</p>
                    <p class="text-dark">Multicurrency</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="home_currency" name="home_currency" disabled>
                        <option value="Philippine Peso" {{$expenses->advance_home_currency == "Philippine Peso" ? 'selected' : ''}}>Philippine Peso</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="multi_currency" name="multi_currency" disabled>
                        <option value="On" {{$expenses->advance_multi_currency == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_multi_currency == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_currency" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Other preferences</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Date format</p>
                    <p class="text-dark">Number format</p>
                    <p class="text-dark">Warn if duplicate cheque number is used</p>
                    <p class="text-dark">Warn if duplicate bill number is used</p>
                    <p class="text-dark">Sign me out if inactive for</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <select class="text-dark font-weight-bold" id="date_format" name="date_format" disabled>
                        <option value="MM/dd/yyyy" {{$expenses->advance_date_format == "MM/dd/yyyy" ? 'selected' : ''}}>MM/dd/yyyy</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="number_format" name="number_format" disabled>
                        <option value="123,456.00" {{$expenses->advance_number_format == "123,456.00" ? 'selected' : ''}}>123,456.00</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="dup_cheque_num" name="dup_cheque_num" disabled>
                        <option value="On" {{$expenses->advance_dup_cheque_num == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_dup_cheque_num == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="dup_bill_num" name="dup_bill_num" disabled>
                        <option value="On" {{$expenses->advance_dup_bill_num == "On" ? 'selected' : ''}}>On</option>
                        <option value="Off" {{$expenses->advance_dup_bill_num == "Off" ? 'selected' : ''}}>Off</option>
                    </select>
                    <select class="text-dark font-weight-bold" id="inactive_time" name="inactive_time" disabled>
                        <option value="1" {{$expenses->advance_inactive_time == "1" ? 'selected' : ''}}>1 Hour</option>
                        <option value="2" {{$expenses->advance_inactive_time == "2" ? 'selected' : ''}}>2 Hours</option>
                        <option value="3" {{$expenses->advance_inactive_time == "3" ? 'selected' : ''}}>3 Hours</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <a href="#" id="toggle_edit_other_preferences" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="float-right mb-5">
                <button id="update_advance" class="btn btn-success rounded">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
</div>

<script>
$(document).ready(function () {

    $("#update_company").click(function (event) {
        event.preventDefault();
        
        $('select:disabled').prop('disabled', false);

		$.ajax({
			method: "POST",
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: "{{ route('update_company') }}",
			dataType: "text",
			data: $('#company_form').serialize(),
			success: function (data) {
                swal("Done!", "Updated company", "success");
                
                $('select').prop('disabled', true);
                $('input').prop('readonly', true);
			},
			error: function (data) {
				swal("Error!", "Update failed", "error");
			}
		});
    });

    $("#update_sales").click(function (event) {
        event.preventDefault();
        
        $('select:disabled').prop('disabled', false);

		$.ajax({
			method: "POST",
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: "{{ route('update_sales') }}",
			dataType: "text",
			data: $('#sales_form').serialize(),
			success: function (data) {
                swal("Done!", "Updated sales", "success");

                $('select').prop('disabled', true);
                $('input').prop('readonly', true);
			},
			error: function (data) {
				swal("Error!", "Update failed", "error");
			}
		});
    });

    $("#update_expenses").click(function (event) {
        event.preventDefault();
        
        $('select:disabled').prop('disabled', false);

		$.ajax({
			method: "POST",
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: "{{ route('update_expenses') }}",
			dataType: "text",
			data: $('#expenses_form').serialize(),
			success: function (data) {
                swal("Done!", "Updated expenses", "success");

                $('select').prop('disabled', true);
                $('input').prop('readonly', true);
			},
			error: function (data) {
				swal("Error!", "Update failed", "error");
			}
		});
    });

    $("#update_advance").click(function (event) {
        event.preventDefault();
        
        $('select:disabled').prop('disabled', false);

		$.ajax({
			method: "POST",
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: "{{ route('update_advance') }}",
			dataType: "text",
			data: $('#advance_form').serialize(),
			success: function (data) {
                swal("Done!", "Updated advance", "success");

                $('select').prop('disabled', true);
                $('input').prop('readonly', true);
			},
			error: function (data) {
				swal("Error!", "Update failed", "error");
			}
		});
    });

});
</script>
@endsection