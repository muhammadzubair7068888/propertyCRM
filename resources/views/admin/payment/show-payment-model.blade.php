 <!-- Modal -->
 <div class="modal fade text-start" id="showmodal" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="myModalLabel33"><i data-feather='clock'></i>Pending</h4>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                 </button>
             </div>
             <form action="#">
                 <div class="modal-body">
                     <div class="row">
                         <div class="mb-1 col-md-6">
                             <label class="form-label" for="modern-amount">Amount</label>
                             <input type="text" id="modern-amount" class="form-control" readonly="readonly"
                                 value="" />
                         </div>
                         <div class="mb-1 col-md-6">
                             <label class="form-label" for="modern-paid">Paid On</label>
                             <input type="text" id="modern-paid" class="form-control" readonly="readonly"
                                 placeholder="" />
                         </div>
                     </div>
                     <div class="row">
                         <div class="mb-1  col-md-6">
                             <label class="form-label" for="modern-pay">Payment Method</label>
                             <input type="text" id="modern-pay" class="form-control" readonly="readonly"
                                 placeholder="" />
                         </div>
                         <div class="mb-1 col-md-6">
                             <label class="form-label" for="tenant">Tenant</label>
                             <input type="text" id="tenant" readonly="readonly" class="form-control"
                                 value="" />
                         </div>
                     </div>
                     <div class="col-12 mb-1">
                         <label class="form-label" for="recordedby">Recorded By</label>
                         <textarea type="text" class="form-control" id="recordedby" readonly="readonly" rows="2" value=""></textarea>

                     </div>
                     <div class="col-12 mb-1 ">
                         <label class="form-label" for="extranote">Extra Notes</label>
                         <textarea type="text" class="form-control" id="extranote" readonly="readonly" rows="2" value=""></textarea>
                     </div>

                 </div>
             </form>
         </div>
     </div>
 </div>
 <div class="modal" tabindex="-1" id="viewInvoiceModal">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Payment</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('admin.pay_amount') }}" method="post">
                    @csrf
                     <input type="hidden" id="payment_id" name="invoice_id" value="">
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
                             <input type="text" id="invoice_payment" class="form-control" readonly
                                 name="amount" />
                         </div>
                         <div class="col-md-12 mb-2">
                             <label class="form-label" for="invoice_phonenumber">Phone Number</label>
                             <input type="number" id="invoice_phonenumber" class="form-control"
                                 placeholder="PhoneNumber" name="phonenumber" />
                         </div>
                     </div>
                     <div class="text">
                         <p>Equity Bank Acc No. 123456789112</p>
                         <p class="text-success">Important: Keep your phone unlocked. Mpesa will prompt for PIN to
                             complete
                             payment.</p>
                     </div>
                     <div class="d-grid col-lg-12 col-md-12 mb-1 mb-lg-0">
                         <button type="submit" class="btn btn-primary">Lipa Na Mpesa</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>



{{-- payment receipt model --}}


<div class="modal" tabindex="-1" id="viewReceiptbutton">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Payment Receipt</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-12">
                <label class="form-label" for="basicSelectpay-method">Payment Method</label>
                <select class="form-select text-black" id="basicSelectpay-method" disabled>
                    <option>Mpesa</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label" for="basicSelectcurrency">Currency</label>
                <select class="form-select text-black" id="basicSelectcurrency" disabled>
                    <option selected>KES (Kenyan Shilling) - Kenya</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label" for="invoice_amount">Amount</label>
                <input type="text" id="payment_receipt" class="form-control" readonly
                    name="amount" />
            </div>
            <div class="col-12">
                <label class="form-label" for="invoice_phonenumber">Phone Number</label>
                <input type="number" id="phonenumber_payment" class="form-control" readonly
                    placeholder="PhoneNumber" name="phonenumber" />
            </div>
            <div class="col-12">
                <label class="form-label">Status</label>
                <input class="form-control" type="text" id="payment_status" disabled>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




 <!-- Approved modal -->
 <!-- {{-- <section id="form-and-scrolling-components">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Approved</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <div class="form-modal-ex">

              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
              <i data-feather='check-circle'>Approved</i>
              </button>

              <div
                class="modal fade text-start"
                id="inlineForm"
                tabindex="-1"
                aria-labelledby="myModalLabel33"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33"><i data-feather='check-circle'>Approved</i></h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                      </button>
                    </div>
                    <form action="#">
                      <div class="modal-body">
                        <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="modern-amount">Amount</label>
                            <input
                              type="text"
                              id="modern-amount"
                              class="form-control"
                              readonly="readonly"
                              placeholder=""
                            />
                          </div>
                          <div class="mb-1 col-md-6">
                            <label class="form-label" for="modern-paid">Paid On</label>
                            <input
                              type="text"
                              id="modern-paid"
                              class="form-control"
                              readonly="readonly"
                              placeholder=""
                            />
                          </div>
                          </div>
                          <div class="row">
                          <div class="mb-1  col-md-6">
                            <label class="form-label" for="modern-pay">Payment Method</label>
                            <input
                              type="text"
                              id="modern-pay"
                              class="form-control"
                              readonly="readonly"
                              placeholder=""
                            />
                          </div>
                          <div class="mb-1 col-md-6">
                            <label class="form-label" for="disabledInputtenant">Tenant</label>
                            <input
                              type="text"
                              id="disabledInputtenant"
                              readonly="readonly"
                              class="form-control"
                              value=""
                            />
                          </div>
                          </div>
                          <div class="col-12 mb-1">
                              <label class="form-label" for="disabledInputRecord">Recorded By</label>
                              <textarea
                               type="text"
                                class="form-control"
                                id="disabledInputRecord"
                                readonly="readonly"
                                rows="2"
                                value=""
                              ></textarea>
                          </div>
                          <div class="col-12 mb-1 ">
                              <label class="form-label" for="disabledInputNotes">Extra Notes</label>
                              <textarea
                                type="text"
                                class="form-control"
                                id="readonlyInputNotes"
                                readonly="readonly"
                                value=""
                                ></textarea>
                            </div>
                            <div class="col-12 mb-1 ">
                              <label class="form-label" for="disabledInputApproved">Approved By</label>
                              <textarea
                                type="text"
                                class="form-control"
                                id="readonlyInputApproved"
                                readonly="readonly"
                                value=""
                                ></textarea>
                            </div>
                            <div class="alert alert-warning mt-1 alert-validation-msg" role="alert">
                              <div class="alert-body d-flex align-items-center">
                                <span><i data-feather='bell'></i> You do,t have permission to access this resource.</span>
                              </div>
                            </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="scrolling-content-ex">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}} -->
