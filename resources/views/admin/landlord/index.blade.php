@extends('layouts/contentLayoutMaster')
@section('title', 'Landlord')
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
                        <h4 class="card-title">Landlords</h4>
                        <a href="{{ route('admin.landlord.create') }}" class="btn btn-primary">+ Add Landlord</a>
                    </div>
                    <div class="card-datatable">
                        <table class="datatables-table table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                @php
                                $class = '';
                                $name = '';
                                if ($user->status == 0) {
                                    $class = 'badge-light-primary';
                                    $name = 'Pending';
                                }elseif ($user->status == 1) {
                                    $class = 'badge-light-success';
                                    $name = 'Active';
                                }elseif ($user->status == 2) {
                                    $class = 'badge-light-danger';
                                    $name = 'Blocked';
                                }
                                @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->first_name .' '. $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone_number }}</td>
                                        <td><span class="badge rounded-pill {{ $class }}">{{ $name }}</span></td>
                                        <td>
                                            <a href="{{ route('admin.landlord.show',$user->id) }}" class="item-edit pe-1" >
                                                <i data-feather="eye" class="font-medium-4"></i>
                                            </a>
                                            <a href="{{ route('admin.landlord.edit',$user->id) }}" class="item-edit pe-1 text-success">
                                                <i data-feather="edit" class="font-medium-4"></i>
                                            </a>
                                            <a onclick="blockUser(`{{ route('admin.landlord.block',$user->id) }}`)" class="item-edit pe-1 text-danger">
                                                <i data-feather="slash" class="font-medium-4"></i>
                                            </a>
                                            <a href="{{ route('admin.landlord.destroy',$user->id) }}" class="item-edit text-danger">
                                                <i data-feather="trash" class="font-medium-4"></i>
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
@endsection
@section('page-script')
    {{-- Page js files --}}
    <script src="{{ asset(mix('js/scripts/tables/table-datatables-advanced.js')) }}"></script>
    <script>
        $(document).ready(function() {
            feather.replace();
            $('.datatables-table').DataTable();
        });
        function blockUser(url){
            alert(url);
        }
    </script>

@endsection
