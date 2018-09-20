<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<div class="modal fade" id="addcustomermodal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
    <form action="#" class="form-horizontal " id="add_customer_form" onsubmit="addCustomer()">
    {{ csrf_field() }}
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
                        <input type="text" name="f_name" class="w-100" required>
                    </div>
                    <div class="col-md-6 p-0 pl-1">
                        <p>Last Name</p>
                        <input type="text" name="l_name" class="w-100" required>
                    </div>
                    <div class="col-md-12 p-0">
                        <p>Company</p>
                        <input type="text" name="company" class="w-100" required>
                    </div>
                    <div class="col-md-12 p-0">
                        <p>Display name as</p>
                        <input id="customername" type="text" name="display_name" class="w-100" required>
                    </div>
                    <div class="col-md-12 p-0">
                        <p>Address</p>
                        <textarea rows="2" class="w-100" name="street" placeholder="Street" required></textarea>
                    </div>
                    <div class="col-md-6 p-0 pr-1 pb-1">
                        <input type="text" name="city" placeholder="City/Town" class="w-100" required>
                    </div>
                    <div class="col-md-6 p-0 pl-1 pb-1">
                        <input type="text" name="state" placeholder="State/Province" class="w-100" required>
                    </div>
                    <div class="col-md-6 p-0 pr-1">
                        <input type="text" name="postal_code" placeholder="Postal Code" class="w-100" required>
                    </div>
                    <div class="col-md-6 p-0 pl-1" >
                        <input type="text" name="country" placeholder="Country" class="w-100" required>
                    </div>
                    <div class="col-md-12 p-0">
                        <p>Notes</p>
                        <textarea rows="2" name="notes" class="w-100" required></textarea>
                    </div>
                </div>
                <div class="col-md-6 p-0 pl-1">
                    <div class="col-md-12 p-0">
                        <p>Email</p>
                        <input type="email" name="email" class="w-100" placeholder="separate multiple emails with commas" required>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-4 p-0 pr-1">
                            <p>Phone</p>
                            <input id="customerphone" type="tel" name="phone" class="w-100" required>
                        </div>
                        <div class="col-md-4 p-0 pr-1">
                            <p>Mobile</p>
                            <input type="tel" name="mobile" class="w-100" required>
                        </div>
                        <div class="col-md-4 p-0">
                            <p>Fax</p>
                            <input type="tel" name="fax" class="w-100" required>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-4 p-0 pr-1">
                            <p>Other</p>
                            <input type="text" name="other" class="w-100" required>
                        </div>
                        <div class="col-md-8 p-0">
                            <p>Website</p>
                            <input type="text" name="website" class="w-100" required>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 p-0 pr-1">
                            <p>Payment Method<p>
                            <input type="text" name="payment_method" class="w-100" required>
                        </div>
                        <div class="col-md-6 p-0">
                            <p>Terms</p>
                            <input type="text" name="terms" class="w-100" required>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 p-0 pr-1">
                            <p>Opening balance</p>
                            <input id="customerbalance" type="number" name="opening_balance" class="w-100" required>
                        </div>
                        <div class="col-md-6 p-0">
                            <p>as of</p>
                            <input type="date" name="as_of_date" class="w-100" required>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 p-0 pr-1">
                            <p>Account No. </p>
                            <input type="tel" name="account_no" class="w-100" required>
                        </div>
                        <div class="col-md-6 p-0">
                            <p>Business ID No. </p>
                            <input type="tel" name="business_id_no" class="w-100" required>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <p>Attachments</p>
                        <div class="input-group mb-3 p-0">
                            <div class="custom-file">
                                <input type="file" name="attachment" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="customeradd" type="submit" class="btn btn-success rounded">Save</button>
            </div>
        </div>
    </div>
    </form>
