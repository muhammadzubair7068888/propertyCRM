


<!-- add new card modal  -->
<div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 45%;">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <h1 class="" id="addNewCardTitle">Add Payment</h1>


        <!-- form -->
        <form action="{{route('admin.payment.store')}}" method="post"  class="row gy-1 gx-2 " >
        @csrf
          <div class="col-md-12 mb-1">
            <label class="form-label" for="Tenant">Tenant</label>
            <select class="select2 form-select" id="tenant" name="tenant_info_id">
                <option value=""></option>
                @foreach ($data as $pagedata)
                   <option value="{{$pagedata->id}}">{{ $pagedata->user->first_name . ' ' . $pagedata->user->last_name }}
                </option>
                @endforeach



            </select>
          </div>

          <div class="col-md-12 mb-1">
            <label class="form-label" for="Lease">Lease</label>
            <select class="select2 form-select" id="lease" name="lease_id">
             <option value=""></option>
            </select>
          </div>

          <div class="col-md-4">
            <div class="mb-1">
              <label class="form-label" for="Amount">Amount</label>
              <input
                type="number"
                class="form-control"
                id="Amount"
                name="amount"
                aria-describedby="itemquantity"
                placeholder="1"
              />
            </div>
          </div>

          <div class="col-md-4 mb-1">
            <label class="form-label" for="paymentmethod">Payment Method</label>
            <select class="select2 form-select" id="paymentmethod" name="payment_method_id">

                @foreach ($paymentmethod as $paymentdata)
                   <option value="{{$paymentdata->id}}">{{ $paymentdata->name}}
                </option>
                @endforeach

            </select>
          </div>

          <div class="col-md-4 mb-1">
            <label class="form-label" for="paymentdate">Payment Date</label>
            <input type="text" id="paymentdate" name="payment_date" class="form-control flatpickr-basic" placeholder="Payment Date" />
          </div>

          <div class="col-md-6 col-12">
            <div class="mb-1">
              <label class="form-label" for="paidby">Paid By</label>
              <input
                type="text"
                class="form-control"
                id="paidby"
                name="paid_by"
                aria-describedby="paidby"
                placeholder="Paid By"
              />
            </div>
          </div>

          <div class="col-md-6 col-12">
            <div class="mb-1">
              <label class="form-label" for="referencenumber">Reference Number</label>
              <input
                type="text"
                class="form-control"
                id="referencenumber"
                name="reference_number"
                aria-describedby="itemname"
                placeholder="Reference Number"
              />
            </div>
          </div>

          <div class="col-md-12 ">
            <div class="mb-3">
              <label class="form-label" for="paymentfor">Payment For</label>
              <input
                type="text"
                class="form-control"
                id="paymentfor"
                name="payment_for"
                aria-describedby="itemname"
                placeholder="Being Payment For"
              />
            </div>
          </div>


          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Leave a comment here (maximum 150 characters)"
              id="floatingTextarea2"
              name="extra_note"
              style="height: 80px"
              maxlength="150"
            ></textarea>
            <label for="floatingTextarea2">Extra Notes</label>
            <p id="charCount">0 / 150 characters</p>
          </div>

         <div class="col-12 text-center">

            <button type="reset" class="btn  mt-1" data-bs-dismiss="modal" aria-label="Close">
          Cancel
            </button>
            <button  class="btn btn-primary me-1 mt-1">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ add new card modal  -->

