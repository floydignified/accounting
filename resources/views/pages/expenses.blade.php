@extends('layout.initial')


@section('content')
<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Expenses</h1>
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
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Expenses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Suppliers</a>
                </li>
            </ul>
            <div class="tab-content pl-3 p-1" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="col-md-12 p-0">
                        <h3 class="float-left">Expense Transactions</h3>
                        <div class="btn-group float-right mb-3">
                            <button class="btn btn-success rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">New Transaction</button>
    
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#billmodal">Bill</a>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#expensemodal">Expense</a>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#chequemodal">Cheque</a>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#suppliercreditmodal">Supplier Credit</a>
                            </div>
                        </div>
                    </div>
                    <div id="table" class="table-editable pt-5">
                        <!-- Button trigger modal -->
                        <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                        <div class="float-left">
                            <select>
                                <option value="" disabled selected>Batch Actions</option>
                                <option>Print Transactions</option>
                                <option>Print Packing Slip</option>
                                <option>Send Transactions</option>
                                <option>Send Reminders</option>
                            </select>
                            <button type="button" class="btn btn-secondary rounded mb-1 py-0" data-toggle="modal" data-target="#FilterModal">
                            Filter
                            </button>
                            <div class="modal fade" id="FilterModal" tabindex="-1" role="dialog" aria-labelledby="FilterModalLabel" aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="FilterodalLabel">Filter</h5>
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
                        <div class="float-right p-0">
                            <li class="fa fa-print pl-2"><a href=""></a></li>
                            <li class="fa fa-save pl-2"><a href=""></a></li>
                            <li class="fa fa-cog pl-2"><a href=""></a></li>
                        </div>
                        <table id="expensetable" class="table table-bordered table-responsive-md table-striped text-center font14">
                            <tr>
                                <th class="text-center"><input type="checkbox" name=""></th>
                                <th class="text-center">DATE</th>
                                <th class="text-center">TYPE</th>
                                <th class="text-center">NO.</th>
                                <th class="text-center">PAYEE</th>
                                <th class="text-center">CATEGORY</th>
                                <th class="text-center">TOTAL</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="true"><input type="checkbox" name=""></td>
                                <td class="pt-3-half" contenteditable="true">7/26/2018</td>
                                <td class="pt-3-half" contenteditable="true">Cheque Expense</td>
                                <td class="pt-3-half" contenteditable="true">1001</td>
                                <td class="pt-3-half" contenteditable="true">test customer</td>
                                <td class="pt-3-half" contenteditable="true">
                                    <select>
                                        <option>Bad Debts</option>
                                    </select>
                                </td>
                                <td class="pt-3-half" contenteditable="true">PHP 2,000.00</td>
                                <td>
                                    <span class="table-add mb-3 mr-2"><a href="#!" class="text-info"><i aria-hidden="true">Receive Payment</i></a></span>
                                </td>
                            </tr>
                            
                            <!-- This is our clonable table line -->
                        </table>
                        <table id="expensetable" class="table table-bordered table-responsive-md table-striped text-center font14">
                            <tr>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <th class="pt-3-half" contenteditable="true">TOTAL: </th>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <th class="pt-3-half" contenteditable="true">PHP 2,000.00</th>
                                <td></td>
                            </tr>
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
    <!-- ======================================================================================================== SECOND TAB--> 
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="float-left">Suppliers</h3>
    
                    <div class="btn-group float-right mr-2 mb-3">
                        <button type="button" class="btn btn-success rounded-left" data-target="#supplierModal" data-toggle="modal">New Supplier</button>
                        <button type="button" class="btn btn-success dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu rounded-right">
                            <a class="dropdown-item" href="#">Import Supplier</a>
                        </div>
                    </div>
    
                    <div class="modal fade" id="supplierModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticModalLabel">Add New Supplier</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
    
                                    <div class="modal-body">
                                        <div class="col-md-6 p-0">
                                            <div class="col-md-6 p-0 pr-1">
                                                <p>First Name</p>
                                                <input type="text" name="" class="w-100">
                                            </div>
                                            <div class="col-md-6 p-0 pl-1">
                                                <p>Last Name</p>
                                            <input type="text" name="" class="w-100">
                                            </div>
    
                                            <div class="col-md-12 p-0">
                                                <p>Company</p>
                                                <input type="text" name="" class="w-100">
                                            </div>
    
                                            <div class="col-md-12 p-0">
                                                <p>Display name as</p>
                                                <input id="suppliername" type="text" name="" class="w-100">
                                            </div>
    
                                            <div class="col-md-12 p-0">
                                                <p>Address</p>
                                                <textarea rows="2" class="w-100" placeholder="Street"></textarea>
                                            </div>
    
                                            <div class="col-md-6 p-0 pr-1 pb-1">
                                                <input type="text" name="" placeholder="City/Town" class="w-100">
                                            </div>
                                            <div class="col-md-6 p-0 pl-1 pb-1">
                                                <input type="text" name="" placeholder="State/Province" class="w-100">
                                            </div>
                                            <div class="col-md-6 p-0 pr-1">
                                                <input type="text" name="" placeholder="Postal Code" class="w-100">
                                            </div>
                                            <div class="col-md-6 p-0 pl-1" >
                                                <input type="text" name="" placeholder="Country" class="w-100">
                                            </div>
    
                                            <div class="col-md-12 p-0">
                                                <p>Notes</p>
                                                <textarea rows="2" class="w-100"></textarea>
                                            </div>
    
                                            
                                        </div>
    
    
    
                                        <div class="col-md-6 p-0 pl-1">
                                            <div class="col-md-12 p-0">
                                                <p>Email</p>
                                                <input type="email" name="" class="w-100" placeholder="separate multiple emails with commas">
                                            </div>
    
                                            <div class="col-md-12 p-0">
                                                <div class="col-md-4 p-0 pr-1">
                                                    <p>Phone</p>
                                                    <input id="supplierphone" type="text" name="" class="w-100">
                                                </div>
                                                <div class="col-md-4 p-0 pr-1">
                                                    <p>Mobile</p>
                                                    <input type="text" name="" class="w-100">
                                                </div>
                                                <div class="col-md-4 p-0">
                                                    <p>Fax</p>
                                                    <input type="text" name="" class="w-100">
                                                </div>
                                            </div>
    
                                            <div class="col-md-12 p-0">
                                                <div class="col-md-4 p-0 pr-1">
                                                    <p>Other</p>
                                                    <input type="text" name="" class="w-100">
                                                </div>
                                                <div class="col-md-8 p-0">
                                                    <p>Website</p>
                                                    <input type="text" name="" class="w-100">
                                                </div>
                                            </div>
    
                                            <div class="col-md-12 p-0">
                                                <div class="col-md-6 p-0 pr-1">
                                                    <p>Billing rate (/hr)</p>
                                                    <input type="text" name="" class="w-100">
                                                </div>
    
                                                <div class="col-md-6 p-0">
                                                    <p>Terms</p>
                                                    <input type="text" name="" class="w-100">
                                                </div>
                                            </div>
    
                                            <div class="col-md-12 p-0">
                                                <div class="col-md-6 p-0 pr-1">
                                                    <p>Opening balance</p>
                                                    <input type="text" name="" class="w-100">
                                                </div>
    
                                                <div class="col-md-6 p-0">
                                                    <p>as of</p>
                                                    <input type="date" name="" class="w-100">
                                                </div>
                                            </div>
    
                                            <div class="col-md-12 p-0">
                                                <div class="col-md-6 p-0 pr-1">
                                                    <p>Account No. </p>
                                                    <input type="text" name="" class="w-100">
                                                </div>
    
                                                <div class="col-md-6 p-0">
                                                    <p>Business ID No. </p>
                                                    <input type="text" name="" class="w-100">
                                                </div>
                                            </div>
    
                                            <div class="col-md-12 p-0">
                                                <p>Attachments</p>
                                                <div class="input-group mb-3 p-0">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                                        <button id="supplieradd" type="button" class="btn btn-success rounded" data-dismiss="modal">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    <div class="col-md-12 text-white p-0 mb-5">
                        <div class="col-md-4 bg-blue pb-0">
                            <h3>PHP0</h3>
                            <p class="font14">0 PURCHASE ORDER</p>
                        </div>
                        <div class="col-md-2 bg-orange">
                            <h3>PHP0</h3>
                            <p class="font14">0 OVERDUE</p>
                        </div>
                        <div class="col-md-2 bg-secondary">
                            <h3>PHP0</h3>
                            <p class="font14">0 OPEN</p>
                        </div>
                        <div class="col-md-4 bg-ltgreen">
                            <h3>PHP0</h3>
                            <p class="font14">0 PAID LAST 30 DAYS</p>
                        </div>
                    </div>
    
                    <div id="table" class="table-editable">
                        <!-- Button trigger modal -->
                        <div class="mb-0">
                            <div class="float-left">
                                <select>
                                    <option value="" disabled selected>Batch Actions</option>
                                    <option>Print Transactions</option>
                                    <option>Print Packing Slip</option>
                                    <option>Send Transactions</option>
                                    <option>Send Reminders</option>
                                </select>
                            </div>
                            <div class="d-inline-flex float-right">
                                <li class="fa fa-print pl-2"><a href=""></a></li>
                                <li class="fa fa-save pl-2"><a href=""></a></li>
                                <li class="fa fa-cog pl-2"><a href=""></a></li>
                            </div>
                        </div>
                        <table id="suppliertable" class="table table-bordered table-responsive-md table-striped text-center font14">
                            <tr>
                                <th class="text-center"><input type="checkbox" name=""></th>
                                <th class="text-center">SUPPLIER/COMPANY</th>
                                <th class="text-center">PHONE</th>
                                <th class="text-center">EMAIL</th>
                                <th class="text-center">OPEN BALANCE</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="false"><input type="checkbox" name=""></td>
                                <td class="pt-3-half" contenteditable="false">test SUPPLIER</td>
                                <td class="pt-3-half" contenteditable="false">0912345678</td>
                                <td class="pt-3-half" contenteditable="false">mail@mail.com</td>
                                <td class="pt-3-half" contenteditable="false">PHP 800.00</td>
                                <td>
                                    <span class="table-add mb-3 mr-2">
                                        <a href="#!" class="text-info"><i aria-hidden="true">Receive Payment</i></a>
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
                                        </select>
                                    </span>
                                </td>
                            </tr>
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
                                    <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                                    <button id="supplieradd" type="button" class="btn btn-success rounded">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of card -->
        </div>
        </div>
        </div>
@endsection