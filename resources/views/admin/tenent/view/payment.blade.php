<section id="multilingual-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-datatable">
                    <table class="dt-multilingual table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Amount</th>
                                <th>Payment Date</th>
                                <th> Lease</th>
                                <th> Property</th>
                                <th>Receipt Number</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payment as $item)
                                <tr>
                                    <td></td>
                                    <td>{{ $item->amount }}</td>

                                    <td>{{ $item->payment_date }}</td>

                                    <td>{{ $item->lease->lease_code }}</td>
                                    <td>{{$item->lease->property->property_name}}</td>
                                    <td>RS00{{ $item->id }}</td>
                                    <td>pending</td>

                                    <td class="d-flex">
                                        <button type="button" payment_id="{{ $item->id }}"
                                            class="item-edit border-0 bg-white text-success pe-1 showmodal">
                                            <i data-feather="eye" class="font-medium-4 text-primary"></i>
                                        </button>
                                        <a href="{{ route('admin.payment.show', $item->id) }}"
                                            class="item-edit pe-1 text-success">
                                            <i data-feather="download" class="font-medium-4"></i>
                                        </a>

                                    </td>

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
        $('.dt-multilingual1').DataTable({

        });
    </script>
@endpush

{{-- @endsection --}}
