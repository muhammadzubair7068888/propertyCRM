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
                        <div id="loader" class="loader"><h1>Loading...</h1></div>
                    </div>
                    {{-- {{dd($notices)}} --}}
                    <div class="col-12 d-flex justify-content-end ">

                        <button type="submit" class="btn btn-primary me-2 mt-2 " data-bs-toggle="modal"
                            data-bs-target="#addNewCard">+ Add Vacate Notice</button>

                    </div>
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





        // $('.dt-multilingual').DataTable({
        //     ajax:'{{ asset('data/table-datatable.json') }}',
        //     columns: [
        //       { data: 'responsive_id' },
        //       { data: 'start_date' },
        //       { data: 'full_name' },
        //       { data: 'age' },
        //       { data: 'city' },
        //       { data: 'salary' },
        //       // { data: 'status' },
        //       { data: '' }
        //     ],
        //     columnDefs: [
        //       {
        //         // For Responsive
        //         className: 'control',
        //         orderable: false,
        //         targets: 0
        //       },
        //       // {
        //       //   // Label
        //       //   targets: -2,
        //       //   render: function (data, type, full, meta) {
        //       //     var $status_number = full['status'];
        //       //     var $status = {
        //       //       1: { title: 'Current', class: 'badge-light-primary' },
        //       //       2: { title: 'Professional', class: ' badge-light-success' },
        //       //       3: { title: 'Rejected', class: ' badge-light-danger' },
        //       //       4: { title: 'Resigned', class: ' badge-light-warning' },
        //       //       5: { title: 'Applied', class: ' badge-light-info' }
        //       //     };
        //       //     if (typeof $status[$status_number] === 'undefined') {
        //       //       return data;
        //       //     }
        //       //     return (
        //       //       '<span class="badge rounded-pill ' +
        //       //       $status[$status_number].class +
        //       //       '">' +
        //       //       $status[$status_number].title +
        //       //       '</span>'
        //       //     );
        //       //   }
        //       // },
        //       {
        //         // Actions
        //         targets: -1,
        //         title: 'Actions',
        //         orderable: false,
        //         render: function (data, type, full, meta) {
        //           return (
        //             // '<div class="d-inline-flex">' +
        //             // '<a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">' +
        //             // feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
        //             // '</a>' +
        //             // '<div class="dropdown-menu dropdown-menu-end">' +
        //             // '<a href="javascript:;" class="dropdown-item">' +
        //             // feather.icons['file-text'].toSvg({ class: 'me-50 font-small-4' }) +
        //             // 'Details</a>' +
        //             // '<a href="javascript:;" class="dropdown-item">' +
        //             // feather.icons['archive'].toSvg({ class: 'me-50 font-small-4' }) +
        //             // 'Archive</a>' +
        //             // '<a href="javascript:;" class="dropdown-item delete-record">' +
        //             // feather.icons['trash-2'].toSvg({ class: 'me-50 font-small-4' }) +
        //             // 'Delete</a>' +
        //             // '</div>' +
        //             // '</div>' +
        //             '<a href="{{ route('admin.vacate_notice.create') }}" class="item-edit pe-1">' +
        //             feather.icons['eye'].toSvg({ class: 'font-medium-4' }) +
        //             '</a>'+
        //             '<a href="javascript:;"  data-bs-toggle="modal" data-bs-target="#addNewCard2" class="item-edit">' +
        //             feather.icons['edit'].toSvg({ class: 'font-medium-4' }) +
        //             '</a>'
        //           );
        //         }
        //       }
        //     ],
        //   //   language: {
        //   //     url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/' + lang + '.json',
        //   //     paginate: {
        //   //       // remove previous & next text from pagination
        //   //       previous: '&nbsp;',
        //   //       next: '&nbsp;'
        //   //     }
        //   //   },
        //     dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        //     displayLength: 7,
        //     lengthMenu: [7, 10, 25, 50, 75, 100],
        //     responsive: {
        //       details: {
        //         display: $.fn.dataTable.Responsive.display.modal({
        //           header: function (row) {
        //             var data = row.data();
        //             return 'Details of ' + data['full_name'];
        //           }
        //         }),
        //         type: 'column',
        //         renderer: function (api, rowIdx, columns) {
        //           var data = $.map(columns, function (col, i) {
        //             return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
        //               ? '<tr data-dt-row="' +
        //                   col.rowIdx +
        //                   '" data-dt-column="' +
        //                   col.columnIndex +
        //                   '">' +
        //                   '<td>' +
        //                   col.title +
        //                   ':' +
        //                   '</td> ' +
        //                   '<td>' +
        //                   col.data +
        //                   '</td>' +
        //                   '</tr>'
        //               : '';
        //           }).join('');

        //           return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
        //         }
        //       }
        //     }
        //   });
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
