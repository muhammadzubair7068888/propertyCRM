@extends('layouts/contentLayoutMaster')

@section('title', 'Property Detials')

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
<div class="row">
    <div class="col-lg-2 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">21,459</h3>
            <span>Total</span>
          </div>
          <div class="avatar bg-light-primary p-50">
            <span class="avatar-content">
              <i data-feather="home" class="font-medium-5"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">4,567</h3>
            <span>Occupied</span>
          </div>
          <div class="avatar bg-light-danger p-50">
            <span class="avatar-content">
              <i data-feather="check-circle" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="card">
          <div class="card-body d-flex align-items-center justify-content-between">
            <div>
              <h3 class="fw-bolder mb-75">4,567</h3>
              <span>Vacant</span>
            </div>
            <div class="avatar bg-light-danger p-50">
              <span class="avatar-content">
                <i data-feather="search" class="font-medium-4"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6">
        <div class="card">
          <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <h3 class="fw-bolder mb-75">Name</h3>
                <span>{{@$property->property_name}}</span>

            </div>
            <div>
                <h3 class="fw-bolder mb-75">Location</h3>
                <span>{{@$property->location}}</span>
              </div>
              <div>
                <h3 class="fw-bolder mb-75">Code</h3>
                <span>{{@$property->property_code}}</span>
              </div>
            <div class="avatar bg-light-danger p-50">
              <span class="avatar-content">
                <i data-feather="user" class="font-medium-4"></i>
              </span>
            </div>
          </div>
        </div>
      </div>


  </div>
<div class="col-xl-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Property Detials</h4>
      </div>
      <div class="card-body">
        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="home-tab-justified"
              data-bs-toggle="tab"
              href="#home-just"
              role="tab"
              aria-controls="home-just"
              aria-selected="true"
              >Info</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="profile-tab-justified"
              data-bs-toggle="tab"
              href="#profile-just"
              role="tab"
              aria-controls="profile-just"
              aria-selected="true"
              >Units</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="messages-tab-justified"
              data-bs-toggle="tab"
              href="#messages-just"
              role="tab"
              aria-controls="messages-just"
              aria-selected="false"
              >Lease</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="invoices"
              data-bs-toggle="tab"
              href="#settings-just"
              role="tab"
              aria-controls="settings-just"
              aria-selected="false"
              >Invoices</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="vacate-notices"
              data-bs-toggle="tab"
              href="#vacate-notice"
              role="tab"
              aria-controls="vacate-notice"
              aria-selected="false"
              >Vacate Notice</a
            >
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content pt-1">
          <div class="tab-pane active" id="home-just" role="tabpanel" aria-labelledby="home-tab-justified">
            <form class="form"  method="post">
                @csrf
                <input type="hidden" name="user_type" value="landlord">
                <input type="hidden" name="gender" value="male">
                <input type="hidden" name="status" value="1">
                  <div class="row">
                      <div class=" col-6">
                          <div class="mb-1">
                              <label class="form-label " for="property-type">Property Type</label>
                              <input type="text" id="property-typ" readonly
                                  class="form-control   "
                                  placeholder="Property Type" name="property-type" value="{{@$property->propertyType->name}}" />
                          </div>
                      </div>
                      <div class=" col-6">
                        <div class="mb-1">
                            <label class="form-label " for="property-name ">Property Name</label>
                            <input type="text" id="property-name " readonly
                                class="form-control "
                                placeholder="Property Name" name="property-name " value="{{@$property->property_name}}" />
                        </div>
                    </div>
                    <div class=" col-6">
                        <div class="mb-1">
                            <label class="form-label " for="property-code">Property Code</label>
                            <input type="text" id="property-code" readonly
                                class="form-control   "
                                placeholder="Property Code" name="property-code" value="{{@$property->property_code}}" />
                        </div>
                    </div>
                    <div class=" col-6">
                        <div class="mb-1">
                            <label class="form-label " for="location">Location</label>
                            <input type="text" id="location" readonly
                                class="form-control   "
                                placeholder="Location" name="location" value="{{@$property->location}}" />
                        </div>
                    </div>
                    {{-- <div class=" col-6">
                        <div class="mb-1">
                            <label class="form-label " for="address">Address</label>
                            <input type="text" id="address"readonly
                                class="form-control  "
                                placeholder="Address" name="address" />
                        </div>
                    </div> --}}








                  </div>
              </form>





          </div>
          <div class="tab-pane" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-justified">
            @include('admin.property.viewproperty.units')

          </div>
          <div class="tab-pane" id="messages-just" role="tabpanel" aria-labelledby="messages-tab-justified">
       @include('admin.property.viewproperty.lease')
          </div>
          <div class="tab-pane" id="settings-just" role="tabpanel" aria-labelledby="invoices">
            @include('admin.property.viewproperty.invoices')
          </div>
          <div class="tab-pane" id="vacate-notice" role="tabpanel" aria-labelledby="vacate-notices">
@include('admin.property.viewproperty.vacate-notices')
          </div>

        </div>
      </div>
    </div>
  </div>
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

  @push('page-script')
  <script src="{{asset('js/scripts/components/components-navs.js')}}"></script>
@endpush
