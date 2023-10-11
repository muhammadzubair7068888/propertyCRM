@extends('layouts/contentLayoutMaster')

@section('title', 'Add Tenant')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
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
                <div id="account-details-vertical" class="content" role="tabpanel"
                    aria-labelledby="account-details-vertical-trigger">
                    <div class="content-header">
                        <h5 class="mb-0">Tenant Info</h5>

                    </div>

                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="tenant-type">Tenant Type</label>
                            <select class="form-select" id="tenant-type">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="first-name-column">First Name</label>
                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name"
                                name="fname-column" />
                        </div>

                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="middle-name-column">Middle Name</label>
                            <input type="text" id="middle-name-column" class="form-control" placeholder="Middle Name"
                                name="middle-name-column" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="vertical-last-name">Last Name</label>
                            <input type="text" id="vertical-last-name" class="form-control" placeholder="Last Name" />
                        </div>

                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="gender">Gender</label>
                            <select class="form-select" id="gender">
                                <option>male</option>
                                <option>female</option>
                                <option>other</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="date">Date</label>
                            <input type="text" id="date" class="form-control flatpickr-basic"
                                placeholder="YYYY-MM-DD" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <div class="mb-1">
                                <label class="form-label" for="passport">National ID or Passport</label>
                                <input
                                  type="text"
                                  id="passport"
                                  class="form-control"
                                  placeholder="National ID or Passport"
                                  name="passport"
                                />
                              </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="martial-status">Martial Status</label>
                            <input type="text" id="martial-status" class="form-control" placeholder="Martial Status"
                                name="fname-column" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <div class="mb-1">
                                <label class="form-label" for="phone">Phone</label>
                                <input
                                  type="text"
                                  id="phone"
                                  class="form-control"
                                  name="phone"
                                  placeholder="Phone"
                                />
                              </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="mb-1">
                                <label class="form-label" for="email-id-column">Email</label>
                                <input
                                  type="email"
                                  id="email-id-column"
                                  class="form-control"
                                  name="email-id-column"
                                  placeholder="Email"
                                />
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <div class="mb-1">
                                <label class="form-label" for="country">Country</label>
                                <input
                                  type="text"
                                  id="country"
                                  class="form-control"
                                  placeholder="Country "
                                  name="country"
                                />
                              </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="mb-1">
                                <label class="form-label" for="city">City</label>
                                <input
                                  type="text"
                                  id="city"
                                  class="form-control"
                                  placeholder="City"
                                  name="city"
                                />
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <div class="mb-1">
                                <label class="form-label" for="postal-code">Postal Code</label>
                                <input
                                  type="text"
                                  id="postal-code"
                                  class="form-control"
                                  placeholder="Postal Code"
                                  name="postal-code"
                                />
                              </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="mb-1">
                                <label class="form-label" for="postal-address">Postal Address</label>
                                <input
                                  type="text"
                                  id="postal-address"
                                  class="form-control"
                                  placeholder="Postal Address"
                                  name="postal-address"
                                />
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="mb-1">
                              <label class="form-label" for="physical-address">Physical Address</label>
                              <input
                                type="text"
                                id="physical-address"
                                class="form-control"
                                placeholder="Physical Address"
                                name="physical-address"
                              />
                            </div>
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="mb-1">
                              <label class="form-label" for="password">Password</label>
                              <input
                                type="text"
                                id="password"
                                class="form-control"
                                placeholder="Password"
                                name="password"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-1">
                              <label class="form-label" for="confirm-password">Confirm Password</label>
                              <input
                                type="text"
                                id="confirm-password"
                                class="form-control"
                                placeholder="Confirm Password"
                                name="lname-column"
                              />
                            </div>
                          </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-outline-secondary btn-prev" disabled>
                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
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
                            <input type="text" id="kin-name" class="form-control" placeholder="Kin Name" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="kin-phone">Kin Phone</label>
                            <input type="text" id="kin-phone" class="form-control" placeholder="Kin Phone" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="Kin-relation">Kin Relation</label>
                            <input type="text" id="Kin-relation" class="form-control" placeholder="Kin Relation" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="emergency-phone">Emergency Phone</label>
                            <input type="text" id="emergency-phone" class="form-control" placeholder="Emergency Phone" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="emergency-email">Emergency Email</label>
                            <input type="text" id="emergency-email" class="form-control" placeholder="Emergency Email" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="emergency-relation">Emergency Relation</label>
                            <input type="text" id="emergency-relation" class="form-control" placeholder="Emergency Relation" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="emergency-name">Emergency Name</label>
                            <input type="text" id="emergency-name" class="form-control" placeholder="Emergency Name" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="emergency-postal-address">Emergency Postal Address</label>
                            <input type="text" id="emergency-postal-address" class="form-control" placeholder="Emergency Postal Address" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-12">
                            <label class="form-label" for="emergency-physical-address">Emergency physical Address</label>
                            <input type="text" id="emergency-physical-address" class="form-control" placeholder="Emergency physical Address" />
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
                                placeholder="Employment Status" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="employment-position">Employment Position</label>
                            <input type="text" id="employment-position" class="form-control"
                                placeholder="Employment Position" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="pincode2">Employment Contact Phone</label>
                            <input type="text" id="pincode2" class="form-control" placeholder="Employment Contact Phone" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="employment-email">Employment Contact Phone</label>
                            <input type="text" id="employment-email" class="form-control" placeholder="Employment Contact Email" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="employment-postal-address">Employment Postal Address</label>
                            <input type="text" id="employment-postal-address" class="form-control" placeholder="Employment physical Address" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="employment-physical-address">Employment physical Address</label>
                            <input type="text" id="employment-physical-address" class="form-control" placeholder="Employment physical Address" />
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
                                placeholder="Business Name" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="license-number">License Number</label>
                            <input type="text" id="license-number" class="form-control"
                                placeholder="License Number" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="tax-id">Tax ID</label>
                            <input type="text" id="tax-id" class="form-control"
                                placeholder="Tax ID" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="business-address">Business Address</label>
                            <input type="text" id="business-address" class="form-control"
                                placeholder="Business Address" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="business-industry">Business Industry</label>
                            <input type="text" id="business-industry" class="form-control"
                                placeholder="Business Industry" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="business-description">Business Description</label>
                            <input type="text" id="business-description" class="form-control"
                                placeholder="Business Description" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-success btn-submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
@endsection
