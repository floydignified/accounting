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
                    <p class="text-dark">Sample Business</p>
                    <p class="text-dark">Sample Legal Bane</p>
                    <p class="text-dark">99-1111110</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark">Sole Proprietor</p>
                    <p class="text-dark">Sample Industry</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark">john.doe@mail.com</p>
                    <p class="text-dark">john.doe@mail.com</p>
                    <p class="text-dark">0912345678</p>
                    <p class="text-dark">johndoe.com</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark">sample address</p>
                    <p class="text-dark">sample address</p>
                    <p class="text-dark">sample address</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                <button class="btn btn-success rounded">Save</button>
            </div>
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
                    <p class="text-dark font-weight-bold">Net30</p>
                    <p class="text-dark font-weight-bold">None</p>
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">Off</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark">Track inventory quantity on hand s</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <p class="text-dark font-weight-bold">On</p>
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">On</p>
                    <p class="text-dark font-weight-bold">On</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Messages</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Default email message sent with sales forms</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Reminders</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Default email message sent with reminders</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Online Delivery</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Email options for all sales forms</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Statements</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Show ageing table at bottom of statements</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <p class="text-dark font-weight-bold">On</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="float-right mb-5">
                <button class="btn btn-success rounded">Save</button>
            </div>
        </div>
        <!-- =============================================================================================FOURTH TAB-->
        <div class="tab-pane fade show" id="extra" role="tabpanel" aria-labelledby="extra-tab">
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
                    <p class="text-dark font-weight-bold">On</p>
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">Off</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark font-weight-bold">Off</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3  border border-bottom border-light"></div>
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Messages</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">Default email message sent with purchase orders</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="float-right mb-5">
                <button class="btn btn-success rounded">Save</button>
            </div>
        </div>
        <!--=============================================================================================FIFTH TAB-->
        <div class="tab-pane fade show" id="advance" role="tabpanel" aria-labelledby="advance-tab">
            <div class="col-md-12 mt-3">
                <div class="col-md-3">
                    <p class="text-dark">Accounting</p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark">First month of financial year</p>
                    <p class="text-dark">First month of tax year</p>
                    <p class="text-dark">Accounting method</p>
                    <p class="text-dark">Close the books</p>
                </div>
                <div class="col-md-4 font-weight-bold">
                    <p class="text-dark font-weight-bold">January</p>
                    <p class="text-dark font-weight-bold">Same as financial year</p>
                    <p class="text-dark font-weight-bold">Accrual</p>
                    <p class="text-dark font-weight-bold">Off</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark font-weight-bold">Sole Proprietor</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark font-weight-bold">Off</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">Off</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark font-weight-bold">On</p>
                    <p class="text-dark font-weight-bold">On</p>
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">On</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">On</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark font-weight-bold">English</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark font-weight-bold">Philippine Peso</p>
                    <p class="text-dark font-weight-bold">Off</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
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
                    <p class="text-dark font-weight-bold">MM/dd/yyyy</p>
                    <p class="text-dark font-weight-bold">123.456.00</p>
                    <p class="text-dark font-weight-bold">On</p>
                    <p class="text-dark font-weight-bold">Off</p>
                    <p class="text-dark font-weight-bold">3 hours</p>
                </div>
                <div class="col-md-1">
                    <a href="" class="fa fa-pencil"></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-4"></div>
            <div class="float-right mb-5">
                <button class="btn btn-success rounded">Save</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection