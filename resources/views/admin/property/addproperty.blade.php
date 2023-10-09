@extends('layouts/contentLayoutMaster')

@section('title', 'Form Wizard')

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
                            <span class="bs-stepper-title">Property Details</span>

                        </span>
                    </button>
                </div>

                <div class="step" data-target="#personal-info-vertical" role="tab"
                    id="personal-info-vertical-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">2</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Payment Settings</span>

                        </span>
                    </button>
                </div>
                <div class="step" data-target="#address-step-vertical" role="tab" id="address-step-vertical-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">3</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Extra Charges</span>

                        </span>
                    </button>
                </div>
                <div class="step" data-target="#social-links-vertical" role="tab" id="social-links-vertical-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">4</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Late Fees</span>

                        </span>
                    </button>
                </div>
                <div class="step" data-target="#Utilities" role="tab" id="Utilitie">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">5</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Utilities</span>

                        </span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <div id="account-details-vertical" class="content" role="tabpanel"
                    aria-labelledby="account-details-vertical-trigger">
                    <div class="content-header">
                        <h5 class="mb-0">Property Details</h5>

                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="vertical-property">Property Name</label>
                            <input type="text" id="vertical-property" class="form-control" placeholder="Property Name" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="vertical-property-code">Property Code</label>
                            <input type="text" id="vertical-property-code" class="form-control"
                                placeholder="Property Code" aria-label="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 form-password-toggle col-md-6">
                            <label class="form-label" for="vertical-location">Location</label>
                            <input type="text" id="vertical-location" class="form-control" placeholder="Location" />
                        </div>
                        <div class="mb-1 col-md-6">


                            <label class="form-label" for="basicSelect">Landlord</label>
                            <select class="form-select" id="basicSelect">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-start ">
                            <a href=""> <button type="submit" class="btn btn-primary mb-2 " name="submit"
                                    value="Submit">+ Add Unit</button></a>
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
                        <h5 class="mb-0">Personal Info</h5>
                        <small>Enter Your Personal Info.</small>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="agent-commission-value">Agent Commission Value</label>
                            <input type="number" id="agent-commission-value" class="form-control" placeholder="Agent Commission Value" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="agent-commission-type">Agent Commission Value</label>
                            <select class="select2 w-100" id="agent-commission-type">
                                <option label=" "></option>
                                <option>UK</option>
                                <option>USA</option>
                                <option>Spain</option>
                                <option>France</option>
                                <option>Italy</option>
                                <option>Australia</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="payment-method">Payment Method</label>
                            <select class="select2 w-100" id="payment-method">
                                <option label=" "></option>
                                <option>Mpaisa</option>
                                <option>Cash</option>
                                <option>Spain</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="payment-description">Payment Description</label>
                            <input type="number" id="payment-description" class="form-control" placeholder="Payment Description" />
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
                        <h5 class="mb-0">Address</h5>
                        <small>Enter Your Address.</small>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="extra-charges-name">Extra Charges Name</label>
                            <select class="select2 w-100" id="extra-charges-name">
                                <option label=" "></option>
                                <option>Mpaisa</option>
                                <option>Cash</option>
                                <option>Spain</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="extra-charges-value">Extra Charges Value</label>
                            <input type="number" id="extra-charges-value" class="form-control"
                                placeholder="Extra Charges Value" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="extra-charges-type">Extra Charges type</label>
                            <select class="select2 w-100" id="extra-charges-type">
                                <option label=" "></option>
                                <option>Mpaisa</option>
                                <option>Cash</option>
                                <option>Spain</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="extra-charges-frequency">Frequency</label>
                            <select class="select2 w-100" id="extra-charges-frequency">
                                <option label=" "></option>
                                <option>Mpaisa</option>
                                <option>Cash</option>
                                <option>Spain</option>
                            </select>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-12 d-flex justify-content-start ">
                                <a href=""> <button type="submit" class="btn btn-primary mb-2 " name="submit"
                                        value="Submit">+ Add Unit</button></a>
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

                <div id="Utilities" class="content" role="tabpanel" aria-labelledby="account-details-vertical-trigger">
                    <div class="content-header">
                        <h5 class="mb-0">Utilities</h5>
                        <small class="text-muted">Enter Your Account Details.</small>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-start ">
                            <a href=""> <button type="submit" class="btn btn-primary mb-2 " name="submit"
                                    value="Submit">+ Add Utilities</button></a>
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
                <div id="social-links-vertical" class="content" role="tabpanel"
                aria-labelledby="social-links-vertical-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Late Fee</h5>
                    <small>Enter Your Social Links.</small>
                </div>
                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="late-fee-name">Late Fee Name</label>
                        <select class="select2 w-100" id="late-fee-name">
                            <option label=" "></option>
                            <option>Mpaisa</option>
                            <option>Cash</option>
                            <option>Spain</option>
                        </select>
                    </div>
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="late-fee-value">Late Fee Value</label>
                        <input type="number" id="late-fee-value" class="form-control"
                            placeholder="Late Fee Value" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="late-fee-type">Late Fee type</label>
                        <select class="select2 w-100" id="late-fee-type">
                            <option label=" "></option>
                            <option>Mpaisa</option>
                            <option>Cash</option>
                            <option>Spain</option>
                        </select>
                    </div>
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="grace-period">Grace Period(Days)</label>
                        <input type="number" id="grace-period" class="form-control"
                            placeholder="Grace Period(Days)" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="frequency">Frequency</label>
                        <select class="select2 w-100" id="frequency">
                            <option label=" "></option>
                            <option>Mpaisa</option>
                            <option>Cash</option>
                            <option>Spain</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-start ">
                        <a href=""> <button type="submit" class="btn btn-primary mb-2 " name="submit"
                                value="Submit">+ Add Unit</button></a>
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
