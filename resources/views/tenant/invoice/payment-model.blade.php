 <!-- Modal -->
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
       <h4 class="modal-title" id="myModalLabel33">Make Payment
       </h4>
       
     </div>
     <div class="row m-2">
        <div class="text-black col-5">Invoice#: INV0008</div>
        <div class="text-warning col-5">Amount Due : 446.00</div>
       </div>
     <form action="#">
       <div class="modal-body">
         <div class="row">
           
         </div>
         <div class="row">
         <div class=" col-md-12 mb-1">
             <label class="form-label" for="basicSelectpay-method">Payment Method</label>
             <select class="form-select text-black" id="basicSelectpay-method">
             <option select>Payment Method</option>
             <option>BankWire</option>
             <option>Mpesa</option>
             </select>
         </div>
         <div class=" col-md-12 mb-1">
             <label class="form-label" for="basicSelectcurrency">Currency</label>
             <select class="form-select text-black" id="basicSelectcurrency">
             <option select>Currency</option>
             <option>USD(Dollars-America)</option>
             </select>
         </div>
         <div class="col-md-12 mb-2">
             <label class="form-label" for="number1">Amount</label>
             <input type="number" id="number1" class="form-control" value="343" />
           </div>
           <div class="col-md-12 mb-2">
             <label class="form-label" for="number2">Phone Number</label>
             <input type="number" id="number2" class="form-control" value="PhoneNumber" />
           </div>
         </div>
         <div class="text">
          <p>Equity Bank Acc No. 123456789112</p>
          <p class="text-success">Important: Keep your phone unlocked. Mpesa will prompt for PIN to complete payment.</p>
         </div>
         <div class="d-grid col-lg-12 col-md-12 mb-1 mb-lg-0">
              <button type="button" class="btn btn-primary">Lipa Na Mpesa</button>
            </div>
       </div>
     </form>
   </div>
 </div>
</div>