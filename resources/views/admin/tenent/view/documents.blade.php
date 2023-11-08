<!-- Multilingual -->
<section id="multilingual-datatable">
  <div class="row">
      <div class="col-12">
          <div class="card">
              {{-- <div class="card-header border-bottom">
                  <div class="col-md-4 mb-1">
                      <label class="form-label" for="journalproperty">Property</label>
                      <select class="select2 form-select" id="journalproperty">
                          <option value="1">Property</option>
                          <option value="2">Option2</option>
                          <option value="3">Option3</option>
                          <option value="4">Option4</option>
                      </select>
                  </div>
              </div> --}}

              <div class="card-datatable">
                  <table class="dt-multilingual5 table">
                      <thead>
                          <tr>
                              <th></th>
                              <th>Date</th>
                              <th>Document</th>
                              <th>Action</th>

                           </tr>
                      </thead>
                  </table>
              </div>
          </div>
      </div>
  </div>
</section>
<!--/ Multilingual -->

{{-- @section('page-script') --}}
@push('page-script')
  <script>
      $('.dt-multilingual5').DataTable({
    });
  </script>
@endpush
{{-- @endsection --}}
