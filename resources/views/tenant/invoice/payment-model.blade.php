 <!-- Modal -->
 <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="myModalLabel33">Make Payment
                 </h4>
             </div>
             <div class="row m-2">
                 <div class="text-black col-5">Invoice#: INV0008</div>
                 <div class="text-warning col-5">Amount Due : 446.00</div>
             </div>
             <form action="{{route('tenant.invoice.payment')}}" method="post">
                 @csrf
                 <div class="modal-body">
                     <input type="hidden" id="invoice_id" name="invoice_id">
                     <div class="row">
                         <div class=" col-md-12 mb-1">
                             <label class="form-label" for="basicSelectpay-method">Payment Method</label>
                             <select class="form-select text-black" id="basicSelectpay-method" disabled>

                                 <option>Mpesa</option>
                             </select>
                         </div>
                         <div class=" col-md-12 mb-1">
                             <label class="form-label" for="basicSelectcurrency">Currency</label>
                             <select class="form-select text-black" id="basicSelectcurrency" disabled>
                                 <option selected>KES (Kenyan Shilling) - Kenya</option>
                             </select>

                         </div>
                         <div class="col-md-12 mb-2">
                            <label class="form-label" for="invoice_amount">Amount</label>
                            <input type="text" id="invoice_amount" class="form-control" readonly name="amount" placeholder="Amount" />
                        </div>
                         <div class="col-md-12 mb-2">
                             <label class="form-label" for="phonenumber">Phone Number</label>
                             <input type="number" id="phonenumber" class="form-control"  placeholder="PhoneNumber" name="phonenumber" />
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
