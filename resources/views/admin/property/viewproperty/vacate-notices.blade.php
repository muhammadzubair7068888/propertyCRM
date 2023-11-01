


<section id="multilingual-datatable">
    <div class="row">
      <div class="col-12">
        <div class="card">
         <div class="card-datatable">
            <table class="dt-multilingual4 table">
              <thead>
                 <tr>
                  <th>ID</th>
                  <th>Vacating Date</th>
                  <th>Tenant</th>
                  <th>Lease</th>
                  <th>Unit</th>


                </tr>
              </thead>
              <tbody>

                <tr>
                    @foreach ($vacateNotice as $notice)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $notice->vacate_date }}</td>
                        <td>{{ $notice->tenantInfo->user->first_name . '' .$notice->tenantInfo->user->last_name }}</td>
                        <td>{{ $notice->leaseInfo->lease_code }}</td>
                        {{-- <td>{{ $notice->leaseInfo->property->property_name }}</td> --}}
                        <td>{{ $notice->leaseInfo->unit->unit_name }}</td>
                  
                    </tr>
                @endforeach
                </tr>
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

    $('.dt-multilingual4').DataTable({

      });

  </script>

  @endpush

  {{-- @endsection --}}
