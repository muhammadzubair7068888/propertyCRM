


<!-- add new card modal  -->
<div class="modal fade" id="repairmodel" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30%;">
      <div class="modal-content">
        <div class="modal-header bg-transparent">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <h1 class="" id="addNewCardTitle">New Vacaendforeachtion Notice</h1>


          <!-- form -->
          {{-- <form  action="{{route('admin.repair.store')}}" method="post" id="addNewCardValidation" class="row gy-1 gx-2 ">
            @csrf
            <div class="col-md-12 mb-1">
              <label class="form-label" for="lease-property">Property</label>
              <select class="select-2 form-select tenant" id="lease-property" name="property_id">

                @foreach ($property  as $data )
                <option  value="{{$data->id}}">{{$data->property_name}}</option>
                @endforeach

              </select>
            </div>

            <div class="col-md-6 mb-1">
              <label class="form-label" for="property-unit">unit</label>
              <select class="select-2 form-select" id="property-unit" name="property_unit_id">
                @foreach ($unit as $unitdata)
                <option value="{{$unitdata->id}}">{{$unitdata->unit_name}}</option>
                @endforeach

              </select>
            </div>

            <div class="col-md-6 mb-1">
              <label class="form-label" for="fp-default">Date</label>
              <input type="date" id="date" class="form-control flatpickr-basic" placeholder="Date" name="complaint_date"/>
            </div>

            <div class="form-floating">
              <textarea
                class="form-control"
                placeholder="Leave a comment here (maximum 150 characters)"
                id="vacatingreason"
                style="height: 80px"
                maxlength="150"
                name="complaint_description"
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
          </form> --}}
          <form action="{{ route('admin.repair.store') }}" method="post" id="addNewCardValidation" class="row gy-1 gx-2 needs-validation" novalidate>
            @csrf
            <div class="col-md-12 mb-1">
                <label class="form-label" for="lease-property">Property</label>
                <select class="select-2 form-select tenant" id="lease-property" name="property_id" required>
                    @foreach ($property as $data)
                    <option value="{{ $data->id }}">{{ $data->property_name }}</option>
                    @endforeach
                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please select a property.
                </div>
            </div>

            <div class="col-md-6 mb-1">
                <label class="form-label" for="property-unit">Unit</label>
                <select class="select-2 form-select" id="property-unit" name="property_unit_id" required>
                    @foreach ($unit as $unitdata)
                    <option value="{{ $unitdata->id }}">{{ $unitdata->unit_name }}</option>
                    @endforeach
                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please select a unit.
                </div>
            </div>

            <div class="col-md-6 mb-1">
                <label class="form-label" for="fp-default">Date</label>
                <input type="date" id="date" class="form-control flatpickr-basic" placeholder="Date" name="complaint_date"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please provide a valid date.
                </div>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here (maximum 150 characters)" id="vacatingreason"
                    style="height: 80px" maxlength="150" name="complaint_description" required></textarea>
                <label for="floatingTextarea2">Vacating Reason</label>
                <p id="charCount">0 / 150 characters</p>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please provide a valid description.
                </div>
            </div>

            <div class="col-12 text-center">
                <button type="reset" class="btn mt-1" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button class="btn btn-primary me-1 mt-1" type="submit">Save</button>
            </div>
        </form>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation');

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                            if (!form.checkValidity()) {
                                event.preventDefault();
                                event.stopPropagation();
                            }

                            form.classList.add('was-validated');
                        }, false);
                    });
            })();
        </script>

        </div>
      </div>
    </div>
  </div>

