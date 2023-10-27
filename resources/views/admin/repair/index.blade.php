
@extends('layouts/contentLayoutMaster')
@section('title', 'Property')
@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('content')
@include('admin.repair.repairModel')



    <!-- Multilingual -->
    <section id="multilingual-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Repair & Maintenance</h4>
                        <button href="" class="btn btn-primary repairmodel">+ Add Complaint</button>
                    </div>
                    <div class="card-datatable">
                        <table class="dt-multilingual table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Property Name</th>
                                    <th>Property Unit</th>
                                    <th>Complaint Date</th>
                                    <th>status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                        @foreach ($repair as $data )


                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $data->property->property_name}}</td>
                                    <td>{{ $data->property_unit->unit_name}}</td>
                                    <td>{{ $data->complaint_date}}</td>
                                    <td>Pending</td>
                                    <td>
                                        <div class="btn-group">
                                          <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            &#8942;
                                          </button>
                                          <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Approve</a></li>
                                            <li><a class="dropdown-item" href="#">Pending</a></li>
                                            <li><a class="dropdown-item" href="#">Not Possible</a></li>

                                          </ul>
                                        </div></td>




                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="modal fade" id="actionModal" tabindex="-1" role="dialog" aria-labelledby="actionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="actionModalLabel">Choose an Action</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>Delete</li>
                        <li>Update</li>
                        <li>Block</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <!--/ Multilingual -->
@endsection
@section('vendor-script')
    {{-- vendor files --}}
    <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')

    <script>
        $('.repairmodel').on('click',function(){
            $('#repairmodel').modal('show');
        })
        $('.actionmodel').on('click',function(){
            $('#actionmodel').modal('show');
        })

        $("#lease-property").on('change', function() {
            $("#property-unit").empty();
            var selected_property = $(this).find('option:selected').val();
            console.log(selected_property);
            if (selected_property != '') {
                $.ajax({
                    type: "get",
                    url: "{{ route('admin.fetch-units') }}",
                    data: {
                        'id': selected_property
                    },
                    success: function(response) {
                        response.units.forEach(unit => {
                            var option =
                            `<option value='${unit.id}'>${unit.unit_name}</option>`;
                            $("#property-unit").append(option);
                        });
        }})}});
        $('.dt-multilingual').DataTable({
            resposive: true,


        });
    </script>

@endsection
