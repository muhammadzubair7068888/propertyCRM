<section id="multilingual-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-datatable">
                    <table class="dt-multilingual2 table" id="datatables-table">
                        <thead>
                            <tr>
                                <th>Lease Number</th>
                                <th>Unit</th>
                                <th>Rent Amount</th>
                                <th>Lease Type</th>
                                <th>Due on Day of Month</th>
                                <th>Last Billing</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($lease as $lease)
                            {{-- {{dd($lease->unit)}} --}}

                                <tr>
                                    <td>{{$lease->lease_code}}</td>
                                    {{-- <td>{{$lease->property->property_name}}</td> --}}
                                    <td>{{$lease->unit->unit_name ?? "N/A"}}</td>

                                    <td>{{$lease->rent_amount}}</td>
                                    <td>{{$lease->lease_type->name}}</td>
                                    <td>{{$lease->due_on}}</td>

                                    <td>{{$lease->start_date}}</td>
                                    <td><span class="badge rounded-pill badge-light-success">Active</span></td>

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
        $('.dt-multilingual2').DataTable({

        });
    </script>
@endpush

{{-- @endsection --}}
