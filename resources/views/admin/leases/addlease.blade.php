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
                            <span class="bs-stepper-title">Lease Info</span>

                        </span>
                    </button>
                </div>
                <div class="step" data-target="#personal-info-vertical" role="tab"
                    id="personal-info-vertical-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">2</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Deposits</span>

                        </span>
                    </button>
                </div>
                <div class="step" data-target="#address-step-vertical" role="tab" id="address-step-vertical-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">3</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Tenants</span>

                        </span>
                    </button>
                </div>
                <div class="step" data-target="#social-links-vertical" role="tab" id="social-links-vertical-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">4</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Extra Charges</span>

                        </span>
                    </button>
                </div>
               <div class="step" data-target="#late-fee-charges" role="tab" id="">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">5</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Late Fees</span>

          </span>
        </button>
      </div>
      <div class="step" data-target="#lease-utilities" role="tab" id="">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">6</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Utilities</span>

          </span>
        </button>
      </div>

      <div class="step" data-target="#lease-payment" role="tab" id="">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">7</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Payment Settings</span>

          </span>
        </button>
      </div>

      <div class="step" data-target="#lease-settings" role="tab" id="">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">8</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Lease Settings</span>

          </span>
        </button>
      </div>
            </div>
            <div class="bs-stepper-content">
                <div id="account-details-vertical" class="content" role="tabpanel"
                    aria-labelledby="account-details-vertical-trigger">
                    <div class="content-header">
                        <h5 class="mb-0">Lease Info</h5>

                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="property">Property</label>
                            <select class="form-select" id="property">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="unit-type">Unit</label>
                            <select class="form-select" id="unit-type">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="lease-type">Lease Type</label>
                            <select class="form-select" id="lease-type">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="mb-1 form-password-toggle col-md-6">
                            <label class="form-label" for="rent-amount">Rent Amount</label>
                            <input type="text" id="rent-amount" class="form-control" placeholder="Rent Amount" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="lease-date">Starts Date</label>
                            <input type="text" id="lease-date" class="form-control flatpickr-basic"
                                placeholder="YYYY-MM-DD" />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="lease-date">Due On(Day of Month)</label>
                            <select class="form-select" id="lease-type">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
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
                        <h5 class="mb-0">Deposits</h5>

                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="rent-deposit-amount">Rent Deposit Amount</label>
                            <input type="text" id="rent-deposit-amount" class="form-control"
                                placeholder="Rent Deposit Amount" />
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-start ">
                            <a href=""> <button type="submit" class="btn btn-primary me-2 mt-1 mb-2 "
                                    name="submit" value="Submit">+ Add Lease</button></a>
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
                        <h5 class="mb-0">Tenants</h5>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="basicSelect">Basic Select</label>
                            <select class="form-select" id="basicSelect">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
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
                        <h5 class="mb-0">Extra Charges</h5>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-3 col-sm-3">
                            <label class="form-label" for="extra-charge-name">Extra Charge Name</label>
                            <select class="form-select" id="extra-charge-name">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-3 col-sm-3">
                            <label class="form-label" for="extra-charge-name">Extra Charge Value</label>
                            <input type="text" id="extra-charge-name" class="form-control"
                                placeholder="Extra Charge Value" />
                        </div>
                        <div class="mb-1 col-md-2 col-sm-2">
                            <label class="form-label" for="extra-charge-type">Extra Charge Type</label>
                            <select class="form-select" id="extra-charge-type">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-2 col-sm-2">
                            <label class="form-label" for="extra-charge-frequency">Frequency</label>
                            <select class="form-select" id="extra-charge-frequency">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-2 col-sm-2">
                            <a href="#" class="d-inline-block mt-2">
                                <i data-feather="copy" class="text-dark"></i>
                            </a>
                            <a href="#" class="d-inline-block mt-2">
                                <i data-feather="delete" class="text-danger "></i>
                            </a>

                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-start ">
                            <a href=""> <button type="submit" class="btn btn-primary me-2 mb-2 " name="submit"
                                    value="Submit">+ Add Lease</button></a>
                        </div>
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

                <div id="late-fee-charges" class="content" role="tabpanel" aria-labelledby="address-step-vertical-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Late Fee</h5>
                </div>
                <div class="row">
                    <div class="mb-1 col-md-4 ">
                        <label class="form-label" for="late-fee">Late Fee Name</label>
                        <select class="form-select" id="late-fee">
                          <option>IT</option>
                          <option>Blade Runner</option>
                          <option>Thor Ragnarok</option>
                        </select>
                    </div>
                    <div class="mb-1 col-md-4 ">
                        <label class="form-label" for="late-fee-value">Late Fee Value</label>
                        <input type="number" id="late-fee-value" class="form-control" placeholder="Late Fee Value" />
                    </div>
                    <div class="mb-1 col-md-4 ">
                        <label class="form-label" for="late-fee-type">Late Fee Type</label>
                        <select class="form-select" id="late-fee-type">
                          <option>IT</option>
                          <option>Blade Runner</option>
                          <option>Thor Ragnarok</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-4 ">
                            <label class="form-label" for="late-fee-period">Grace Period (Days)</label>
                            <select class="form-select" id="late-fee-period">
                              <option>IT</option>
                              <option>Blade Runner</option>
                              <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-4 ">
                            <label class="form-label" for="late-fee-frequency">Frequency</label>
                            <select class="form-select" id="late-fee-frequency">
                              <option>IT</option>
                              <option>Blade Runner</option>
                              <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-4 ">
                            <a href="#" class="d-inline-block mt-2">
                                <i data-feather="copy" class="text-dark"></i>
                            </a>
                            <a href="#" class="d-inline-block mt-2">
                                <i data-feather="delete" class="text-danger "></i>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-start ">
                                <a href=""> <button type="submit" class="btn btn-primary me-2 mb-2 " name="submit" value="Submit">+ Add Lease</button></a>
                            </div>
                        </div>
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




            <div id="lease-utilities" class="content" role="tabpanel" aria-labelledby="address-step-vertical-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Utilities</h5>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="mb-1 col-md-3 col-sm-3">
                            <label class="form-label" for="utility-name">Utility Name</label>
                            <select class="form-select" id="utility-name">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-3 col-sm-3">
                            <label class="form-label" for="variable-cost">Variable Cost</label>
                            <input type="text" id="variable-cost" class="form-control"
                                placeholder="Extra Charge Value" />
                        </div>
                        <div class="mb-1 col-md-3">
                            <label class="form-label" for="fixed-fee">Fixed Fee</label>
                            <input type="number" id="fixed-fee" class="form-control"
                                placeholder="Fixes Fee" />
                        </div>

                        <div class="mb-1 col-md-3">
                            <a href="#" class="d-inline-block mt-2">
                                <i data-feather="copy" class="text-dark"></i>
                            </a>
                            <a href="#" class="d-inline-block mt-2">
                                <i data-feather="delete" class="text-danger "></i>
                            </a>

                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-start ">
                            <a href=""> <button type="submit" class="btn btn-primary me-2 mb-2 " name="submit"
                                    value="Submit">+ Add Utilities</button></a>
                        </div>
                        </div>

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

  <div id="lease-payment" class="content" role="tabpanel" aria-labelledby="address-step-vertical-trigger">
    <div class="content-header">
        <h5 class="mb-0">Payment Settings</h5>
    </div>
    <div class="row">
        <div class="row">
            <div class="mb-1 col-md-5">
                <label class="form-label" for="payment-method-name">Payment Settings</label>
                <select class="form-select" id="payment-method-name">
                    <option>IT</option>
                    <option>Blade Runner</option>
                    <option>Thor Ragnarok</option>
                </select>
            </div>
            <div class="mb-1 col-md-5">
                <label class="form-label" for="payment-description">Payment Description</label>
                <input type="text" id="payment-description" class="form-control"
                    placeholder="Payment Description" />
            </div>


            <div class="mb-1 col-md-2">
                <a href="#" class="d-inline-block mt-2">
                    <i data-feather="copy" class="text-dark"></i>
                </a>
                <a href="#" class="d-inline-block mt-2">
                    <i data-feather="delete" class="text-danger "></i>
                </a>

            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-start ">
                <a href=""> <button type="submit" class="btn btn-primary me-2 mb-2 " name="submit"
                        value="Submit">+ Add Payment</button></a>
            </div>
            </div>

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
{{-- #########
     --}}
     <div id="lease-settings" class="content" role="tabpanel" aria-labelledby="address-step-vertical-trigger">
        <div class="content-header">
            <h5 class="mb-0">Add Settings</h5>
        </div>
        <div class="row">
            <div class="row">
                <div class="mb-1 col-md-12">
                    <label class="form-label" for="payment-method-name">Add Settings</label>
                    <select class="form-select" id="payment-method-name">
                        <option>IT</option>
                        <option>Blade Runner</option>
                        <option>Thor Ragnarok</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row ms-1">
            <div class="row mt-2">
                <div class="form-check form-check-primary">
                    <input type="checkbox" class="form-check-input" id="colorCheck1" checked />
                    <h5>This lease contract is entered into on [date] between</h5>
                  </div>
            </div>
            <div class="row">
                <div class="form-check form-check-primary">
                    <input type="checkbox" class="form-check-input" id="colorCheck1" checked />
                    <h5>
                        This lease contract outlines the terms and conditions for the rental </h5>
                  </div>
            </div>
            <div class="row mb-2">
                <div class="form-check form-check-primary">
                    <input type="checkbox" class="form-check-input" id="colorCheck1" checked />
                    <h5>g on [end date], subject to the terms herein.</h5>
                  </div>
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
