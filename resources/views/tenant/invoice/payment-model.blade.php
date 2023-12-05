<!-- Button to trigger the modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inlineForm">
    Make Payment
</button>
<!-- Modal -->
<div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Make Payment</h4>
            </div>
            <div class="row m-2">
                <div class="text-black col-5" value="{{ $invoice->id }}">Invoice#:</div>
            </div>
            <form action="{{ route('tenant.invoice.payment') }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="invoice_id" name="invoice_id" value="{{ $invoice->id }}">
                    <!-- Other hidden fields for payment details -->
                    <div class="row">
                        <div class="col-md-12 mb-1">
                            <label class="form-label" for="basicSelectpay-method">Payment Method</label>
                            <select class="form-select text-black" id="basicSelectpay-method" disabled>
                                <option>Mpesa</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label class="form-label" for="basicSelectcurrency">Currency</label>
                            <select class="form-select text-black" id="basicSelectcurrency" disabled>
                                <option selected>KES (Kenyan Shilling) - Kenya</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label class="form-label" for="invoice_amount">Amount</label>
                            <input type="text" id="invoice_amount" class="form-control" readonly name="amount" value="{{ $invoice->amount }}" />
                        </div>
                        <div class="col-md-12 mb-2">
                            <label class="form-label" for="invoice_phonenumber">Phone Number</label>
                            <input type="number" id="invoice_phonenumber" class="form-control" placeholder="PhoneNumber" name="phonenumber" />
                        </div>
                    </div>
                    <div class="text">
                        <p>Equity Bank Acc No. 123456789112</p>
                        <p class="text-success">Important: Keep your phone unlocked. Mpesa will prompt for PIN to complete payment.</p>
                    </div>
                    <div class="d-grid col-lg-12 col-md-12 mb-1 mb-lg-0">
                        <button type="submit" class="btn btn-primary">Lipa Na Mpesa</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- payment invoice model --}}
<div class="modal" tabindex="-1" id="viewInvoiceModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Payment Receipt</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <label class="form-label">Invoice Number</label>
                        <input class="form-control" type="text" id="inv_number" disabled>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Invoice Date</label>
                        <input class="form-control" type="text" id="inv_date" disabled>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Lease</label>
                        <input class="form-control" type="text" id="lease" disabled>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Amount</label>
                        <input class="form-control" type="text" id="amount" disabled>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Status</label>
                        <input class="form-control" type="text" id="status" disabled>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
