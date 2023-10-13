<!-- Multilingual -->
<section id="multilingual-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="col-md-4 mb-1">
                        <label class="form-label" for="journalproperty">Property</label>
                        <select class="select2 form-select" id="journalproperty">
                            <option value="1">Property</option>
                            <option value="2">Option2</option>
                            <option value="3">Option3</option>
                            <option value="4">Option4</option>
                        </select>
                    </div>
                </div>

                <div class="card-datatable">
                    <table class="dt-multilingual1 table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Date
                                </th>
                                <th>
                                    Narration
                                </th>
                                <th>Debit Accoun</th>
                                <th>Credit Accoun</th>
                                <th>
                                    Amount</th>
                                <th>
                                    Prepared By</th>

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
