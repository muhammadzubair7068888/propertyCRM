@extends('layouts/contentLayoutMaster')
@section('title', 'Invoice')
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
          <h4 class="card-title">Invoice</h4>
        </div>

        <div class="card-datatable">
          <table class="dt-multilingual table">
            <thead>
               <tr>
                <th></th>
                <th>Invoice Number</th>
                <th>Invoice Date</th>
                <th>
                  Lease</th>
                <th>
                  Period</th>
                <th>
                  Amount</th>
                <th>
                  Paid</th>
                <th>Balance</th>
                <th>
                  Due On</th>
                <th>Status</th>
                {{-- <th>Action</th> --}}

              </tr>
            </thead>
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
  {{-- <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script> --}}


<script>

  $('.dt-multilingual').DataTable({
      ajax:'{{ asset('data/table-datatable.json') }}',
      columns: [
        { data: 'responsive_id' },
        { data: 'salary' },
        { data: 'start_date' },
        { data: 'salary' },
        { data: 'start_date' },
        { data: 'salary' },
        { data: 'age' },
        { data: 'salary' },
        { data: 'start_date' },
        { data: 'status' },
        // { data: '' },

      ],
      columnDefs: [
        {
          // For Responsive
          className: 'control',
          orderable: false,
          targets: 0
        },
        {
          // Label
          targets: -1,
          render: function (data, type, full, meta) {
            var $status_number = full['status'];
            var $status = {
              1: { title: 'Paid', class: ' badge-light-success' },

              2: { title: 'Over Due', class: ' badge-light-danger' },
              3: { title: 'Paid', class: ' badge-light-success' },
              4:  { title: 'Over Due', class: ' badge-light-danger' },
              5: { title: 'Paid', class: ' badge-light-success' },
            };
            if (typeof $status[$status_number] === 'undefined') {
              return data;
            }
            return (
              '<span class="badge rounded-pill ' +
              $status[$status_number].class +
              '">' +
              $status[$status_number].title +
              '</span>'
            );
          }
        },
        // {
        //   // Actions
        //   targets: -1,
        //   title: 'Actions',
        //   orderable: false,
        //   render: function (data, type, full, meta) {
        //     return (
        //       '<div class="d-inline-flex">' +
        //       '<a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">' +
        //       feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
        //       '</a>' +
        //       '<div class="dropdown-menu dropdown-menu-end">' +
        //       '<a href="javascript:;" class="dropdown-item">' +
        //       feather.icons['file-text'].toSvg({ class: 'me-50 font-small-4' }) +
        //       'Details</a>' +
        //       '<a href="javascript:;" class="dropdown-item">' +
        //       feather.icons['archive'].toSvg({ class: 'me-50 font-small-4' }) +
        //       'Archive</a>' +
        //       '<a href="javascript:;" class="dropdown-item delete-record">' +
        //       feather.icons['trash-2'].toSvg({ class: 'me-50 font-small-4' }) +
        //       'Delete</a>' +
        //       '</div>' +
        //       '</div>' +
        //       '<a href="javascript:;" class="item-edit">' +
        //       feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
        //       '</a>'
        //     );
        //   }
        // }
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
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['full_name'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
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
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
          }
        }
      }
    });

</script>
@endsection



