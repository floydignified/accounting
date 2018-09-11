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
<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Invoices</strong>
                        </div>
                        <div class="card-body">
                            <div class="d-inline-block w-100">
                                <p class="float-left">PHP 2,000.00 UNPAID</p>
                                <p class="float-right">LAST 365 DAYS</p>
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="float-left padding0">
                                    <p class="m-0">PHP 0.00</p>
                                    <p>OVERDUE</p>
                                </div>
                                <div class="float-right">
                                    <p class="m-0">PHP 2,000.00</p>
                                    <p>NOT YET DUE</p>
                                </div>
                            </div>
                            <div class="progress mb-3 w-100">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-inline-block w-100">
                                <p class="float-left">PHP 2,000.00 UNPAID</p>
                                <p class="float-right">LAST 365 DAYS</p>
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="float-left padding0">
                                    <p class="m-0">PHP 0.00</p>
                                    <p>NOT DEPOSITED</p>
                                </div>
                                <div class="float-right">
                                    <p class="m-0">PHP 2,000.00</p>
                                    <p>DEPOSITED</p>
                                </div>
                            </div>
                            <div class="progress mb-3 w-100">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">EXPENSES</strong>
                            <select class="float-right">
                                Last Month
                                <option>Last 30 days</option>
                                <option>This Month</option>
                                <option>This Quarter</option>
                                <option>This Year</option>
                                <option>Last Month</option>
                                <option>Last Quarter</option>
                                <option>Last Year</option>
                            </select>
                        </div>
                        <div class="card-body">
                            <h3>PHP 0</h3>
                            <p>LAST MONTH</p>
                            <div class="container">
                                <div class="donut-chart-block block">
                                    <div class="donut-chart">
                                        <div id="part1" class="portion-block">
                                            <div class="circle"></div>
                                        </div>
                                        <div id="part2" class="portion-block">
                                            <div class="circle"></div>
                                        </div>
                                        <div id="part3" class="portion-block">
                                            <div class="circle"></div>
                                        </div>
                                        <p class="center"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bank Accounts</strong>
                            <p>Cash and cash equivalents in Quickbooks</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Profit and Loss</strong>
                            <select class="float-right">
                                Last Month
                                <option>Last 30 days</option>
                                <option>This Month</option>
                                <option>This Quarter</option>
                                <option>This Year</option>
                                <option>Last Month</option>
                                <option>Last Quarter</option>
                                <option>Last Year</option>
                            </select>
                        </div>
                        <div class="card-body">
                            <h3>PHP 0</h3>
                            <p>LAST MONTH</p>
                            <div class="d-inline">
                                <div class="float-left padding0 w-25">
                                    <p class="m-0">PHP 0</p>
                                    <p class="font12 pt-0">INCOME</p>
                                </div>
                                <div class="">
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="d-inline">
                                <div class="float-left padding0 w-25">
                                    <p class="m-0">PHP 0</p>
                                    <p class="font12 pt-0">EXPENSES</p>
                                </div>
                                <div class="">
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->   
@endsection