</div>
<div class="modal fade p-0" id="invoicemodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
<form action="#" class="form-horizontal " id="add_invoice_form" onsubmit="addInvoice()">
{{ csrf_field() }}
    <input id="transaction_type" name="transaction_type" value="Invoice" hidden>
    <input id="product_count" name="product_count" value="0" hidden>
    <input type="number" id="total_balance" name="total_balance" value="0" hidden>
    <input type="number" id="sales_transaction_number_estimate" name="sales_transaction_number_estimate" value="0" hidden>
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
                            <select id="invoicecustomer" type="text" name="customer" class="w-100" required>
                            <option value=""></option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->customer_id}}">{{$customer->display_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 p-0">
                            <input type="text" id="email" name="email" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="send_later" value="yes">Send Later
                            </div>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="big_invoicebalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-4 p-0 pr-3">
                            <p>Billing Address</p>
                            <input type="text" name="bill_address" id="bill_address" class="w-100" required>
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Terms</p>
                            <input class="w-100" list="terms_list" name="term" id="term" required>
                            <datalist id="terms_list">
                                <option></option>
                                <option>Add New</option>
                                <option>Due on Receipt</option>
                                <option>Net15</option>
                                <option>Net30</option>
                                <option>Net60</option>
                            </datalist>
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Invoice Date</p>
                            <input id="invoicedate" type="date" name="date" class="w-100" required>
                        </div>
                        <div class="col-md-2 p-0">
                            <p>Due Date</p>
                            <input id="invoiceduedate" type="date" name="due_date" class="w-100" required>
                        </div>
                    </div>

                    <table id="invoice_table" class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="add_lines_invoice">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="clear_lines_invoice">Clear All Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Subtotal</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p id="invoicetotal" class="mb-0 text-dark font-weight-bold">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">BALANCE DUE</p>
                                <p id="invoicebalance" class="text-dark font-weight-bold">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Message Displayed on Invoice</p>
                            <textarea rows="3" class="w-100" name="note" id="note" required></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Message Displayed on Statement</p>
                            <textarea rows="3" class="w-100" name="memo" id="memo" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
                        <div class="input-group mb-3 p-0">
                            <div class="custom-file">
                                <input type="file" name="attachment" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="invoiceadd" class="btn btn-success rounded" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>
</div>
<div class="modal fade p-0" id="receivepaymentmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
<form action="#" class="form-horizontal " id="add_payment_form" onsubmit="addPayment()">
{{ csrf_field() }}
    <input id="sales_transaction_number" name="sales_transaction_number" value="" hidden>
    <input id="payment_customer_id" name="payment_customer_id" value="" hidden>
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
                            <input id="paymentcustomer" type="text" name="p_customer" id="p_customer" placeholder="Choose a customer" class="w-100" readonly required>
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <input type="text" name="p_email" id="p_email" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="p_send_later" value="yes">Send Later
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
                            <input type="date" name="p_date" id="p_date" class="w-100" required>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3 d-inline-flex">
                        <div class="col-md-3 p-0 pr-3">
                            <p>Payment Method</p>
                            <input type="text" name="p_payment_method" id="p_payment_method" placeholder="Choose payment method" class="w-100" required>
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Reference No.</p>
                            <input type="text" name="p_reference_no" class="w-100" required>
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Deposit to</p>
                            <input type="text" name="p_deposit_to" class="w-100" required>
                        </div>
                        <div class="col-md-3 p-0">
                            <p>Amount Received</p>
                            <input type="text" name="p_amount" class="w-100" placeholder="0.00" required>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100" name="p_memo" required></textarea>
                        </div>
                        <div class="col-md-6 m-0 p-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" name="p_attachment" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="paymentadd" class="btn btn-success rounded" type="submit">Save</button>
            </div>
        </div>
    </div>
    </form>
