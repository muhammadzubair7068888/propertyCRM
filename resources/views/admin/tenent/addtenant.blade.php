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
                    <input type="hidden" name="form[tenantInfo][user_id]" value="1">
                    <input type="hidden" name="form[user][user_type]" value="tenant">
                    <input type="hidden" name="form[user][status]" value="1">
                    <div id="account-details-vertical" class="content" role="tabpanel"
                        aria-labelledby="account-details-vertical-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Tenant Info</h5>

                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="tenant-type">Tenant Type</label>
                                <select class="form-select" id="tenant-type" name="form[tenantInfo][tenant_type]">

                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="first-name-column">First Name</label>
                                <input type="text" id="first-name-column" class="form-control" placeholder="First Name"
                                    name="form[user][first_name]" />
                                @error('form[user][first_name]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="middle-name-column">Middle Name</label>
                                <input type="text" id="middle-name-column" class="form-control" placeholder="Middle Name"
                                    name="form[user][middle_name]" />
                                @error('form[user][middle_name]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="vertical-last-name">Last Name</label>
                                <input type="text" id="vertical-last-name" class="form-control"
                                    name="form[user][last_name]" placeholder="Last Name" />
                                @error('form[user][last_name]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="gender">Gender</label>
                                <select class="form-select" id="gender" name="form[user][gender]">
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                    <option value="other">other</option>
                                </select>
                                @error('form[user][gender]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="date">Date</label>
                                <input type="text" id="date"
                                    class="form-control @error('form[user][registration_date]') border-1 border-danger @enderror"
                                    readonly name="form[user][registration_date]" placeholder="Date"
                                    value="{{ date('Y-m-d') }}" />
                                @error('form[user][registration_date]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="passport">National ID or Passport</label>
                                    <input type="text" id="passport" class="form-control"
                                        placeholder="National ID or Passport" name="form[user][national_id]" />
                                    @error('form[user][national_id]')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="martial-status">Martial Status</label>
                                <input type="text" id="martial-status" class="form-control"
                                    placeholder="Martial Status" name="form[user][martial_status]" />
                                @error('form[user][martial_status]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input type="text" id="phone" class="form-control"
                                        name="form[user][phone_number]" placeholder="Phone" />
                                    @error('form[user][phone_number]')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">Email</label>
                                    <input type="email" id="email-id-column" class="form-control"
                                        name="form[user][email]" placeholder="Email" />
                                    @error('form[user][email]')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="country">Country</label>
                                    <input type="text" id="country" class="form-control" placeholder="Country "
                                        name="form[user][country]" />
                                    @error('form[user][country]')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="city">City</label>
                                    <input type="text" id="city" class="form-control" placeholder="City"
                                        name="form[user][city]" />
                                    @error('form[user][city]')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="postal-code">Postal Code</label>
                                    <input type="text" id="postal-code" class="form-control"
                                        placeholder="Postal Code" name="form[user][postal_code]" />
                                    @error('form[user][postal_code]')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="mb-1">
                                    <label class="form-label" for="postal-address">Postal Address</label>
                                    <input type="text" id="postal-address" class="form-control"
                                        placeholder="Postal Address" name="form[user][postal_address]" />
                                    @error('form[user][postal_address]')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="physical-address">Physical Address</label>
                                    <input type="text" id="physical-address" class="form-control"
                                        placeholder="Physical Address" name="form[user][physical_address]" />
                                    @error('form[user][physical_address]')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" class="form-control" placeholder="Password"
                                        name="form[user][password]" />
                                    @error('form[user][password]')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="confirm-password">Confirm Password</label>
                                    <input type="password" id="confirm-password"
                                        class="form-control @error('password') border-1 border-danger @enderror"
                                        placeholder="Confirm Password" name="form[user][password_confirmation]" />
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
                                <input type="text" id="kin-name" class="form-control" placeholder="Kin Name"
                                    name="form[tenantInfo][kin_name]" />
                                @error('form[tenantInfo][kin_name]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="kin-phone">Kin Phone</label>
                                <input type="text" id="kin-phone" class="form-control" placeholder="Kin Phone"
                                    name="form[tenantInfo][kin_phone_number]" />
                                @error('form[tenantInfo][kin_phone_number]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="Kin-relation">Kin Relation</label>
                                <input type="text" id="Kin-relation" class="form-control" placeholder="Kin Relation"
                                    name="form[tenantInfo][kin_relation]" />
                                @error('form[tenantInfo][kin_relation]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="emergency-phone">Emergency Name</label>
                                <input type="text" id="emergency-phone" class="form-control"
                                    placeholder="Emergency Name" name="form[tenantInfo][kin_emergency_name]" />
                                @error('form[tenantInfo][kin_emergency_name]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="emergency-phone">Emergency Phone</label>
                                <input type="text" id="emergency-phone" class="form-control"
                                    placeholder="Emergency Phone"
                                    name="form[tenantInfo][kin_emergency_phone_number]
                                " />
                                @error('form[tenantInfo][kin_emergency_phone_number]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="emergency-email">Emergency Email</label>
                                <input type="text" id="emergency-email" class="form-control"
                                    placeholder="Emergency Email" name="form[tenantInfo][kin_emergency_emial]" />
                                @error('form[tenantInfo][kin_emergency_emial]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                        <div class="row">

                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="emergency-relation">Emergency Relation</label>
                                <input type="text" id="emergency-relation" class="form-control"
                                    placeholder="Emergency Relation"
                                    name="form[tenantInfo][kin_emergency_relation]
                                " />
                                @error('form[tenantInfo][kin_emergency_relation]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="emergency-postal-address">Emergency Postal Address</label>
                                <input type="text" id="emergency-postal-address" class="form-control"
                                    placeholder="Emergency Postal Address"
                                    name="form[tenantInfo][kin_emergency_postal_address]" />
                                @error('form[tenantInfo][kin_emergency_postal_address]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-12">
                                <label class="form-label" for="emergency-physical-address">Emergency physical
                                    Address</label>
                                <input type="text" id="emergency-physical-address" class="form-control"
                                    placeholder="Emergency physical Address"
                                    name="form[tenantInfo][kin_emergency_physical_address]" />
                                @error('form[tenantInfo][kin_emergency_physical_address]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
                                    placeholder="Employment Status" name="form[tenantInfo][employment_status]" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="employment-position">Employment Position</label>
                                <input type="text" id="employment-position" class="form-control"
                                    placeholder="Employment Position" name="form[tenantInfo][employment_position]" />
                                @error('form[tenantInfo][employment_position]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="pincode2">Employment Contact Phone</label>
                                <input type="text" id="pincode2" class="form-control"
                                    placeholder="Employment Contact Phone"
                                    name="form[tenantInfo][employment_contact_phone]" />
                                @error('form[tenantInfo][employment_contact_phone]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="employment-email">Employment Contact Phone</label>
                                <input type="text" id="employment-email" class="form-control"
                                    placeholder="Employment Contact Email"
                                    name="form[tenantInfo][employment_contact_email]" />
                                @error('form[tenantInfo][employment_contact_email]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="employment-postal-address">Employment Postal
                                    Address</label>
                                <input type="text" id="employment-postal-address" class="form-control"
                                    placeholder="Employment physical Address"
                                    name="form[tenantInfo][employment_postal_address]" />
                                @error('form[tenantInfo][employment_postal_address]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="employment-physical-address">Employment physical
                                    Address</label>
                                <input type="text" id="employment-physical-address" class="form-control"
                                    placeholder="Employment physical Address"
                                    name="form[tenantInfo][employment_physical_address]" />
                                @error('form[tenantInfo][employment_physical_address]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
                                    placeholder="Business Name" name="form[tenantInfo][business_name]" />
                                @error('form[tenantInfo][business_name]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="license-number">License Number</label>
                                <input type="text" id="license-number" class="form-control"
                                    placeholder="License Number" name="form[tenantInfo][licence_name]" />
                                @error('form[tenantInfo][licence_name]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="tax-id">Tax ID</label>
                                <input type="text" id="tax-id" class="form-control" placeholder="Tax ID"
                                    name="form[tenantInfo][tax_id]" />
                                @error('form[tenantInfo][tax_id]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="business-address">Business Address</label>
                                <input type="text" id="business-address" class="form-control"
                                    placeholder="Business Address" name="form[tenantInfo][bussiness_address]" />

                                @error('form[tenantInfo][bussiness_address]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="business-industry">Business Industry</label>
                                <input type="text" id="business-industry" class="form-control"
                                    placeholder="Business Industry" name="form[tenantInfo][bussiness_industry]" />
                                @error('form[tenantInfo][bussiness_industry]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="business-description">Business Description</label>
                                <input type="text" id="business-description" class="form-control"
                                    placeholder="Business Description" name="form[tenantInfo][bussiness_description]" />
                                @error('form[tenantInfo][bussiness_description]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
