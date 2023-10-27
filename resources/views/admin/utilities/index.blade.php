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
@include('admin.utilities.utilityEditModel')
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
                <th>ID</th>
                <th>Reading</th>
                <th>Utility</th>
                <th>Reading Date</th>
                <th>Property</th>
                <th>Unit</th>
                {{-- <th>Status</th> --}}
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($unit as $mainUtility )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$mainUtility->current_reading}}</td>
                    <td>{{$mainUtility->main_utilities->utility->name}}</td>
                    <td>{{$mainUtility->reading_date}}</td>


                    <td>{{$mainUtility->main_utilities->property->property_name}}</td>
                    <td>{{ $mainUtility->property_unit->unit_name  }}</td>
                    <td>
                        <a href="{{route('admin.utilities.show',$mainUtility->id)}}"><i data-feather="eye" class="font-medium-4"></i></a>
                        <button href="" utility_id={{$mainUtility->id}} class="inlineform"><i data-feather="edit" class="font-medium-4" ></i></button>
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

$('.inlineform').on('click',function(){
    $('#inlineForm').modal('show');
    var utility_id=$(this).attr(utility_id);
$.ajax({
    type: "get",
    url: "url",
    data: "data",
    dataType: "dataType",
    success: function (response) {

    }
});
})
// $.ajax({
//     type: "method",
//     url: "url",
//     data: "data",
//     dataType: "dataType",
//     success: function (response) {

//     }
// });

          function modal(){
            document.getElementById('inlineForm').style.display = 'block';
          }

        $('.dt-multilingual').DataTable({
            resposive: true,


        });
    </script>

@endsection