</div>
<div class="modal fade p-0" id="estimatemodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
<form action="#" class="form-horizontal " id="add_estimate_form" onsubmit="addEstimate()">
{{ csrf_field() }}
    <input id="transaction_type_estimate" name="transaction_type_estimate" value="Estimate" hidden>
    <input id="product_count_estimate" name="product_count_estimate" value="0" hidden>
    <input type="number" id="total_balance_estimate" name="total_balance_estimate" value="0" hidden>
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
                            <select id="estimatecustomer" type="text" name="e_customer" class="w-100" required>
                                <option value=""></option>
                                @foreach($customers as $customer)
                                <option value="{{$customer->customer_id}}">{{$customer->display_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 p-0">
                            <input type="text" name="e_email" id="e_email" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="e_send_later" id="e_send_later">Send Later
                            </div>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="big_estimatebalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-4 p-0 pr-3">
                            <p>Billing Address</p>
                            <input type="text" name="e_bill_address" id="e_bill_address" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Estimate Date</p>
                            <input type="date" name="e_date" id="e_date" class="w-100">
                        </div>
                        <div class="col-md-2 p-0">
                            <p>Expiration Date</p>
                            <input type="date" name="e_due_date" id="e_due_date" class="w-100">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14" id="estimate_table">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="add_lines_estimate">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="clear_lines_estimate">Clear All Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Subtotal</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold" id="estimatetotal">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">BALANCE DUE</p>
                                <p class="text-dark font-weight-bold" id="estimatebalance">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Message Displayed on Estimate</p>
                            <textarea rows="3" class="w-100" name="e_note" id="e_note"></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100" name="e_memo" id="e_memo"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
                        <div class="input-group mb-3 p-0">
                            <div class="custom-file">
                                <input type="file" name="e_attachment" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="estimateadd" class="btn btn-success rounded" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>
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
    
        $("#estimateadd").click(function(){
            
            var estimatecustomer = $("#estimatecustomer").val();
            var estimatebalance = $("#estimatebalance").text();
    
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + subject + "</td></tr>";
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>9/7/2018</td><td class='pt-3-half' contenteditable='true'>Estimate</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+estimatecustomer+"</td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>"+estimatebalance+"</td><td class='pt-3-half' contenteditable='true'>"+estimatebalance+"</td><td class='pt-3-half' contenteditable='true'>Open</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true' data-target='#receivepaymentmodal'>Receive Payment</i></a></span></td></tr>";
    
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
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>9/7/2018</td><td class='pt-3-half' contenteditable='true'>Sales Receipt</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+salesrcustomer+"</td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>"+salesrbalance+"</td><td class='pt-3-half' contenteditable='true'>"+salesrbalance+"</td><td class='pt-3-half' contenteditable='true'>Open</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true' data-target='#receivepaymentmodal'>Receive Payment</i></a></span></td></tr>";
    
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
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>9/7/2018</td><td class='pt-3-half' contenteditable='true'>Delayed Charge</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+delayedccustomer+"</td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>"+delayedcbalance+"</td><td class='pt-3-half' contenteditable='true'>"+delayedcbalance+"</td><td class='pt-3-half' contenteditable='true'>Open</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true' data-target='#receivepaymentmodal'>Receive Payment</i></a></span></td></tr>";
    
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
    
            var markup = "<tr><td class='pt-3-half' contenteditable='true'><input type='checkbox' name=''></td><td class='pt-3-half' contenteditable='true'>9/7/2018</td><td class='pt-3-half' contenteditable='true'>Delayed Charge</td><td class='pt-3-half' contenteditable='true'>1001</td><td class='pt-3-half' contenteditable='true'>"+delayedccustomer+"</td><td class='pt-3-half' contenteditable='true'>9/6/2018</td><td class='pt-3-half' contenteditable='true'>"+delayedcbalance+"</td><td class='pt-3-half' contenteditable='true'>"+delayedcbalance+"</td><td class='pt-3-half' contenteditable='true'>Open</td><td><span class='table-add mb-3 mr-2'><a href='#!' class='text-info'><i aria-hidden='true' data-target='#receivepaymentmodal'>Receive Payment</i></a></span></td></tr>";
    
        $("#salestable").append(markup);
    
     });         
    });    
</script>

