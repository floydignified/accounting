<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<div class="modal fade" id="addcustomermodal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticModalLabel">Add New Customer</h5>
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
                        <input id="customername" type="text" name="" class="w-100">
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
                            <input id="customerphone" type="text" name="" class="w-100">
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
                            <p>Payment Method<p>
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
                            <input id="customerbalance" type="text" name="" class="w-100">
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
                <button id="customeradd" type="button" class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="invoicemodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-4 p-0 pr-3">
                            <input id="invoicecusomer" type="text" name="" placeholder="Choose a customer" class="w-100">
                        </div>
                        <div class="col-md-4 p-0">
                            <input type="text" name="" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="">Send Later
                            </div>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3>PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-4 p-0 pr-3">
                            <p>Billing Address</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Terms</p>
                            <select class="w-100">
                                <option></option>
                                <option>Add New</option>
                                <option>Due on Receipt</option>
                                <option>Net15</option>
                                <option>Net30</option>
                                <option>Net60</option>
                            </select>
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Invoice Date</p>
                            <input id="invoicedate" type="date" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0">
                            <p>Due Date</p>
                            <input id="invoiceduedate" type="date" name="" class="w-100">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Subtotal</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">BALANCE DUE</p>
                                <p id="invoicebalance" class="text-dark font-weight-bold">PHP 500.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Message Displayed on Invoice</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Message Displayed on Statement</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
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
                <button id="invoiceadd" class="btn btn-success rounded" data-dismiss="modal" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="receivepaymentmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Receive Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-4 p-0 pr-3">
                            <input id="paymentcustomer" type="text" name="" placeholder="Choose a customer" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <input type="text" name="" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="">Send Later
                            </div>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-2 p-0">
                            <button class="btn btn-outline-secondary rounded">Find by invoice no.</button>
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="paymentbalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-3 p-0 pr-3">
                            <p>Payment Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3 d-inline-flex">
                        <div class="col-md-3 p-0 pr-3">
                            <p>Payment Method</p>
                            <input type="text" name="" placeholder="Choose payment method" class="w-100">
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Reference No.</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Deposit to</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-3 p-0">
                            <p>Amount Received</p>
                            <input type="text" name="" class="w-100" placeholder="0.00">
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 m-0 p-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="paymentadd" class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="estimatemodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Estimate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-4 p-0 pr-3">
                            <input id="estimatecustomer" type="text" name="" placeholder="Choose a customer" class="w-100">
                        </div>
                        <div class="col-md-4 p-0">
                            <input type="text" name="" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="">Send Later
                            </div>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="estimatebalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-4 p-0 pr-3">
                            <p>Billing Address</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Estimate Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0">
                            <p>Expiration Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Subtotal</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">BALANCE DUE</p>
                                <p class="text-dark font-weight-bold">PHP 500.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Message Displayed on Estimate</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
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
                <button id="estimateadd" class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="salesreceiptmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Sales Receipt</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-4 p-0 pr-3">
                            <input id="salesrcustomer" type="text" name="" placeholder="Choose a customer" class="w-100">
                        </div>
                        <div class="col-md-4 p-0">
                            <input type="text" name="" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="">Send Later
                            </div>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="salesrbalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-4 p-0 pr-3">
                            <p>Billing Address</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Sales Receipt Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3 d-inline-flex">
                        <div class="col-md-3 p-0 pr-3">
                            <p>Payment Method</p>
                            <input type="text" name="" placeholder="Choose payment method" class="w-100">
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Reference No.</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Deposit to</p>
                            <input type="text" name="" class="w-100">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">Amount Received</p>
                                <p class="text-dark font-weight-bold">PHP 500.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">BALANCE DUE</p>
                                <p class="text-dark font-weight-bold">PHP 500.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Message Displayed on Sales Receipt</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
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
                <button id="salesradd" class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="creditnotemodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Credit Note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-4 p-0 pr-3">
                            <input id="creditncustomer" type="text" name="" placeholder="Choose a customer" class="w-100">
                        </div>
                        <div class="col-md-4 p-0">
                            <input type="text" name="" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="">Send Later
                            </div>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="creditnbalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-4 p-0 pr-3">
                            <p>Billing Address</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Credit Note Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Subtotal</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">BALANCE DUE</p>
                                <p class="text-dark font-weight-bold">PHP 500.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Message Displayed on Credit Note</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
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
                <button id="creditnadd"class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="refundreceiptmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Refund Receipt</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-4 p-0 pr-3">
                            <input type="text" name="" placeholder="Choose a customer" class="w-100">
                        </div>
                        <div class="col-md-4 p-0">
                            <input type="text" name="" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="">Send Later
                            </div>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3>PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-4 p-0 pr-3">
                            <p>Billing Address</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Refund Receipt Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3 d-inline-flex">
                        <div class="col-md-3 p-0 pr-3">
                            <p>Payment Method</p>
                            <input type="text" name="" placeholder="Choose payment method" class="w-100">
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Refund From</p>
                            <input type="text" name="" class="w-100" placeholder="Choose an account">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">TOTAL AMOUNT REFUNDED</p>
                                <p class="text-dark font-weight-bold">PHP 500.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Message Displayed on Refund Receipt</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
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
                <button class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="delayedcreditmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Delayed Credit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-4 p-0 pr-3">
                            <input type="text" name="" placeholder="Choose a customer" class="w-100">
                        </div>
                        <div class="col-md-4 p-0">
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3>PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-2 p-0 pr-3">
                            <p>Delayed Credit Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="creditnadd" class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="delayedchargemodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Delayed Charge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-4 p-0 pr-3">
                            <input id="delayedccustomer" type="text" name="" placeholder="Choose a customer" class="w-100">
                        </div>
                        <div class="col-md-4 p-0">
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="delayedcbalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-2 p-0 pr-3">
                            <p>Delayed Charge Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="delayadcadd" class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="expensemodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Expense</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-3 p-0 pr-3">
                            <input id="expensepayee" type="text" name="" placeholder="Choose a payee" class="w-100">
                        </div>
                        <div class="col-auto p-0 pr-2">
                            <p class="font12 font-weight-bold float-right">Bank/Credit Account</p>
                        </div>
                        <div class="col-md-3 p-0">
                            <!-- <p class="font12 font-weight-bold">Bank/Credit Account</p> -->
                            <input type="text" name="" placeholder="Cash and Cash Equivalents" class="w-100">
                        </div>
                        <div class="col-auto p-0 pl-2">
                            <p class="font12 font-weight-bold float-right">Balance PHP 100</p>
                        </div>
                        <div class="col-md-3 p-0 pl-5 ml-5  d-inline-flex center-content">
                            <h4 class="mr-2">AMOUNT: </h4>
                            <h3>PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3 d-inline-flex">
                        <div class="col-md-2 p-0 pr-3">
                            <p>Payment Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Payment Method</p>
                            <input type="text" name="" placeholder="Enter text" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Reference No.</p>
                            <input type="text" name="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">
                        <h4>Account Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1 mt-4">
                        <h4>Item Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="expenseadd" class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="chequemodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Cheque</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-3 p-0 pr-3">
                            <input id="chequepayee" type="text" name="" placeholder="Choose a payee" class="w-100">
                        </div>
                        <div class="col-auto p-0 pr-2">
                            <p class="font12 font-weight-bold float-right">Bank Account</p>
                        </div>
                        <div class="col-md-3 p-0">
                            <input type="text" name="" placeholder="Cash and Cash Equivalents" class="w-100">
                        </div>
                        <div class="col-auto p-0 pl-2">
                            <p class="font12 font-weight-bold float-right">Balance PHP 100</p>
                        </div>
                        <div class="col-md-3 p-0 pl-5 ml-5  d-inline-flex center-content">
                            <h4 class="mr-2">AMOUNT: </h4>
                            <h3>PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3 d-inline-flex">
                        <div class="col-md-3 p-0 pr-3">
                            <p>Mailing Address</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Payment Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Cheque No.</p>
                            <input type="text" name="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">
                        <h4>Account Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1 mt-4">
                        <h4>Item Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="chequeadd" class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="billmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Bill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-3 p-0 pr-3">
                            <input id="billpayee" type="text" name="" placeholder="Choose a customer" class="w-100">
                        </div>
                        <div class="col-md-5 p-0">
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3>PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4 d-inline-flex">
                        <div class="col-md-4 p-0 pr-3">
                            <p>Billing Address</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Terms</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Bill Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Due Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Bill No.</p>
                            <input type="text" name="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12 mb-1 mt-3">
                        <h4>Account Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1 mt-4">
                        <h4>Item Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="billadd" class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="purchaseordermodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Purchase Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-3 p-0 pr-3">
                            <input type="text" name="" placeholder="Choose a customer" class="w-100">
                        </div>
                        <div class="col-md-3 p-0">
                            <input type="text" name="" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">AMOUNT: </h4>
                            <h3>PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-3 p-0 pr-3">
                            <p>Mailing Address</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Ship To</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Purchase Order Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3 d-inline-flex">
                        <div class="col-md-3 p-0 pr-3">
                            <p>Shipping Address</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Ship Via</p>
                            <input type="text" name="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12 mb-1 mt-4">
                        <h4>Account Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1 mt-4">
                        <h4>Item Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">SUBTOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="text-dark font-weight-bold">PHP 500.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Your Message to Supplier</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
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
                <button class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="suppliercreditmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Supplier Credit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-3 p-0 pr-3">
                            <input type="text" name="" placeholder="Choose supplier" class="w-100">
                        </div>
                        <div class="col-md-5 p-0">
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">CREDIT AMOUNT: </h4>
                            <h3>PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4 d-inline-flex">
                        <div class="col-md-3 p-0 pr-3">
                            <p>Mailing Address</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Payment Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Reference No. </p>
                            <input type="text" name="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12 mb-1 mt-3">
                        <h4>Account Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1 mt-4">
                        <h4>Item Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="creditcardcreditmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Credit Card Credit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-3 p-0 pr-3">
                            <input type="text" name="" placeholder="Choose a payee" class="w-100">
                        </div>
                        <div class="col-auto p-0 pr-2">
                            <p class="font12 font-weight-bold float-right">Credit Card Account</p>
                        </div>
                        <div class="col-md-3 p-0">
                            <!-- <p class="font12 font-weight-bold">Bank/Credit Account</p> -->
                            <input type="text" name="" placeholder="Credit Card" class="w-100">
                        </div>
                        <div class="col-auto p-0 pl-2">
                            <p class="font12 font-weight-bold float-right">Balance PHP 100</p>
                        </div>
                        <div class="col-md-3 p-0 pl-5 ml-5  d-inline-flex center-content">
                            <h4 class="mr-2">AMOUNT: </h4>
                            <h3>PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3 d-inline-flex">
                        <div class="col-md-2 p-0 pr-3">
                            <p>Payment Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Reference No.</p>
                            <input type="text" name="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">
                        <h4>Account Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1 mt-4">
                        <h4>Item Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="bankdepositmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Bank Deposit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-auto p-0 pr-2">
                            <p class="font12 font-weight-bold float-right">Account</p>
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <input type="text" name="" placeholder="Choose a payee" class="w-100">
                        </div>
                        <div class="col-auto p-0 pr-2">
                            <p class="font12 font-weight-bold float-right">Balance: PHP 100.00</p>
                        </div>
                        <div class="col-auto p-0 pr-2 ml-5">
                            <p class="font12 font-weight-bold float-right">Date</p>
                        </div>
                        <div class="col-md-2 p-0">
                            <input type="date" name="" placeholder="Cash and Cash Equivalents">
                        </div>
                        <div class="col-md-3 p-0 pl-5 ml-5  d-inline-flex center-content">
                            <h4 class="mr-2">AMOUNT: </h4>
                            <h3>PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1 mt-4">
                        <h4>Add Funds to this Deposit</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">RECEIVED FROM</th>
                            <th class="text-left">ACCOUNT</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-left">PAYMENT METHOD</th>
                            <th class="text-left">REF NO.</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Test</td>
                            <td class="pt-3-half" contenteditable="true">Sample</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half" contenteditable="true">Credit Card</td>
                            <td class="pt-3-half" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Test</td>
                            <td class="pt-3-half" contenteditable="true">Sample</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half" contenteditable="true">Credit Card</td>
                            <td class="pt-3-half" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">OTHER FUNDS TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="text-dark font-weight-bold">PHP 500.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-2 d-inline-flex">
                        <div class="col-md-2 p-0 pr-3">
                            <p>Cashback goes to</p>
                            <input type="text" name="" placeholder="Cash and Cash Equivalents" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Cashback Memo</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Cashback Amount</p>
                            <input type="text" name="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="transfermodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Transfer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="col-md-6 p-0">
                        <p>Transfer Funds from</p>
                        <input type="text" name="">
                    </div>
                    <div class="col-md-6 p-0">
                        <p>Balance</p>
                        <h3>PHP 1000.00</h3>
                    </div>
                    <div class="col-md-12 mt-3"></div>
                    <div class="col-md-6 p-0">
                        <p>Transfer Funds To</p>
                        <input type="text" name="">
                    </div>
                    <div class="col-md-6 p-0">
                        <p>Balance</p>
                        <h3>PHP 1000.00</h3>
                    </div>
                    <div class="col-md-12 mt-3"></div>
                    <div class="col-md-6 p-0">
                        <p>Transfer Amount</p>
                        <input type="text" name="">
                    </div>
                    <div class="col-md-6 p-0">
                        <p>Date</p>
                        <input type="date" name="">
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="journalentrymodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Journal Entry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="col-md-12 p-0 mb-4">
                        <div class="col-md-2 p-0">
                            <p>Journal Date</p>
                            <input type="date" name="">
                        </div>
                        <div class="col-md-2 p-0">
                            <p>Journal No.</p>
                            <input type="text" name="" placeholder="1">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">ACCOUNT</th>
                            <th class="text-left">DEBITS</th>
                            <th class="text-left">CREDITS</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-left">NAME</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half text-center" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half text-center" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="investqtyadjmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Inventory Quantity Adjustment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="col-md-12 p-0 mb-4">
                        <div class="col-md-2 p-0">
                            <p>Adjustment Date</p>
                            <input type="date" name="">
                        </div>
                        <div class="col-md-2 p-0">
                            <p>Reference No.</p>
                            <input type="text" name="" placeholder="1">
                        </div>
                        <div class="col-md-3 p-0">
                            <p>Inventory Adjustment Account</p>
                            <input type="text" name="">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-left">QTY ON HAND</th>
                            <th class="text-left">NEW QTY</th>
                            <th class="text-left">CHANGE IN QTY</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half text-center" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half text-center" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="paybillsmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Pay Bills</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12 p-0 mb-4">
                    <div class="my-3 p-0">
                        <div class="col-md-2 p-0 pr-3">
                            <p>Payment Account</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-auto p-0 mr-3">
                            <p></p>
                            <p class="font12 font-weight-bold p-0 m-0 mt-4">Balance PHP 1,000</p>
                        </div>
                        <div class="col-md-2 p-0 mr-2">
                            <p>Payment Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 mr-2">
                            <p>Reference No. </p>
                            <input type="text" name="">
                        </div>
                        <div class="col-auto p-0 d-inline-flex center-content">
                            <h4 class="mr-2">TOTAL PAYMENT AMOUNT:</h4>
                            <h3>PHP 0.00</h3>
                            <!-- <p>TOTAL PAYMENT AMOUNT:</p> -->
                            <!-- <h4>0.00</h4> -->
                        </div>
                    </div>
                    <div class="col-md-12 mb-5"></div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-center"><input type="checkbox" name=""></th>
                            <th class="text-left">PAYEE</th>
                            <th class="text-left">REF NO. </th>
                            <th class="text-left">DUE DATE.</th>
                            <th class="text-left">OPEN BALANCE</th>
                            <th class="text-left">CREDIT APPLIED</th>
                            <th class="text-left">PAYMENT</th>
                            <th class="text-left">TOTAL AMOUNT</th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                            <td class="pt-3-half" contenteditable="true"></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false"></td>
                            <td class="pt-3-half" contenteditable="false"></td>
                            <td class="pt-3-half" contenteditable="false"></td>
                            <td class="pt-3-half" contenteditable="false"></td>
                            <td class="pt-3-half font-weight-bold" contenteditable="false">PHP 0.00</td>
                            <td class="pt-3-half font-weight-bold" contenteditable="false">PHP 0.00</td>
                            <td class="pt-3-half font-weight-bold" contenteditable="false">PHP 0.00</td>
                            <td class="pt-3-half font-weight-bold" contenteditable="false">PHP 0.00</td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">TOTAL PAYMENT</p>
                                <p class="text-dark font-weight-bold">PHP 500.00</p>
                            </div>
                        </div>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="uploadmodal" tabindex="-1" role="dialog" aria-labelledby="salesModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="salesModalLabel">Upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 m-0 pr-0">
                    <div class="d-inline-flex">
                        <p class="fa fa-paperclip"></p>
                        <p class="p-0 ml-1">Maximum Size: 20MB</p>
                    </div>
                    <div class="input-group mb-3 p-0">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success rounded">Upload</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade p-0" id="budgetingmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog modal-full" role="document" style="min-width: 100%; margin: 0;">
        <div class="modal-content" style="min-height: 100vh;">
            <div class="modal-header">
                <h5 class="modal-title">Budget</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                <div class="col-md-12">
                    <div class="col-auto mr-3">
                        <p>Name</p>
                        <input type="text" name="">
                    </div>
                    <div class="col-auto mr-3">
                        <p>Financial Year</p>
                        <select>
                            <option>FY 2017 (Jan 2017 - Dec 2017)</option>
                            <option>FY 2018 (Jan 2018 - Dec 2018)</option>
                            <option>FY 2019 (Jan 2019 - Dec 2019)</option>
                            <option>FY 2020 (Jan 2020 - Dec 2020)</option>
                            <option>FY 2021 (Jan 2021 - Dec 2021)</option>
                        </select>
                    </div>
                    <div class="col-auto mr-3">
                        <p>Interval</p>
                        <select>
                            <option>Monthly</option>
                            <option>Quarterly</option>
                            <option>Yearly</option>
                        </select>
                    </div>
                    <div class="col-auto mr-3">
                        <p>Pre-fill Data?</p>
                        <select>
                            <option>No</option>
                            <option>Actual Data - 2017</option>
                            <option>Actual Data - 2018</option>
                        </select>
                    </div>
                    <div class="col-auto mr-3">
                        <p>Subdivided by</p>
                        <select>
                            <option>Dont Subdivide</option>
                            <option>Customer</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mt-4"></div>
                <table class="table table-bordered table-responsive-md table-striped text-center font14">
                    <tr>
                        <th class="text-center">ACCOUNTS</th>
                        <th class="text-center">JAN</th>
                        <th class="text-center">FEB</th>
                        <th class="text-center">MAR</th>
                        <th class="text-center">APR</th>
                        <th class="text-center">MAY</th>
                        <th class="text-center">JUN</th>
                        <th class="text-center">JUL</th>
                        <th class="text-center">AUG</th>
                        <th class="text-center">SEP</th>
                        <th class="text-center">OCT</th>
                        <th class="text-center">NOV</th>
                        <th class="text-center">DEC</th>
                        <th class="text-center">TOTAL</th>
                    </tr>
                    <tr>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                        <td class="pt-3-half" contenteditable="true"></td>
                    </tr>
                    <!-- This is our clonable table line -->
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success rounded" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="chartofaccountsmodal" tabindex="-1" role="dialog" aria-labelledby="salesModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="salesModalLabel">Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-6 p-1">
                    <div class="mb-3">
                        <p>Account Type</p>
                        <select id="coaAccountType" class="w-100 pt-1">
                            <option></option>
                            <option>Accounts Receivable (A/R)</option>
                            <option>Current Assets</option>
                            <option>Cash and Cash Equivalents</option>
                            <option>Fixed Assets</option>
                            <option>Non-Current Assests</option>
                            <option>Accounts Payable (A/P)</option>
                            <option>Credit Card</option>
                            <option>Current Liabilities</option>
                            <option>Non-Current Liabilities</option>
                            <option>Owner's Equity</option>
                            <option>Income</option>
                            <option>Other Income</option>
                            <option>Cost of Sales</option>
                            <option>Expenses</option>
                            <option>Other Expenses</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <p>Detail Type</p>
                        <select id="coaDetailType" class="w-100 pt-1">
                            <option></option>
                            <option>Bank</option>
                            <option>Savings</option>
                        </select>
                    </div>
                    <textarea rows="7" class="w-100 mt-3" disabled="true"></textarea>
                </div>
                <div class="col-md-6 p-1">
                    <div class="mb-3">
                        <p>Name</p>
                        <input id="coaName" type="text" name="" class="w-100">
                    </div>
                    <div class="mb-3">
                        <p>Description</p>
                        <input id="coaDesc" type="text" name="" class="w-100">
                    </div>
                    <div class="pt-2 mb-3">
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Is sub-account</label>
                        </div>
                        <input type="text" name="" placeholder="Enter parent account" class="w-100">
                    </div>
                    <div class="col-md-6 p-1">
                        <p>Balance</p>
                        <input id="coaBalance" type="text" name="" class="w-100">
                    </div>
                    <div class="col-md-6 p-1">
                        <p>as of</p>
                        <input type="date" name="" class="w-100">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn rounded btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn rounded btn-success" id="coaadd" data-dismiss="modal" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
 
        $("#coaadd").click(function(){
 
            var coaAccountType = $("#coaAccountType").val();
            var coaDetailType = $("#coaDetailType").val();
            var coaName = $("#coaName").val();
            var coaDesc = $("#coaDesc").val();
            var coaBalance = $("#coaBalance").val();

            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";

            var markup = "<tr><td class='pt-3-half' contenteditable='false'>"+ coaName +"</td><td class='pt-3-half' contenteditable='false'>"+ coaAccountType +"</td><td class='pt-3-half' contenteditable='false'>"+ coaDetailType +"</td><td class='pt-3-half' contenteditable='false'>PHP "+ coaBalance +".00</td><td class='pt-3-half' contenteditable='false'>PHP "+ coaBalance +".00</td><td class='text-center'><span class='table-add mb-3 mr-2'><div class='btn-group'><button type='button' class='btn bg-transparent text-info'>Accounts History</button><button type='button' class='btn bg-transparent dropdown-toggle px-1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><span class='sr-only'>Toggle Dropdown</span></button><div class='dropdown-menu'><a class='dropdown-item' href=''>Connect Bank</a><a class='dropdown-item' href=''>Edit</a><a class='dropdown-item' href=''>Delete</a><a class='dropdown-item' href=''>Run Report</a></div></div></span></td></tr>";
 
        $("#coatable").append(markup);
 
     });         
 });    
