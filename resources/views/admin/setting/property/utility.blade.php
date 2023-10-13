<!-- Multilingual -->
<section id="multilingual-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header border-bottom">
                    <div class="col-md-4 mb-1">
                        <label class="form-label" for="journalproperty">Property</label>
                        <select class="select2 form-select" id="journalproperty">
                            <option value="1">Property</option>
                            <option value="2">Option2</option>
                            <option value="3">Option3</option>
                            <option value="4">Option4</option>
                        </select>
                    </div>
                </div> --}}

                <div class="card-datatable">
                    <table class="dt-multilingual1 table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                               
                             </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Multilingual -->

{{-- @section('page-script') --}}
@push('page-script')
    <script>
        $('.dt-multilingual1').DataTable({
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
