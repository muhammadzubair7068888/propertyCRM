@extends('layouts/contentLayoutMaster')
@section('title', 'DataTables')
@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection
@section('content')
<!-- Multilingual -->
<section id="multilingual-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
       <div class="card-datatable">
          <table class="dt-multilingual table">
            <thead>
               <tr>
                <th></th>
                <th>Property Code</th>
                <th>Property Name</th>
                <th>Location</th>
                <th>Unit</th>
                <th>Action </th>
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
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>

  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>

  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
 {{-- <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script> --}}
  <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
  {{-- <script src="{{asset('js/scripts/components/components-navs.js')}}"></script> --}}

  <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>

<script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>

  <script src="{{asset('js/scripts/components/components-navs.js')}}"></script>

  <script>
     
    $('.dt-multilingual').DataTable({
        ajax:'{{ asset('data/table-datatable.json') }}',
        columns: [
          { data: 'responsive_id' },
          { data: 'city' },
          { data: 'full_name' },
          { data: 'city' },
          { data: 'age' },
          { data: '' }
        ],
        columnDefs: [
          // {
          //   // For Responsive
          //   className: 'control',
          //   orderable: false,
          //   targets: 0
          // },
          {
            // Label
            // targets: -2,
            // render: function (data, type, full, meta) {
            //   var $status_number = full['status'];
            //   var $status = {
            //     1: { title: 'Current', class: 'badge-light-primary' },
            //     2: { title: 'Professional', class: ' badge-light-success' },
            //     3: { title: 'Rejected', class: ' badge-light-danger' },
            //     4: { title: 'Resigned', class: ' badge-light-warning' },
            //     5: { title: 'Applied', class: ' badge-light-info' }
            //   };
            //   if (typeof $status[$status_number] === 'undefined') {
            //     return data;
            //   }
            //   return (
            //     '<span class="badge rounded-pill ' +
            //     $status[$status_number].class +
            //     '">' +
            //     $status[$status_number].title +
            //     '</span>'
            //   );
            // }
          },
          {
            // Actions
            targets: -1,
            title: 'Actions',
            orderable: false,
            render: function (data, type, full, meta) {
              return (
               
                '<a href="{{route('landlord.properties.create')}}" class="item-edit pe-2">' +
                feather.icons['eye'].toSvg({ class: 'font-medium-4' }) +
                '</a>' 
              
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

@endsection

