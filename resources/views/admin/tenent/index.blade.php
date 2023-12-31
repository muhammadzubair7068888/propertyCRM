@extends('layouts/contentLayoutMaster')
@section('title', 'Tenant')
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
                        <h4 class="card-title">Tenants</h4>
                        <a href="{{ route('admin.tenant.create') }}" class="btn btn-primary ">+ Add tenant</a>
                    </div>
                    <div class="card-datatable">
                        <table class="datatables-table table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone</th>
                                    <th>Kin Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tenants as $tenant)
                                    @php
                                    $class = '';
                                    $name = '';
                                    $url = '';
                                    $message = '';
                                    $btn = '';
                                    $alert_icon = '';
                                    $color = '';
                                    $icon = '';
                                    $icon_class = '';
                                        if ($tenant->user->status == 1) {
                                            $class = 'badge-light-success';
                                            $icon_class = 'text-danger';
                                            $name = 'Active';
                                            $icon = 'slash';
                                            $url = route('admin.tenant.block', $tenant->user->id);
                                            $message = 'Are you sure you want to block this tenant?';
                                            $btn = 'Block';
                                            $alert_icon="error";
                                            $color="danger";
                                        } elseif ($tenant->user->status == 2) {
                                            $class = 'badge-light-danger';
                                            $icon_class = 'text-warning';
                                            $name = 'Blocked';
                                            $icon = 'unlock';
                                            $url = route('admin.tenant.unblock', $tenant->user->id);
                                            $message = 'Are you sure you want to unblock this tenant?';
                                            $btn = 'Unblock';
                                            $alert_icon="warning";
                                            $color="warning";
                                        }elseif ($tenant->user->status == 0) {
                                            $class = 'badge-light-secondary';
                                            $icon_class = 'text-secondary';
                                            $name = 'Pending';
                                            $icon = 'clock';
                                            $url = route('admin.tenant.unblock', $tenant->user->id);
                                            $message = 'Are you sure you want to Access this tenant?';
                                            $btn = 'Grant';
                                            $alert_icon="warning";
                                            $color="warning";
                                        }
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $tenant->user->first_name . ' ' . $tenant->user->last_name }}</td>
                                        <td>{{ $tenant->user->email }}</td>
                                        <td>{{ $tenant->user->phone_number }}</td>
                                        <td>{{ $tenant->kin_name }}</td>
                                        <td><span class="badge rounded-pill {{ $class }}">{{ $name }}</span></td>
                                        <td>
                                            <a href="{{ route('admin.tenant.show', $tenant->id) }}" class="item-edit pe-1">
                                                <i data-feather="eye" class="font-medium-4"></i>
                                            </a>
                                            <a href="{{ route('admin.tenant.edit', $tenant->id) }}"
                                                class="item-edit pe-1 text-success">
                                                <i data-feather="edit" class="font-medium-4"></i>
                                            </a>
                                            <a onclick="Alert(`{{ $url }}`,'{{ $message }}','{{ $btn }}','{{$alert_icon}}','{{$color}}')"
                                                class="item-edit pe-1 text-danger">
                                                <i data-feather="{{ $icon }}" class="{{ $icon_class }} font-medium-4"></i>
                                            </a>
                                            <a onclick="Alert(`{{ route('admin.tenant.destroy', $tenant->user->id) }}`,'Are you sure you want to delete this tenant?','Delete','error','danger')"
                                                class="item-edit text-danger">
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
            $('.datatables-table').DataTable();
        });
    </script>
@endsection
