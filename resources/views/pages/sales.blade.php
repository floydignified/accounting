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
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Invoices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="extra-tab" data-toggle="tab" href="#extra" role="tab" aria-controls="extra" aria-selected="false">Products and Services</a>
                </li>
            </ul>
            <div class="tab-content pl-3 p-1" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3>Sales Transactions</h3>
    
                    <div class="btn-group float-right mb-3">
                        <button class="btn btn-success rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">New Transaction</button>
    
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="invoice.php" data-toggle="modal" data-target="#invoicemodal">Invoice</a>
                            <a class="dropdown-item" href="invoice.php" data-toggle="modal" data-target="#receivepaymentmodal">Payment</a>
                            <a class="dropdown-item" href="invoice.php" data-toggle="modal" data-target="#estimatemodal">Estimate</a>
                            <a class="dropdown-item" href="invoice.php" data-toggle="modal" data-target="#salesreceiptmodal">Sales Receipt</a>
                            <a class="dropdown-item" href="invoice.php" data-toggle="modal" data-target="#creditnotemodal">Credit Note</a>
                            <a class="dropdown-item" href="invoice.php" data-toggle="modal" data-target="#delayedchargemodal">Delayed Charge</a>
                        </div>
                    </div>
                    <div id="table" class="table-editable">
                        <div class="col-md-12 text-white p-0 mb-5">
                            <div class="col-md-2 bg-ltblue pb-0">
                                <h3  class="estimate_total">PHP0</h3>
                                <p class="font14 estimate_count">0 ESTIMATE</p>
                            </div>
                            <div class="col-md-2 bg-blue">
                                <h3>PHP0</h3>
                                <p class="font14">0 Unbilled Activity</p>
                            </div>
                            <div class="col-md-2 bg-orange">
                                <h3>PHP0</h3>
                                <p class="font14">0 OVERDUE</p>
                            </div>
                            <div class="col-md-2 bg-grey">
                            <h3 class="invoice_total">PHP 0</h3>
                                <p class="font14 invoice_count">1 OPEN INVOICE</p>
                            </div>
                            <div class="col-md-4 bg-ltgreen">
                                <h3 class="paid_total">PHP 0</h3>
                                <p class="font14 paid_count">0 PAID LAST 30 DAYS</p>
                            </div>
                        </div>
                        <div class="float-left">
                            <select>
                                <option value="" disabled selected>Batch Actions</option>
                                <option>Print Transactions</option>
                                <option>Print Packing Slip</option>
                                <option>Send Transactions</option>
                                <option>Send Reminders</option>
                            </select>
                            <button type="button" class="btn btn-secondary rounded mb-1 py-0" data-toggle="modal" data-target="#salesModal">
                            Filter
                            </button>
                            <div class="modal fade" id="salesModal" tabindex="-1" role="dialog" aria-labelledby="salesModalLabel" aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="salesModalLabel">Filter</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-md-12 d-inline-flex">
                                                <div class="col-md-6 w-100">
                                                    <div class="padding0">
                                                        <p>Type</p>
                                                        <select class="w-100">
                                                            <option>All Transactions</option>
                                                            <option>Estimates</option>
                                                            <option>Invoices</option>
                                                            <option>Sales Receipt</option>
                                                            <option>Credit Notes</option>
                                                            <option>Unbilled Income</option>
                                                            <option>Recently Paid</option>
                                                            <option>Money Received</option>
                                                            <option>Statements</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 w-100">
                                                    <div class="padding0">
                                                        <p>In</p>
                                                        <select class="w-100">
                                                            <option>All Bank Accounts</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 d-inline pt-1">
                                                <div class="col-md-6 w-100">
                                                    <div class="padding0">
                                                        <p>Status</p>
                                                        <select class="w-100">
                                                            <option>All Statuses</option>
                                                            <option>Open</option>
                                                            <option>Overdue</option>
                                                            <option>Paid</option>
                                                            <option>Pending</option>
                                                            <option>Accepted</option>
                                                            <option>Closed</option>
                                                            <option>Rejected</option>
                                                            <option>Expired</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 w-100">
                                                    <div class="padding0">
                                                        <p>Delivery Method</p>
                                                        <select class="w-100">
                                                            <option>Any</option>
                                                            <option>Print Later</option>
                                                            <option>Send Later</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 d-inline-flex pt-3">
                                                <div class="col-md-4 w-100">
                                                    <div class="padding0">
                                                        <p>Date</p>
                                                        <select class="w-100">
                                                            <option>Last 365 Days</option>
                                                            <option>Custom</option>
                                                            <option>Today</option>
                                                            <option>Yesterday</option>
                                                            <option>This Week</option>
                                                            <option>This Month</option>
                                                            <option>This Quarter</option>
                                                            <option>This Year</option>
                                                            <option>Last Week</option>
                                                            <option>Last Month</option>
                                                            <option>Last Quarter</option>
                                                            <option>Last Year</option>
                                                            <option>All Dates</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 w-100">
                                                    <div class="padding0">
                                                        <p>From</p>
                                                        <input class="w-100" type="date" value="07/27/2017">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 w-100">
                                                    <div class="padding0">
                                                        <p>To</p>
                                                        <input class="w-100" type="date"">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pt-2">
                                                <div class="col-md-6">
                                                    <div class="padding0">
                                                        <p>Customer</p>
                                                        <select class="w-75">
                                                            <option>All</option>
                                                            <option>Cheque</option>
                                                            <option>Transfer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Reset</button>
                                            <button type="button" class="btn btn-success rounded">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-inline-flex float-right">
                            <li class="fa fa-print pl-2"><a href=""></a></li>
                            <li class="fa fa-save pl-2"><a href=""></a></li>
                            <li class="fa fa-cog pl-2"><a href=""></a></li>
                        </div>
                        <table id="salestable" class="table table-bordered table-responsive-md table-striped text-center font14" width="100%">
                            <thead>
                                <th class="text-center"><input type="checkbox" name=""></th>
                                <th class="text-center">DATE</th>
                                <th class="text-center">TYPE</th>
                                <th class="text-center">NO.</th>
                                <th class="text-center">CUSTOMER</th>
                                <th class="text-center">DUE-DATE</th>
                                <th class="text-center">BALANCE</th>
                                <th class="text-center">TOTAL</th>
                                <th class="text-center">STATUS</th>
                                <th class="text-center">ACTION</th>
                            </thead>
                            
                            <!-- This is our clonable table line -->
                        </table>
                    </div>
                    <div class="modal fade" id="receiveModal" tabindex="-1" role="dialog" aria-labelledby="receiveModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="receiveModalLabel">Add yeah Rule</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12 d-inline-flex">
                                        <div class="col-md-6 w-100">
                                            <div class="padding0">
                                                <p class="float-left text-center">Rule Name</p>
                                                <input name="rulename" type="text" class="float-right w-100">
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <p>For</p>
                                                <select class="w-100">
                                                    <option>Money out</option>
                                                    <option>Money in</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <p>In</p>
                                                <select class="w-100">
                                                    <option>All Bank Accounts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-3">
                                        <div class="col-md-12">
                                            <div class="d-inline-flex">
                                                <p>When a transaction meets </p>
                                                <select>
                                                    <option>all</option>
                                                    <option>any</option>
                                                </select>
                                                <p>of these conditions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-inline pt-1">
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <select class="w-100">
                                                    <option>Bank Text</option>
                                                    <option>Description</option>
                                                    <option>Amount</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <select class="w-100">
                                                    <option>Contains</option>
                                                    <option>Does not contain</option>
                                                    <option>Is Exactly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 w-100">
                                            <div class="padding0">
                                                <input name="rulename" type="text" class="float-right w-100">
                                            </div>
                                        </div>
                                        <div class="col-md-12"><button class="btn btn-success">Add Line</button></div>
                                    </div>
                                    <div class="col-md-12 d-inline-flex pt-3">
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Transaction Type</p>
                                                <select class="w-100">
                                                    <option>Expense</option>
                                                    <option>Cheque</option>
                                                    <option>Transfer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Payee</p>
                                                <select class="w-100">
                                                    <option>Money out</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Category</p>
                                                <select class="w-100">
                                                    <option>All Bank Accounts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-2">
                                        <div class="col-md-12">
                                            <button class="btn btn-success">Split</button>
                                            <p>Memo</p>
                                            <input name="rulename" type="text" class="w-50"> <br>
                                            <input type="checkbox">Automatically add to my books
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ======================================================================================================================================== SECOND TAB--> 
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- <h3>Sales Transactions</h3> -->
                    <div id="table" class="table-editable">
                        <!-- Button trigger modal -->
                        <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                        <div class="col-md-12 p-0 mb-5">
                            <div class="col-md-6">
                                <div class="d-inline-block w-100 font12">
                                    <p class="float-left">PHP 2,000.00 UNPAID</p>
                                    <p class="float-right">LAST 365 DAYS</p>
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="float-left padding0">
                                        <p class="m-0 text-orange">PHP 0.00</p>
                                        <p class="font12">OVERDUE</p>
                                    </div>
                                    <div class="float-right">
                                        <p class="m-0 text-secondary">PHP 2,000.00</p>
                                        <p class="font12">NOT YET DUE</p>
                                    </div>
                                </div>
                                <div class="progress mb-3 w-100">
                                    <div class="progress-bar bg-grey" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-inline-block w-100 font12">
                                    <p class="float-left">PHP 0.00 UNPAID</p>
                                    <p class="float-right">LAST 365 DAYS</p>
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="float-left padding0">
                                        <p class="m-0 text-ltgreen">PHP 0.00</p>
                                        <p class="font12">NOT DEPOSITED</p>
                                    </div>
                                    <div class="float-right">
                                        <p class="m-0 text-success">PHP 2,000.00</p>
                                        <p class="font12">DEPOSITED</p>
                                    </div>
                                </div>
                                <div class="progress mb-3 w-100 bg-success">
                                    <div class="progress-bar bg-ltgreen" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="float-left">
                            <select>
                                <option value="" disabled selected>Batch Actions</option>
                                <option>Print Transactions</option>
                                <option>Print Packing Slip</option>
                                <option>Send Transactions</option>
                                <option>Send Reminders</option>
                            </select>
                        </div>
                        <div class="d-inline-flex float-right mb-3">
                            <button class="btn btn-success rounded"><a href="invoice.php" class="text-white" data-toggle="modal" data-target="#invoicemodal"> New Invoice</a></button>
                        </div>
                        <table id="salestableinvoice" class="salestableinvoice table table-bordered table-responsive-md table-striped text-center font14" width="100%">
                            <thead>
                                <th class="text-center"><input type="checkbox" name=""></th>
                                <th class="text-center">DATE</th>
                                <th class="text-center">TYPE</th>
                                <th class="text-center">NO.</th>
                                <th class="text-center">CUSTOMER</th>
                                <th class="text-center">DUE-DATE</th>
                                <th class="text-center">BALANCE</th>
                                <th class="text-center">TOTAL</th>
                                <th class="text-center">STATUS</th>
                                <th class="text-center">ACTION</th>
                            </thead>
                        </table>
                    </div>
                    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticModalLabel">Add yeah Rule</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12 d-inline-flex">
                                        <div class="col-md-6 w-100">
                                            <div class="padding0">
                                                <p class="float-left text-center">Rule Name</p>
                                                <input name="rulename" type="text" class="float-right w-100">
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <p>For</p>
                                                <select class="w-100">
                                                    <option>Money out</option>
                                                    <option>Money in</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <p>In</p>
                                                <select class="w-100">
                                                    <option>All Bank Accounts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-3">
                                        <div class="col-md-12">
                                            <div class="d-inline-flex">
                                                <p>When a transaction meets </p>
                                                <select>
                                                    <option>all</option>
                                                    <option>any</option>
                                                </select>
                                                <p>of these conditions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-inline pt-1">
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <select class="w-100">
                                                    <option>Bank Text</option>
                                                    <option>Description</option>
                                                    <option>Amount</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <select class="w-100">
                                                    <option>Contains</option>
                                                    <option>Does not contain</option>
                                                    <option>Is Exactly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 w-100">
                                            <div class="padding0">
                                                <input name="rulename" type="text" class="float-right w-100">
                                            </div>
                                        </div>
                                        <div class="col-md-12"><button class="btn btn-success">Add Line</button></div>
                                    </div>
                                    <div class="col-md-12 d-inline-flex pt-3">
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Transaction Type</p>
                                                <select class="w-100">
                                                    <option>Expense</option>
                                                    <option>Cheque</option>
                                                    <option>Transfer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Payee</p>
                                                <select class="w-100">
                                                    <option>Money out</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Category</p>
                                                <select class="w-100">
                                                    <option>All Bank Accounts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-2">
                                        <div class="col-md-12">
                                            <button class="btn btn-success">Split</button>
                                            <p>Memo</p>
                                            <input name="rulename" type="text" class="w-50"> <br>
                                            <input type="checkbox">Automatically add to my books
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ===========================================================================================================================================THIRD TAB -->
                <div class="tab-pane fade show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <h3>Customers</h3>
                    <div id="table" class="table-editable">
                        <!-- Button trigger modal -->
                        <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                        <div class="btn-group float-right mb-3">
                            <button type="button" class="btn btn-success rounded-left" data-toggle="modal" data-target="#addcustomermodal">New Customer</button>
                            <button type="button" class="btn btn-success rounded-right dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Import Customers</a>
                            </div>
                        </div>
    
    
                        <div class="col-md-12 text-white p-0 mb-5">
                            <div class="col-md-2 bg-ltblue pb-0">
                                <h3  class="estimate_total">PHP0</h3>
                                <p class="estimate_count">0 ESTIMATE</p>
                            </div>
                            <div class="col-md-2 bg-blue">
                                <h3>PHP0</h3>
                                <p>0 Unbilled Activity</p>
                            </div>
                            <div class="col-md-2 bg-orange">
                                <h3>PHP0</h3>
                                <p>0 OVERDUE</p>
                            </div>
                            <div class="col-md-2 bg-grey">
                                <h3 class="invoice_total">PHP 2,000</h3>
                                <p class="invoice_count">1 OPEN INVOICE</p>
                            </div>
                            <div class="col-md-4 bg-ltgreen">
                                <h3 class="paid_total">PHP0</h3>
                                <p class="paid_count">0 PAID LAST 30 DAYS</p>
                            </div>
                        </div>
                        <div class="float-left">
                            <select>
                                <option value="" disabled selected>Batch Actions</option>
                                <option>Create Statements</option>
                                <option>Email</option>
                            </select>
                        </div>
                        <div class="d-inline-flex float-right">
                            <li class="fa fa-print pl-2"><a href=""></a></li>
                            <li class="fa fa-save pl-2"><a href=""></a></li>
                            <li class="fa fa-cog pl-2"><a href=""></a></li>
                        </div>
                        <table id="customertable" class="table table-bordered table-responsive-md table-striped text-center font14" width="100%">
                            <thead>
                                <th class="text-center"><input type="checkbox" name=""></th>
                                <th class="text-center">CUSTOMER/COMPANY</th>
                                <th class="text-center">PHONE</th>
                                <th class="text-center">OPEN BALANCE</th>
                                <th class="text-center">ACTION</th>
                            </thead>
                                
                            
                            <!-- This is our clonable table line -->
                        </table>
                        <div class="pagination float-right">
                            <a class="pl-2 active" href="#">&laquo;First</a>
                            <a class="pl-2" href="#">Previous</a>
                            <a class="pl-2">1-1 of 1</a>
                            <a class="pl-2" href="#">Next</a>
                            <a class="pl-2" href="#">Last&raquo;</a>
                        </div>
                    </div>
                    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticModalLabel">Add yeah Rule</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12 d-inline-flex">
                                        <div class="col-md-6 w-100">
                                            <div class="padding0">
                                                <p class="float-left text-center">Rule Name</p>
                                                <input name="rulename" type="text" class="float-right w-100">
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <p>For</p>
                                                <select class="w-100">
                                                    <option>Money out</option>
                                                    <option>Money in</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <p>In</p>
                                                <select class="w-100">
                                                    <option>All Bank Accounts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-3">
                                        <div class="col-md-12">
                                            <div class="d-inline-flex">
                                                <p>When a transaction meets </p>
                                                <select>
                                                    <option>all</option>
                                                    <option>any</option>
                                                </select>
                                                <p>of these conditions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-inline pt-1">
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <select class="w-100">
                                                    <option>Bank Text</option>
                                                    <option>Description</option>
                                                    <option>Amount</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <select class="w-100">
                                                    <option>Contains</option>
                                                    <option>Does not contain</option>
                                                    <option>Is Exactly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 w-100">
                                            <div class="padding0">
                                                <input name="rulename" type="text" class="float-right w-100">
                                            </div>
                                        </div>
                                        <div class="col-md-12"><button class="btn btn-success">Add Line</button></div>
                                    </div>
                                    <div class="col-md-12 d-inline-flex pt-3">
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Transaction Type</p>
                                                <select class="w-100">
                                                    <option>Expense</option>
                                                    <option>Cheque</option>
                                                    <option>Transfer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Payee</p>
                                                <select class="w-100">
                                                    <option>Money out</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Category</p>
                                                <select class="w-100">
                                                    <option>All Bank Accounts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-2">
                                        <div class="col-md-12">
                                            <button class="btn btn-success">Split</button>
                                            <p>Memo</p>
                                            <input name="rulename" type="text" class="w-50"> <br>
                                            <input type="checkbox">Automatically add to my books
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =============================================================================================================================FOURTH TAB-->
                <div class="tab-pane fade show" id="extra" role="tabpanel" aria-labelledby="extra-tab">
                    <div class="col-md-12 mb-4 p-0">
                        <h3 class="float-left">Products and Services</h3>
                        <div class="d-inline-flex float-right">
                            <!-- <button class="btn btn-outline-secondary bg-white text-secondary rounded mr-2">Run Report</button> -->
                            <select class="rounded p-1">
                                <option class="bg-white text-dark">More</option>
                                <option class="bg-white text-dark">Manage Categories</option>
                                <option class="bg-white text-dark">Run Report</option>
                            </select>
                            <select class="bg-success rounded text-white ml-2">
                                <option class="bg-white text-dark">New</option>
                                <option class="bg-white text-dark">Import</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="col-md-12 bg-white">
                        <div class="col-md-6">
                            <div class=" center-content my-3">
                                <img src="{{asset('images/lowstock.png')}}" class="w-25 h-25">
                                <div class="d-inline-flex">
                                    <h5 class="ml-2 text-orange">0</h5>
                                    <h5 class="ml-1">LOW STOCK</h5>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class=" center-content my-3">
                                <img src="{{asset('images/nostock.png')}}" class="w-25 h-25">
                                <div class="d-inline-flex">
                                    <h5 class="ml-2 text-red">0</h5>
                                    <h5 class="ml-1">NO STOCK</h5>
                                </div>
                            </div>
                        </div>
    
    
                    </div>
                    
                    <div id="table" class="table-editable">
                        <!-- Button trigger modal -->
                        <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                        <div class="col-md-12 p-0 py-2 my-2">
                            <input type="text" name="" placeholder="Find products and services" class="font12 p-2">
                            <button type="button" class="btn btn-secondary mb-1 p-2 fa fa-filter rounded" data-toggle="modal" data-target="#filterModal"></button>
                            <div class="d-inline-flex float-right py-2">
                                <li class="fa fa-print pl-2"><a href=""></a></li>
                                <li class="fa fa-save pl-2"><a href=""></a></li>
                                <li class="fa fa-cog pl-2"><a href=""></a></li>
                            </div>
                        </div>
                        <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="filterModalLabel">Filter</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-12 d-inline-flex p-0 mb-2">
                                            <p class="float-left my-1 mr-2 col-md-6 p-0">Status</p>
                                            <select class="float-right w-200px p-0 col-md-6">
                                                <option>Active</option>
                                                <option>Inactive</option>
                                                <option>All</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 d-inline-flex p-0 mb-2">
                                            <p class="float-left my-1 mr-2 col-md-6 p-0">Type</p>
                                            <select class="float-right w-200px p-0 col-md-6">
                                                <option>All</option>
                                                <option>Inventory</option>
                                                <option>Non-Inventory</option>
                                                <option>Service</option>
                                                <option>Bundle</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 d-inline-flex p-0 mb-2">
                                            <p class="float-left my-1 mr-2 col-md-6 p-0">Category</p>
                                            <select class="float-right w-200px p-0 col-md-6">
                                                <option>All</option>
                                                <!-- <option><input type="checkbox">Uncategorized</option> -->
                                                <option>Uncatergorized</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 d-inline-flex p-0 mb-2">
                                            <p class="float-left my-1 mr-2 col-md-6 p-0">Stock Status</p>
                                            <select class="float-right w-200px p-0 col-md-6">
                                                <option>All</option>
                                                <option>Low Stock</option>
                                                <option>Out of Stock</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="float-left rounded btn btn-secondary" data-dismiss="modal">Reset</button>
                                        <button type="button" class="rounded btn btn-success">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-responsive-md table-striped text-center font14">
                            <tr>
                                <th class="text-center"><input type="checkbox" name=""></th>
                                <th class="text-center">NAME</th>
                                <th class="text-center">SKU</th>
                                <th class="text-center">TYPE</th>
                                <th class="text-center">SALES DESC.</th>
                                <th class="text-center">SALES PRICE</th>
                                <th class="text-center">COST</th>
                                <th class="text-center">QTY ON HAND</th>
                                <th class="text-center">REORDER POINT</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                            @foreach($products_and_services as $product_and_service)
                            <tr>
                                <td class="pt-3-half" contenteditable="true"><input type="checkbox" name=""></td>
                                <td class="pt-3-half" contenteditable="true">{{$product_and_service->product_name}}</td>
                                <td class="pt-3-half" contenteditable="true">{{$product_and_service->product_sku}}</td>
                                <td class="pt-3-half" contenteditable="true">{{$product_and_service->product_type}}</td>
                                <td class="pt-3-half" contenteditable="true">{{$product_and_service->product_sales_description}}</td>
                                <td class="pt-3-half" contenteditable="true">PHP {{number_format($product_and_service->product_sales_price,2)}}</td>
                                <td class="pt-3-half" contenteditable="true">PHP {{number_format($product_and_service->product_cost,2)}}</td>
                                <td class="pt-3-half" contenteditable="true">{{$product_and_service->product_qty}}</td>
                                <td class="pt-3-half" contenteditable="true">{{$product_and_service->product_reorder_point}}</td>
                                <td>
                                    <span class="table-add mb-3 mr-2"><a href="#!" class="text-info"><i aria-hidden="true">Edit</i></a></span>
                                    <select>
                                        <option></option>
                                        <option>Make Inactive</option>
                                        <option>Run Report</option>
                                        <option>Duplicate</option>
                                    </select>
                                </td>
                            </tr>
                            @endforeach
                            <!-- This is our clonable table line -->
                        </table>
                        <div class="pagination float-right">
                            <a class="pl-2 active" href="#">&laquo;First</a>
                            <a class="pl-2" href="#">Previous</a>
                            <a class="pl-2">1-1 of 1</a>
                            <a class="pl-2" href="#">Next</a>
                            <a class="pl-2" href="#">Last&raquo;</a>
                        </div>
                    </div>
                    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticModalLabel">Add yeah Rule</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12 d-inline-flex">
                                        <div class="col-md-6 w-100">
                                            <div class="padding0">
                                                <p class="float-left text-center">Rule Name</p>
                                                <input name="rulename" type="text" class="float-right w-100">
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <p>For</p>
                                                <select class="w-100">
                                                    <option>Money out</option>
                                                    <option>Money in</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <p>In</p>
                                                <select class="w-100">
                                                    <option>All Bank Accounts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-3">
                                        <div class="col-md-12">
                                            <div class="d-inline-flex">
                                                <p>When a transaction meets </p>
                                                <select>
                                                    <option>all</option>
                                                    <option>any</option>
                                                </select>
                                                <p>of these conditions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-inline pt-1">
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <select class="w-100">
                                                    <option>Bank Text</option>
                                                    <option>Description</option>
                                                    <option>Amount</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 w-100">
                                            <div class="padding0">
                                                <select class="w-100">
                                                    <option>Contains</option>
                                                    <option>Does not contain</option>
                                                    <option>Is Exactly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 w-100">
                                            <div class="padding0">
                                                <input name="rulename" type="text" class="float-right w-100">
                                            </div>
                                        </div>
                                        <div class="col-md-12"><button class="btn btn-success">Add Line</button></div>
                                    </div>
                                    <div class="col-md-12 d-inline-flex pt-3">
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Transaction Type</p>
                                                <select class="w-100">
                                                    <option>Expense</option>
                                                    <option>Cheque</option>
                                                    <option>Transfer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Payee</p>
                                                <select class="w-100">
                                                    <option>Money out</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 w-100">
                                            <div class="padding0">
                                                <p>Category</p>
                                                <select class="w-100">
                                                    <option>All Bank Accounts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-2">
                                        <div class="col-md-12">
                                            <button class="btn btn-success">Split</button>
                                            <p>Memo</p>
                                            <input name="rulename" type="text" class="w-50"> <br>
                                            <input type="checkbox">Automatically add to my books
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>

