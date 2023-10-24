@extends('layouts/contentLayoutMaster')
@section('title', 'Utility')
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
          <h4 class="card-title">Utilities</h4>

        </div>
        <div class="col-12 d-flex justify-content-end ">
               <a href="{{route('admin.utilities.create')}}"> <button type="submit" class="btn btn-primary me-2 mt-2 " name="submit" value="Submit">+ Add Utility Bill</button></a>
        </div>
        <div class="card-datatable">
          <table class="dt-multilingual table">
            <thead>
              <tr>
                <th></th>
                <th>Reading</th>
                <th>
                  Utility
                  </th>
                <th>Reading Date</th>
                <th>Property</th>
                <th>
                  Unit</th>
                {{-- <th>Status</th> --}}
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $mainUtilities as $mainUtility )
                <tr>



                    <td></td>
                    <td>{{$mainUtility->current_reading}}</td>
                    <td>{{$mainUtility->utility->name}}</td>
                    <td>{{$mainUtility->reading_date}}</td>
                    <td>{{$mainUtility->property->property_name}}</td>
                    <td>{{ $mainUtility->property_unit->unit_type ?? 'N/A' }}</td>
                    <td>
                        <a href="{{route('admin.utilities.show',$mainUtility->id)}}"><i data-feather="eye" class="font-medium-4"></i></a>
                        <a href=""><i data-feather="edit" class="font-medium-4"></i></a>
                        <a href="{{route('admin.utilities.destroy',$mainUtility->id)}}"><i data-feather="trash" class="font-medium-4"></i></a>
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


  <script>





  </script>


@endsection
