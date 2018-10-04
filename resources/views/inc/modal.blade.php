<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<div class="modal fade" id="addcustomermodal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
    <form action="#" class="form-horizontal " id="add_customer_form" onsubmit="addCustomer()" autocomplete="off">
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
                            <input type="text" list="payment_method_list" name="payment_method" class="w-100" required>
                        </div>
                        <div class="col-md-6 p-0">
                            <p>Terms</p>
                            <input type="text" list="terms_list" name="terms" id="terms" class="w-100" required>
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
<form action="#" class="form-horizontal " id="add_invoice_form" onsubmit="addInvoice()" autocomplete="off">
{{ csrf_field() }}
    <input id="transaction_type" name="transaction_type" value="Invoice" hidden>
    <input id="product_count" name="product_count" value="0" hidden>
    <input type="number" id="total_balance" name="total_balance" value="0" hidden>
    <input type="number" id="sales_transaction_number_estimate" name="sales_transaction_number_estimate" value="0" hidden>
    <input type="number" id="sales_transaction_number_delayed_charge" name="sales_transaction_number_delayed_charge" value="0" hidden>
    <input type="number" id="sales_transaction_number_delayed_credit" name="sales_transaction_number_delayed_credit" value="0" hidden>
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
                                <option>Due on receipt</option>
                                <option>Net 15</option>
                                <option>Net 30</option>
                                <option>Net 60</option>
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
<form action="#" class="form-horizontal " id="add_payment_form" onsubmit="addPayment()" autocomplete="off">
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
                            <input type="text" list="payment_method_list" name="p_payment_method" id="p_payment_method" placeholder="Choose payment method" class="w-100" required>
                            <datalist id="payment_method_list">
                                <option>Cash</option>
                                <option>Cheque</option>
                                <option>Debit card</option>
                                <option>Credit card</option>
                            </datalist>
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Reference No.</p>
                            <input type="text" name="p_reference_no" class="w-100" required>
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Deposit to</p>
                            <input type="text" list="payment_deposit" name="p_deposit_to" class="w-100" required>
                            <datalist id="payment_deposit">
                            <option>Cash and equivalents</option>
                            <option>Allowance for bad debts</option>
                            <option>Available for sale assets (short-term)</option>
                            <option>Inventory</option>
                            <option>Inventory asset</option>
                            <option>Prepaid expenses</option>
                            <option>Uncategorized assets</option>
                            </datalist>
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
<form action="#" class="form-horizontal " id="add_estimate_form" onsubmit="addEstimate()" autocomplete="off">
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
                            <input type="text" name="e_bill_address" id="e_bill_address" class="w-100" required>
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Estimate Date</p>
                            <input type="date" name="e_date" id="e_date" class="w-100" required>
                        </div>
                        <div class="col-md-2 p-0">
                            <p>Expiration Date</p>
                            <input type="date" name="e_due_date" id="e_due_date" class="w-100" required>
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
                            <textarea rows="3" class="w-100" name="e_note" id="e_note" required></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100" name="e_memo" id="e_memo" required></textarea>
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
<form action="#" class="form-horizontal " id="add_sales_receipt_form" onsubmit="addSalesReceipt()" autocomplete="off">
{{ csrf_field() }}
    <input id="transaction_type_sales_receipt" name="transaction_type_sales_receipt" value="Sales Receipt" hidden>
    <input type="number" id="total_balance_sales_receipt" name="total_balance_sales_receipt" value="0" hidden>
    <input id="product_count_sales_receipt" name="product_count_sales_receipt" value="0" hidden>
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
                            <select id="salesrcustomer" type="text" name="sr_customer" class="w-100" required>
                                <option value=""></option>
                                @foreach($customers as $customer)
                                <option value="{{$customer->customer_id}}">{{$customer->display_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 p-0">
                            <input type="text" name="sr_email" id="sr_email" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="sr_send_later">Send Later
                            </div>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="big_sales_receiptbalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-4 p-0 pr-3">
                            <p>Billing Address</p>
                            <input type="text" name="sr_bill_address" id="sr_bill_address" class="w-100" required>
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Sales Receipt Date</p>
                            <input type="date" name="sr_date" id="sr_date" class="w-100" required>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3 d-inline-flex">
                        <div class="col-md-3 p-0 pr-3">
                            <p>Payment Method</p>
                            <input type="text"  list="payment_method_list" name="sr_payment_method" id="sr_payment_method" placeholder="Choose payment method" class="w-100" required>
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Reference No.</p>
                            <input type="text" name="sr_reference_no" id="sr_reference_no" class="w-100" required>
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Deposit to</p>
                            <input type="text" list="payment_deposit" name="sr_deposit_to" id="sr_deposit_to" class="w-100" required>
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14" id="sales_receipt_table">
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
                                <button type="button" class="btn btn-outline-dark rounded mr-1 font14" id="add_lines_sales_receipt">Add Lines</button>
                                <button type="button" class="btn btn-outline-dark rounded mr-1 font14" id="clear_lines_sales_receipt">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold" id="sales_receipttotal">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">BALANCE DUE</p>
                                <p class="text-dark font-weight-bold" id="sales_receiptbalance">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">Amount Received</p>
                                <input type="number" name="sr_amount_paid" placeholder="0.00" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Message Displayed on Sales Receipt</p>
                            <textarea rows="3" class="w-100" name="sr_message" required></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100" name="sr_memo" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
                        <div class="input-group mb-3 p-0">
                            <div class="custom-file">
                                <input type="file" name="sr_attachment" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="salesradd" class="btn btn-success rounded" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>
</div>
<div class="modal fade p-0" id="creditnotemodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
<form action="#" class="form-horizontal " id="add_credit_note_form" onsubmit="addCreditNote()" autocomplete="off">
{{ csrf_field() }}
    <input id="transaction_type_credit_note" name="transaction_type_credit_note" value="Credit Note" hidden>
    <input type="number" id="total_balance_credit_note" name="total_balance_credit_note" value="0" hidden>
    <input id="product_count_credit_note" name="product_count_credit_note" value="0" hidden>
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
                            <select id="creditncustomer" type="text" name="cn_customer" class="w-100" required>
                                <option value=""></option>
                                @foreach($customers as $customer)
                                <option value="{{$customer->customer_id}}">{{$customer->display_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 p-0">
                            <input type="text" name="cn_email" id="cn_email" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="cn_send_later">Send Later
                            </div>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="big_credit_notebalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-4 p-0 pr-3">
                            <p>Billing Address</p>
                            <input type="text" name="cn_bill_address" id="cn_bill_address" class="w-100" required>
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Credit Note Date</p>
                            <input type="date" name="cn_date" id="cn_date" class="w-100" required>
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14" id="credit_note_table">
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
                                <button type="button" class="btn btn-outline-dark rounded mr-1 font14" id="add_lines_credit_note">Add Lines</button>
                                <button type="button" class="btn btn-outline-dark rounded mr-1 font14" id="clear_lines_credit_note">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold" id="credit_notetotal">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">BALANCE DUE</p>
                                <p class="text-dark font-weight-bold" id="credit_notebalance">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Message Displayed on Credit Note</p>
                            <textarea rows="3" class="w-100" name="cn_message" required></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100" name="cn_memo" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
                        <div class="input-group mb-3 p-0">
                            <div class="custom-file">
                                <input type="file" name="cn_attachment" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="creditnadd" class="btn btn-success rounded" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>
</div>
<div class="modal fade p-0" id="refundreceiptmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
<form action="#" class="form-horizontal " id="add_refund_receipt_form" onsubmit="addRefundReceipt()" autocomplete="off">
{{ csrf_field() }}
    <input id="transaction_type_refund_receipt" name="transaction_type_refund_receipt" value="Refund Receipt" hidden>
    <input type="number" id="total_balance_refund_receipt" name="total_balance_refund_receipt" value="0" hidden>
    <input id="product_count_refund_receipt" name="product_count_refund_receipt" value="0" hidden>
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
                            <select id="refundrcustomer" type="text" name="rr_customer" class="w-100" required>
                                <option value=""></option>
                                @foreach($customers as $customer)
                                <option value="{{$customer->customer_id}}">{{$customer->display_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 p-0">
                            <input type="text" name="rr_email" id="rr_email" placeholder="Email (Separate emails with a comma)" class="w-100">
                            <br>
                            <div class="float-left">
                                <input type="checkbox" name="rr_send_later">Send Later
                            </div>
                            <div class="float-right">
                                <p class="text-info">Cc/Bcc</p>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="big_refund_receiptbalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-4 p-0 pr-3">
                            <p>Billing Address</p>
                            <input type="text" name="rr_bill_address" id="rr_bill_address" class="w-100" required>
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Refund Receipt Date</p>
                            <input type="date" name="rr_date" id="rr_date" class="w-100" required>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3 d-inline-flex">
                        <div class="col-md-3 p-0 pr-3">
                            <p>Payment Method</p>
                            <input type="text" list="payment_method_list" name="rr_payment_method" id="rr_payment_method" placeholder="Choose payment method" class="w-100" required>
                        </div>
                        <div class="col-md-3 p-0 pr-3">
                            <p>Refund from</p>
                            <input type="text" list="payment_deposit" name="rr_deposit_to" id="rr_deposit_to" class="w-100" required>
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14" id="refund_receipt_table">
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
                                <button type="button" class="btn btn-outline-dark rounded mr-1 font14" id="add_lines_refund_receipt">Add Lines</button>
                                <button type="button" class="btn btn-outline-dark rounded mr-1 font14" id="clear_lines_refund_receipt">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold" id="refund_receipttotal">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">BALANCE DUE</p>
                                <p class="text-dark font-weight-bold" id="refund_receiptbalance">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">Total Amount Refunded</p>
                                <p class="mb-0 text-dark font-weight-bold" id="refund_receipttotal1">PHP 0.00</p>
                                <input type="number" id="rr_amount_refunded" name="rr_amount_refunded" placeholder="0.00" hidden>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Message Displayed on Refund Receipt</p>
                            <textarea rows="3" class="w-100" name="rr_message" required></textarea>
                        </div>
                        <div class="col-md-6 pr-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100" name="rr_memo" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
                        <div class="input-group mb-3 p-0">
                            <div class="custom-file">
                                <input type="file" name="rr_attachment" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="refundradd" class="btn btn-success rounded" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>
</div>
<div class="modal fade p-0" id="delayedcreditmodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
<form action="#" class="form-horizontal " id="add_delayed_credit_form" onsubmit="addDelayedCredit()" autocomplete="off">
{{ csrf_field() }}
<input id="transaction_type_delayed_credit" name="transaction_type_delayed_credit" value="Credit" hidden>
<input id="product_count_delayed_credit" name="product_count_delayed_credit" value="0" hidden>
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
                            <select id="delayedcreditcustomer" type="text" name="dcredit_customer" class="w-100" required>
                            <option value=""></option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->customer_id}}">{{$customer->display_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 p-0">
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="delayed_creditbalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-2 p-0 pr-3">
                            <p>Delayed Credit Date</p>
                            <input type="date" name="dcredit_date" class="w-100">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14" id="delayed_credit_table">
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
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="add_lines_delayed_credit">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="clear_lines_delayed_credit">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold" id="delayed_credittotal">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100" name="dcredit_memo"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="dcredit_attachment" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="delayedcreditadd" class="btn btn-success rounded" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>
</div>
<div class="modal fade p-0" id="delayedchargemodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
<form action="#" class="form-horizontal " id="add_delayed_charge_form" onsubmit="addDelayedCharge()" autocomplete="off">
{{ csrf_field() }}
<input id="transaction_type_delayed_charge" name="transaction_type_delayed_charge" value="Charge" hidden>
<input id="product_count_delayed_charge" name="product_count_delayed_charge" value="0" hidden>
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
                            <select id="delayedccustomer" type="text" name="dc_customer" class="w-100" required>
                            <option value=""></option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->customer_id}}">{{$customer->display_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 p-0">
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">BALANCE DUE: </h4>
                            <h3 id="delayed_chargebalance">PHP 0.00</h3>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-3">
                        <div class="col-md-2 p-0 pr-3">
                            <p>Delayed Charge Date</p>
                            <input type="date" name="dc_date" class="w-100">
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14" id="delayed_charge_table">
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
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="add_lines_delayed_charge">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="clear_lines_delayed_charge">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold" id="delayed_chargetotal">PHP 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 mt-4">
                        <div class="col-md-6 pl-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100" name="dc_memo"></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="dc_attachment" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="delayedcadd" class="btn btn-success rounded" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>
</div>
<div class="modal fade p-0" id="expensemodal" tabindex="-1" role="dialog" aria-hidden="true" style="">
<form action="#" class="form-horizontal " id="add_expense_form" onsubmit="addExpense()" autocomplete="off">
{{ csrf_field() }}
<input id="item_count_expenses" name="item_count_expenses" value="0" hidden>
<input id="account_count_expenses" name="account_count_expenses" value="0" hidden>
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
                        <select id="expensepayee" type="text" name="expense_customer" class="w-100" required>
                            <option value=""></option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->customer_id}}">{{$customer->display_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-auto p-0 pr-2">
                            <p class="font12 font-weight-bold float-right">Bank/Credit Account</p>
                        </div>
                        <div class="col-md-3 p-0">
                            <!-- <p class="font12 font-weight-bold">Bank/Credit Account</p> -->
                            <input type="text" list="payment_deposit" name="expense_account" class="w-100" required>
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
                            <input type="date" name="expense_date" class="w-100" required>
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Payment Method</p>
                            <input type="text" list="payment_method_list" name="expense_payment_method" id="expense_payment_method" placeholder="Enter text" class="w-100" required>
                        </div>
                        <div class="col-md-2 p-0 pr-3">
                            <p>Reference No.</p>
                            <input type="text" name="expense_reference_no" class="w-100" required>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">
                        <h4>Account Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14" id="expense_account_table">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">ACCOUNT</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>
                    <datalist id="account_expenses">
                    <option value="Amortisation expense">Expenses</option>
                    <option value="Bad debts">Expenses</option>
                    <option value="Bank charges">Expenses</option>
                    <option value="Commissions and fees">Expenses</option>
                    <option value="Dues and subscriptions">Expenses</option>
                    <option value="Equipment rental">Expenses</option>
                    <option value="Income tax expense">Expenses</option>
                    <option value="Insurance - Disablity">Expenses</option>
                    <option value="Insurance - General">Expenses</option>
                    </datalist>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="add_lines_expense_account">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="clear_lines_expense_account">Clear All Lines</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1 mt-4">
                        <h4>Item Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14" id="expense_item_table">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                    </table>
                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="add_lines_expense_item">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14" id="clear_lines_expense_item">Clear All Lines</button>
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
                            <textarea rows="3" name="expense_memo" class="w-100" required></textarea>
                        </div>
                        <div class="col-md-6 m-0 pr-0">
                            <div class="d-inline-flex">
                                <p class="fa fa-paperclip"></p>
                                <p class="p-0 ml-1">Maximum Size: 20MB</p>
                            </div>
                            <div class="input-group mb-3 p-0">
                                <div class="custom-file">
                                    <input type="file" name="expense_attachment" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                <button id="expenseadd" class="btn btn-success rounded" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>
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
                $('#sales_transaction_number_delayed_charge').val('0');
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

    function addSalesReceipt(){

        $('#total_balance_sales_receipt').val($('#sales_receipttotal').text());

        $(".sales_receipt_lines").each(function() {
            $("#product_count_sales_receipt").val(parseInt($("#product_count_sales_receipt").val())+1);
        });

        var counter = 0;
        var checker = 0;

        $(".sales_receipt_lines").find('.sales_receipt_data').each(function() {
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
            url: "{{ route('add_sales_receipt') }}",
            dataType: "text",
            data: $('#add_sales_receipt_form').serialize(),
            success: function (data) {
                swal("Done!", "Added sales receipt", "success");
                $("#product_count_sales_receipt").val('0');
                checker = 0;
                counter = 0;
                $('#add_sales_receipt_form')[0].reset();
                $('.sales_receipt_lines').remove();
                
                sales_table.ajax.reload();
                sales_table_invoice.ajax.reload();
            },
            error: function (data) {
                swal("Error!", "Sales receipt failed", "error");
            }
        });

    }

    function addRefundReceipt(){

        $('#total_balance_refund_receipt').val($('#refund_receipttotal').text());

        $(".refund_receipt_lines").each(function() {
            $("#product_count_refund_receipt").val(parseInt($("#product_count_refund_receipt").val())+1);
        });

        var counter = 0;
        var checker = 0;

        $(".refund_receipt_lines").find('.refund_receipt_data').each(function() {
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
            url: "{{ route('add_refund_receipt') }}",
            dataType: "text",
            data: $('#add_refund_receipt_form').serialize(),
            success: function (data) {
                swal("Done!", "Added refund receipt", "success");
                $("#product_count_refund_receipt").val('0');
                checker = 0;
                counter = 0;
                $('#add_refund_receipt_form')[0].reset();
                $('.refund_receipt_lines').remove();
                
                sales_table.ajax.reload();
                sales_table_invoice.ajax.reload();
            },
            error: function (data) {
                swal("Error!", "Refund receipt failed", "error");
            }
        });

    }

    function addDelayedCharge(){

        $('#total_balance_delayed_charge').val($('#delayed_chargetotal').text());

        $(".delayed_charge_lines").each(function() {
            $("#product_count_delayed_charge").val(parseInt($("#product_count_delayed_charge").val())+1);
        });

        var counter = 0;
        var checker = 0;

        $(".delayed_charge_lines").find('.delayed_charge_data').each(function() {
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
            url: "{{ route('add_delayed_charge') }}",
            dataType: "text",
            data: $('#add_delayed_charge_form').serialize(),
            success: function (data) {
                swal("Done!", "Added delayed charge", "success");
                $("#product_count_delayed_charge").val('0');
                checker = 0;
                counter = 0;
                $('#add_delayed_charge_form')[0].reset();
                $('.delayed_charge_lines').remove();
                
                sales_table.ajax.reload();
                sales_table_invoice.ajax.reload();
            },
            error: function (data) {
                swal("Error!", "Delayed charge failed", "error");
            }
        });

    }

    function addDelayedCredit(){

    $('#total_balance_delayed_credit').val($('#delayed_credittotal').text());

    $(".delayed_credit_lines").each(function() {
        $("#product_count_delayed_credit").val(parseInt($("#product_count_delayed_credit").val())+1);
    });

    var counter = 0;
    var checker = 0;

    $(".delayed_credit_lines").find('.delayed_credit_data').each(function() {
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
        url: "{{ route('add_delayed_credit') }}",
        dataType: "text",
        data: $('#add_delayed_credit_form').serialize(),
        success: function (data) {
            swal("Done!", "Added delayed credit", "success");
            $("#product_count_delayed_credit").val('0');
            checker = 0;
            counter = 0;
            $('#add_delayed_credit_form')[0].reset();
            $('.delayed_credit_lines').remove();
            
            sales_table.ajax.reload();
            sales_table_invoice.ajax.reload();
        },
        error: function (data) {
            swal("Error!", "Delayed credit failed", "error");
        }
    });

    }

    function addCreditNote(){

        $('#total_balance_credit_note').val($('#credit_notetotal').text());

        $(".credit_note_lines").each(function() {
            $("#product_count_credit_note").val(parseInt($("#product_count_credit_note").val())+1);
        });

        var counter = 0;
        var checker = 0;

        $(".credit_note_lines").find('.credit_note_data').each(function() {
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
            url: "{{ route('add_credit_note') }}",
            dataType: "text",
            data: $('#add_credit_note_form').serialize(),
            success: function (data) {
                swal("Done!", "Added credit note", "success");
                $("#product_count_credit_note").val('0');
                checker = 0;
                counter = 0;
                $('#add_credit_note_form')[0].reset();
                $('.credit_note_lines').remove();
                
                sales_table.ajax.reload();
                sales_table_invoice.ajax.reload();
            },
            error: function (data) {
                swal("Error!", "Credit note failed", "error");
            }
        });

    }

