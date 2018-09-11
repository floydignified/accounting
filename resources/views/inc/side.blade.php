<!-- Left Panel -->


<nav class="navbar navbar-expand-sm navbar-default">

    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <!-- <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a> -->
        <!-- <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a> -->
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            
            <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
            
            <li><a href="/reports"> <i class="menu-icon ti-files width30"></i>Reports</a></li>
            

            <h3 class="menu-title">Create</h3><!-- /.menu-title -->

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home width30"></i>Customers</a>
                <ul class="sub-menu children dropdown-menu" style="right:-190px;">
                    <li><i class="menu-icon fa fa-gears pasdding0"></i><a href="/invoice" data-toggle="modal" data-target="#invoicemodal">Invoice</a></li>
                    <li><i class="menu-icon fa fa-files-o"></i><a href="/receivepayment" data-toggle="modal" data-target="#receivepaymentmodal">Receive Payment</a></li>
                    <li><i class="menu-icon fa fa-bar-chart-o"></i><a href="/estimate" data-toggle="modal" data-target="#estimatemodal">Estimate</a></li>
                    <li><i class="menu-icon fa fa-bar-chart-o "></i><a href="/creditnotice" data-toggle="modal" data-target="#creditnotemodal">Credit Notice</a></li>
                    <li><i class="menu-icon fa fa-bar-chart-o "></i><a href="/salesreceipt" data-toggle="modal" data-target="#salesreceiptmodal">Sales Receipt</a></li>
                    <li><i class="menu-icon fa fa-bar-chart-o "></i><a href="/refundreceipt" data-toggle="modal" data-target="#refundreceiptmodal">Refund Receipt</a></li>
                    <li><i class="menu-icon fa fa-bar-chart-o "></i><a href="/delayedcredit" data-toggle="modal" data-target="#delayedcreditmodal">Delayed Credit</a></li>
                    <li><i class="menu-icon fa fa-bar-chart-o "></i><a href="/delayedcharge" data-toggle="modal" data-target="#delayedchargemodal">Delayed Charge</a></li>
                </ul>
            </li>
            
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list width30"></i>Suppliers</a>
                <ul class="sub-menu children dropdown-menu" style="right:-190px;">
                    <li><i class="menu-icon fa fa-list-alt "></i><a href="/expense" data-toggle="modal" data-target="#expensemodal">Expense</a></li>
                    <li><i class="menu-icon fa fa-th-large "></i><a href="/cheque" data-toggle="modal" data-target="#chequemodal">Cheque</a></li>
                    <li><i class="menu-icon fa fa-file-text-o "></i><a href="/bill" data-toggle="modal" data-target="#billmodal">Bill</a></li>
                    <li><i class="menu-icon fa fa-paperclip "></i><a href="/paybills" data-toggle="modal" data-target="#paybillsmodal">Pay Bills</a></li>
                    <li><i class="menu-icon fa fa-th-large "></i><a href="/purchaseorder" data-toggle="modal" data-target="#purchaseordermodal">Purchase Order</a></li>
                    <li><i class="menu-icon fa fa-file-text-o "></i><a href="/suppliercredit" data-toggle="modal" data-target="#suppliercreditmodal">Supplier Credit</a></li>
                    <li><i class="menu-icon fa fa-paperclip "></i><a href="/creditcardcredit" data-toggle="modal" data-target="#creditcardcreditmodal">Credit Card Credit</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-wrench width30"></i>Other</a>
                <ul class="sub-menu children dropdown-menu" style="right:-190px;">
                    <li><i class="menu-icon fa fa-download"></i><a href="/bankdeposit" data-toggle="modal" data-target="#bankdepositmodal">Bank Deposit</a></li>
                    <li><i class="menu-icon fa fa-upload"></i><a href="/transfer" data-toggle="modal" data-target="#transfermodal">Transfer</a></li>
                    
                    <li><i class="menu-icon fa ti-map"></i><a href="/statements">Statements</a></li>
                    <li><i class="menu-icon fa fa-map-o"></i><a href="/investqtyadj" data-toggle="modal" data-target="#investqtyadjmodal">Invest Qty Adjustment</a></li>
                </ul>
            </li>
            
            <h3 class="menu-title">Settings</h3><!-- /.menu-title -->

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home width30"></i>Your Company</a>
                <ul class="sub-menu children dropdown-menu" style="right:-190px;">
                    <li><i class="menu-icon fa fa-gears width30"></i><a href="/accountsandsettings">Account and Settings</a></li>
                    <li><i class="menu-icon fa fa-files-o"></i><a href="/customformstyles">Custom Form Styles</a></li>
                   
                </ul>
            </li>
            
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list width30"></i>Lists</a>
                <ul class="sub-menu children dropdown-menu" style="right:-190px;">
                    <li><i class="menu-icon fa fa-list-alt padding0"></i><a href="/alllists">All Lists</a></li>
                    <li><i class="menu-icon fa fa-th-large padding0"></i><a href="/sales">Products and Services</a></li>
                    <li><i class="menu-icon fa fa-file-text-o "></i><a href="/recurringtransactions">Recurring Transactions</a></li>
                    <li><i class="menu-icon fa fa-paperclip "></i><a href="/attachments">Attachments</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-wrench width30"></i>Tools</a>
                <ul class="sub-menu children dropdown-menu" style="right:-190px;"">
                    <li><i class="menu-icon fa fa-download"></i><a href="/importdata">Import Data</a></li>
                    <li><i class="menu-icon fa fa-upload"></i><a href="/exportdata">Export Data</a></li>
                    
                    <li><i class="menu-icon fa ti-map"></i><a href="/budgeting"  data-toggle="modal" data-target="#budgetingmodal">Budgeting</a></li>
                    <li><i class="menu-icon fa fa-map-o"></i><a href="/auditlog">Audit Log</a></li>
                </ul>
            </li>
        </ul>
    </div>
    
    <!-- /.navbar-collapse -->
</nav>


<!-- Left Panel -->