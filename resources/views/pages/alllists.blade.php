@extends('layout.initial')


@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>All Lists</h1>
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
    <div class="col-md-12 font14">
        <div class="col-md-6 p-2">
            <h5 class="text-info">Chart of Accounts</h5>
            <p>Displays your accounts. Balance sheet accounts track your assets and liabilities, and income and expense accounts categorise your transactions. From here, you can add or edit accounts.</p>
        </div>
        <div class="col-md-6 p-2">
            <h5 class="text-info">Payment Methods</h5>
            <p>Displays Cash, Cheque, and any other ways you categorise payments you receive from customers. That way, you can print deposit slips when you deposit the payments you have received.</p>
        </div>
        <div class="col-md-6 p-2">
            <h5 class="text-info">Recurring Transactions</h5>
            <p>Displays a list of transactions that have been saved for reuse. From here, you can schedule transactions to occur either automatically or with reminders. You can also save unscheduled transactions to use at any time.</p>
        </div>
        <div class="col-md-6 p-2">
            <h5 class="text-info">Terms</h5>
            <p>Displays the list of terms that determine the due dates for payments from customers, or payments to suppliers. Terms can also specify discounts for early payment. From here, you can add or edit terms.</p>
        </div>
        <div class="col-md-6 p-2">
            <h5 class="text-info">Products and Services</h5>
            <p>Displays the products and services you sell. From here, you can edit information about a product or service, such as its description, or the rate you charge.</p>
        </div>
        <div class="col-md-6 p-2">
            <h5 class="text-info">Attachments</h5>
            <p>Displays the list of all attachments uploaded. From here you can add, edit, download, and export your attachments. You can also see all transactions linked to a particular attachment.</p>
        </div>
        <div class="col-md-6 p-2">
            <h5 class="text-info">Product Categories</h5>
            <p>A means of classifying items that you sell to customers. Provide a way for you to quickly organise what you sell, and save you time when completing sales transaction forms.</p>
        </div>
        <div class="col-md-6 p-2">
            <h5 class="text-info">Custom Form Styles</h5>
            <p>Customise your sales form designs, set defaults, and manage multiple templates.</p>
        </div>
    </div>
</div>
@endsection