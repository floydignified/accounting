@extends('layout.initial')


@section('content')
<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Reports</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Recommended</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Frequently Run</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">My Custom Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="extra-tab" data-toggle="tab" href="#extra" role="tab" aria-controls="extra" aria-selected="false">Management Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="bonus-tab" data-toggle="tab" href="#bonus" role="tab" aria-controls="bonus" aria-selected="false">All Reports</a>
                </li>
            </ul>
            <div class="tab-content pl-3 p-1" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3>Recommended Reports</h3>
                    <div class="col-md-12">
                        <div class="col-md-4 mt-2">
                            <h5>Company Snapshot</h5>
                            <p>Displays your income and expenses in year-over-year comparisons using pie charts and bar graphs.</p>
                            <p class="text-info">Run</p>
                        </div>
                        <div class="col-md-4 mt-2">
                            <h5>Balance Sheet</h5>
                            <p>Lists what you own (assets), what your debts are (liabilities), and what you’ve invested in your company (equity).</p>
                            <div class="d-inline-flex">
                                <p class="text-info">Run</p>
                                <p class="px-2"> | </p>
                                <p class="text-info">Customise</p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <h5>Budget vs. Actuals</h5>
                            <p>Compares your budgeted income and expenses to the actual amounts so you can tell whether you’re over- or under budget.</p>
                            <div class="d-inline-flex">
                                <p class="text-info">Run</p>
                                <p class="px-2"> | </p>
                                <p class="text-info">Customise</p>
                            </div>
                        </div>
                        <!-- Second row -->
                        <div class="col-md-4 mt-2">
                            <h5>Profit and Loss</h5>
                            <p>Shows money you earned (income) and money you spent (expenses) so you can see how profitable you are. Also called an income statement.</p>
                            <div class="d-inline-flex">
                                <p class="text-info">Run</p>
                                <p class="px-2"> | </p>
                                <p class="text-info">Customise</p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <h5>A/R Ageing Summary</h5>
                            <p>Shows unpaid invoices for the current period and for the last 30, 60 and 90+ days so you can see how long they’ve been open (outstanding).</p>
                            <div class="d-inline-flex">
                                <p class="text-info">Run</p>
                                <p class="px-2"> | </p>
                                <p class="text-info">Customise</p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <h5>Expenses by Supplier Summary</h5>
                            <p>This report shows your total expenses for each supplier.</p>
                            <div class="d-inline-flex">
                                <p class="text-info">Run</p>
                                <p class="px-2"> | </p>
                                <p class="text-info">Customise</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- Third Row -->
                        <div class="col-md-4 mt-2">
                            <h5>A/R Ageing Summary</h5>
                            <p>Shows unpaid bills for the current period and for the last 30, 60 and 90+ days so you can see how long they’ve been open (outstanding).</p>
                            <div class="d-inline-flex">
                                <p class="text-info">Run</p>
                                <p class="px-2"> | </p>
                                <p class="text-info">Customise</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================================================================================== SECOND TAB--> 
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- <h3>Sales Transactions</h3> -->
                    <h3>Frequently Run Reports</h3>
                    <div class="col-md-12">
                        <div class="col-md-4 mt-2">
                            <h5>Company Snapshot</h5>
                            <p>Displays your income and expenses in year-over-year comparisons using pie charts and bar graphs.</p>
                            <p class="text-info">Run</p>
                        </div>
                        <div class="col-md-4 mt-2">
                            <h5>Balance Sheet</h5>
                            <p>Lists what you own (assets), what your debts are (liabilities), and what you’ve invested in your company (equity).</p>
                            <div class="d-inline-flex">
                                <p class="text-info">Run</p>
                                <p class="px-2"> | </p>
                                <p class="text-info">Customise</p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <h5>Budget vs. Actuals</h5>
                            <p>Compares your budgeted income and expenses to the actual amounts so you can tell whether you’re over- or under budget.</p>
                            <div class="d-inline-flex">
                                <p class="text-info">Run</p>
                                <p class="px-2"> | </p>
                                <p class="text-info">Customise</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =============================================================================================================================THIRD TAB -->
                <div class="tab-pane fade show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <h3>My Custom Reports</h3>
                    <div id="table" class="table-editable mt-2">
                        <!-- Button trigger modal -->
                        <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                        <table class="table table-bordered table-responsive-md table-striped text-center font14">
                            <tr>
                                <th class="text-center">NAME</th>
                                <th class="text-center">CREATED</th>
                                <th class="text-center">DATE RANGE</th>
                                <th class="text-center">EMAIL</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="true">Sales Performance</td>
                                <td class="pt-3-half" contenteditable="true">Quickbooks</td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td>
                                    <span class="table-add mb-3 mr-2"><a href="#!" class="text-info"><i aria-hidden="true">View</i></a></span>
                                    <select>
                                        <option></option>
                                        <option>Edit</option>
                                        <option>Send</option>
                                        <option>Export as PDF</option>
                                        <option>Export as DOCX</option>
                                        <option>Copy</option>
                                    </select>
                                </td>
                            </tr>
                            <!-- This is our clonable table line -->
                        </table>
                    </div>
                </div>
                <!-- =============================================================================================================================Fourth TAB -->
                <div class="tab-pane fade show" id="extra" role="tabpanel" aria-labelledby="extra-tab">
                    <h3>Management Reports</h3>
                    <div id="table" class="table-editable">
                        <!-- Button trigger modal -->
                        <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                        <table class="table table-bordered table-responsive-md table-striped text-center font14">
                            <tr>
                                <th class="text-center">NAME</th>
                                <th class="text-center">CREATED BY</th>
                                <th class="text-center">LAST MODIFIED</th>
                                <th class="text-center">REPORT PERIOD</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="true">Sales Performance</td>
                                <td class="pt-3-half" contenteditable="true">Quickbooks</td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true">
                                    <select>
                                        <option>All Dates</option>
                                        <option>Custom</option>
                                        <option>Today</option>
                                        <option>This Week</option>
                                        <option>This Week-to-Date</option>
                                        <option>This Month</option>
                                        <option>This Month-to-Date</option>
                                        <option>This Quarter</option>
                                        <option>This Quarter-to-Date</option>
                                        <option>This Year</option>
                                        <option>This Year-to-Date</option>
                                        <option>This Yeat-to-last-month</option>
                                        <option>Yesterday</option>
                                        <option>Recent</option>
                                        <option>Last Week</option>
                                        <option>Last Week-to-Date</option>
                                        <option>Last Month</option>
                                        <option>Last Quarter</option>
                                        <option>Last Quarter-to-Date</option>
                                        <option>Last Year</option>
                                        <option>Last Year-to-Date</option>
                                        <option>Since 30 Days Ago</option>
                                        <option>Since 60 Days Ago</option>
                                        <option>Since 90 Days Ago</option>
                                        <option>Since 365 Days Ago</option>
                                        <option>Next Week</option>
                                        <option>Next 4 Weeks</option>
                                        <option>Next Month</option>
                                        <option>Next Quarter</option>
                                        <option>Next Year</option>
                                    </select>
                                </td>
                                <td>
                                    <span class="table-add mb-3 mr-2"><a href="#!" class="text-info"><i aria-hidden="true">View</i></a></span>
                                    <select>
                                        <option></option>
                                        <option>Edit</option>
                                        <option>Send</option>
                                        <option>Export as PDF</option>
                                        <option>Export as DOCX</option>
                                        <option>Copy</option>
                                    </select>
                                </td>
                            </tr>
                            <!-- This is our clonable table line -->
                        </table>
                    </div>
                </div>
                <!-- =============================================================================================================================Fourth TAB -->
                <div class="tab-pane fade " id="bonus" role="tabpanel" aria-labelledby="bonus-tab">
                    <h3>All Reports</h3>
                    <div class="col-md-12">
                        <div class="col-md-6 p-2">
                            <h5>Business Overview</h5>
                            <p>These reports show different perspectives of how your business is doing.</p>
                        </div>
                        <div class="col-md-6 p-2">
                            <h5>Review Sales</h5>
                            <p>These reports group and total sales in different ways to help analyse your sales to see how you’re doing and where you make your money.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6 p-2">
                            <h5>Manage Accounts Receivable</h5>
                            <p>These reports let you see who owes you money and how much they owe you so you can get paid.</p>
                        </div>
                        <div class="col-md-6 p-2">
                            <h5>Review Expenses and Purchases</h5>
                            <p>These reports total your expenses and purchases and group them in different ways to help you understand what you spend.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6 p-2">
                            <h5>Manage Accounts Payable</h5>
                            <p>These reports show what you owe and when payments are due so you can take advantage of the time you have to pay bills but still make payments on time.</p>
                        </div>
                        <div class="col-md-6 p-2">
                            <h5>Accountant Reports</h5>
                            <p>These are reports accountants typically use to drill down into your business details and prepare your tax returns.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6 p-2">
                            <h5>Manage Employees</h5>
                            <p>These reports help you manage employee activities and payroll.</p>
                        </div>
                        <div class="col-md-6 p-2">
                            <h5>Manage Products and Inventory</h5>
                            <p>These reports will help you understand how much inventory you have and how much you are paying and making for each of your inventory items.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection