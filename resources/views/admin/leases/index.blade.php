@extends('layouts/contentLayoutMaster')
@section('title', 'Lease')
@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('content')
    <!-- Multilingual -->
    <section id="multilingual-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Leases</h4>
                    </div>
                    <div class="col-12 d-flex justify-content-end ">
                        <a href="{{ route('admin.leases.create') }}"> <button type="submit"
                                class="btn btn-primary me-2 mt-2 " name="submit" value="Submit">+ Add Lease</button></a>
                    </div>
                    <div class="card-datatable">
                        <table class="datatables-table table" id="datatables-table">
                            <thead>
                                <tr>
                                    <th>Lease Number</th>
                                    <th>Property Code</th>
                                    <th>Unit</th>
                                    <th>Rent Amount</th>
                                    <th>Start Date</th>
                                    <th>Last Billing</th>
                                    <th>Status</th>
                                    <th>Statement</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($lease as $lease)
                                {{-- {{dd($lease->unit)}} --}}

                                    <tr>
                                        <td>{{$lease->lease_code}}</td>
                                        <td>{{$lease->property->property_name}}</td>
                                        <td>{{$lease->unit->unit_name ?? "N/A"}}</td>

                                        <td>{{$lease->rent_amount}}</td>
                                        <td>{{$lease->start_date}}</td>
                                        <td>{{$lease->start_date}}</td>
                                        <td><span class="badge rounded-pill badge-light-success">Active</span></td>
                                        <td>
                                          <a href="#" class="item-edit pe-1">
                                            <i data-feather="file-text" class="font-medium-4"></i>
                                        </a>
                                        </td>
                                        <td>
                                           <a href="{{route('admin.view.leases',$lease->id)}}" class="item-edit pe-1">
                                                <i data-feather="eye" class="font-medium-4"></i>
                                            </a>
                                            <a href="{{route('admin.leases.create')}}"
                                                class="item-edit pe-1 text-success">
                                                <i data-feather="edit" class="font-medium-4"></i>
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
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
@endsection
@section('page-script')
    <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/tables/table-datatables-advanced.js')) }}"></script>
    {{-- Page js files --}}
    <script>
        $(document).ready(function() {
            $('.datatables-table').DataTable();
        });
    </script>

@endsection