</script>
<script>
    $(document).ready(function(){
    
        $("#invoiceadd").click(function(){
            
            // var invoicedate = new Date("09/06/2018");
            var invoicecustomer = $("#invoicecusomer").val();
            // var invoiceduedate = new Date("09/06/2018");
            var invoicebalance = $("#invoicebalance").text();
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>Invoice</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+invoicecustomer+"</td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>"+invoicebalance+"</td><td class='pt-3-half' contenteditable='true'>"+invoicebalance+"</td><td class='pt-3-half' contenteditable='true'>Open</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true' data-target='#receiveModal'>Receive Payment</i></a></span></td></tr>";
    
        $("#salestable").append(markup);
        $(".salestableinvoice").append(markup);
    
     });         
    });    
</script>
<script>
    $(document).ready(function(){
    
        $("#paymentadd").click(function(){
            
            var paymentcustomer = $("#paymentcustomer").val();
            var paymentbalance = $("#paymentbalance").text();
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>9/7/2018</td><td class='pt-3-half' contenteditable='true'>Payment</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+paymentcustomer+"</td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>"+paymentbalance+"</td><td class='pt-3-half' contenteditable='true'>"+paymentbalance+"</td><td class='pt-3-half' contenteditable='true'>Open</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true' data-target='#receiveModal'>Receive Payment</i></a></span></td></tr>";
    
        $("#salestable").append(markup);
    
     });         
    });    
