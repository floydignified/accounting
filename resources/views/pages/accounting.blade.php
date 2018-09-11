@extends('layout.initial')


@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Accounting</h1>
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
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Chart of Accounts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Reconcile</a>
        </li>
    </ul>
    <div class="tab-content pl-3 p-1" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-md-12 mb-4 p-0">
                <h3 class="float-left">Chart of Accounts</h3>
                <div class="d-inline-flex float-right">
                    <div class="btn-group px-2">
                        <button type="button" class="btn bg-success rounded-left text-white" data-toggle="modal" data-target="#chartofaccountsmodal">New</button>
                        <button type="button" class="btn bg-success rounded-right text-white dropdown-toggle px-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">New</a>
                            <a class="dropdown-item" href="">Import</a>
                        </div>
                    </div>
                    <button class="btn btn-outline-secondary bg-white text-secondary rounded mr-2">Run Report</button>
                </div>
            </div>
            <div class="table-editable">
                <!-- Button trigger modal -->
                <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                <div class="col-md-12 p-0 mb-2">
                    <div class="float-left">
                        <input type="text" name="" placeholder="Filter by name">
                    </div>
                    <div class="d-inline-flex float-right py-1">
                        <li class="fa fa-pencil pl-2"><a href=""></a></li>
                        <li class="fa fa-print pl-2"><a href=""></a></li>
                        <li class="fa fa-cog pl-2"><a href=""></a></li>
                    </div>
                </div>
                <table id="coatable" class="table table-bordered table-responsive-md text-left font14">
                    <tr class="bg-ltgrey">
                        <th class="text-left">NAME</th>
                        <th class="text-left">TYPE</th>
                        <th class="text-left">DETAIL TYPE</th>
                        <th class="text-left">BALANCE</th>
                        <th class="text-center">BANK BALANCE</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Cash and cash equivalents</td>
                        <td class="pt-3-half" contenteditable="false">Cash and cash equivalents</td>
                        <td class="pt-3-half" contenteditable="false">Cash and cash equivalents</td>
                        <td class="pt-3-half" contenteditable="false">PHP 2,000.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 2,000.00</td>
                        <td class="text-center">
                            <span class="table-add mb-3 mr-2">
                                <div class="btn-group">
                                    <button type="button" class="btn bg-transparent text-info">Accounts History</button>
                                    <button type="button" class="btn bg-transparent dropdown-toggle px-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="">Connect Bank</a>
                                        <a class="dropdown-item" href="">Edit</a>
                                        <a class="dropdown-item" href="">Delete</a>
                                        <a class="dropdown-item" href="">Run Report</a>
                                    </div>
                                </div>
                            </span>
                        </td>
                    </tr>
                    <!-- This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Accounts Receivable (A/R)</td>
                        <td class="pt-3-half" contenteditable="false">Accounts Receivable (A/R)</td>
                        <td class="pt-3-half" contenteditable="false">Accounts Receivable (A/R)</td>
                        <td class="pt-3-half" contenteditable="false">PHP 2,000.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 2,000.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Allowance for bad debt</td>
                        <td class="pt-3-half" contenteditable="false">Current assets</td>
                        <td class="pt-3-half" contenteditable="false">Allowance for bad debts</td>
                        <td class="pt-3-half" contenteditable="false">PHP 2,000.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 2,000.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Available for sale assets (short-term)</td>
                        <td class="pt-3-half" contenteditable="false">Current assets</td>
                        <td class="pt-3-half" contenteditable="false">Assets available for sale</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Inventory</td>
                        <td class="pt-3-half" contenteditable="false">Current assets</td>
                        <td class="pt-3-half" contenteditable="false">Inventory</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Inventory Asset</td>
                        <td class="pt-3-half" contenteditable="false">Current assets</td>
                        <td class="pt-3-half" contenteditable="false">Inventory</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Prepaid expenses</td>
                        <td class="pt-3-half" contenteditable="false">Current assets</td>
                        <td class="pt-3-half" contenteditable="false">Prepaid expenses</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Uncategorised Asset</td>
                        <td class="pt-3-half" contenteditable="false">Current assets</td>
                        <td class="pt-3-half" contenteditable="false">Other current assets</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Accumulated depreciation on property, plant and equipment</td>
                        <td class="pt-3-half" contenteditable="false">Fixed assets</td>
                        <td class="pt-3-half" contenteditable="false">Accumulated depreciation on property, plant and equipment</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Property, plant and equipment</td>
                        <td class="pt-3-half" contenteditable="false">Fixed assets</td>
                        <td class="pt-3-half" contenteditable="false">Land</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Assets held for sale</td>
                        <td class="pt-3-half" contenteditable="false">Non-current assets</td>
                        <td class="pt-3-half" contenteditable="false">Assets held for sale</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Deferred tax assets</td>
                        <td class="pt-3-half" contenteditable="false">Non-current assets</td>
                        <td class="pt-3-half" contenteditable="false">Deferred tax</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Goodwill</td>
                        <td class="pt-3-half" contenteditable="false">Non-current assets</td>
                        <td class="pt-3-half" contenteditable="false">Goodwill</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Intangibles</td>
                        <td class="pt-3-half" contenteditable="false">Non-current assets</td>
                        <td class="pt-3-half" contenteditable="false">Intangible Assets</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Long-Term Investments</td>
                        <td class="pt-3-half" contenteditable="false">Non-current assets</td>
                        <td class="pt-3-half" contenteditable="false">Long-term investments</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Accounts Payable (A/P)</td>
                        <td class="pt-3-half" contenteditable="false">Accounts Payable (A/P)</td>
                        <td class="pt-3-half" contenteditable="false">Accounts Payable (A/P)</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Accrued liabilities</td>
                        <td class="pt-3-half" contenteditable="false">Current liabilities</td>
                        <td class="pt-3-half" contenteditable="false">Accrued liabilities</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Dividends payable</td>
                        <td class="pt-3-half" contenteditable="false">Current liabilities</td>
                        <td class="pt-3-half" contenteditable="false">Dividends payable</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Income tax payable</td>
                        <td class="pt-3-half" contenteditable="false">Current liabilities</td>
                        <td class="pt-3-half" contenteditable="false">Income tax payable</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Payroll Clearing</td>
                        <td class="pt-3-half" contenteditable="false">Current liabilities</td>
                        <td class="pt-3-half" contenteditable="false">Payroll Clearing</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Short-term debit</td>
                        <td class="pt-3-half" contenteditable="false">Current liabilities</td>
                        <td class="pt-3-half" contenteditable="false">Other current liabilities</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Accrued holiday payable</td>
                        <td class="pt-3-half" contenteditable="false">Non-current liabilities</td>
                        <td class="pt-3-half" contenteditable="false">Accrued holiday payable</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Accrued non-current liabilities</td>
                        <td class="pt-3-half" contenteditable="false">Non-current liabilities</td>
                        <td class="pt-3-half" contenteditable="false">Accrued holiday payable</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Liabilities related to assets held for sale</td>
                        <td class="pt-3-half" contenteditable="false">Non-current liabilities</td>
                        <td class="pt-3-half" contenteditable="false">Liabilities related to assets held for sale</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Long-term debt</td>
                        <td class="pt-3-half" contenteditable="false">Non-current liabilities</td>
                        <td class="pt-3-half" contenteditable="false">Long-term debt</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Dividend disbursed</td>
                        <td class="pt-3-half" contenteditable="false">Owner's equity</td>
                        <td class="pt-3-half" contenteditable="false">Dividend disbursed</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Equity in earnings of subsidiaries</td>
                        <td class="pt-3-half" contenteditable="false">Owner's equity</td>
                        <td class="pt-3-half" contenteditable="false">Equity in earnings of subsidiaries</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Opening Balance Equity</td>
                        <td class="pt-3-half" contenteditable="false">Owner's equity</td>
                        <td class="pt-3-half" contenteditable="false">Opening Balance Equity</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Other comprehensive income</td>
                        <td class="pt-3-half" contenteditable="false">Owner's equity</td>
                        <td class="pt-3-half" contenteditable="false">Other comprehensive income</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Retained Earnings</td>
                        <td class="pt-3-half" contenteditable="false">Owner's equity</td>
                        <td class="pt-3-half" contenteditable="false">Retained Earnings</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Share capital</td>
                        <td class="pt-3-half" contenteditable="false">Owner's equity</td>
                        <td class="pt-3-half" contenteditable="false">Share capital</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Billable Expense Income</td>
                        <td class="pt-3-half" contenteditable="false">Income</td>
                        <td class="pt-3-half" contenteditable="false">Billable Expense Income</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Revenue - General</td>
                        <td class="pt-3-half" contenteditable="false">Income</td>
                        <td class="pt-3-half" contenteditable="false">Revenue - General</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Sales</td>
                        <td class="pt-3-half" contenteditable="false">Income</td>
                        <td class="pt-3-half" contenteditable="false">Sales of Product Income</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Sales - retail</td>
                        <td class="pt-3-half" contenteditable="false">Income</td>
                        <td class="pt-3-half" contenteditable="false">Sales - retail</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Sales - wholesale</td>
                        <td class="pt-3-half" contenteditable="false">Income</td>
                        <td class="pt-3-half" contenteditable="false">Sales - wholesale</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Sales of Product Income</td>
                        <td class="pt-3-half" contenteditable="false">Income</td>
                        <td class="pt-3-half" contenteditable="false">Sales of Product Income</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Unapplied Cash Payment Income</td>
                        <td class="pt-3-half" contenteditable="false">Income</td>
                        <td class="pt-3-half" contenteditable="false">Unapplied Cash Payment Income</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Uncategorised Income</td>
                        <td class="pt-3-half" contenteditable="false">Income</td>
                        <td class="pt-3-half" contenteditable="false">Uncategorised Income</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Change in inventory - COS</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">Cost of Sales</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">Supplies and materials - COS</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Direct labour - COS</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Discounts given - COS</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Freight and delivery - COS</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">Supplies and materials - COS</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Materials - COS</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">Cost of Sales</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Other - COS</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Overhead - COS</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Subcontractors - COS</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Amortisation expense</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Cost of sales</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Bad debts</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Bad debts</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Bank charges</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Bank charges</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Commissions and fees</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Commissions and fees</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Dues and subscriptions</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Dues and subscriptions</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Equipment rental</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Equipment rental</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Income tax expense</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Income tax expense</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Insurance - Disability</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Insurance</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Insurance - General</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Insurance</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Insurance - Liability</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Insurance</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Interest expense</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Interest paid</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Legal and professional fees</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Legal and professional fees</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Loss on discontinued operations, net of tax</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Loss on discontinued operations, net of tax</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Management compensation</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Management compensation</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Meals and entertainment</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Meals and entertainment</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Office expenses</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Office/General Administrative Expenses</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Other general and administrative expenses</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Office/General Administrative Expenses</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Other selling expenses</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Other selling expenses</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Other Types of Expenses-Advertising Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Advertising/Promotional</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Payroll Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Office/General Administrative Expenses</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Purchases</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Supplies and materials</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Rent or lease payments</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Rent or Lease of Buildings</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Repairs and Maintenance</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Repair and maintenance</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Shipping and delivery expense</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Shipping and delivery expense</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Stationery and printing</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Office/General Administrative Expenses</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Supplies</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Supplies and materials</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Travel expenses - general and admin expenses</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Travel expenses - general and admin expenses</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Travel expenses - selling expenses</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Travel expenses - selling expenses</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Uncategorised Expense</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Other Miscellaneous Service Cost</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Utilities</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Utilities</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Wage expenses</td>
                        <td class="pt-3-half" contenteditable="false">Expenses</td>
                        <td class="pt-3-half" contenteditable="false">Payroll Expenses</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Dividend income</td>
                        <td class="pt-3-half" contenteditable="false">Other income</td>
                        <td class="pt-3-half" contenteditable="false">Dividend income</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Interest income</td>
                        <td class="pt-3-half" contenteditable="false">Other income</td>
                        <td class="pt-3-half" contenteditable="false">Interest income</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Loss on disposal of assets</td>
                        <td class="pt-3-half" contenteditable="false">Other income</td>
                        <td class="pt-3-half" contenteditable="false">Loss on disposal of assets</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Other operating income (expenses)</td>
                        <td class="pt-3-half" contenteditable="false">Other income</td>
                        <td class="pt-3-half" contenteditable="false">Other operating income</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Unrealised loss on securities, net of tax</td>
                        <td class="pt-3-half" contenteditable="false">Other income</td>
                        <td class="pt-3-half" contenteditable="false">Unrealised loss on securities, net of tax</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Reconciliation Discrepancies</td>
                        <td class="pt-3-half" contenteditable="false">Other income</td>
                        <td class="pt-3-half" contenteditable="false">Other Expense</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td class="pt-3-half" contenteditable="false">PHP 0.00</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Accounts History</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line -->
                </table>
                <div class="pagination float-right">
                    <a class="pl-2 active" href="#">&laquo;First</a>
                    <a class="pl-2" href="#">Previous</a>
                    <a class="pl-2">1-1 of 1</a>
                    <a class="pl-2" href="#">Next</a>
                    <a class="pl-2" href="#">Last&raquo;</a>
                </div>
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
                <div class="d-inline-flex float-right">
                    <button class="btn btn-success rounded"><a href="invoice.html" class="text-white" data-toggle="modal" data-target="#invoicemodal"> New Invoice</a></button>
                </div>
                <table class="table table-bordered table-responsive-md table-striped text-center font14">
                    <tr>
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
                    </tr>
                    <tr>
                        <td class="pt-3-half" contenteditable="true"><input type="checkbox" name=""></td>
                        <td class="pt-3-half" contenteditable="true">7/26/2018</td>
                        <td class="pt-3-half" contenteditable="true">Invoice</td>
                        <td class="pt-3-half" contenteditable="true">1001</td>
                        <td class="pt-3-half" contenteditable="true">test customer</td>
                        <td class="pt-3-half" contenteditable="true">8/1/2018</td>
                        <td class="pt-3-half" contenteditable="true">PHP 2,000.00</td>
                        <td class="pt-3-half" contenteditable="true">PHP 2,000.00</td>
                        <td class="pt-3-half" contenteditable="true">Open</td>
                        <td>
                            <span class="table-add mb-3 mr-2">
                                <a href="#!" class="text-info"><i aria-hidden="true">Receive Payment</i></a>
                                <select>
                                    <option></option>
                                    <option>Connect Bank</option>
                                    <option>Edit</option>
                                    <option>Delete</option>
                                    <option>Run Report</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    This is our clonable table line
                </table>
                <!-- <div class="pagination float-right">
                    <a class="pl-2 active" href="#">&laquo;First</a>
                    <a class="pl-2" href="#">Previous</a>
                    <a class="pl-2">1-1 of 1</a>
                    <a class="pl-2" href="#">Next</a>
                    <a class="pl-2" href="#">Last&raquo;</a>
                    </div> -->
            </div>
        </div>
    </div>
</div>

@endsection