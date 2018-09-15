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