</script>
<script>
    $(document).ready(function(){
    
        $("#estimateadd").click(function(){
            
            var estimatecustomer = $("#estimatecustomer").val();
            var estimatebalance = $("#estimatebalance").text();
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>9/7/2018</td><td class='pt-3-half' contenteditable='true'>Estimate</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+estimatecustomer+"</td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>"+estimatebalance+"</td><td class='pt-3-half' contenteditable='true'>"+estimatebalance+"</td><td class='pt-3-half' contenteditable='true'>Open</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true' data-target='#receiveModal'>Receive Payment</i></a></span></td></tr>";
    
        $("#salestable").append(markup);
    
     });         
    });    
</script>
<script>
    $(document).ready(function(){
    
        $("#salesradd").click(function(){
            
            var salesrcustomer = $("#salesrcustomer").val();
            var salesrbalance = $("#salesrbalance").text();
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>9/7/2018</td><td class='pt-3-half' contenteditable='true'>Sales Receipt</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+salesrcustomer+"</td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>"+salesrbalance+"</td><td class='pt-3-half' contenteditable='true'>"+salesrbalance+"</td><td class='pt-3-half' contenteditable='true'>Open</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true' data-target='#receiveModal'>Receive Payment</i></a></span></td></tr>";
    
        $("#salestable").append(markup);
    
     });         
    });    
