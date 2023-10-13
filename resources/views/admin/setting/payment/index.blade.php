<section id="nav-filled">
    <div class="row match-height">
        <!-- Filled Tabs starts -->
        <div class="col-xl-10 col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Payment Setting</h4>
                  </div>
                <div class="card-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-fill" data-bs-toggle="tab" href="#home-fill"
                                role="tab" aria-controls="home-fill" aria-selected="true">Payment Method</a>
                        </li>


                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                            <!-- Multilingual -->
                            <section id="multilingual-datatable">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-datatable">
                                                <table class="dt-multilingual20 table">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Type</th>
                                                            <th>Name</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--/ Multilingual -->
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- @section('page-script') --}}
@push('page-script')
    <script>
        $('.dt-multilingual20').DataTable({
            ajax: '{{ asset('data/table-datatable.json') }}',
            columns: [{
                    data: 'responsive_id'
                },
                {
                    data: 'start_date'
                },
                {
                    data: 'post'
                },
                {
                    data: ''
                },


            ],

            columnDefs: [{
                    // For Responsive
                    // className: 'control',
                    // orderable: false,
                    // targets: 0
                },
                // {
                //   // Label
                //   targets: -2,
                //   render: function (data, type, full, meta) {
                //     var $status_number = full['status'];
                //     var $status = {
                //       1: { title: 'Current', class: 'badge-light-primary' },
                //       2: { title: 'Professional', class: ' badge-light-success' },
                //       3: { title: 'Rejected', class: ' badge-light-danger' },
                //       4: { title: 'Resigned', class: ' badge-light-warning' },
                //       5: { title: 'Applied', class: ' badge-light-info' }
                //     };
                //     if (typeof $status[$status_number] === 'undefined') {
                //       return data;
                //     }
                //     return (
                //       '<span class="badge rounded-pill ' +
                //       $status[$status_number].class +
                //       '">' +
                //       $status[$status_number].title +
                //       '</span>'
                //     );
                //   }
                // },
                {
                    // Actions
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return (
                            // '<div class="d-inline-flex">' +
                            // '<a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">' +
                            // feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
                            // '</a>' +
                            // '<div class="dropdown-menu dropdown-menu-end">' +
                            // '<a href="javascript:;" class="dropdown-item">' +
                            // feather.icons['file-text'].toSvg({ class: 'me-50 font-small-4' }) +
                            // 'Details</a>' +
                            // '<a href="javascript:;" class="dropdown-item">' +
                            // feather.icons['archive'].toSvg({ class: 'me-50 font-small-4' }) +
                            // 'Archive</a>' +
                            // '<a href="javascript:;" class="dropdown-item delete-record">' +
                            // feather.icons['eye'].toSvg({ class: 'me-50 font-small-4' }) +
                            // 'Delete</a>' +
                            // '</div>' +
                            // '</div>' +
                            '<a href="" class="item-edit pe-1">' +
                            feather.icons['trash'].toSvg({
                                class: 'font-medium-4 text-danger'
                            }) +
                            '</a>'
                            // '<a href="javascript:;" class="item-edit">' +
                            // feather.icons['edit'].toSvg({
                            //     class: 'font-small-4'
                            // }) +
                            // '</a>'
                        );
                    }
                }
            ],

            //   language: {
            //     url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/' + lang + '.json',
            //     paginate: {
            //       // remove previous & next text from pagination
            //       previous: '&nbsp;',
            //       next: '&nbsp;'
            //     }
            //   },
            dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Details of ' + data['full_name'];
                        }
                    }),
                    type: 'column',
                    renderer: function(api, rowIdx, columns) {
                        var data = $.map(columns, function(col, i) {
                            return col.title !==
                                '' // ? Do not show row in modal popup if title is blank (for check box)
                                ?
                                '<tr data-dt-row="' +
                                col.rowIdx +
                                '" data-dt-column="' +
                                col.columnIndex +
                                '">' +
                                '<td>' +
                                col.title +
                                ':' +
                                '</td> ' +
                                '<td>' +
                                col.data +
                                '</td>' +
                                '</tr>' :
                                '';
                        }).join('');

                        return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
                    }
                }
            }
        });
    </script>
@endpush
{{-- @endsection --}}
