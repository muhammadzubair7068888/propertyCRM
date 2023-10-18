@extends('layouts/contentLayoutMaster')

@section('title', 'Add Tenant')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
@endsection

@section('content')


    <!-- Vertical Wizard -->
    <section class="vertical-wizard">
        <div class="bs-stepper vertical vertical-wizard-example">
            <div class="bs-stepper-header">
                <div class="step" data-target="#account-details-vertical" role="tab"
                    id="account-details-vertical-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">1</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Tenant Info</span>

                        </span>
                    </button>
                </div>
                <div class="step" data-target="#personal-info-vertical" role="tab"
                    id="personal-info-vertical-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">2</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Kin & Relation</span>

                        </span>
                    </button>
                </div>
                <div class="step" data-target="#address-step-vertical" role="tab" id="address-step-vertical-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">3</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Employment</span>

                        </span>
                    </button>
                </div>
                <div class="step" data-target="#social-links-vertical" role="tab" id="social-links-vertical-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">4</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Bussiness Details</span>

                        </span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <form action="{{ route('admin.tenant.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_type" value="tenant">
                    <input type="hidden" name="status" value="1">
                    <div id="account-details-vertical" class="content" role="tabpanel"
                        aria-labelledby="account-details-vertical-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Tenant Info</h5>

                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="tenant-type">Tenant Type</label>
                                <select class="form-select" id="tenant-type" name="tenant_type" required>
                                    
                                   @foreach ($types as $type )
                                     <option value="{{$type->id}}">{{$type->name}}</option>
                                  @endforeach
                                    
                                   
                                </select>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="first-name-column">First Name</label>
                                <input type="text" id="first-name-column" class="form-control" placeholder="First Name"
                                    name="first_name" required />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="middle-name-column">Middle Name</label>
                                <input type="text" id="middle-name-column" class="form-control" placeholder="Middle Name"
                                    name="middle_name" required />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="vertical-last-name">Last Name</label>
                                <input type="text" id="vertical-last-name" class="form-control" name="last_name"
                                    placeholder="Last Name" required />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="gender">Gender</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                    <option value="other">other</option>
                                </select>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="date">Date</label>
                                <input type="text" id="date"  class="form-control @error('registration_date') border-1 border-danger @enderror" readonly
                                name="registration_date" placeholder="Date" value="{{ date('Y-m-d') }}" required />
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="passport">National ID or Passport</label>
                                    <input type="text" id="passport" class="form-control"
                                        placeholder="National ID or Passport" name="national_id" required />
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="martial-status">Martial Status</label>
                                <input type="text" id="martial-status" class="form-control"
                                    placeholder="Martial Status" name="martial_status" required />
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input type="text" id="phone" class="form-control" name="phone_number"
                                        placeholder="Phone" required />
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">Email</label>
                                    <input type="email" id="email-id-column" class="form-control" name="email"
                                        placeholder="Email" required />
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="country">Country</label>
                                    <input type="text" id="country" class="form-control" placeholder="Country "
                                        name="country" required />
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="city">City</label>
                                    <input type="text" id="city" class="form-control" placeholder="City"
                                        name="city" required />
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="postal-code">Postal Code</label>
                                    <input type="text" id="postal-code" class="form-control"
                                        placeholder="Postal Code" name="postal_code" required />
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="postal-address">Postal Address</label>
                                    <input type="text" id="postal-address" class="form-control"
                                        placeholder="Postal Address" name="postal_address" required />
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="physical-address">Physical Address</label>
                                    <input type="text" id="physical-address" class="form-control"
                                        placeholder="Physical Address" name="physical_address" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" class="form-control" placeholder="Password"
                                        name="password" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                             <div class="mb-1">
                                    <label class="form-label" for="confirm-password">Confirm Password</label>
                                    <input type="password" id="confirm-password"
                                        class="form-control @error('password') border-1 border-danger @enderror"
                                        placeholder="Confirm Password" name="password_confirmation" />
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-outline-secondary btn-prev" disabled>
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button type="submit" class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </button>
                        </div>

                    </div>

                    <div id="personal-info-vertical" class="content" role="tabpanel"
                        aria-labelledby="personal-info-vertical-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Kin & Relation</h5>

                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="kin-name">Kin Name</label>
                                <input type="text" id="kin-name" class="form-control" placeholder="Kin Name" name="kin_name"/>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="kin-phone">Kin Phone</label>
                                <input type="text" id="kin-phone" class="form-control" placeholder="Kin Phone" name="kin_phone_number" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="Kin-relation">Kin Relation</label>
                                <input type="text" id="Kin-relation" class="form-control"
                                    placeholder="Kin Relation" name="kin_relation" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="emergency-phone">Emergency Name</label>
                                <input type="text" id="emergency-phone" class="form-control"
                                    placeholder="Emergency Name" name="kin_emergency_name" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="emergency-phone">Emergency Phone</label>
                                <input type="text" id="emergency-phone" class="form-control"
                                    placeholder="Emergency Phone" name="kin_emergency_phone_number" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="emergency-email">Emergency Email</label>
                                <input type="text" id="emergency-email" class="form-control"
                                    placeholder="Emergency Email" name="kin_emergency_emial"/>
                            </div>
                        </div>
                        <div class="row">
                           
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="emergency-relation">Emergency Relation</label>
                                <input type="text" id="emergency-relation" class="form-control"
                                    placeholder="Emergency Relation" name="kin_emergency_relation"/>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="emergency-postal-address">Emergency Postal Address</label>
                                <input type="text" id="emergency-postal-address" class="form-control"
                                    placeholder="Emergency Postal Address" name="kin_emergency_postal_address" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-1 col-md-12">
                                <label class="form-label" for="emergency-physical-address">Emergency physical
                                    Address</label>
                                <input type="text" id="emergency-physical-address" class="form-control"
                                    placeholder="Emergency physical Address" name="kin_emergency_physical_address" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-prev">
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </button>
                        </div>

                    </div>
                    <div id="address-step-vertical" class="content" role="tabpanel"
                        aria-labelledby="address-step-vertical-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Employment</h5>

                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="employment-status">Employment Status</label>
                                <input type="text" id="employment-status" class="form-control"
                                    placeholder="Employment Status" name="employment_status" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="employment-position">Employment Position</label>
                                <input type="text" id="employment-position" class="form-control"
                                    placeholder="Employment Position" name="employment_position"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="pincode2">Employment Contact Phone</label>
                                <input type="text" id="pincode2" class="form-control"
                                    placeholder="Employment Contact Phone" name="employment_contact_phone" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="employment-email">Employment Contact Phone</label>
                                <input type="text" id="employment-email" class="form-control"
                                    placeholder="Employment Contact Email" name="employment_contact_email" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="employment-postal-address">Employment Postal
                                    Address</label>
                                <input type="text" id="employment-postal-address" class="form-control"
                                    placeholder="Employment physical Address" name="employment_postal_address" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="employment-physical-address">Employment physical
                                    Address</label>
                                <input type="text" id="employment-physical-address" class="form-control"
                                    placeholder="Employment physical Address" name="employment_physical_address" />
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-prev">
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </button>
                        </div>
                    </div>
                    <div id="social-links-vertical" class="content" role="tabpanel"
                        aria-labelledby="social-links-vertical-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Bussiness Details</h5>

                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="bussiness-name">Business Name</label>
                                <input type="text" id="bussiness-name" class="form-control"
                                    placeholder="Business Name" name="business_name" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="license-number">License Number</label>
                                <input type="text" id="license-number" class="form-control"
                                    placeholder="License Number" name="licence_name" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="tax-id">Tax ID</label>
                                <input type="text" id="tax-id" class="form-control" placeholder="Tax ID" name="tax_id"/>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="business-address">Business Address</label>
                                <input type="text" id="business-address" class="form-control"
                                    placeholder="Business Address" name="bussiness_address" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="business-industry">Business Industry</label>
                                <input type="text" id="business-industry" class="form-control"
                                    placeholder="Business Industry" name="bussiness_industry" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="business-description">Business Description</label>
                                <input type="text" id="business-description" class="form-control"
                                    placeholder="Business Description" name="bussiness_description" />
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-prev">
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
    {{-- <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script> --}}
@endsection
