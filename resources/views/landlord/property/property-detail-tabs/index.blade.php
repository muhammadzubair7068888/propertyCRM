@extends('layouts/contentLayoutMaster')
@section('title', 'Property Details')
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
    <section id="nav-filled">
        <div class="row match-height">
            <!-- Filled Tabs starts -->
            <div class="col-xl-9 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Property Details</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab-fill" data-bs-toggle="tab" href="#home-fill"
                                    role="tab" aria-controls="home-fill" aria-selected="true">Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-fill" data-bs-toggle="tab" href="#profile-fill"
                                    role="tab" aria-controls="profile-fill" aria-selected="false">Units</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="messages-tab-fill" data-bs-toggle="tab" href="#messages-fill"
                                    role="tab" aria-controls="messages-fill" aria-selected="false">Leases</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="settings-tab-fill" data-bs-toggle="tab" href="#settings-fill"
                                    role="tab" aria-controls="settings-fill" aria-selected="false">Invoices</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vacate-tab-fill" data-bs-toggle="tab" href="#vacate-fill"
                                    role="tab" aria-controls="settings-fill" aria-selected="false">Vacate Notice</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content pt-1">
                            <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                              @include('landlord.property.property-detail-tabs.info')
                            </div>
                            <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                                {{-- <div class="row" id="table-hover-row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title"></h4>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">

                                                </p>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Unit Name</th>
                                                            <th>Unit Type</th>
                                                            <th>Unit Mode</th>
                                                            <th>Bed Rooms</th>
                                                            <th>Square Foot</th>
                                                            <th>Lease</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold">house</span>
                                                            </td>
                                                            <td>1234</td>
                                                            <td>sah house</td>
                                                            <td>grw</td>
                                                            <td>
                                                                Pakistan
                                                            </td>
                                                            <td>LS8000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                @include('landlord.property.property-detail-tabs.units')
                            </div>
                            <div class="tab-pane" id="messages-fill" role="tabpanel" aria-labelledby="messages-tab-fill">
                                @include('landlord.property.property-detail-tabs.lease')
                                {{-- <div class="row" id="table-hover-row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title"></h4>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">
                                                </p>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Lease Number</th>
                                                            <th>Unit</th>
                                                            <th>Rent Amount</th>
                                                            <th>Lease Type</th>
                                                            <th>Due On(Day of Month)</th>
                                                            <th>Last Billing</th>
                                                            <th>Tenants</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold">house</span>
                                                            </td>
                                                            <td>1234</td>
                                                            <td>sah house</td>
                                                            <td>grw</td>
                                                            <td>
                                                                Pakistan
                                                            </td>
                                                            <td>LS8000</td>
                                                            <td>012</td>
                                                            <td><span
                                                                    class="badge rounded-pill badge-light-success me-1">Active</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                            <div class="tab-pane" id="settings-fill" role="tabpanel"
                                aria-labelledby="settings-tab-fill">
                              @include('landlord.property.property-detail-tabs.invoice')
                                {{-- <div class="row" id="table-hover-row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title"></h4>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">

                                                </p>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Invoice Number</th>
                                                            <th>Invoice Date</th>
                                                            <th>Amount</th>
                                                            <th>Paid</th>
                                                            <th>Balance</th>
                                                            <th>Due on</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold">house</span>
                                                            </td>
                                                            <td>1234</td>
                                                            <td>sah house</td>
                                                            <td>grw</td>
                                                            <td>
                                                                Pakistan
                                                            </td>
                                                            <td>LS8000</td>
                                                            <td><span
                                                                    class="badge rounded-pill badge-light-danger me-1">Over
                                                                    Due</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="tab-pane" id="vacate-fill" role="tabpanel"
                                aria-labelledby="vacate-tab-fill">
                                @include('landlord.property.property-detail-tabs.vacate-notices')
                                {{-- <div class="row" id="table-hover-row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title"></h4>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">

                                                </p>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Vacating date</th>
                                                            <th>Tenant</th>
                                                            <th>Lease</th>
                                                            <th>Units</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1234</td>
                                                            <td>grw</td>
                                                            <td>LS8000</td>
                                                            <td>90</td>
                                                           
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 ">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Summary</h4>
                </div> 
                <div class="ms-3 justify-content-start row">
                    <div class="mb-1 col-3">Total Units:
                        <p>3</p>
                    </div>
                    <div class="mb-1 col-3">Occupied:
                        <p>3</p>
                    </div>
                    <div class="mb-1 col-3">Vacant:
                        <p>0</p>
                    </div>
                  </div>
                  <div class="row ms-3">
                    <div class="col-6">
                        <div  class="card-category text-gray"> Name: </div>
                        <div  class="text-black  mb-1">Sahil House</div>
                    </div>
                    <div _ngcontent-diy-c215="" class="col-6">
                        <div class="card-category text-gray"> Code: </div>
                        <div class="text-black" >sahil123</div>
                    </div>
                </div>
                  <div class="card-category text-gray p-1 ms-3 "> Location:
                  <div  class="text-black">gujranwala</div>
                  </div>
                </div>
            </div>
                
            <!-- Filled Tabs ends -->
        </div>
    </section>

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
    <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection
@push('page-script')
    {{-- Page js files --}}
    
    <script src="{{ asset('js/scripts/components/components-navs.js') }}"></script>
@endpush