</script>
<script>
    $(document).ready(function(){
    
        $("#creditnadd").click(function(){
            
            var creditncustomer = $("#creditncustomer").val();
            var creditnbalance = $("#creditnbalance").text();
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>9/7/2018</td><td class='pt-3-half' contenteditable='true'>Credit Note</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+creditncustomer+"</td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>"+creditnbalance+"</td><td class='pt-3-half' contenteditable='true'>"+creditnbalance+"</td><td class='pt-3-half' contenteditable='true'>Open</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true' data-target='#receiveModal'>Receive Payment</i></a></span></td></tr>";
    
        $("#salestable").append(markup);
    
     });         
    });    
</script>
<script>
    $(document).ready(function(){
    
        $("#delayadcadd").click(function(){
            
            var delayedccustomer = $("#delayedccustomer").val();
            var delayedcbalance = $("#delayedcbalance").text();
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>9/7/2018</td><td class='pt-3-half' contenteditable='true'>Delayed Charge</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+delayedccustomer+"</td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>"+delayedcbalance+"</td><td class='pt-3-half' contenteditable='true'>"+delayedcbalance+"</td><td class='pt-3-half' contenteditable='true'>Open</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true' data-target='#receiveModal'>Receive Payment</i></a></span></td></tr>";
    
        $("#salestable").append(markup);
    
     });         
    });    
