@extends('layouts/contentLayoutMaster')
@section('title', 'Payment')
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
@section('content')
<!-- Multilingual -->
<section id="multilingual-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Vacate Notices</h4>
        </div>
        <div class="col-12 d-flex justify-content-end " >
         
            <button type="submit" class="btn btn-primary me-2 mt-2 " data-bs-toggle="modal" data-bs-target="#addNewCard" >+ Add Payment</button>
           
        </div>
        <div class="card-datatable">
          <table class="dt-multilingual table">
            <thead>
               <tr>
                <th></th>
                <th>Amount
                </th>
                <th>
                  Payment Method</th>
                <th>Payment Date</th>
                <th>Tenant
                </th>
                <th>
                  Lease</th>
                <th>
                  Property</th>
                <th>Receipt Number</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@include('admin.payment.modal-add-new-cc')
<!--/ Multilingual -->
@endsection
@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
 
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>

  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>

@endsection
@section('page-script')
  {{-- Page js files --}}
  {{-- <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script> --}}

<script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>

<script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>

<script>
 
  $('.dt-multilingual').DataTable({
      ajax:'{{ asset('data/table-datatable.json') }}',
      columns: [
        { data: 'responsive_id' },
        { data: 'salary' },
        { data: 'post' },
        { data: 'start_date' },
        { data: 'full_name' },
        { data: 'salary' },
        { data: 'city' },
        { data: 'salary' },
        { data: 'status' },
        { data: '' }
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
          targets: -2,
          render: function (data, type, full, meta) {
            var $status_number = full['status'];
            var $status = {
              1:  { title: 'Pending', class: ' badge-light-danger' },
              2: { title: 'Approved', class: ' badge-light-success' },
              3: { title: 'Pending', class: ' badge-light-danger' },
              4: { title: 'Approved', class: ' badge-light-success' },
              5:  { title: 'Pending', class: ' badge-light-danger' }
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
        {
          // Actions
          targets: -1,
          title: 'Actions',
          orderable: false,
          render: function (data, type, full, meta) {
            return (
              '<div class="d-inline-flex">' +
              '<a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">' +
              feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
              '</a>' +
              '<div class="dropdown-menu dropdown-menu-end">' +
                '<a href="javascript:;" class="dropdown-item">' +
              feather.icons['eye'].toSvg({ class: 'me-50 font-medium-4' }) +
              'View</a>' +
              '<a href="javascript:;" class="dropdown-item">' +
              feather.icons['file-text'].toSvg({ class: 'me-50 font-medium-4' }) +
              'Receipt</a>' +
              '<a href="javascript:;" class="dropdown-item">' +
              feather.icons['check'].toSvg({ class: 'me-50 font-medium-4 text-success' }) +
              'Approve</a>' +
              '<a href="javascript:;" class="dropdown-item delete-record">' +
              feather.icons['x-circle'].toSvg({ class: 'me-50 font-medium-4 text-danger' }) +
              'Cancel</a>' +
              '</div>' +
              '</div>' 
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

<script>
  const textarea = document.getElementById('floatingTextarea2');
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