<script>

function number_format(number, decimals, dec_point, thousands_sep) {
    // Strip all characters but numerical ones.
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

$(document).ready(function(){

    var total_invoice_count = 0;
    var total_invoice_data = 0;
    var total_estimate_count = 0;
    var total_estimate_data = 0;
    var total_paid_count = 0;
    var total_paid_data = 0;

    @foreach($sales_transaction as $transaction)
        @if($transaction->st_type == "Invoice" && $transaction->st_status == "Open")
            total_invoice_count++;
            total_invoice_data += {{$transaction->invoice_info->sum('st_i_total')}};
        @elseif($transaction->st_type == "Invoice" && $transaction->st_status == "Paid")
            total_paid_count++;
            total_paid_data += {{$transaction->invoice_info->sum('st_p_amount')}};
        @elseif($transaction->st_type == "Estimate" && $transaction->st_status == "Pending")
            total_estimate_count++;
            total_estimate_data += {{$transaction->estimate_info->sum('st_e_total')}};
        @endif
    @endforeach

    $('.invoice_count').text(total_invoice_count + " OPEN INVOICE");
    $('.invoice_total').text("PHP " + total_invoice_data);
    $('.estimate_count').text(total_estimate_count + " OPEN ESTIMATE");
    $('.estimate_total').text("PHP " + total_estimate_data);
    $('.paid_count').text(total_paid_count + " PAID LAST 30 DAYS");
    $('.paid_total').text("PHP " + total_paid_data);

    

    $(document).on('click', '.receive_payment', function(){
        var id = $(this).attr('id');
        
        $.ajax({
            method: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('get_all_transactions') }}",
            dataType: "text",
            data: {id:id},
            success: function (value) {
                var data = JSON.parse(value);
                $('#sales_transaction_number').val(data.st_no);
                var customer_transaction = data.st_customer_id;
                @foreach($customers as $customer)
                    if({{$customer->customer_id}} == customer_transaction){
                        $('#paymentcustomer').val('{{$customer->display_name}}');
                        $('#paymentbalance').text('PHP ' + number_format(data.st_balance,2));
                        $('#payment_customer_id').val('{{$customer->customer_id}}');
                        $('#p_payment_method').val('{{$customer->payment_method}}');
                    }
                 @endforeach
            },
            error: function (data) {
                swal("Error!", "Transaction failed", "error");
            }
        });
    });

    $(document).on('click', '.create_invoice_estimate', function(){
        var id = $(this).attr('id');
        
        $.ajax({
            method: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('get_all_transactions') }}",
            dataType: "text",
            data: {id:id},
            success: function (value) {
                var data = JSON.parse(value);
                var customer_transaction = data.st_customer_id;
                @foreach($customers as $customer)
                    if({{$customer->customer_id}} == customer_transaction){
                        $('#sales_transaction_number_estimate').val(data.st_no);
                        $('#invoicecustomer').append('<option value="{{$customer->customer_id}}" selected>{{$customer->display_name}}</option>');
                        $('#invoicebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#big_invoicebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#bill_address').val('{{$customer->street." ".$customer->city." ".$customer->state." ".$customer->postal_code." ".$customer->country}}');
                        $('#term').val('{{$customer->terms}}');
                        $('#invoicedate').val(data.st_date);
                        $('#invoiceduedate').val(data.st_due_date);
                        $('#note').val(data.st_note);
                        $('#memo').val(data.st_memo);
                        
                        $.ajax({
                            method: "GET",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('get_all_estimates') }}",
                            dataType: "text",
                            data: {id:data.st_no},
                            success: function (value) {
                                var data = JSON.parse(value);

                                console.log(data)
                                for($x=0;$x<data.length;$x++){
                                    var markup = '<tr class="invoice_lines" id="invoice_line'+$('#invoice_table tr').length+'"><td class="pt-3-half" id="number_tag" contenteditable="false">'+$('#invoice_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="invoice_data product_select" id="select_product_name'+$('#invoice_table tr').length+'"><option value="'+data[$x].st_e_product+'">'+data[$x].st_e_product_name+'</option></select></td><td class="pt-3-half"><input class="invoice_data" id="select_product_description'+$('#invoice_table tr').length+'" style="border:0;" value="'+data[$x].st_e_desc+'"></td><td class="pt-3-half"><input type="number" class="invoice_data product_qty" onclick="this.select();" id="product_qty'+$('#invoice_table tr').length+'" style="border:0; text-align:center;" value="'+data[$x].st_e_qty+'"></td><td class="pt-3-half"><input class="invoice_data" id="select_product_rate'+$('#invoice_table tr').length+'" style="border:0;" value="'+data[$x].st_e_rate+'"></td><td class="pt-3-half product_total" id="total_amount'+$('#invoice_table tr').length+'">'+data[$x].st_e_total+'</td><td class="pt-3-half"><a href="#" id="delete_product'+$('#invoice_table tr').length+'" class="fa fa-trash delete_product"></a></td></tr>';
            
                                    $("#invoice_table").append(markup);
                                }

                                var total_invoice = 0;
                                $('.product_total').each(function() {
                                    var add_total = $(this).html();
                                    if(add_total==""){
                                        add_total=0;
                                    }
                                    total_invoice += parseFloat(add_total);
                                    $('#invoicetotal').html(total_invoice);
                                });
                            },
                            error: function (data) {
                                swal("Error!", "Transaction failed", "error");
                            }
                        });

                        
                    }
                 @endforeach
            },
            error: function (data) {
                swal("Error!", "Transaction failed", "error");
            }
        });
    });

    $(document).on('click', '.create_invoice_delayed_charge', function(){
        var id = $(this).attr('id');
        
        $.ajax({
            method: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('get_all_transactions') }}",
            dataType: "text",
            data: {id:id},
            success: function (value) {
                var data = JSON.parse(value);
                var customer_transaction = data.st_customer_id;
                @foreach($customers as $customer)
                    if({{$customer->customer_id}} == customer_transaction){
                        $('#sales_transaction_number_delayed_charge').val(data.st_no);
                        $('#invoicecustomer').append('<option value="{{$customer->customer_id}}" selected>{{$customer->display_name}}</option>');
                        $('#invoicebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#big_invoicebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#bill_address').val('{{$customer->street." ".$customer->city." ".$customer->state." ".$customer->postal_code." ".$customer->country}}');
                        $('#term').val('{{$customer->terms}}');
                        $('#invoicedate').val(data.st_date);
                        $('#invoiceduedate').val(data.st_due_date);
                        $('#note').val(data.st_note);
                        $('#memo').val(data.st_memo);
                        
                        $.ajax({
                            method: "GET",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('get_all_delayed_charge') }}",
                            dataType: "text",
                            data: {id:data.st_no},
                            success: function (value) {
                                var data = JSON.parse(value);

                                console.log(data)
                                for($x=0;$x<data.length;$x++){
                                    var markup = '<tr class="invoice_lines" id="invoice_line'+$('#invoice_table tr').length+'"><td class="pt-3-half" id="number_tag" contenteditable="false">'+$('#invoice_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="invoice_data product_select" id="select_product_name'+$('#invoice_table tr').length+'"><option value="'+data[$x].st_dc_product+'">'+data[$x].st_dc_product_name+'</option></select></td><td class="pt-3-half"><input class="invoice_data" id="select_product_description'+$('#invoice_table tr').length+'" style="border:0;" value="'+data[$x].st_dc_desc+'"></td><td class="pt-3-half"><input type="number" class="invoice_data product_qty" onclick="this.select();" id="product_qty'+$('#invoice_table tr').length+'" style="border:0; text-align:center;" value="'+data[$x].st_dc_qty+'"></td><td class="pt-3-half"><input class="invoice_data" id="select_product_rate'+$('#invoice_table tr').length+'" style="border:0;" value="'+data[$x].st_dc_rate+'"></td><td class="pt-3-half product_total" id="total_amount'+$('#invoice_table tr').length+'">'+data[$x].st_dc_total+'</td><td class="pt-3-half"><a href="#" id="delete_product'+$('#invoice_table tr').length+'" class="fa fa-trash delete_product"></a></td></tr>';
            
                                    $("#invoice_table").append(markup);
                                }

                                var total_invoice = 0;
                                $('.product_total').each(function() {
                                    var add_total = $(this).html();
                                    if(add_total==""){
                                        add_total=0;
                                    }
                                    total_invoice += parseFloat(add_total);
                                    $('#invoicetotal').html(total_invoice);
                                });
                            },
                            error: function (data) {
                                swal("Error!", "Transaction failed", "error");
                            }
                        });

                        
                    }
                 @endforeach
            },
            error: function (data) {
                swal("Error!", "Transaction failed", "error");
            }
        });
    });

    $(document).on('click', '.create_invoice_delayed_credit', function(){
        var id = $(this).attr('id');
        
        $.ajax({
            method: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('get_all_transactions') }}",
            dataType: "text",
            data: {id:id},
            success: function (value) {
                var data = JSON.parse(value);
                var customer_transaction = data.st_customer_id;
                @foreach($customers as $customer)
                    if({{$customer->customer_id}} == customer_transaction){
                        $('#sales_transaction_number_delayed_credit').val(data.st_no);
                        $('#invoicecustomer').append('<option value="{{$customer->customer_id}}" selected>{{$customer->display_name}}</option>');
                        $('#invoicebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#big_invoicebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#bill_address').val('{{$customer->street." ".$customer->city." ".$customer->state." ".$customer->postal_code." ".$customer->country}}');
                        $('#term').val('{{$customer->terms}}');
                        $('#invoicedate').val(data.st_date);
                        $('#invoiceduedate').val(data.st_due_date);
                        $('#note').val(data.st_note);
                        $('#memo').val(data.st_memo);
                        
                        $.ajax({
                            method: "GET",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('get_all_delayed_credit') }}",
                            dataType: "text",
                            data: {id:data.st_no},
                            success: function (value) {
                                var data = JSON.parse(value);

                                console.log(data)
                                for($x=0;$x<data.length;$x++){
                                    var markup = '<tr class="invoice_lines" id="invoice_line'+$('#invoice_table tr').length+'"><td class="pt-3-half" id="number_tag" contenteditable="false">'+$('#invoice_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="invoice_data product_select" id="select_product_name'+$('#invoice_table tr').length+'"><option value="'+data[$x].st_dcredit_product+'">'+data[$x].st_dcredit_product_name+'</option></select></td><td class="pt-3-half"><input class="invoice_data" id="select_product_description'+$('#invoice_table tr').length+'" style="border:0;" value="'+data[$x].st_dcredit_desc+'"></td><td class="pt-3-half"><input type="number" class="invoice_data product_qty" onclick="this.select();" id="product_qty'+$('#invoice_table tr').length+'" style="border:0; text-align:center;" value="'+data[$x].st_dcredit_qty+'"></td><td class="pt-3-half"><input class="invoice_data" id="select_product_rate'+$('#invoice_table tr').length+'" style="border:0;" value="'+data[$x].st_dcredit_rate+'"></td><td class="pt-3-half product_total" id="total_amount'+$('#invoice_table tr').length+'">'+data[$x].st_dcredit_total+'</td><td class="pt-3-half"><a href="#" id="delete_product'+$('#invoice_table tr').length+'" class="fa fa-trash delete_product"></a></td></tr>';
            
                                    $("#invoice_table").append(markup);
                                }

                                var total_invoice = 0;
                                $('.product_total').each(function() {
                                    var add_total = $(this).html();
                                    if(add_total==""){
                                        add_total=0;
                                    }
                                    total_invoice += parseFloat(add_total);
                                    $('#invoicetotal').html(total_invoice);
                                });
                            },
                            error: function (data) {
                                swal("Error!", "Transaction failed", "error");
                            }
                        });

                        
                    }
                 @endforeach
            },
            error: function (data) {
                swal("Error!", "Transaction failed", "error");
            }
        });
    });


});  
</script>
@endsection