</script>
<script>
    $(document).ready(function(){
    
        $("#delayadcadd").click(function(){
            
            var delayedccustomer = $("#delayedccustomer").val();
            var delayedcbalance = $("#delayedcbalance").text();
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>9/7/2018</td><td class='pt-3-half' contenteditable='true'>Delayed Charge</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+delayedccustomer+"</td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>"+delayedcbalance+"</td><td class='pt-3-half' contenteditable='true'>"+delayedcbalance+"</td><td class='pt-3-half' contenteditable='true'>Open</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true' data-target='#receiveModal'>Receive Payment</i></a></span></td></tr>";
    
        $("#salestable").append(markup);
    
     });         
    });    
</script>

<script>
    $(document).ready(function(){
    
        $("#customeradd").click(function(){
            
            var customername = $("#customername").val();
            var customerphone = $("#customerphone").val();
            var customerbalance = $("#customerbalance").val();
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>"+customername+"</td><td class='pt-3-half' contenteditable='true'>"+customerphone+"</td><td class='pt-3-half' contenteditable='true'>"+customerbalance+"</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true'>Receive Payment</i></a></span></td></tr>";
    
        $("#customertable").append(markup);
    
     });         
    });    
</script>

<script>
    $(document).ready(function(){
    
        $("#expenseadd").click(function(){
            
            var expensepayee = $("#expensepayee").val();
   
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>7/26/2018</td><td class='pt-3-half' contenteditable='true'>Expense</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+expensepayee+"</td><td class='pt-3-half' contenteditable='true'><select><option>Bad Debts</option></select></td><td class='pt-3-half' contenteditable='true'>PHP 2,000.00</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true'>Receive Payment</i></a></span></td></tr>";
    
        $("#expensetable").append(markup);
    
     });         
    });    