<script>
    var sales_table;
    var sales_table_invoice;
    var customers_table;

    $(document).ready(function(){

        customers_table = $('#customertable').DataTable({
            order: [[ 0, "desc" ]],
            paging: true,
            ajax: "{{ route('refresh_customers_table') }}",
            columnDefs: [{
                'targets': 0,
                'searchable':false,
                'orderable':false,
                'className': 'dt-body-center',
                'render': function (data, type, full, meta){
                    return '<input type="checkbox" name="id[]" value="">';
                }
            }],
            columns: [{
                            data: 'checkbox',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'display_name'
                        },
                        {
                            data: 'phone'
                        },
                        {
                            data: 'opening_balance'
                        },
                        {
                            data: "action",
                            orderable: false,
                            searchable: false
                    }]
        });
        
        sales_table = $('#salestable').DataTable({
            order: [[ 3, "desc" ]],
            paging: true,
            ajax: "{{ route('refresh_sales_table') }}",
            columnDefs: [{
                'targets': 0,
                'searchable':false,
                'orderable':false,
                'className': 'dt-body-center',
                'render': function (data, type, full, meta){
                    return '<input type="checkbox" name="id[]" value="">';
                }
            }],
            columns: [{
                            data: 'checkbox',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'st_date'
                        },
                        {
                            data: 'st_type'
                        },
                        {
                            data: 'st_no'
                        },
                        {
                            data: 'customer_name'
                        },
                        {
                            data: 'st_due_date'
                        },
                        {
                            data: 'customer_balance'
                        },
                        {
                            data: 'transaction_total'
                        },
                        {
                            data: 'st_status'
                        },
                        {
                            data: "action",
                            orderable: false,
                            searchable: false
                    }]
        });

        sales_table_invoice = $('#salestableinvoice').DataTable({
            order: [[ 3, "desc" ]],
            paging: true,
            ajax: "{{ route('refresh_sales_table_invoice') }}",
            columnDefs: [{
                'targets': 0,
                'searchable':false,
                'orderable':false,
                'className': 'dt-body-center',
                'render': function (data, type, full, meta){
                    return '<input type="checkbox" name="id[]" value="">';
                }
            }],
            columns: [{
                            data: 'checkbox',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'st_date'
                        },
                        {
                            data: 'st_type'
                        },
                        {
                            data: 'st_no'
                        },
                        {
                            data: 'customer_name'
                        },
                        {
                            data: 'st_due_date'
                        },
                        {
                            data: 'customer_balance'
                        },
                        {
                            data: 'transaction_total'
                        },
                        {
                            data: 'st_status'
                        },
                        {
                            data: "action",
                            orderable: false,
                            searchable: false
                    }]
        });

        
    });  
    
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
    
    function addCustomer(){

        $.ajax({
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('add_customer') }}",
            dataType: "text",
            data: $('#add_customer_form').serialize(),
            success: function (data) {
                swal("Done!", "Added customer", "success");
                $('#add_customer_form')[0].reset();
                customers_table.ajax.reload();
            },
            error: function (data) {
                swal("Error!", "Customer data failed", "error");
            }
        });
    }

    function addInvoice(){

        $('#total_balance').val($('#invoicetotal').text());
           
        $(".invoice_lines").each(function() {
            $("#product_count").val(parseInt($("#product_count").val())+1);
        });
        
        var counter = 0;
        var checker = 0;

        $(".invoice_lines").find('.invoice_data').each(function() {
            var id = $(this).attr("id");
            var name = id.replace(id.match(/(\d+)/g)[0], '').trim();  
            
            $(this).attr("name", name+counter);
            
            checker++;
            if(checker%4==0){
                counter++;
            }
        });

       
        $.ajax({
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('add_invoice') }}",
            dataType: "text",
            data: $('#add_invoice_form').serialize(),
            success: function (data) {
                swal("Done!", "Added invoice", "success");
                $("#product_count").val('0');
                checker = 0;
                counter = 0;
                $('#add_invoice_form')[0].reset();
                $('.invoice_lines').remove();
                $('#sales_transaction_number_estimate').val('0');

                sales_table.ajax.reload();
                sales_table_invoice.ajax.reload();
            },
            error: function (data) {
                swal("Error!", "Invoice failed", "error");
            }
        });
        
    }

    function addPayment(){
                
        $.ajax({
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('add_payment') }}",
            dataType: "text",
            data: $('#add_payment_form').serialize(),
            success: function (data) {
                swal("Done!", "Added payment", "success");
                $('#add_payment_form')[0].reset();
                sales_table.ajax.reload();
                sales_table_invoice.ajax.reload();
            },
            error: function (data) {
                swal("Error!", "Payment failed", "error");
            }
        });
                
    }

    function addEstimate(){

        $('#total_balance_estimate').val($('#estimatetotal').text());
        
        $(".estimate_lines").each(function() {
            $("#product_count_estimate").val(parseInt($("#product_count_estimate").val())+1);
        });

        var counter = 0;
        var checker = 0;

        $(".estimate_lines").find('.estimate_data').each(function() {
            var id = $(this).attr("id");
            var name = id.replace(id.match(/(\d+)/g)[0], '').trim();  
            
            $(this).attr("name", name+counter);
            
            checker++;
            if(checker%4==0){
                counter++;
            }
        });


        $.ajax({
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('add_estimate') }}",
            dataType: "text",
            data: $('#add_estimate_form').serialize(),
            success: function (data) {
                swal("Done!", "Added estimate", "success");
                $("#product_count_estimate").val('0');
                checker = 0;
                counter = 0;
                $('#add_estimate_form')[0].reset();
                $('.estimate_lines').remove();
                
                sales_table.ajax.reload();
                sales_table_invoice.ajax.reload();
            },
            error: function (data) {
                swal("Error!", "Estimate failed", "error");
            }
        });

    }
    
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

