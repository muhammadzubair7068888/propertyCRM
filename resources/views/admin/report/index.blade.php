@extends('layouts/contentLayoutMaster')

@section('title', 'Tabs')

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
                >Home</a
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
                >Service</a
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
                >Account</a
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
                  <button type="submit" class="btn btn-primary me-1 mt-1 ">Save</button>
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
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
 
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>

 
@endsection
@section('page-script')
  {{-- Page js files --}}
  {{-- <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script> --}}
  
  <script src="{{asset('js/scripts/components/components-navs.js')}}"></script>

  <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
  


@endsection


{{-- @section('page-script')
  <script src="{{asset('js/scripts/components/components-navs.js')}}"></script>
@endsection --}}
