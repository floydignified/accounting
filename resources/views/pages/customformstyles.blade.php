@extends('layout.initial')


@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Custom Form Styles</h1>
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
    <div class="tab-content pl-3 p-1" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!-- <h3>Custom Form Styles</h3> -->
            <div class="float-right">
                <div class="dropdown">
                    <button class="btn bg-transparent rounded text-dark  btn-outline-dark dropdown-toggle mb-3 px-3 mr-4" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    New Style
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="#">Invoice</a>
                        <a class="dropdown-item" href="#">Estimate</a>
                        <a class="dropdown-item" href="#">Sales Receipt</a>
                    </div>
                </div>
            </div>
            <div id="table" class="table-editable">
                <!-- Button trigger modal -->
                <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                <table class="table table-bordered table-responsive-md table-striped text-left font14 bg-white">
                    <tr>
                        <th class="text-left">NAME</th>
                        <th class="text-left">FORM TYPE</th>
                        <th class="text-left">LAST EDITED</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                    <tr>
                        <td class="pt-3-half" contenteditable="false">Standard</td>
                        <td class="pt-3-half" contenteditable="false">Master</td>
                        <td class="pt-3-half" contenteditable="false">08/14/2018</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn bg-transparent text-info p-0">Edit</button>
                                <button type="button" class="btn bg-transparent dropdown-toggle px-3 py-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Preview</a>
                                    <a class="dropdown-item" href="#">Rename</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
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
        </div>
    </div>
</div>
@endsection