


<section id="multilingual-datatable">
    <div class="row">
      <div class="col-12">
        <div class="card">


          <div class="card-datatable">
            <table class="dt-multilingual3 table">
              <thead>
                 <tr>
                  <th>ID</th>
                  <th>Unit Name</th>
                  <th>Unit Type</th>
                  <th> Bed Rooms</th>
                  <th>Square Foot</th>
                  <th>Lease</th>
                </tr>
              </thead>
                <tbody>
                    @foreach ($property->property_unit as $key=>$unit)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$unit->unit_name}}</td>
                        <td>{{$unit->unit_type}}</td>
                        <td>{{$unit->bed_room}}</td>
                        <td>{{$unit->square_foot}}</td>
                        <td>{{$property->leases[$key]->lease_code ?? 'n?A'}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Multilingual -->

  <!--/ Multilingual -->

  {{-- @section('page-script') --}}

  @push('page-script')

  <script>

    $('.dt-multilingual3').DataTable({


      });

  </script>

  @endpush

  {{-- @endsection --}}
