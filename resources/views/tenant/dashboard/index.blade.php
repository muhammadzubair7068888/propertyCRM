
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard Analytics')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
  @endsection

@section('content')
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row match-height">
    <!-- Greetings Card starts -->
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-header flex-column align-items-start pb-0">
            {{-- <div class="avatar bg-light-primary p-50 m-0">
              <div class="avatar-content">
                <i data-feather="users" class="font-medium-5"></i>
              </div>
            </div> --}}
            <h2 class="fw-bolder mt-1">Total User</h2>
            <h2 class="fw-bolder mt-1">{{$totalUser}}</h2>
            <p class="card-text"></p>
          </div>
          <div id="gained-chart"></div>
        </div>
      </div>
    <!-- Greetings Card ends -->

    <!-- Subscribers Chart Card starts -->
    <div class="col-lg-4 col-sm-6 col-12">
      <div class="card">
        <div class="card-header flex-column align-items-start pb-0">
          {{-- <div class="avatar bg-light-primary p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div> --}}
          <h2 class="fw-bolder mt-1">Pending Amount</h2>
          <h2 class="fw-bolder mt-1">{{$totalUser}}</h2>
          <p class="card-text"></p>
        </div>
        <div id="gained-chart"></div>
      </div>
    </div>
    <!-- Subscribers Chart Card ends -->

    <!-- Orders Chart Card starts -->
    <div class="col-lg-4 col-sm-6 col-12">
      <div class="card">
        <div class="card-header flex-column align-items-start pb-0">
          {{-- <div class="avatar bg-light-warning p-50 m-0">
            <div class="avatar-content">
              <i data-feather="package" class="font-medium-5"></i>
            </div>
          </div> --}}
          <h2 class="fw-bolder mt-1">Total Property</h2>
          <h2 class="fw-bolder mt-1">{{$property}}</h2>
          <p class="card-text"></p>
        </div>
        <div id="order-chart"></div>
      </div>
    </div>
    <!-- Orders Chart Card ends -->
  </div>




  <!-- List DataTable -->
  <section id="multilingual-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
  <div class="card-datatable">
    <table class="datatables-table table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody>

               @foreach ($user as $data )

               @if($data->user_type == 'tenant' OR $data->user_type == 'landlord')
                <tr>
                    <td> {{$loop->iteration}}</td>
                    <td>{{$data->first_name . ' ' . $data->last_name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone_number}}</td>
                    <td>{{$data->user_type}}</td>
                </tr>
            @endif
                @endforeach


        </tbody>
    </table>

                </div>
            </div>
        </div>
    </div>
</section>

</section>
<!-- Dashboard Analytics end -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-invoice-list.js')) }}"></script>

  <script src="{{ asset(mix('js/scripts/tables/table-datatables-advanced.js')) }}"></script>
    <script>
        $(document).ready(function() {
            $('.datatables-table').DataTable();
        });
    </script>
@endsection

