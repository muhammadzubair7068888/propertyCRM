@extends('layouts/contentLayoutMaster')
@section('title', 'Vacate Notices')
@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">

    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">

@endsection
@section('page-style')
    <style>
        .loader {
            display: none;
            /* Style the loader as you prefer */
        }
    </style>
@endsection
@section('content')
    <!-- Multilingual -->
    <section id="multilingual-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Vacate Notices</h4>
                        <div class="col-6 d-flex justify-content-end ">
                            <button type="submit" class="btn btn-primary me-2 mt-2 " data-bs-toggle="modal"
                                data-bs-target="#addNewCard">+ Add Vacate Notice</button>
                        </div>
                        <div id="loader" class="loader"><h1>Loading...</h1></div>
                    </div>
                    {{-- {{dd($notices)}} --}}

                    {{-- {{dd($tenant)}} --}}
                    <div class="card-datatable">
                        <table class="dt-multilingual table">
                            <thead>
                                <tr>
                                    <th>Vacating Date</th>
                                    <th>Tenant</th>
                                    <th>Lease</th>
                                    <th>Property</th>
                                    <th>Unit</th>

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
                                                class="item-edit pe-1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <i data-feather="eye" class="font-medium-4"></i>
                                            </a>
                                            <button type="button" class="item-edit text-success openModalLink border-0 bg-white "
                                                tenant_id="{{ $notice->id }}" data-bs-target="#addNewCard" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i data-feather="edit" class="font-medium-4"></i>
                                            </button>

                                            <a href="{{ route('admin.vacate_notice.destroy', $notice->id) }}"
                                                class="item-edit pe-1 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
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
    @include('admin.vacateNotice.vacatenotices')
    @include('admin.vacateNotice.editnotices')

@endsection
@section('vendor-script')
    {{-- vendor files --}}
    <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>

    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>

    <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>

@endsection

@section('page-script')

    <script src="{{ asset(mix('js/scripts/tables/table-datatables-advanced.js')) }}"></script>

    <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>

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

    <script>
        //   $(document).ready(function () {
        //   $('.datatables-table').DataTable({
        //     resposive:true
        //   });
        // });

        $('.select-2').select2();





    </script>

    <script>
        const textarea = document.getElementById('vacatingreason');
        const charCount = document.getElementById('charCount');

        textarea.addEventListener('input', function() {
            const currentCharCount = textarea.value.length;
            charCount.textContent = `${currentCharCount} / 150 characters`;

            if (currentCharCount > 150) {
                // Agar 150 se zyada characters enter kiye gaye hain, to unhe rokna
                textarea.value = textarea.value.slice(0, 150);
                charCount.textContent = '150 / 150 characters';
            }
        });
    </script>

@endsection
