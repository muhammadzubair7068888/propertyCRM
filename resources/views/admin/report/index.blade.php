@extends('layouts/contentLayoutMaster')

@section('title', 'Report')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">


@endsection

@section('content')
<!-- Basic tabs start -->
<section id="basic-tabs-components">
  <div class="row match-height">
    <!-- Basic Tabs starts -->
    <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Reports</h4>
        </div>
        <div class="card-body">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="home-tab"
                data-bs-toggle="tab"
                href="#home"
                aria-controls="home"
                role="tab"
                aria-selected="true"
                >Property Report</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="profile-tab"
                data-bs-toggle="tab"
                href="#profile"
                aria-controls="profile"
                role="tab"
                aria-selected="false"
                >General Ledger</a
              >
            </li>
            
            <li class="nav-item">
              <a
                class="nav-link"
                id="about-tab"
                data-bs-toggle="tab"
                href="#about"
                aria-controls="about"
                role="tab"
                aria-selected="false"
                >Journal</a
              >
            </li>
          </ul>
          <div class="tab-content mt-3">
            <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                <div class="col-md-4 mb-1">
                    <label class="form-label" for="Property">Property</label>
                    <select class="select2 form-select" id="Property">
                      <option value="1">Property</option>
                      <option value="2" >Option2</option>
                      <option value="3">Option3</option>
                      <option value="4" >Option4</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-1">
                    <label class="form-label" for="Period">Period</label>
                    <select class="select2 form-select" id="Period    ">
                      <option value="1">Period</option>
                      <option value="2" >Option2</option>
                      <option value="3">Option3</option>
                      <option value="4" >Option4</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-1 d-flex justify-content-end ">
                  <button type="submit" class="btn btn-primary me-1 mt-1 ">Download</button>
                  </div>
                </div>
            <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
              
              @include('admin.report.general-ladger')
             
            </div>
          
            <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">
   @include('admin.report.journal')
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Basic Tabs ends -->

    
  </div>
</section>

<!-- Basic Tabs end -->






@endsection

@section('vendor-script')
  {{-- vendor files --}}
  {{-- <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script> --}}
  {{-- <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script> --}}
 
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>

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
{{-- @section('page-script') --}}
@push('page-script')


  {{-- Page js files --}}
  {{-- <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script> --}}

  {{-- <script>
 
    $('.dt-multilingual').DataTable({
        ajax:'{{ asset('data/table-datatable.json') }}',
        columns: [
          { data: 'responsive_id' },
          { data: 'full_name' },
          { data: 'post' },
          { data: 'email' },
          { data: 'start_date' },
          { data: 'salary' },
          { data: 'status' },
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
            targets: -2,
            render: function (data, type, full, meta) {
              var $status_number = full['status'];
              var $status = {
                1: { title: 'Current', class: 'badge-light-primary' },
                2: { title: 'Professional', class: ' badge-light-success' },
                3: { title: 'Rejected', class: ' badge-light-danger' },
                4: { title: 'Resigned', class: ' badge-light-warning' },
                5: { title: 'Applied', class: ' badge-light-info' }
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
                feather.icons['file-text'].toSvg({ class: 'me-50 font-small-4' }) +
                'Details</a>' +
                '<a href="javascript:;" class="dropdown-item">' +
                feather.icons['archive'].toSvg({ class: 'me-50 font-small-4' }) +
                'Archive</a>' +
                '<a href="javascript:;" class="dropdown-item delete-record">' +
                feather.icons['trash-2'].toSvg({ class: 'me-50 font-small-4' }) +
                'Delete</a>' +
                '</div>' +
                '</div>' +
                '<a href="javascript:;" class="item-edit">' +
                feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
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
   
  </script> --}}
  
  <script src="{{asset('js/scripts/components/components-navs.js')}}"></script>

  <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
  
  

  @endpush

{{-- @endsection --}}


{{-- @section('page-script')
  <script src="{{asset('js/scripts/components/components-navs.js')}}"></script>
@endsection --}}