function addExpense(){

    //$('#total_balance').val($('#invoicetotal').text());
    
    $(".expense_lines_item").each(function() {
        $("#item_count_expenses").val(parseInt($("#item_count_expenses").val())+1);
    });

    $(".expense_lines_account").each(function() {
        $("#account_count_expenses").val(parseInt($("#account_count_expenses").val())+1);
    });

    var counter = 0;
    var checker = 0;

    var counter1 = 0;
    var checker1 = 0;

    $(".expense_lines_item").find('.expense_data').each(function() {
        var id = $(this).attr("id");
        var name = id.replace(id.match(/(\d+)/g)[0], '').trim();  
        
        $(this).attr("name", name+counter);
        
        checker++;
        if(checker%4==0){
            counter++;
        }
    });

    $(".expense_lines_account").find('.expense_data').each(function() {
        var id = $(this).attr("id");
        var name = id.replace(id.match(/(\d+)/g)[0], '').trim();  
        
        $(this).attr("name", name+counter1);
        
        checker1++;
        if(checker1%3==0){
            counter1++;
        }
    });


    $.ajax({
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('add_expense') }}",
        dataType: "text",
        data: $('#add_expense_form').serialize(),
        success: function (data) {
            swal("Done!", "Added expense", "success");
            $("#item_count_expenses").val('0');
            $("#accountcount_expenses").val('0');
            checker = 0;
            counter = 0;
            $('#add_expense_form')[0].reset();
            $('.expense_lines_item').remove();
            $('.expense_lines_account').remove();
            sales_table.ajax.reload();
            sales_table_invoice.ajax.reload();
        },
        error: function (data) {
            swal("Error!", "Expense failed", "error");
        }
    });

}
    
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

        Date.prototype.toDateInputValue = (function() {
            var local = new Date(this);
            local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
            return local.toJSON().slice(0,10);
        });

        Date.prototype.addDays = function(days) {
            this.setDate(this.getDate() + parseInt(days));
            return this;
        };

        // ------------------------------------------------------------- INVOICE STARTS HERE --------------------------
        $(document).on('change', '#term', function(event){
            event.preventDefault();

            var term = $('#term').val();

            if(term=="Due on receipt" && $('#invoicedate').val()==""){
                $('#invoicedate').val(new Date().toDateInputValue());
                $('#invoiceduedate').val(new Date().toDateInputValue());
            }else if(term=="Due on receipt"){
                $('#invoiceduedate').val($('#invoicedate').val());
            }else if(term=="Net 15"  && $('#invoicedate').val()==""){
                $('#invoicedate').val(new Date().toDateInputValue());
                $('#invoiceduedate').val(new Date(new Date().getTime()+(15*24*60*60*1000)).toDateInputValue());
            }else if(term=="Net 15"){
                var date= $('#invoicedate')[0].valueAsDate;
                date.setDate(date.getDate() + 15);
                $('#invoiceduedate')[0].valueAsDate = date;
            }else if(term=="Net 30"  && $('#invoicedate').val()==""){
                $('#invoicedate').val(new Date().toDateInputValue());
                $('#invoiceduedate').val(new Date(new Date().getTime()+(30*24*60*60*1000)).toDateInputValue());
            }else if(term=="Net 30"){
                var date= $('#invoicedate')[0].valueAsDate;
                date.setDate(date.getDate() + 30);
                $('#invoiceduedate')[0].valueAsDate = date;
            }else if(term=="Net 60"  && $('#invoicedate').val()==""){
                $('#invoicedate').val(new Date().toDateInputValue());
                $('#invoiceduedate').val(new Date(new Date().getTime()+(60*24*60*60*1000)).toDateInputValue());
            }else if(term=="Net 60"){
                var date= $('#invoicedate')[0].valueAsDate;
                date.setDate(date.getDate() + 60);
                $('#invoiceduedate')[0].valueAsDate = date;
            }else{
                
            }
        });

        $(document).on('change', '#invoicedate', function(event){
            event.preventDefault();

            var term = $('#term').val();

            if(term=="Due on receipt"){
                $('#invoiceduedate').val($('#invoicedate').val());
            }else if(term=="Net 15"){
                var date= $('#invoicedate')[0].valueAsDate;
                date.setDate(date.getDate() + 15);
                $('#invoiceduedate')[0].valueAsDate = date;
            }else if(term=="Net 30"){
                var date= $('#invoicedate')[0].valueAsDate;
                date.setDate(date.getDate() + 30);
                $('#invoiceduedate')[0].valueAsDate = date;
            }else if(term=="Net 60"){
                var date= $('#invoicedate')[0].valueAsDate;
                date.setDate(date.getDate() + 60);
                $('#invoiceduedate')[0].valueAsDate = date;
            }else{
                $('#invoiceduedate').val($('#invoicedate').val());
            }
        });


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
                        $('#bill_address').val('{{$customer->street." ".$customer->city." ".$customer->state." ".$customer->postal_code." ".$customer->country}}');
                        $('#term').val('{{$customer->terms}}');
                        $('#email').val('{{$customer->email}}');
                    }
            @endforeach
            }
        });

        $(document).on('change', '.product_qty', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount'  + position).html($('#select_product_rate'  + position).val() * $('#product_qty' + position).val());
           
            update_total();
        });

        $(document).on('change', '.invoice_data', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount'  + position).html($('#select_product_rate'  + position).val() * $('#product_qty' + position).val());
           
            update_total();
        });
        

        $("#add_lines_invoice").click(function(event){
            event.preventDefault();
            var markup = '<tr class="invoice_lines" id="invoice_line'+$('#invoice_table tr').length+'"><td class="pt-3-half" id="number_tag" contenteditable="false">'+$('#invoice_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="invoice_data product_select" id="select_product_name'+$('#invoice_table tr').length+'"><option value=""></option>@foreach($products_and_services as $product)<option value="{{$product->product_id}}">{{$product->product_name}}</option>@endforeach</select></td><td class="pt-3-half"><input class="invoice_data product_description" id="select_product_description'+$('#invoice_table tr').length+'" style="border:0;"></td><td class="pt-3-half"><input type="number" class="invoice_data product_qty" onclick="this.select();" id="product_qty'+$('#invoice_table tr').length+'" style="border:0; text-align:center;" value="1"></td><td class="pt-3-half"><input class="invoice_data product_rate" id="select_product_rate'+$('#invoice_table tr').length+'" style="border:0;"></td><td class="pt-3-half product_total" id="total_amount'+$('#invoice_table tr').length+'"></td><td class="pt-3-half"><a href="#" id="delete_product'+$('#invoice_table tr').length+'" class="fa fa-trash delete_product"></a></td></tr>';
            
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
            
            var line_counter = 1;
            var delete_counter = 1;
            var tag_counter = 1;
            var product_id_counter = 1;
            var description_id_counter = 1;
            var qty_id_counter = 1;
            var rate_id_counter = 1;
            var total_id_counter = 1;

            $(".invoice_lines").each(function() {
                $(this).attr("id","invoice_line"+line_counter);
                line_counter++;
            });

            $(".delete_product").each(function() {
                $(this).attr("id","delete_product"+delete_counter);
                delete_counter++;
            });

            $(".invoice_lines").find('#number_tag').each(function() {
                $(this).html(tag_counter);
                tag_counter++;
            });

            $('.product_select').each(function() {
                $(this).attr("id","select_product_name"+product_id_counter);
                product_id_counter++;
            });

            $('.product_description').each(function() {
                $(this).attr("id","select_product_description"+description_id_counter);
                description_id_counter++;
            });

            $('.product_qty').each(function() {
                $(this).attr("id","product_qty"+qty_id_counter);
                qty_id_counter++;
            });

            $('.product_rate').each(function() {
                $(this).attr("id","select_product_rate"+rate_id_counter);
                rate_id_counter++;
            });

            $(".product_total").each(function() {
                $(this).attr("id","total_amount"+total_id_counter);
                total_id_counter++;
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
                        $('#e_bill_address').val('{{$customer->street." ".$customer->city." ".$customer->state." ".$customer->postal_code." ".$customer->country}}');
                        $('#e_email').val('{{$customer->email}}');
                    }
            @endforeach
            }
        });

        $(document).on('change', '.product_qty_estimate', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_estimate'  + position).html($('#select_product_rate_estimate'  + position).val() * $('#product_qty_estimate' + position).val());
           
            update_total_estimate();
        });

        $(document).on('change', '.estimate_data', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_estimate'  + position).html($('#select_product_rate_estimate'  + position).val() * $('#product_qty_estimate' + position).val());
           
            update_total_estimate();
        });


        $("#add_lines_estimate").click(function(event){
            event.preventDefault();
            var markup = '<tr class="estimate_lines" id="estimate_line'+$('#estimate_table tr').length+'"><td class="pt-3-half" id="number_tag_estimate" contenteditable="false">'+$('#estimate_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="estimate_data product_select_estimate" id="select_product_name_estimate'+$('#estimate_table tr').length+'"><option value=""></option>@foreach($products_and_services as $product)<option value="{{$product->product_id}}">{{$product->product_name}}</option>@endforeach</select></td><td class="pt-3-half"><input class="estimate_data product_description_estimate" id="select_product_description_estimate'+$('#estimate_table tr').length+'" style="border:0;"></td><td class="pt-3-half"><input type="number" class="estimate_data product_qty_estimate" onclick="this.select();" id="product_qty_estimate'+$('#estimate_table tr').length+'" style="border:0; text-align:center;" value="1"></td><td class="pt-3-half"><input class="estimate_data product_rate_estimate" id="select_product_rate_estimate'+$('#estimate_table tr').length+'" style="border:0;"></td><td class="pt-3-half product_total_estimate" id="total_amount_estimate'+$('#estimate_table tr').length+'"></td><td class="pt-3-half"><a href="#" id="delete_product_estimate'+$('#estimate_table tr').length+'" class="fa fa-trash delete_product_estimate"></a></td></tr>';
            
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
            
            var line_counter = 1;
            var delete_counter = 1;
            var tag_counter = 1;
            var product_id_counter = 1;
            var description_id_counter = 1;
            var qty_id_counter = 1;
            var rate_id_counter = 1;
            var total_id_counter = 1;

            $(".estimate_lines").each(function() {
                $(this).attr("id","estimate_line"+line_counter);
                line_counter++;
            });

            $(".delete_product_estimate").each(function() {
                $(this).attr("id","delete_product_estimate"+delete_counter);
                delete_counter++;
            });

            $(".estimate_lines").find('#number_tag_estimate').each(function() {
                $(this).html(tag_counter);
                tag_counter++;
            });

            $('.product_select_estimate').each(function() {
                $(this).attr("id","select_product_name_estimate"+product_id_counter);
                product_id_counter++;
            });

            $('.product_description_estimate').each(function() {
                $(this).attr("id","select_product_description_estimate"+description_id_counter);
                description_id_counter++;
            });

            $('.product_qty_estimate').each(function() {
                $(this).attr("id","product_qty_estimate"+qty_id_counter);
                qty_id_counter++;
            });

            $('.product_rate_estimate').each(function() {
                $(this).attr("id","select_product_rate_estimate"+rate_id_counter);
                rate_id_counter++;
            });

            $(".product_total_estimate").each(function() {
                $(this).attr("id","total_amount_estimate"+total_id_counter);
                total_id_counter++;
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

    
        // ------------------------------------------------------------- SALES RECEIPT STARTS HERE --------------------------
        
        $(document).on('change', '.product_select_sales_receipt', function(event){
            event.preventDefault();
            var id = $(this).val();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            if(id == ""){
                $('#select_product_description_sales_receipt' + position).val('');
                $('#select_product_rate_sales_receipt' + position).val('');
                $('#total_amount_sales_receipt' + position).html('');
            }else{
            @foreach($products_and_services as $product)
                    if(id == {{$product->product_id}}){
                        var price = '{{number_format($product->product_sales_price,2)}}';
                        $('#select_product_description_sales_receipt' + position).val('{{$product->product_sales_description}}');
                        $('#select_product_rate_sales_receipt' + position).val(price);
                        $('#total_amount_sales_receipt' + position).html(price * $('#product_qty_sales_receipt' + position).val());
                    }
            @endforeach
            }

            update_total_sales_receipt();
        });

        $(document).on('change', '#salesrcustomer', function(event){
            event.preventDefault();
            var id = $(this).val();
            if(id == ""){
                $('#sales_receiptbalance').html('PHP 0.00');
                $('#big_sales_receiptbalance').html('PHP 0.00');
            }else{
            @foreach($customers as $customer)
                    if(id == {{$customer->customer_id}}){
                        $('#sales_receiptbalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#big_sales_receiptbalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#sr_bill_address').val('{{$customer->street." ".$customer->city." ".$customer->state." ".$customer->postal_code." ".$customer->country}}');
                        $('#sr_payment_method').val('{{$customer->payment_method}}');
                        $('#sr_email').val('{{$customer->email}}');
                    }
            @endforeach
            }
        });

        $(document).on('change', '.product_qty_sales_receipt', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_sales_receipt'  + position).html($('#select_product_rate_sales_receipt'  + position).val() * $('#product_qty_sales_receipt' + position).val());
           
            update_total_sales_receipt();
        });

        $(document).on('change', '.sales_receipt_data', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_sales_receipt'  + position).html($('#select_product_rate_sales_receipt'  + position).val() * $('#product_qty_sales_receipt' + position).val());
           
            update_total_sales_receipt();
        });


        $("#add_lines_sales_receipt").click(function(event){
            event.preventDefault();
            var markup = '<tr class="sales_receipt_lines" id="sales_receipt_line'+$('#sales_receipt_table tr').length+'"><td class="pt-3-half" id="number_tag_sales_receipt" contenteditable="false">'+$('#sales_receipt_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="sales_receipt_data product_select_sales_receipt" id="select_product_name_sales_receipt'+$('#sales_receipt_table tr').length+'"><option value=""></option>@foreach($products_and_services as $product)<option value="{{$product->product_id}}">{{$product->product_name}}</option>@endforeach</select></td><td class="pt-3-half"><input class="sales_receipt_data product_description_sales_receipt" id="select_product_description_sales_receipt'+$('#sales_receipt_table tr').length+'" style="border:0;"></td><td class="pt-3-half"><input type="number" class="sales_receipt_data product_qty_sales_receipt" onclick="this.select();" id="product_qty_sales_receipt'+$('#sales_receipt_table tr').length+'" style="border:0; text-align:center;" value="1"></td><td class="pt-3-half"><input class="sales_receipt_data product_rate_sales_receipt" id="select_product_rate_sales_receipt'+$('#sales_receipt_table tr').length+'" style="border:0;"></td><td class="pt-3-half product_total_sales_receipt" id="total_amount_sales_receipt'+$('#sales_receipt_table tr').length+'"></td><td class="pt-3-half"><a href="#" id="delete_product_sales_receipt'+$('#sales_receipt_table tr').length+'" class="fa fa-trash delete_product_sales_receipt"></a></td></tr>';
            
            $("#sales_receipt_table").append(markup);


        }); 

        $("#clear_lines_sales_receipt").click(function(event){
            event.preventDefault();
            $('.sales_receipt_lines').remove();

            $('#sales_receipttotal').html('0.00');
        }); 

        $(document).on('click', '.delete_product_sales_receipt', function(event){
            event.preventDefault();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#sales_receipt_line'+position).remove();
            
            var line_counter = 1;
            var delete_counter = 1;
            var tag_counter = 1;
            var product_id_counter = 1;
            var description_id_counter = 1;
            var qty_id_counter = 1;
            var rate_id_counter = 1;
            var total_id_counter = 1;

            $(".sales_receipt_lines").each(function() {
                $(this).attr("id","sales_receipt_line"+line_counter);
                line_counter++;
            });

            $(".delete_product_sales_receipt").each(function() {
                $(this).attr("id","delete_product_sales_receipt"+delete_counter);
                delete_counter++;
            });

            $(".sales_receipt_lines").find('#number_tag_sales_receipt').each(function() {
                $(this).html(tag_counter);
                tag_counter++;
            });

            $('.product_select_sales_receipt').each(function() {
                $(this).attr("id","select_product_name_sales_receipt"+product_id_counter);
                product_id_counter++;
            });

            $('.product_description_sales_receipt').each(function() {
                $(this).attr("id","select_product_description_sales_receipt"+description_id_counter);
                description_id_counter++;
            });

            $('.product_qty_sales_receipt').each(function() {
                $(this).attr("id","product_qty_sales_receipt"+qty_id_counter);
                qty_id_counter++;
            });

            $('.product_rate_sales_receipt').each(function() {
                $(this).attr("id","select_product_rate_sales_receipt"+rate_id_counter);
                rate_id_counter++;
            });

            $(".product_total_sales_receipt").each(function() {
                $(this).attr("id","total_amount_sales_receipt"+total_id_counter);
                total_id_counter++;
            });

            update_total_sales_receipt();
        }); 

        function update_total_sales_receipt(){
            var total_sales_receipt = 0;
            $('.product_total_sales_receipt').each(function() {
                var add_total = $(this).html();
                if(add_total==""){
                    add_total=0;
                }
                total_sales_receipt += parseFloat(add_total);
                $('#sales_receipttotal').html(total_sales_receipt);
            });
        }

        // ------------------------------------------------------------- REFUND RECEIPT STARTS HERE --------------------------
        
        $(document).on('change', '.product_select_refund_receipt', function(event){
            event.preventDefault();
            var id = $(this).val();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            if(id == ""){
                $('#select_product_description_refund_receipt' + position).val('');
                $('#select_product_rate_refund_receipt' + position).val('');
                $('#total_amount_refund_receipt' + position).html('');
            }else{
            @foreach($products_and_services as $product)
                    if(id == {{$product->product_id}}){
                        var price = '{{number_format($product->product_sales_price,2)}}';
                        $('#select_product_description_refund_receipt' + position).val('{{$product->product_sales_description}}');
                        $('#select_product_rate_refund_receipt' + position).val(price);
                        $('#total_amount_refund_receipt' + position).html(price * $('#product_qty_refund_receipt' + position).val());
                    }
            @endforeach
            }

            update_total_refund_receipt();
        });

        $(document).on('change', '#refundrcustomer', function(event){
            event.preventDefault();
            var id = $(this).val();
            if(id == ""){
                $('#refund_receiptbalance').html('PHP 0.00');
                $('#big_refund_receiptbalance').html('PHP 0.00');
            }else{
            @foreach($customers as $customer)
                    if(id == {{$customer->customer_id}}){
                        $('#refund_receiptbalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#big_refund_receiptbalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#rr_bill_address').val('{{$customer->street." ".$customer->city." ".$customer->state." ".$customer->postal_code." ".$customer->country}}');
                        $('#rr_payment_method').val('{{$customer->payment_method}}');
                        $('#rr_email').val('{{$customer->email}}');
                    }
            @endforeach
            }
        });

        $(document).on('change', '.product_qty_refund_receipt', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_refund_receipt'  + position).html($('#select_product_rate_refund_receipt'  + position).val() * $('#product_qty_refund_receipt' + position).val());
           
            update_total_refund_receipt();
        });

        $(document).on('change', '.refund_receipt_data', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_refund_receipt'  + position).html($('#select_product_rate_refund_receipt'  + position).val() * $('#product_qty_refund_receipt' + position).val());
           
            update_total_refund_receipt();
        });


        $("#add_lines_refund_receipt").click(function(event){
            event.preventDefault();
            var markup = '<tr class="refund_receipt_lines" id="refund_receipt_line'+$('#refund_receipt_table tr').length+'"><td class="pt-3-half" id="number_tag_refund_receipt" contenteditable="false">'+$('#refund_receipt_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="refund_receipt_data product_select_refund_receipt" id="select_product_name_refund_receipt'+$('#refund_receipt_table tr').length+'"><option value=""></option>@foreach($products_and_services as $product)<option value="{{$product->product_id}}">{{$product->product_name}}</option>@endforeach</select></td><td class="pt-3-half"><input class="refund_receipt_data product_description_refund_receipt" id="select_product_description_refund_receipt'+$('#refund_receipt_table tr').length+'" style="border:0;"></td><td class="pt-3-half"><input type="number" class="refund_receipt_data product_qty_refund_receipt" onclick="this.select();" id="product_qty_refund_receipt'+$('#refund_receipt_table tr').length+'" style="border:0; text-align:center;" value="1"></td><td class="pt-3-half"><input class="refund_receipt_data product_rate_refund_receipt" id="select_product_rate_refund_receipt'+$('#refund_receipt_table tr').length+'" style="border:0;"></td><td class="pt-3-half product_total_refund_receipt" id="total_amount_refund_receipt'+$('#refund_receipt_table tr').length+'"></td><td class="pt-3-half"><a href="#" id="delete_product_refund_receipt'+$('#refund_receipt_table tr').length+'" class="fa fa-trash delete_product_refund_receipt"></a></td></tr>';
            
            $("#refund_receipt_table").append(markup);


        }); 

        $("#clear_lines_refund_receipt").click(function(event){
            event.preventDefault();
            $('.refund_receipt_lines').remove();

            $('#refund_receipttotal').html('0.00');
            $('#refund_receipttotal1').html('0.00');
            $('#rr_amount_refunded').val('0.00');
        }); 

        $(document).on('click', '.delete_product_refund_receipt', function(event){
            event.preventDefault();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#refund_receipt_line'+position).remove();
            
            var line_counter = 1;
            var delete_counter = 1;
            var tag_counter = 1;
            var product_id_counter = 1;
            var description_id_counter = 1;
            var qty_id_counter = 1;
            var rate_id_counter = 1;
            var total_id_counter = 1;

            $(".refund_receipt_lines").each(function() {
                $(this).attr("id","refund_receipt_line"+line_counter);
                line_counter++;
            });

            $(".delete_product_refund_receipt").each(function() {
                $(this).attr("id","delete_product_refund_receipt"+delete_counter);
                delete_counter++;
            });

            $(".refund_receipt_lines").find('#number_tag_refund_receipt').each(function() {
                $(this).html(tag_counter);
                tag_counter++;
            });

            $('.product_select_refund_receipt').each(function() {
                $(this).attr("id","select_product_name_refund_receipt"+product_id_counter);
                product_id_counter++;
            });

            $('.product_description_refund_receipt').each(function() {
                $(this).attr("id","select_product_description_refund_receipt"+description_id_counter);
                description_id_counter++;
            });

            $('.product_qty_refund_receipt').each(function() {
                $(this).attr("id","product_qty_refund_receipt"+qty_id_counter);
                qty_id_counter++;
            });

            $('.product_rate_refund_receipt').each(function() {
                $(this).attr("id","select_product_rate_refund_receipt"+rate_id_counter);
                rate_id_counter++;
            });

            $(".product_total_refund_receipt").each(function() {
                $(this).attr("id","total_amount_refund_receipt"+total_id_counter);
                total_id_counter++;
            });

            update_total_refund_receipt();
        }); 

        function update_total_refund_receipt(){
            var total_refund_receipt = 0;
            $('.product_total_refund_receipt').each(function() {
                var add_total = $(this).html();
                if(add_total==""){
                    add_total=0;
                }
                total_refund_receipt += parseFloat(add_total);
                $('#refund_receipttotal').html(total_refund_receipt);
                $('#refund_receipttotal1').html(total_refund_receipt);
                $('#rr_amount_refunded').val('0.00');
            });
        }

        // ------------------------------------------------------------- DELAYED CHARGE STARTS HERE --------------------------
        
        $(document).on('change', '.product_select_delayed_charge', function(event){
            event.preventDefault();
            var id = $(this).val();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            if(id == ""){
                $('#select_product_description_delayed_charge' + position).val('');
                $('#select_product_rate_delayed_charge' + position).val('');
                $('#total_amount_delayed_charge' + position).html('');
            }else{
            @foreach($products_and_services as $product)
                    if(id == {{$product->product_id}}){
                        var price = '{{number_format($product->product_sales_price,2)}}';
                        $('#select_product_description_delayed_charge' + position).val('{{$product->product_sales_description}}');
                        $('#select_product_rate_delayed_charge' + position).val(price);
                        $('#total_amount_delayed_charge' + position).html(price * $('#product_qty_delayed_charge' + position).val());
                    }
            @endforeach
            }

            update_total_delayed_charge();
        });

        $(document).on('change', '#delayedccustomer', function(event){
            event.preventDefault();
            var id = $(this).val();
            if(id == ""){
                $('#delayed_chargebalance').html('PHP 0.00');
                $('#big_delayed_chargebalance').html('PHP 0.00');
            }else{
            @foreach($customers as $customer)
                    if(id == {{$customer->customer_id}}){
                        $('#delayed_chargebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#big_delayed_chargebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                    }
            @endforeach
            }
        });

        $(document).on('change', '.product_qty_delayed_charge', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_delayed_charge'  + position).html($('#select_product_rate_delayed_charge'  + position).val() * $('#product_qty_delayed_charge' + position).val());
           
            update_total_delayed_charge();
        });

        $(document).on('change', '.delayed_charge_data', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_delayed_charge'  + position).html($('#select_product_rate_delayed_charge'  + position).val() * $('#product_qty_delayed_charge' + position).val());
           
            update_total_delayed_charge();
        });


        $("#add_lines_delayed_charge").click(function(event){
            event.preventDefault();
            var markup = '<tr class="delayed_charge_lines" id="delayed_charge_line'+$('#delayed_charge_table tr').length+'"><td class="pt-3-half" id="number_tag_delayed_charge" contenteditable="false">'+$('#delayed_charge_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="delayed_charge_data product_select_delayed_charge" id="select_product_name_delayed_charge'+$('#delayed_charge_table tr').length+'"><option value=""></option>@foreach($products_and_services as $product)<option value="{{$product->product_id}}">{{$product->product_name}}</option>@endforeach</select></td><td class="pt-3-half"><input class="delayed_charge_data product_description_delayed_charge" id="select_product_description_delayed_charge'+$('#delayed_charge_table tr').length+'" style="border:0;"></td><td class="pt-3-half"><input type="number" class="delayed_charge_data product_qty_delayed_charge" onclick="this.select();" id="product_qty_delayed_charge'+$('#delayed_charge_table tr').length+'" style="border:0; text-align:center;" value="1"></td><td class="pt-3-half"><input class="delayed_charge_data product_rate_delayed_charge" id="select_product_rate_delayed_charge'+$('#delayed_charge_table tr').length+'" style="border:0;"></td><td class="pt-3-half product_total_delayed_charge" id="total_amount_delayed_charge'+$('#delayed_charge_table tr').length+'"></td><td class="pt-3-half"><a href="#" id="delete_product_delayed_charge'+$('#delayed_charge_table tr').length+'" class="fa fa-trash delete_product_delayed_charge"></a></td></tr>';
            
            $("#delayed_charge_table").append(markup);


        }); 

        $("#clear_lines_delayed_charge").click(function(event){
            event.preventDefault();
            $('.delayed_charge_lines').remove();

            $('#delayed_chargetotal').html('0.00');
        }); 

        $(document).on('click', '.delete_product_delayed_charge', function(event){
            event.preventDefault();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#delayed_charge_line'+position).remove();
            
            var line_counter = 1;
            var delete_counter = 1;
            var tag_counter = 1;
            var product_id_counter = 1;
            var description_id_counter = 1;
            var qty_id_counter = 1;
            var rate_id_counter = 1;
            var total_id_counter = 1;

            $(".delayed_charge_lines").each(function() {
                $(this).attr("id","delayed_charge_line"+line_counter);
                line_counter++;
            });

            $(".delete_product_delayed_charge").each(function() {
                $(this).attr("id","delete_product_delayed_charge"+delete_counter);
                delete_counter++;
            });

            $(".delayed_charge_lines").find('#number_tag_delayed_charge').each(function() {
                $(this).html(tag_counter);
                tag_counter++;
            });

            $('.product_select_delayed_charge').each(function() {
                $(this).attr("id","select_product_name_delayed_charge"+product_id_counter);
                product_id_counter++;
            });

            $('.product_description_delayed_charge').each(function() {
                $(this).attr("id","select_product_description_delayed_charge"+description_id_counter);
                description_id_counter++;
            });

            $('.product_qty_delayed_charge').each(function() {
                $(this).attr("id","product_qty_delayed_charge"+qty_id_counter);
                qty_id_counter++;
            });

            $('.product_rate_delayed_charge').each(function() {
                $(this).attr("id","select_product_rate_delayed_charge"+rate_id_counter);
                rate_id_counter++;
            });

            $(".product_total_delayed_charge").each(function() {
                $(this).attr("id","total_amount_delayed_charge"+total_id_counter);
                total_id_counter++;
            });

            update_total_delayed_charge();
        }); 

        function update_total_delayed_charge(){
            var total_delayed_charge = 0;
            $('.product_total_delayed_charge').each(function() {
                var add_total = $(this).html();
                if(add_total==""){
                    add_total=0;
                }
                total_delayed_charge += parseFloat(add_total);
                $('#delayed_chargetotal').html(total_delayed_charge);
            });
        }

        // ------------------------------------------------------------- DELAYED CREDIT STARTS HERE --------------------------
        
        $(document).on('change', '.product_select_delayed_credit', function(event){
            event.preventDefault();
            var id = $(this).val();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            if(id == ""){
                $('#select_product_description_delayed_credit' + position).val('');
                $('#select_product_rate_delayed_credit' + position).val('');
                $('#total_amount_delayed_credit' + position).html('');
            }else{
            @foreach($products_and_services as $product)
                    if(id == {{$product->product_id}}){
                        var price = '{{number_format($product->product_sales_price,2)}}';
                        $('#select_product_description_delayed_credit' + position).val('{{$product->product_sales_description}}');
                        $('#select_product_rate_delayed_credit' + position).val(price);
                        $('#total_amount_delayed_credit' + position).html(price * $('#product_qty_delayed_credit' + position).val());
                    }
            @endforeach
            }

            update_total_delayed_credit();
        });

        $(document).on('change', '#delayedcreditcustomer', function(event){
            event.preventDefault();
            var id = $(this).val();
            if(id == ""){
                $('#delayed_creditbalance').html('PHP 0.00');
                $('#big_delayed_creditbalance').html('PHP 0.00');
            }else{
            @foreach($customers as $customer)
                    if(id == {{$customer->customer_id}}){
                        $('#delayed_creditbalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#big_delayed_creditbalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                    }
            @endforeach
            }
        });

        $(document).on('change', '.product_qty_delayed_credit', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_delayed_credit'  + position).html($('#select_product_rate_delayed_credit'  + position).val() * $('#product_qty_delayed_credit' + position).val());
           
            update_total_delayed_credit();
        });

        $(document).on('change', '.delayed_credit_data', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_delayed_credit'  + position).html($('#select_product_rate_delayed_credit'  + position).val() * $('#product_qty_delayed_credit' + position).val());
           
            update_total_delayed_credit();
        });


        $("#add_lines_delayed_credit").click(function(event){
            event.preventDefault();
            var markup = '<tr class="delayed_credit_lines" id="delayed_credit_line'+$('#delayed_credit_table tr').length+'"><td class="pt-3-half" id="number_tag_delayed_credit" contenteditable="false">'+$('#delayed_credit_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="delayed_credit_data product_select_delayed_credit" id="select_product_name_delayed_credit'+$('#delayed_credit_table tr').length+'"><option value=""></option>@foreach($products_and_services as $product)<option value="{{$product->product_id}}">{{$product->product_name}}</option>@endforeach</select></td><td class="pt-3-half"><input class="delayed_credit_data product_description_delayed_credit" id="select_product_description_delayed_credit'+$('#delayed_credit_table tr').length+'" style="border:0;"></td><td class="pt-3-half"><input type="number" class="delayed_credit_data product_qty_delayed_credit" onclick="this.select();" id="product_qty_delayed_credit'+$('#delayed_credit_table tr').length+'" style="border:0; text-align:center;" value="1"></td><td class="pt-3-half"><input class="delayed_credit_data product_rate_delayed_credit" id="select_product_rate_delayed_credit'+$('#delayed_credit_table tr').length+'" style="border:0;"></td><td class="pt-3-half product_total_delayed_credit" id="total_amount_delayed_credit'+$('#delayed_credit_table tr').length+'"></td><td class="pt-3-half"><a href="#" id="delete_product_delayed_credit'+$('#delayed_credit_table tr').length+'" class="fa fa-trash delete_product_delayed_credit"></a></td></tr>';
            
            $("#delayed_credit_table").append(markup);


        }); 

        $("#clear_lines_delayed_credit").click(function(event){
            event.preventDefault();
            $('.delayed_credit_lines').remove();

            $('#delayed_credittotal').html('0.00');
        }); 

        $(document).on('click', '.delete_product_delayed_credit', function(event){
            event.preventDefault();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#delayed_credit_line'+position).remove();
            
            var line_counter = 1;
            var delete_counter = 1;
            var tag_counter = 1;
            var product_id_counter = 1;
            var description_id_counter = 1;
            var qty_id_counter = 1;
            var rate_id_counter = 1;
            var total_id_counter = 1;

            $(".delayed_credit_lines").each(function() {
                $(this).attr("id","delayed_credit_line"+line_counter);
                line_counter++;
            });

            $(".delete_product_delayed_credit").each(function() {
                $(this).attr("id","delete_product_delayed_credit"+delete_counter);
                delete_counter++;
            });

            $(".delayed_credit_lines").find('#number_tag_delayed_credit').each(function() {
                $(this).html(tag_counter);
                tag_counter++;
            });

            $('.product_select_delayed_credit').each(function() {
                $(this).attr("id","select_product_name_delayed_credit"+product_id_counter);
                product_id_counter++;
            });

            $('.product_description_delayed_credit').each(function() {
                $(this).attr("id","select_product_description_delayed_credit"+description_id_counter);
                description_id_counter++;
            });

            $('.product_qty_delayed_credit').each(function() {
                $(this).attr("id","product_qty_delayed_credit"+qty_id_counter);
                qty_id_counter++;
            });

            $('.product_rate_delayed_credit').each(function() {
                $(this).attr("id","select_product_rate_delayed_credit"+rate_id_counter);
                rate_id_counter++;
            });

            $(".product_total_delayed_credit").each(function() {
                $(this).attr("id","total_amount_delayed_credit"+total_id_counter);
                total_id_counter++;
            });

            update_total_delayed_credit();
        }); 

        function update_total_delayed_credit(){
            var total_delayed_credit = 0;
            $('.product_total_delayed_credit').each(function() {
                var add_total = $(this).html();
                if(add_total==""){
                    add_total=0;
                }
                total_delayed_credit += parseFloat(add_total);
                $('#delayed_credittotal').html(total_delayed_credit);
            });
        }

        // ------------------------------------------------------------- CREDIT NOTICE STARTS HERE --------------------------
        
        $(document).on('change', '.product_select_credit_note', function(event){
            event.preventDefault();
            var id = $(this).val();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            if(id == ""){
                $('#select_product_description_credit_note' + position).val('');
                $('#select_product_rate_credit_note' + position).val('');
                $('#total_amount_credit_note' + position).html('');
            }else{
            @foreach($products_and_services as $product)
                    if(id == {{$product->product_id}}){
                        var price = '{{number_format($product->product_sales_price,2)}}';
                        $('#select_product_description_credit_note' + position).val('{{$product->product_sales_description}}');
                        $('#select_product_rate_credit_note' + position).val(price);
                        $('#total_amount_credit_note' + position).html(price * $('#product_qty_credit_note' + position).val());
                    }
            @endforeach
            }

            update_total_credit_note();
        });

        $(document).on('change', '#creditncustomer', function(event){
            event.preventDefault();
            var id = $(this).val();
            if(id == ""){
                $('#credit_notebalance').html('PHP 0.00');
                $('#big_credit_notebalance').html('PHP 0.00');
            }else{
            @foreach($customers as $customer)
                    if(id == {{$customer->customer_id}}){
                        $('#credit_notebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#big_credit_notebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#cn_bill_address').val('{{$customer->street." ".$customer->city." ".$customer->state." ".$customer->postal_code." ".$customer->country}}');
                        $('#cn_payment_method').val('{{$customer->payment_method}}');
                        $('#cn_email').val('{{$customer->email}}');
                    }
            @endforeach
            }
        });

        $(document).on('change', '.product_qty_credit_note', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_credit_note'  + position).html($('#select_product_rate_credit_note'  + position).val() * $('#product_qty_credit_note' + position).val());
           
            update_total_credit_note();
        });

        $(document).on('change', '.credit_note_data', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_credit_note'  + position).html($('#select_product_rate_credit_note'  + position).val() * $('#product_qty_credit_note' + position).val());
           
            update_total_credit_note();
        });


        $("#add_lines_credit_note").click(function(event){
            event.preventDefault();
            var markup = '<tr class="credit_note_lines" id="credit_note_line'+$('#credit_note_table tr').length+'"><td class="pt-3-half" id="number_tag_credit_note" contenteditable="false">'+$('#credit_note_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="credit_note_data product_select_credit_note" id="select_product_name_credit_note'+$('#credit_note_table tr').length+'"><option value=""></option>@foreach($products_and_services as $product)<option value="{{$product->product_id}}">{{$product->product_name}}</option>@endforeach</select></td><td class="pt-3-half"><input class="credit_note_data product_description_credit_note" id="select_product_description_credit_note'+$('#credit_note_table tr').length+'" style="border:0;"></td><td class="pt-3-half"><input type="number" class="credit_note_data product_qty_credit_note" onclick="this.select();" id="product_qty_credit_note'+$('#credit_note_table tr').length+'" style="border:0; text-align:center;" value="1"></td><td class="pt-3-half"><input class="credit_note_data product_rate_credit_note" id="select_product_rate_credit_note'+$('#credit_note_table tr').length+'" style="border:0;"></td><td class="pt-3-half product_total_credit_note" id="total_amount_credit_note'+$('#credit_note_table tr').length+'"></td><td class="pt-3-half"><a href="#" id="delete_product_credit_note'+$('#credit_note_table tr').length+'" class="fa fa-trash delete_product_credit_note"></a></td></tr>';
            
            $("#credit_note_table").append(markup);


        }); 

        $("#clear_lines_credit_note").click(function(event){
            event.preventDefault();
            $('.credit_note_lines').remove();

            $('#credit_notetotal').html('0.00');
        }); 

        $(document).on('click', '.delete_product_credit_note', function(event){
            event.preventDefault();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#credit_note_line'+position).remove();
            
            var line_counter = 1;
            var delete_counter = 1;
            var tag_counter = 1;
            var product_id_counter = 1;
            var description_id_counter = 1;
            var qty_id_counter = 1;
            var rate_id_counter = 1;
            var total_id_counter = 1;

            $(".credit_note_lines").each(function() {
                $(this).attr("id","credit_note_line"+line_counter);
                line_counter++;
            });

            $(".delete_product_credit_note").each(function() {
                $(this).attr("id","delete_product_credit_note"+delete_counter);
                delete_counter++;
            });

            $(".credit_note_lines").find('#number_tag_credit_note').each(function() {
                $(this).html(tag_counter);
                tag_counter++;
            });

            $('.product_select_credit_note').each(function() {
                $(this).attr("id","select_product_name_credit_note"+product_id_counter);
                product_id_counter++;
            });

            $('.product_description_credit_note').each(function() {
                $(this).attr("id","select_product_description_credit_note"+description_id_counter);
                description_id_counter++;
            });

            $('.product_qty_credit_note').each(function() {
                $(this).attr("id","product_qty_credit_note"+qty_id_counter);
                qty_id_counter++;
            });

            $('.product_rate_credit_note').each(function() {
                $(this).attr("id","select_product_rate_credit_note"+rate_id_counter);
                rate_id_counter++;
            });

            $(".product_total_credit_note").each(function() {
                $(this).attr("id","total_amount_credit_note"+total_id_counter);
                total_id_counter++;
            });

            update_total_credit_note();
        }); 

        function update_total_credit_note(){
            var total_credit_note = 0;
            $('.product_total_credit_note').each(function() {
                var add_total = $(this).html();
                if(add_total==""){
                    add_total=0;
                }
                total_credit_note += parseFloat(add_total);
                $('#credit_notetotal').html(total_credit_note);
            });
        }

        // ------------------------------------------------------------- EXPENSE TRANSACTION STARTS HERE --------------------------
        
        $(document).on('change', '.product_select_expense', function(event){
            event.preventDefault();
            var id = $(this).val();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            if(id == ""){
                $('#select_product_description_expense' + position).val('');
                $('#select_product_rate_expense' + position).val('');
                $('#total_amount_expense' + position).html('');
            }else{
            @foreach($products_and_services as $product)
                    if(id == {{$product->product_id}}){
                        var price = '{{number_format($product->product_sales_price,2)}}';
                        $('#select_product_description_expense' + position).val('{{$product->product_sales_description}}');
                        $('#select_product_rate_expense' + position).val(price);
                        $('#total_amount_expense' + position).html(price * $('#product_qty_expense' + position).val());
                    }
            @endforeach
            }

            update_total_expense();
        });

        $(document).on('change', '#expensepayee', function(event){
            event.preventDefault();
            var id = $(this).val();
            if(id == ""){
                $('#expensebalance').html('PHP 0.00');
                $('#big_expensebalance').html('PHP 0.00');
            }else{
            @foreach($customers as $customer)
                    if(id == {{$customer->customer_id}}){
                        $('#expensebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#big_expensebalance').html('PHP {{number_format($customer->opening_balance,2)}}');
                        $('#expense_bill_address').val('{{$customer->street." ".$customer->city." ".$customer->state." ".$customer->postal_code." ".$customer->country}}');
                        $('#expense_payment_method').val('{{$customer->payment_method}}');
                        $('#expense_email').val('{{$customer->email}}');
                    }
            @endforeach
            }
        });

        $(document).on('change', '.product_qty_expense', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_expense'  + position).html($('#select_product_rate_expense'  + position).val() * $('#product_qty_expense' + position).val());
           
            update_total_expense();
        });

        $(document).on('change', '.expense_data', function(){
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#total_amount_expense'  + position).html($('#select_product_rate_expense'  + position).val() * $('#product_qty_expense' + position).val());
           
            update_total_expense();
        });


        $("#add_lines_expense_item").click(function(event){
            event.preventDefault();
            var markup = '<tr class="expense_lines_item" id="expense_line_item'+$('#expense_item_table tr').length+'"><td class="pt-3-half" id="number_tag_expense_item" contenteditable="false">'+$('#expense_item_table tr').length+'</td><td class="pt-3-half"><select style="border:0; width:100%;" class="expense_data product_select_expense" id="select_product_name_expense'+$('#expense_item_table tr').length+'"><option value=""></option>@foreach($products_and_services as $product)<option value="{{$product->product_id}}">{{$product->product_name}}</option>@endforeach</select></td><td class="pt-3-half"><input class="expense_data product_description_expense" id="select_product_description_expense'+$('#expense_item_table tr').length+'" style="border:0;"></td><td class="pt-3-half"><input type="number" class="expense_data product_qty_expense" onclick="this.select();" id="product_qty_expense'+$('#expense_item_table tr').length+'" style="border:0; text-align:center;" value="1"></td><td class="pt-3-half"><input class="expense_data product_rate_expense" id="select_product_rate_expense'+$('#expense_item_table tr').length+'" style="border:0;"></td><td class="pt-3-half product_total_expense" id="total_amount_expense'+$('#expense_item_table tr').length+'"></td><td class="pt-3-half"><a href="#" id="delete_product_expense'+$('#expense_item_table tr').length+'" class="fa fa-trash delete_product_expense"></a></td></tr>';
            
            $("#expense_item_table").append(markup);


        }); 

        $("#clear_lines_expense_item").click(function(event){
            event.preventDefault();
            $('.expense_lines_item').remove();

            update_total_expense();
        }); 

        $("#add_lines_expense_account").click(function(event){
            event.preventDefault();
            var markup = '<tr class="expense_lines_account" id="expense_line_account'+$('#expense_account_table tr').length+'"><td class="pt-3-half" id="number_tag_expense_account" contenteditable="false">'+$('#expense_account_table tr').length+'</td><td class="pt-3-half"><input style="border:0; width:100%;" list="account_expenses" class="expense_data account_select_expense" id="select_account_expense'+$('#expense_account_table tr').length+'"></td><td class="pt-3-half"><input class="expense_data description_select_expense" id="select_description_expense'+$('#expense_account_table tr').length+'" style="border:0;"></td><td class="pt-3-half"><input type="number" class="expense_data amount_select_expense" onclick="this.select();" id="select_expense_amount'+$('#expense_account_table tr').length+'" style="border:0; text-align:center;"></td><td class="pt-3-half"><a href="#" id="delete_account_expense'+$('#expense_account_table tr').length+'" class="fa fa-trash delete_account_expense"></a></td></tr>';
            
            $("#expense_account_table").append(markup);
        }); 

        $("#clear_lines_expense_account").click(function(event){
            event.preventDefault();
            $('.expense_lines_account').remove();

            update_total_expense();
        }); 

        $(document).on('click', '.delete_product_expense', function(event){
            event.preventDefault();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#expense_line_item'+position).remove();
            
            var line_counter = 1;
            var delete_counter = 1;
            var tag_counter = 1;
            var product_id_counter = 1;
            var description_id_counter = 1;
            var qty_id_counter = 1;
            var rate_id_counter = 1;
            var total_id_counter = 1;

            $(".expense_lines_item").each(function() {
                $(this).attr("id","expense_line"+line_counter);
                line_counter++;
            });

            $(".delete_product_expense").each(function() {
                $(this).attr("id","delete_product_expense"+delete_counter);
                delete_counter++;
            });

            $(".expense_lines_item").find('#number_tag_expense_item').each(function() {
                $(this).html(tag_counter);
                tag_counter++;
            });

            $('.product_select_expense').each(function() {
                $(this).attr("id","select_product_name_expense"+product_id_counter);
                product_id_counter++;
            });

            $('.product_description_expense').each(function() {
                $(this).attr("id","select_product_description_expense"+description_id_counter);
                description_id_counter++;
            });

            $('.product_qty_expense').each(function() {
                $(this).attr("id","product_qty_expense"+qty_id_counter);
                qty_id_counter++;
            });

            $('.product_rate_expense').each(function() {
                $(this).attr("id","select_product_rate_expense"+rate_id_counter);
                rate_id_counter++;
            });

            $(".product_total_expense").each(function() {
                $(this).attr("id","total_amount_expense"+total_id_counter);
                total_id_counter++;
            });

            update_total_expense();
        }); 

        $(document).on('click', '.delete_account_expense', function(event){
            event.preventDefault();
            var position = $(this).attr('id').replace(/[^0-9\.]/g, '');
            $('#expense_line_account'+position).remove();
            
            var line_counter = 1;
            var delete_counter = 1;
            var tag_counter = 1;
            var account_id_counter = 1;
            var description_id_counter = 1;
            var qty_id_counter = 1;
            var rate_id_counter = 1;
            var total_id_counter = 1;

            $(".expense_lines_account").each(function() {
                $(this).attr("id","expense_line_account"+line_counter);
                line_counter++;
            });

            $(".account_select_expense").each(function() {
                $(this).attr("id","select_account_expense"+account_id_counter);
                account_id_counter++;
            });

            $(".delete_account_expense").each(function() {
                $(this).attr("id","delete_account_expense"+delete_counter);
                delete_counter++;
            });

            $(".expense_lines_account").find('#number_tag_expense_account').each(function() {
                $(this).html(tag_counter);
                tag_counter++;
            });

            $('.description_select_expense').each(function() {
                $(this).attr("id","select_description_expense"+description_id_counter);
                description_id_counter++;
            });

            $('.amount_select_expense').each(function() {
                $(this).attr("id","select_expense_amount"+total_id_counter);
                total_id_counter++;
            });

            update_total_expense();
        }); 

        function update_total_expense(){
            var total_expense = 0;
            $('.product_total_expense').each(function() {
                var add_total = $(this).html();
                if(add_total==""){
                    add_total=0;
                }
                total_expense += parseFloat(add_total);
                $('#expensetotal').html(total_expense);
            });
        }

    });    

    
</script>