</script>

<script>
    $(document).ready(function(){
    
        $("#billadd").click(function(){
            
            var billpayee = $("#billpayee").val();
   
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>7/26/2018</td><td class='pt-3-half' contenteditable='true'>Bill</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+billpayee+"</td><td class='pt-3-half' contenteditable='true'><select><option>Bad Debts</option></select></td><td class='pt-3-half' contenteditable='true'>PHP 2,000.00</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true'>Receive Payment</i></a></span></td></tr>";
    
        $("#expensetable").append(markup);
    
     });         
    });    
</script>

<script>
    $(document).ready(function(){
    
        $("#chequeadd").click(function(){
            
            var chequepayee = $("#chequepayee").val();
   
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>7/26/2018</td><td class='pt-3-half' contenteditable='true'>Cheque</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+chequepayee+"</td><td class='pt-3-half' contenteditable='true'><select><option>Bad Debts</option></select></td><td class='pt-3-half' contenteditable='true'>PHP 2,000.00</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true'>Receive Payment</i></a></span></td></tr>";
    
        $("#expensetable").append(markup);
    
     });         
    });    
</script>

<script>
    $(document).ready(function(){
    
        $("#suppliercadd").click(function(){
            
            var suppliercpayee = $("#suppliercpayee").val();
   
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>7/26/2018</td><td class='pt-3-half' contenteditable='true'>Cheque</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+suppliercpayee+"</td><td class='pt-3-half' contenteditable='true'><select><option>Bad Debts</option></select></td><td class='pt-3-half' contenteditable='true'>PHP 2,000.00</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true'>Receive Payment</i></a></span></td></tr>";
    
        $("#expensetable").append(markup);
    
     });         
    });    
</script>

<script>
    $(document).ready(function(){
    
        $("#supplieradd").click(function(){
            
            var suppliername = $("#suppliercpayee").val();
            var supplierphone = $("#suppliercpayee").val();
   
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='false'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='false'>"+suppliername+"</td><td class='pt-3-half' contenteditable='false'>"+supplierphone+"</td><td class='pt-3-half' contenteditable='false'>mail@mail.com</td><td class='pt-3-half' contenteditable='false'>PHP 800.00</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true'>Receive Payment</i></a><select><option></option><option>Print</option><option>Send</option><option>View/Edit</option><option>Send Reminder</option><option>Print packing slip</option><option>Copy</option><option>Delete</option><option>Void</option></select></span></td></tr>";
    
        $("#suppliertable").append(markup);
    
     });         
    });    
</script>