@extends('layouts/contentLayoutMaster')

@section('title', 'Tenant')

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
  <div class="col-lg-5 col-sm-6">
    <div class="card">
      <div class="card-body d-flex align-items-center justify-content-between">
       
        <div>
            <h3 class="fw-bolder mb-75">{{@$tenant->user->first_name}}</h3>
            <h5>First Name</h5>
          </div>
          <div>
            <h3 class="fw-bolder mb-75">{{@$tenant->user->middle_name}}</h3>
            <h5>Middle Name</h4>
          </div>
          <div>
            <h3 class="fw-bolder mb-75">{{@$tenant->user->last_name}}</h3>
            <h5>Last Name</h5>
          </div>
      </div>
    </div>
  </div>
  </div>
<div class="col-xl-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Tenant</h4>
        
        <div> <a href="{{ route('admin.tenant.index') }}" class="btn btn-secondary">Go Back</a></div>
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
              id="leases-tab-justified"
              data-bs-toggle="tab"
              href="#leases-just"
              role="tab"
              aria-controls="profile-just"
              aria-selected="true"
              >Leases</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="payment-tab-justified"
              data-bs-toggle="tab"
              href="#payment-just"
              role="tab"
              aria-controls="profile-just"
              aria-selected="true"
              >Payment</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="messages-tab-justified"
              data-bs-toggle="tab"
              href="#document-just"
              role="tab"
              aria-controls="messages-just"
              aria-selected="false"
              >Documents</a
            >
          </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content pt-1">
          <div class="tab-pane active" id="home-just" role="tabpanel" aria-labelledby="home-tab-justified">
            <section id="multiple-column-form">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      {{-- <div class="card-header">
                        <h4 class="card-title">Multiple Column</h4>
                      </div> --}}
                      <div class="card-body">
                        <form class="form">

                          {{-- @php
                          $value='';
                          
                            if (@$tenant->tenant_type == 1) {
                             $value="Individual";
                            }elseif (@$tenant->tenant_type == 2) {
                              $value="Bussiness";
                            }
                          @endphp --}}
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="tenant-type">Tenant Type</label>
                                        <input
                                        readonly
                                          type="text"
                                          id="tenant-type"
                                          class="form-control"
                                          placeholder="tenant-type"
                                          name="tenant-type"
                                          value='{{@$tenant->tenantType->display_name}}'
                                        />
                                      </div>
                                </div>
                            </div>
                          <div class="row">
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="first-name-column">First Name</label>
                                <input
                                readonly
                                  type="text"
                                  id="first-name-column"
                                  class="form-control"
                                  placeholder="First Name"
                                  name="fname-column"
                                  value="{{@$tenant->user->first_name}}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                  <label class="form-label" for="middle-name-column">Middle Name</label>
                                  <input
                                  readonly
                                    type="text"
                                    id="middle-name-column"
                                    class="form-control"
                                    placeholder="Middle Name"
                                    value="{{@$tenant->user->middle_name}}"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6 col-12">
                                <div class="mb-1">
                                  <label class="form-label" for="last-name-column">Last Name</label>
                                  <input
                                  readonly
                                    type="text"
                                    id="last-name-column"
                                    class="form-control"
                                    placeholder="Last Name"
                                    name="lname-column"
                                    value="{{@$tenant->user->last_name}}"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6 col-12">
                                <div class="mb-1">
                                  <label class="form-label" for="phone-name-column">Phone</label>
                                  <input
                                  readonly
                                    type="text"
                                    id="phone-name-column"
                                    class="form-control"
                                    placeholder="Phone"
                                    name="phone-column"
                                    value="{{@$tenant->user->phone_number}}"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6 col-12">
                                <div class="mb-1">
                                  <label class="form-label" for="email-column">Email</label>
                                  <input
                                  readonly
                                    type="text"
                                    id="email-column"
                                    class="form-control"
                                    placeholder="Email"
                                    name="email-column"
                                    value="{{@$tenant->user->email}}"
                                  />
                                </div>
                              </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="dob">Postal Code</label>
                                <input
                                readonly
                                  type="text"
                                  id="dob"
                                  class="form-control"
                                  placeholder="Date Of Birth"
                                  name="dob"
                                  value="{{@$tenant->user->postal_code}}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="country-column">Country</label>
                                <input readonly type="text" id="country-column" class="form-control" placeholder="Country" name="country-column" value="{{@$tenant->user->country}}" />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="city-floating">City</label>
                                <input
                                readonly
                                  type="text"
                                  id="city-floating"
                                  class="form-control"
                                  name="city-floating"
                                  placeholder="City"
                                  value="{{@$tenant->user->city}}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="gender">Gender</label>
                                <input
                                readonly
                                  type="text"
                                  id="gender"
                                  class="form-control"
                                  name="gender"
                                  placeholder="Gender"
                                  value="{{@$tenant->user->gender}}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="passport-id-column">National ID or Passport</label>
                                <input
                                readonly
                                  type="email"
                                  id="passport-id-column"
                                  class="form-control"
                                  name="passport-id-column"
                                  placeholder="National ID or Passport"
                                  value="{{@$tenant->user->national_id}}"
                                />
                              </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                  <label class="form-label" for="postal-address-column">Postal Address</label>
                                  <input
                                  readonly
                                    type="email"
                                    id="postal-address-column"
                                    class="form-control"
                                    name="postal-address-column"
                                    placeholder="Postal Address"
                                    value="{{@$tenant->user->postal_address}}"
                                  />
                                </div>
                              </div>
                              <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="physical-address-column">Physical Address</label>
                                    <input
                                    readonly
                                      type="email"
                                      id="physical-address-column"
                                      class="form-control"
                                      name="physical-address-column"
                                      placeholder="Physical Address"
                                      value="{{@$tenant->user->physical_address}}"
                                    />
                                </div>
                              </div>
                              {{-- <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="residential-address-column">Residential Address</label>
                                    <input
                                    readonly
                                      type="email"
                                      id="residential-address-column"
                                      class="form-control"
                                      name="residential-address-column"
                                      placeholder="Residential Address"
                                      value="{{@$tenant->physical_address}}"
                                    />
                                </div>
                              </div> --}}

                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          </div>
          <div class="tab-pane" id="document-just" role="tabpanel" aria-labelledby="profile-tab-justified">
          @include('admin.tenent.view.documents')
          </div>


          <div class="tab-pane" id="payment-just" role="tabpanel" aria-labelledby="settings-tab-justified">
            @include('admin.tenent.view.payment')
          </div>
          <div class="tab-pane" id="leases-just" role="tabpanel" aria-labelledby="settings-tab-justified">

            @include('admin.tenent.view.lease')
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
