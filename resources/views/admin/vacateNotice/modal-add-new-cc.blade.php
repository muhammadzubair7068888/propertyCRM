


<!-- add new card modal  -->
<div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 30%;">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <h1 class="" id="addNewCardTitle">New Vacation Notice</h1>


        <!-- form -->
        <form id="addNewCardValidation" class="row gy-1 gx-2 " onsubmit="return false">


          <div class="col-md-12 mb-1">
            <label class="form-label" for="Tenant">Tenant</label>
            <select class="select-2 form-select" id="Tenant" name="tenant_info_id">
              <option value="" ></option>
              @foreach ($tenant as $tenant )
              <option value="{{$tenant->id}}">{{$tenant->first_name.' '.$tenant->last_name}}</option>
              @endforeach
              
              {{-- <option value="2" >Option2</option>
              <option value="3">Option3</option>
              <option value="4" >Option4</option> --}}
            </select>
          </div>

          <div class="col-md-6 mb-1">
            <label class="form-label" for="Leases">Leases</label>
            <select class="select-2 form-select" id="Leases" name="lease_id">
              <option value="1">Lease</option>
              <option value="2" >Option2</option>
              <option value="3">Option3</option>
              <option value="4" >Option4</option>
            </select>
          </div>

          <div class="col-md-6 mb-1">
            <label class="form-label" for="fp-default">Vacating Date</label>
            <input type="text" id="Vacating Date" class="form-control flatpickr-basic" placeholder="Vacating Date" name="vacate_date"/>
          </div>

          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Leave a comment here (maximum 150 characters)"
              id="vacatingreason"
              style="height: 80px"
              maxlength="150"
              name="vacate_reason" 
            ></textarea>
            <label for="floatingTextarea2">Vacating Reason</label>
            <p id="charCount">0 / 150 characters</p>
          </div>

          <div class="col-12 text-center">

            <button type="reset" class="btn  mt-1" data-bs-dismiss="modal" aria-label="Close">
            Close
            </button>
            <button type="submit" class="btn btn-primary me-1 mt-1">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ add new card modal  -->

{{-- <div class="modal fade" id="addNewCard2" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30%;">
      <div class="modal-content">
        <div class="modal-header bg-transparent">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <h1 class="" id="addNewCardTitle">New Vacation Notice</h1>


          <!-- form -->
          <form id="addNewCardValidation" class="row gy-1 gx-2 " onsubmit="return false">


            <div class="col-md-12 mb-1">
              <label class="form-label" for="Tenant">Tenant</label>
              <select class="select2 form-select" id="Tenant">
                <option value="1">Tenant</option>
                <option value="2" >Option2</option>
                <option value="3">Option3</option>
                <option value="4" >Option4</option>
              </select>
            </div>

            <div class="col-md-6 mb-1">
              <label class="form-label" for="Leases">Leases</label>
              <select class="select2 form-select" id="Leases">
                <option value="1">Lease</option>
                <option value="2" >Option2</option>
                <option value="3">Option3</option>
                <option value="4" >Option4</option>
              </select>
            </div>

            <div class="col-md-6 mb-1">
              <label class="form-label" for="fp-default">Vacating Date</label>
              <input type="text" id="Vacating Date" class="form-control flatpickr-basic" placeholder="Vacating Date" />
            </div>

            <div class="form-floating">
              <textarea
                class="form-control"
                placeholder="Leave a comment here (maximum 150 characters)"
                id="vacatingreason"
                style="height: 80px"
                maxlength="150"
              ></textarea>
              <label for="floatingTextarea2">Vacating Reason</label>
              <p id="charCount">0 / 150 characters</p>
            </div>
            <div class="col-12 text-center">

              <button type="reset" class="btn  mt-1" data-bs-dismiss="modal" aria-label="Close">
              Close
              </button>
              <button type="submit" class="btn btn-primary me-1 mt-1">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> --}}
