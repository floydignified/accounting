<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['auth']], function() {
    Route::get('/', function () {
        return redirect('/reports');
    });

    Route::post('/update_company', 'CompanyController@update_company')->name('update_company');
    Route::post('/update_sales', 'CompanyController@update_sales')->name('update_sales');
    Route::post('/update_expenses', 'CompanyController@update_expenses')->name('update_expenses');
    Route::post('/update_advance', 'CompanyController@update_advance')->name('update_advance');

    Route::post('/add_customer', 'CustomersController@add_customer')->name('add_customer');
    Route::post('/add_invoice', 'CustomersController@add_invoice')->name('add_invoice');
    Route::post('/add_payment', 'CustomersController@add_payment')->name('add_payment');
    Route::post('/add_estimate', 'CustomersController@add_estimate')->name('add_estimate');
    Route::post('/add_sales_receipt', 'CustomersController@add_sales_receipt')->name('add_sales_receipt');
    Route::post('/add_refund_receipt', 'CustomersController@add_refund_receipt')->name('add_refund_receipt');
    Route::post('/add_delayed_charge', 'CustomersController@add_delayed_charge')->name('add_delayed_charge');
    Route::post('/add_delayed_credit', 'CustomersController@add_delayed_credit')->name('add_delayed_credit');
    Route::post('/add_credit_note', 'CustomersController@add_credit_note')->name('add_credit_note');

    Route::get('/refresh_sales_table', 'CustomersController@refresh_sales_table')->name('refresh_sales_table');
    Route::get('/refresh_sales_table_invoice', 'CustomersController@refresh_sales_table_invoice')->name('refresh_sales_table_invoice');
    Route::get('/refresh_customers_table', 'CustomersController@refresh_customers_table')->name('refresh_customers_table');

    Route::get('/get_all_transactions', 'CustomersController@get_all_transactions')->name('get_all_transactions');
    Route::get('/get_all_estimates', 'CustomersController@get_all_estimates')->name('get_all_estimates');
    Route::get('/get_all_delayed_charge', 'CustomersController@get_all_delayed_charge')->name('get_all_delayed_charge');
    Route::get('/get_all_delayed_credit', 'CustomersController@get_all_delayed_credit')->name('get_all_delayed_credit');

    Route::post('/add_expense', 'SuppliersController@add_expense')->name('add_expense');
    Route::post('/add_cheque', 'SuppliersController@add_cheque')->name('add_cheque');
    Route::post('/add_bill', 'SuppliersController@add_bill')->name('add_bill');
   
    Route::get('generate_pdf','PdfController@generate');

    Route::get('/reports', 'PagesController@reports');

    Route::get('/invoice', 'PagesController@invoice');
    Route::get('/receivepayment', 'PagesController@receivepayment');
    Route::get('/estimate', 'PagesController@estimate');
    Route::get('/creditnotice', 'PagesController@creditnotice');
    Route::get('/salesreceipt', 'PagesController@salesreceipt');
    Route::get('/sales', 'PagesController@sales');
    Route::get('/refundreceipt', 'PagesController@refundreceipt');
    Route::get('/delayedcredit', 'PagesController@delayedcredit');
    Route::get('/delayedcharge', 'PagesController@delayedcharge');

    Route::get('/expense', 'PagesController@expense');
    Route::get('/cheque', 'PagesController@cheque');
    Route::get('/bill', 'PagesController@bill');
    Route::get('/paybills', 'PagesController@paybills');
    Route::get('/purchaseorder', 'PagesController@purchaseorder');
    Route::get('/suppliercredit', 'PagesController@suppliercredit');
    Route::get('/creditcardcredit', 'PagesController@creditcardcredit');

    Route::get('/bankdeposit', 'PagesController@bankdeposit');
    Route::get('/transfer', 'PagesController@transfer');

    Route::get('/statements', 'PagesController@statements');
    Route::get('/investqtyadj', 'PagesController@investqtyadj');

    Route::get('/accountsandsettings', 'PagesController@accountsandsettings');
    Route::get('/customformstyles', 'PagesController@customformstyles');


    Route::get('/alllists', 'PagesController@alllists');

    Route::get('/recurringtransactions', 'PagesController@recurringtransactions');
    Route::get('/attachments', 'PagesController@attachments');

    Route::get('/importdata', 'PagesController@importdata');
    Route::get('/exportdata', 'PagesController@exportdata');

    Route::get('/budgeting', 'PagesController@budgeting');
    Route::get('/auditlog', 'PagesController@auditlog');
});

// Route::get('/', 'PagesController@reports');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
