<section id="multilingual-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-datatable">
                    <table class="dt-multilingual2 table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Lease Number</th>
                                <th>Unit</th>
                                <th>Rent Amount</th>
                                <th>Lease Type</th>
                                <th> Due On (Day of Month)</th>
                                <th>Last Billing</th>
                                <th>Tenant</th>
                                <th>Status</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach ($lease as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->lease_code}}</td>
                                <td>{{$item->unit->unit_name}}</td>
                                <td>{{$item->rent_amount}}</td>
                                <td>{{$item->lease_type->name}}</td>
                                <td>{{$item->due_on}}</td>
                                <td>{{$item->start_date}}</td>
                                <td>{{$item->tenant_info->user->first_name . ' '. $item->tenant_info->user->last_name}}</td>
                                <td>active</td>
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
