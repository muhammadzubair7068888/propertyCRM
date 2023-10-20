@extends('layouts/contentLayoutMaster')

@section('title', 'Add Lease')

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
                            <select class="form-select" id="property" required>
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="unit-type">Unit</label>
                            <select class="form-select" id="unit-type" required>
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="lease-type">Lease Type</label>
                            <select class="form-select" id="lease-type" required>
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="mb-1 form-password-toggle col-md-6">
                            <label class="form-label" for="rent-amount">Rent Amount</label>
                            <input type="text" id="rent-amount"  class="form-control" placeholder="Rent Amount" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="lease-date">Starts Date</label>
                            <input type="text" id="lease-date" class="form-control flatpickr-basic"
                                placeholder="YYYY-MM-DD"  required/>
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="lease-date">Due On(Day of Month)</label>
                            <select class="form-select" id="lease-type" required>
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
                        <div>
                            <div id="payment">
                                <div class="row d-flex align-items-end rept">
                                    <div class="mb-1 col-md-5">
                                        <label class="form-label" for="rent-deposit-amount">Rent Deposit Amount</label>
                                        <input type="text" id="rent-deposit-amount"
                                        class="form-control"
                                        placeholder="rent-deposit-amount" name="rent_deposit_amount" />

                                    </div>
                                    <div class="mb-1 col-md-5">
                                        <label class="form-label" for="utility-names">Utility Name
                                         </label>
                                         <select class="select2 w-100" id="utility-names" name="utility_names">

                                             <option value="">Water</option>
                                             <option value="">Gas</option>
                                             <option value="">Electricity</option>

                                     </select>

                                    </div>
                                    <div class="mb-1 col-md-5">
                                        <label class="form-label" for="deposit-amount"> Deposit Amount</label>
                                        <input type="text" id="deposit-amount"
                                        class="form-control"
                                        placeholder="deposit-amount" name="deposit_amount" />

                                    </div>
                                    <div class="col-md-2 col-12 mb-1 ">
                                        <div>
                                            <a class="btn btn-outline-danger text-nowrap px-1">
                                                <i data-feather="x" class="me-25"></i>
                                            </a>
                                            <a class="btn btn-outline-success text-nowrap px-1"
                                                   onclick="addNew('payment','paymentAppend')">
                                                <i data-feather="copy" class="me-25"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="paymentAppend"></div>
                            <div class="row">
                                <div class="col-12 pb-2">
                                    <a class="btn btn-icon btn-primary" onclick="addNew('payment','paymentAppend')">
                                        <i data-feather="plus" class="me-25"></i>
                                        <span>Add New</span>
                                    </a>
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
                <div id="address-step-vertical" class="content" role="tabpanel"
                    aria-labelledby="address-step-vertical-trigger">
                    <div class="content-header">
                        <h5 class="mb-0">Tenants</h5>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-12">
                            <label class="form-label" for="tenant">Tenant</label>
                            <select
                                class="select2 w-100 "
                                id="tenant" name="tenant[]">

                                    <option value="1">Tenant</option>
                                    <option value="1">Landlord</option>
                                    <option value="1">Admin</option>

                            </select>
                            @error('payment_method[]')
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
                        <h5 class="mb-0">Extra Charges</h5>
                    </div>
                    <div class="row">
                        <div>
                            <div id="extraCharge">
                                <div class="row d-flex align-items-end rept">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="extra-charges-name">Extra Charges
                                                    Name</label>
                                                <select
                                                    class="select2 w-100 @error('extra_charge_name') border-1 border-danger @enderror"
                                                    id="extra-charges-name" name="extra[extra_charge_name][]">

                                                        <option value="1">Processing Fee </option>
                                                        <option value="1">Processing Fee </option>
                                                        <option value="1">Processing Fee </option>



                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="extra-charges-value">Extra Charges
                                                    Value</label>
                                                <input type="number" class="form-control " id="extra-charges-value"
                                                    aria-describedby="itemname" placeholder="Extra Charges Value"
                                                    name="extra[extra_charges_value][]" />
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="extra-charges-type">Extra Charges
                                                    Type</label>
                                                <select
                                                    class="select2 w-100 @error('extra_charges_type') border-1 border-danger @enderror"
                                                    id="extra-charges-type" name="extra[extra_charges_type][]">
                                                    <option label=" "></option>
                                                    <option value="fixed">Fixed Value</option>
                                                    <option value="total">% Of Total Rent</option>
                                                    <option value="total_collected">% Of Total Collected Rent</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="extra_frequency">Frequency</label>
                                                <select
                                                    class="select2 w-100 @error('extra_frequency') border-1 border-danger @enderror"
                                                    id="extra_frequency" name="extra[extra_frequency][]">
                                                    <option label=" "></option>
                                                    <option value="one_time">One Time</option>
                                                    <option value="period">Period To Period</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12 ">
                                            <div>
                                                <a class="btn btn-outline-danger text-nowrap px-1">
                                                    <i data-feather="x" class="me-25"></i>
                                                </a>
                                                <a class="btn btn-outline-success text-nowrap px-1"
                                                    onclick="addNew('extraCharge','extraChargeAppend')">
                                                    <i data-feather="copy" class="me-25"></i>
                                                </a>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            <div id="extraChargeAppend"></div>
                            <div class="row">
                                <div class="col-12 pb-2">
                                    <a class="btn btn-icon btn-primary"
                                        onclick="addNew('extraCharge','extraChargeAppend')">
                                        <i data-feather="plus" class="me-25"></i>
                                        <span>Add New</span>
                                    </a>
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

                <div id="late-fee-charges" class="content" role="tabpanel" aria-labelledby="address-step-vertical-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Late Fee</h5>
                </div>
                <div class="row">
                    <div>
                        <div id="lateFee">
                            <div class="row d-flex align-items-end rept">
                                <div class="row align-items-center">
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="late-fee-name">Late Fee Name</label>
                                            <select
                                                class="select2 w-100 @error('late_fee_name') border-1 border-danger @enderror"
                                                id="late-fee-name" name="late[late_fee_name][]">
                                                <option label=" "></option>
                                                <option value="penalty">Penalty</option>

                                            </select>
                                            @error('late_fee_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="late-fee-value">Late Fee Value</label>
                                            <input type="number" id="late-fee-value"
                                                class="form-control @error('late_fee_value') border-1 border-danger @enderror"
                                                placeholder="Late Fee Value" name="late[late_fee_value][]" />
                                            @error('late_fee_value')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="late-fee-type">Late Fee type</label>
                                            <select
                                                class="select2 w-100 @error('late_fee_type') border-1 border-danger @enderror"
                                                id="late-fee-type" name="late[late_fee_type][]">
                                                <option label=" "></option>
                                                <option value="fixed">Fixed Value</option>
                                                <option value="total">% Of Total Rent</option>
                                                <option value="total_collected">% Of Total Collected Rent</option>
                                            </select>
                                            @error('late_fee_type')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="grace-period">Grace
                                                Period(Days)</label>
                                            <input type="number" id="grace-period"
                                                class="form-control @error('late_fee_grace_period') border-1 border-danger @enderror"
                                                placeholder="Grace Period(Days)" name="late[late_fee_grace_period][]" />
                                            @error('late_fee_grace_period')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="late_fee_frequency">Frequency</label>
                                            <select
                                                class="select2 w-100 @error('late_fee_frequency') border-1 border-danger @enderror"
                                                id="late_fee_frequency" name="late[late_fee_frequency][]">
                                                <option label=" "></option>
                                                <option value="one_time">One Time</option>
                                                <option value="daily">Daily</option>
                                                <option value="weekly">Weekly</option>
                                                <option value="bi_weekly">Bi Weekly</option>
                                                <option value="monthly">Monthly</option>
                                            </select>
                                            @error('late_fee_frequency')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>



                                        <div class="col-md-2 col-12 ">

                                            <a class="btn btn-outline-danger text-nowrap px-1 mt-2">
                                                <i data-feather="x" class="me-25"></i>
                                            </a>
                                            <a class="btn btn-outline-success text-nowrap px-1 mt-2"
                                                onclick="addNew('lateFee','latefeeAppend')">
                                                <i data-feather="copy" class="me-25"></i>
                                            </a>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div id="latefeeAppend"></div>
                        <div class="row">
                            <div class="col-12 pb-2">
                                <a class="btn btn-icon btn-primary" onclick="addNew('lateFee','latefeeAppend')">
                                    <i data-feather="plus" class="me-25"></i>
                                    <span>Add New</span>
                                </a>
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
                <div>
                    <div id="utitiltyAdd">
                        <div class="row d-flex align-items-end rept">
                            <div class="row align-items-center">

                                <div class="col-md-4 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="utility-name"> Utility Name</label>
                                        <select
                                            class="select2 w-100 @error('utility_name') border-1 border-danger @enderror"
                                            id="utility-name" name="utility_name[]">
                                            <option label=" "></option>
                                            <option value="water">Water</option>
                                            <option value="gas">Gas</option>
                                            <option value="garbage">Garbage</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="itemcost">Variable Cost</label>
                                        <input type="number" class="form-control" id="itemcost"
                                            aria-describedby="itemcost" placeholder="32" name="utility_cost[]" />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="fix-fee">Fixed Fee</label>
                                        <input type="number" class="form-control" id="fix-fee"
                                            aria-describedby="itemquantity" placeholder="1" name="fix_fee[]" />

                                    </div>
                                </div>
                                <div class="col-md-2 col-12">
                                    <a class="btn btn-outline-danger text-nowrap px-1">
                                        <i data-feather="x" class="me-25"></i>
                                    </a>
                                    <a class="btn btn-outline-success text-nowrap px-1"
                                        onclick="addNew('utitiltyAdd','utitiltyAppend')">
                                        <i data-feather="copy" class="me-25"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="utitiltyAppend"></div>
                    <div class="row">
                        <div class="col-12 pb-2">
                            <a class="btn btn-icon btn-primary" onclick="addNew('utitiltyAdd','utitiltyAppend')">
                                <i data-feather="plus" class="me-25"></i>
                                <span>Add New</span>
                            </a>
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
        <div>
            <div id="method">
                <div class="row d-flex align-items-end rept">
                    <div class="mb-1 col-md-5">
                        <label class="form-label" for="payment-method">Payment Method</label>
                        <select
                            class="select2 w-100 "
                            id="payment-method" name="payment[payment_method][]">

                                <option value="">Mpesa</option>
                                <option value="">easypaisa</option>

                        </select>

                    </div>
                    <div class="mb-1 col-md-5">
                        <label class="form-label" for="payment-description">Payment
                            Description</label>
                        <input type="text" id="payment-description"
                            class="form-control "
                            placeholder="Payment Description" name="payment[payment_description][]" />

                    </div>
                    <div class="col-md-2 col-12 mb-1 ">
                        <div>
                            <a class="btn btn-outline-danger text-nowrap px-1">
                                <i data-feather="x" class="me-25"></i>
                            </a>
                            <a class="btn btn-outline-success text-nowrap px-1"
                                onclick="addNew('method','paymentAppend')">
                                <i data-feather="copy" class="me-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="paymentAppendd"></div>
            <div class="row">
                <div class="col-12 pb-2">
                    <a class="btn btn-icon btn-primary"  onclick="addNew('method','paymentAppendd')">
                        <i data-feather="plus" class="me-25"></i>
                        <span>Add New</span>
                    </a>
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
            <button class="btn btn-primary btn-prev disable">
                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-success btn-submit">Submit</button>

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
