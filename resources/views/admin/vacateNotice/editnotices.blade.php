


<!-- add new card modal  -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 30%;">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <h1 class="" id="addNewCardTitle">Edit Vacation Notice</h1>


        <!-- form -->
        <form action="{{route('admin.vacate_notice.update')}}" method="post" id="addNewCardValidation" class="row gy-1 gx-2 ">
          @csrf
          <div class="col-md-12 mb-1">
          <input type="hidden" name="tenant_modal_id" id="tenant_hidden_id">
            <label class="form-label" for="Tenant">Tenant</label>
            <select class="select-2 form-select tenant" id="edittenant" name="tenant_info_id">
              <option value="" ></option>
              @foreach ($tenant as $tenant )
              <option value="{{$tenant->id}}">{{$tenant->user->first_name.' '.$tenant->user->last_name}}</option>
              @endforeach
           
            </select>
          </div>

          <div class="col-md-6 mb-1">
            <label class="form-label" for="Leases">Leases</label>
            <select class="select-2 form-select" id="editleases" name="lease_id">
              <option value=""></option>
      
            </select>
          </div>

          <div class="col-md-6 mb-1">
            <label class="form-label" for="fp-default">Vacating Date</label>
            <input type="text" id="vacating-date" class="form-control flatpickr-basic" placeholder="Vacating Date" name="vacate_date"/>
          </div>

          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Leave a comment here (maximum 150 characters)"
              id="vacating-reason"
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
            <button  class="btn btn-primary me-1 mt-1">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    
