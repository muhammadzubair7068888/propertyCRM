@extends('layouts/contentLayoutMaster')

@section('title', 'Vacate Notices')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('page-style')
    <style>
        .loader {
            display: none;
            /* Style the loader as you prefer */
        }
    </style>
@endsection
@section('page-style')
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
@endsection

@section('content')
<!-- Multilingual -->
<section id="multilingual-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Vacate Notices</h4>
        </div>


        <div class="card-datatable">
          <table class="dt-multilingual table">
            <thead>
              <tr>

                <th>Vacating Date</th>
                <th>Tenant</th>
                <th>Lease</th>
                <th>Property</th>

                <th>Units</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($notices as $notice)
                    <tr>
                        <td>{{ $notice->vacate_date }}</td>
                        <td>{{ $notice->tenantInfo->user->first_name }}</td>
                        <td>{{ $notice->leaseInfo->lease_code }}</td>
                        <td>{{ $notice->leaseInfo->property->property_name }}</td>
                        <td>{{ $notice->leaseInfo->unit->unit_name }}</td>
                        <td>
                            <a href="{{ route('admin.vacate_notice.show', $notice->id) }}"
                                class="item-edit pe-1">
                                <i data-feather="eye" class="font-medium-4"></i>
                            </a>
                            <button type="button" class="item-edit text-success openModalLink border-0 bg-white "
                                tenant_id="{{ $notice->id }}" data-bs-target="#addNewCard">
                                <i data-feather="edit" class="font-medium-4"></i>
                            </button>

                            <a href="{{ route('admin.vacate_notice.destroy', $notice->id) }}"
                                class="item-edit pe-1 text-danger">
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
  @include('tenant.vacateNotice.add-vacatenotice')
  @include('admin.vacateNotice.editnotices')
</section>


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
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  {{-- <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script> --}}
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
  <script>
       function showLoader() {
            $('#loader').show();
        }
        // Function to hide the loader
        function hideLoader() {
            $('#loader').hide();
        }
      $(".openModalLink").on("click", function(e) {
            showLoader();
            e.preventDefault();
            var select_note = $(this).attr('tenant_id');
            $.ajax({
                type: "get",
                url: "{{ route('admin.vacate_notice.editnote') }}",
                data: {
                    id: select_note,
                },
                success: function(response) {
            //    console.log(response);
                    $('#edittenant').val(response.tenant_info_id).trigger('change');
                    $('#vacating-date').val(response.vacate_date);
                    $('#vacating-reason').val(response.vacate_reason);
                    setTimeout(() => {
                        $('#editleases').val(response.lease_id).trigger('change');
                        $('#tenant_hidden_id').val(select_note);
                        $('#editmodal').modal('show');
                        hideLoader();
                    }, 600);


                },

            });


        });


  </script>
      <script>
        // Add
        $('#tenant').on('change', function() {
            $('#leases').empty();
            var selected_tenant = $(this).find('option:selected').val();
            // console.log(selected_tenant);
            if (selected_tenant != '') {
                $.ajax({
                    type: "get",
                    url: "{{ route('admin.vacate_notice.vacatelease') }}",
                    data: {
                        id: selected_tenant,
                    },
                    success: function(response) {
                        response.lease.forEach(lease => {
                            console.log(lease);
                            var option = `
            <option value="${lease.id}">${lease.lease_code}</option>
            `;
                            $('#leases').append(option)
                        });
                    }
                });
            }
        });

        // Edit
        $('#edittenant').on('change', function() {
            $('#editleases').empty();
            var selected_tenant = $(this).find('option:selected').val();
            console.log(selected_tenant);
            if (selected_tenant != '') {
                $.ajax({
                    type: "get",
                    url: "{{ route('admin.vacate_notice.vacatelease') }}",
                    data: {
                        id: selected_tenant,
                    },
                    success: function(response) {
                        response.lease.forEach(lease => {
                            console.log(lease);
                            var option = `
            <option value="${lease.id}">${lease.lease_code}</option>
            `;
                            $('#editleases').append(option)
                        });
                    }
                });
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.dt-multilingual').DataTable();
        });
    </script>
  @endsection
