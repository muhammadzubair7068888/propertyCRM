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
<div class="row">
    <div class="col-lg-4 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">21,459</h3>
            <span>Total Property</span>
          </div>
          <div class="avatar bg-light-primary p-50">
            <span class="avatar-content">
              <i data-feather="home" class="font-medium-5"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">4,567</h3>
            <span>Units</span>
          </div>
          <div class="avatar bg-light-danger p-50">
            <span class="avatar-content">
              <i data-feather="user-plus" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>


  </div>
<div class="col-xl-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Landlord</h4>
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
                      <div class="card-header">
                        <h4 class="card-title">Multiple Column</h4>
                      </div>
                      <div class="card-body">
                        <form class="form">
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
                                    name="mname-column"
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
                                  />
                                </div>
                              </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="dob">Date Of Birth</label>
                                <input
                                readonly
                                  type="text"
                                  id="dob"
                                  class="form-control"
                                  placeholder="Date Of Birth"
                                  name="dob"
                                />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="country-column">Country</label>
                                <input readonly type="text" id="country-column" class="form-control" placeholder="Country" name="country-column" />
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
                                    />
                                </div>
                              </div>
                              <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="residential-address-column">Residential Address</label>
                                    <input
                                    readonly
                                      type="email"
                                      id="residential-address-column"
                                      class="form-control"
                                      name="residential-address-column"
                                      placeholder="Residential Address"
                                    />
                                </div>
                              </div>

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