<script>
    $(document).ready(function(){
        $(document).on('change', '.product_select', function(event){
            event.preventDefault();
            var id = $(this).val();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            if(id == ""){
                $('#select_product_description' + position).val('');
                $('#select_product_rate' + position).val('');
                $('#total_amount' + position).html('');
            }else{
            @foreach($products_and_services as $product)
                    if(id == {{$product->product_id}}){
                        var price = '{{number_format($product->product_sales_price,2)}}';
                        $('#select_product_description' + position).val('{{$product->product_sales_description}}');
                        $('#select_product_rate' + position).val(price);
                        $('#total_amount' + position).html(price * $('#product_qty' + position).val());
                    }
            @endforeach
            }

            update_total();
        });

        $(document).on('change', '#invoicecustomer', function(event){
            event.preventDefault();
            var id = $(this).val();
            if(id == ""){
                $('#invoicebalance').html('PHP 0.00');
                $('#big_invoicebalance').html('PHP 0.00');
            }else{
            @foreach($customers as $customer)
                    if(id == {{$customer->customer_id}}){
                        $('#invoicebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#big_invoicebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                    }
            @endforeach
            }
        });

        $(document).on('change', '.product_qty', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount'  + position).html($('#select_product_rate'  + position).val() * $('#product_qty' + position).val());
           
            update_total();
        });
        

        $("#add_lines_invoice").click(function(event){
            event.preventDefault();
            var markup = '<tr class="invoice_lines" id="invoice_line'+$('#invoice_table tr').length+'"><td class="pt-3-half" id="number_tag" contenteditable="false">'+$('#invoice_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="invoice_data product_select" id="select_product_name'+$('#invoice_table tr').length+'"><option value=""></option>@foreach($products_and_services as $product)<option value="{{$product->product_id}}">{{$product->product_name}}</option>@endforeach</select></td><td class="pt-3-half"><input class="invoice_data" id="select_product_description'+$('#invoice_table tr').length+'" style="border:0;"></td><td class="pt-3-half"><input type="number" class="invoice_data product_qty" onclick="this.select();" id="product_qty'+$('#invoice_table tr').length+'" style="border:0; text-align:center;" value="1"></td><td class="pt-3-half"><input class="invoice_data" id="select_product_rate'+$('#invoice_table tr').length+'" style="border:0;"></td><td class="pt-3-half product_total" id="total_amount'+$('#invoice_table tr').length+'"></td><td class="pt-3-half"><a href="#" id="delete_product'+$('#invoice_table tr').length+'" class="fa fa-trash delete_product"></a></td></tr>';
            
            $("#invoice_table").append(markup);

        
        }); 

        $("#clear_lines_invoice").click(function(event){
            event.preventDefault();
            $('.invoice_lines').remove();

            $('#invoicetotal').html('0.00');
        }); 
        
        $(document).on('click', '.delete_product', function(event){
            event.preventDefault();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#invoice_line'+position).remove();
            
            var tag_counter = 1;

            $(".invoice_lines").find('#number_tag').each(function() {
                $(this).html(tag_counter);
                tag_counter++;
            });

            update_total();
        }); 

        function update_total(){
            var total_invoice = 0;
            $('.product_total').each(function() {
                var add_total = $(this).html();
                if(add_total==""){
                    add_total=0;
                }
                total_invoice += parseFloat(add_total);
                $('#invoicetotal').html(total_invoice);
            });
        }

        // ------------------------------------------------------------- ESTIMATE STARTS HERE --------------------------
        
        $(document).on('change', '.product_select_estimate', function(event){
            event.preventDefault();
            var id = $(this).val();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            if(id == ""){
                $('#select_product_description_estimate' + position).val('');
                $('#select_product_rate_estimate' + position).val('');
                $('#total_amount_estimate' + position).html('');
            }else{
            @foreach($products_and_services as $product)
                    if(id == {{$product->product_id}}){
                        var price = '{{number_format($product->product_sales_price,2)}}';
                        $('#select_product_description_estimate' + position).val('{{$product->product_sales_description}}');
                        $('#select_product_rate_estimate' + position).val(price);
                        $('#total_amount_estimate' + position).html(price * $('#product_qty_estimate' + position).val());
                    }
            @endforeach
            }

            update_total_estimate();
        });

        $(document).on('change', '#estimatecustomer', function(event){
            event.preventDefault();
            var id = $(this).val();
            if(id == ""){
                $('#estimatebalance').html('PHP 0.00');
                $('#big_estimatebalance').html('PHP 0.00');
            }else{
            @foreach($customers as $customer)
                    if(id == {{$customer->customer_id}}){
                        $('#estimatebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#big_estimatebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                    }
            @endforeach
            }
        });

        $(document).on('change', '.product_qty_estimate', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_estimate'  + position).html($('#select_product_rate_estimate'  + position).val() * $('#product_qty_estimate' + position).val());
           
            update_total_estimate();
        });


        $("#add_lines_estimate").click(function(event){
            event.preventDefault();
            var markup = '<tr class="estimate_lines" id="estimate_line'+$('#estimate_table tr').length+'"><td class="pt-3-half" id="number_tag_estimate" contenteditable="false">'+$('#estimate_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="estimate_data product_select_estimate" id="select_product_name_estimate'+$('#estimate_table tr').length+'"><option value=""></option>@foreach($products_and_services as $product)<option value="{{$product->product_id}}">{{$product->product_name}}</option>@endforeach</select></td><td class="pt-3-half"><input class="estimate_data" id="select_product_description_estimate'+$('#estimate_table tr').length+'" style="border:0;"></td><td class="pt-3-half"><input type="number" class="estimate_data product_qty_estimate" onclick="this.select();" id="product_qty_estimate'+$('#estimate_table tr').length+'" style="border:0; text-align:center;" value="1"></td><td class="pt-3-half"><input class="estimate_data" id="select_product_rate_estimate'+$('#estimate_table tr').length+'" style="border:0;"></td><td class="pt-3-half product_total_estimate" id="total_amount_estimate'+$('#estimate_table tr').length+'"></td><td class="pt-3-half"><a href="#" id="delete_product_estimate'+$('#estimate_table tr').length+'" class="fa fa-trash delete_product_estimate"></a></td></tr>';
            
            $("#estimate_table").append(markup);


        }); 

        $("#clear_lines_estimate").click(function(event){
            event.preventDefault();
            $('.estimate_lines').remove();

            $('#estimatetotal').html('0.00');
        }); 

        $(document).on('click', '.delete_product_estimate', function(event){
            event.preventDefault();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#estimate_line'+position).remove();
            
            var tag_counter = 1;

            $(".estimate_lines").find('#number_tag_estimate').each(function() {
                $(this).html(tag_counter);
                tag_counter++;
            });

            update_total_estimate();
        }); 

        function update_total_estimate(){
            var total_estimate = 0;
            $('.product_total_estimate').each(function() {
                var add_total = $(this).html();
                if(add_total==""){
                    add_total=0;
                }
                total_estimate += parseFloat(add_total);
                $('#estimatetotal').html(total_estimate);
            });
        }

    });    

    
</script>