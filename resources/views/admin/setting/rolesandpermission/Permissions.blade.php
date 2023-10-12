<!-- Multilingual -->
<section id="multilingual-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
               <div class="card-datatable">
                    <table class="dt-multilingual1 table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name
                                </th>
                                <th>Display Name</th>
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
                    data: 'start_date'
                },
                {
                    data: 'city'
                },
                {
                    data: 'city'
                },
                {
                    data: 'salary'
                },
                {
                    data: 'full_name'
                },
                
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
