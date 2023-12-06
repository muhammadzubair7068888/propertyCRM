@extends('layouts/contentLayoutMaster')

@section('title', 'Add Property')

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

<style>
    ul.parsley-errors-list{
        padding-left: 0px !important;
    }
    .parsley-errors-list li{
        list-style: none !important;
        color: red !important;
    }
</style>
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
                <form action="{{ route('admin.properties.store') }}" method="post" data-parsley-validate>
                    @csrf
                    <div id="account-details-vertical" class="content" role="tabpanel"
                        aria-labelledby="account-details-vertical-trigger">

                        <div class="content-header">
                            <h5 class="mb-0">Property Details</h5>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="vertical-property">Property Name<span class="text-danger fs-5">*</span></label>
                                <input type="text" id="vertical-property"
                                    class="form-control" data-parsley-pattern="^[a-zA-Z\s]+$"
                                    data-parsley-pattern-message="Only letters and spaces are allowed."
                                    required
                                    placeholder="Property Name" name="property[property_name]"
                                    value="{{ old('property.property_name') }}" />
                                @error('property.property_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="vertical-property-code">Property Code<span class="text-danger fs-5">*</span></label>
                                <input type="text" id="vertical-property-code" data-parsley-pattern="^\d+$"
                                data-parsley-pattern-message="Only numbers are allowed."
                                required
                                    class="form-control"
                                    placeholder="Property Code" name="property[property_code]"
                                    value="{{ old('property.property_code') }}" />
                                @error('property.property_code')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 form-password-toggle col-md-12">
                                <label class="form-label" for="vertical-location">Location<span class="text-danger fs-5">*</span></label>
                                <input type="text" id="vertical-location" name="property[location]"
                                    class="form-control" data-parsley-pattern="^[a-zA-Z\s]+$"
                                    data-parsley-pattern-message="Only letters and spaces are allowed."
                                    required
                                    placeholder="Location" value="{{ old('property.location') }}" />
                                @error('property.location')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="basicSelect">Landlord</label>
                                <select class="select2 form-select"
                                    id="basicSelect" name="property[user_id]">
                                    @foreach ($landlords as $landlord)
                                        <option value="{{ $landlord->id }}"
                                            {{ old('property.user_id') == $landlord->id ? 'selected' : '' }}>
                                            {{ $landlord->first_name .''. $landlord->last_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('property.user_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="property-type">Property Type</label>
                                <select class="select2 w-100"
                                    id="property-type" name="property[property_type_id]">
                                    @foreach ($propertyTypes as $propertyType)
                                        <option value="{{ $propertyType->id }}"
                                            {{ old('property.property_type_id') == $propertyType->id ? 'selected' : '' }}>
                                            {{ $propertyType->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('property.property_type_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                            {{-- ####### modal ######### --}}

                            {{-- ####### close modal ######### --}}
                            <div>
                                <p class="text-primary">"At least one unit must be added."</p>

                            <div id="sourceFormPage1">
                                <div class="row d-flex align-items-end rept">
                                    <div class="col-md-10 col-12">

                                        <div class="mb-1">
                                            <input type="text" class="form-control modal-button" name="units"
                                                onclick="unitModal(this)" id="unitName" placeholder="Units" modal_number='0' />
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-12 ">
                                        <div class="mb-1">
                                            <a class="btn btn-outline-danger text-nowrap px-1">
                                                <i data-feather="x" class="me-25"></i>
                                            </a>
                                            <a class="btn btn-outline-success text-nowrap px-1"
                                                onclick="addNewModel('sourceFormPage1','targetFormPage1')">
                                                <i data-feather="copy" class="me-25"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="addNewAddressModal-0" tabindex="-1" aria-labelledby="addNewAddressTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-transparent">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body pb-5 px-sm-4 mx-50">
                                                <div class="row gy-1 gx-2" id="unit_form">

                                                    <div class="">
                                                        <div class="d-flex justify-content-row custom-options-checkable">

                                                            <div class="col-md-6 mb-md-0 mb-2">
                                                                <a class="custom-option-item-title h4 fw-bolder mb-0" onclick="showResidentials(this)">
                                                                    <input class="custom-option-item-check" id="homeAddressRadio" checked type="radio"
                                                                        name="unit[status][]" value="residential" />
                                                                        <label for="homeAddressRadio" class="custom-option-item px-2 py-1">
                                                                            <span class="d-flex align-items-center mb-50">
                                                                                <i data-feather="home" class="font-medium-4 me-50"></i>
                                                                                Residential
                                                                            </span>
                                                                            <span class="d-block">Delivery time (7am – 9pm)</span>
                                                                        </label>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6 mb-md-0 mb-2">
                                                                <a class="custom-option-item-title h4 fw-bolder mb-0" onclick="showComercials(this)">
                                                                    <input class="custom-option-item-check" id="officeAddressRadio" type="radio"
                                                                        name="unit[status][]" value="commercial"   />
                                                                    <label for="officeAddressRadio" class="custom-option-item px-2 py-1">
                                                                        <span class="d-flex align-items-center mb-50">
                                                                            <i data-feather="briefcase" class="font-medium-4 me-50"></i>
                                                                            Commercial
                                                                        </span>
                                                                        <span class="d-block">Delivery time (10am – 6pm)</span>
                                                                    </label>
                                                                </a>
                                                            </div>
                                                            <input type="hidden" name="unit[unit_status][]" id="unit_status">


                                                        </div>
                                                    </div>
                                                    <div class="col-12 ">
                                                        <label class="form-label" for="unit-name">Unit Name</label>
                                                        <input type="text" id="unit-name" name="unit[unit_name][]" class="unit-name form-control"
                                                            placeholder="Unit Name" data-msg="Please enter your first name" modalNumber="0" />
                                                    </div>
                                                    <div class="col-12 ">
                                                        <label class="form-label" for="unit-floor">Unit Floor</label>
                                                        <input type="text" id="unit-floor" name="unit[unit_floor][]" class="form-control"
                                                            placeholder="Unit Floor" data-msg="Please enter your first name" />
                                                    </div>
                                                    <div class="col-12 ">
                                                        <label class="form-label" for="rent-amount">Rent Amount</label>
                                                        <input type="text" id="rent-amount" name="unit[rent_amount][]" class="form-control"
                                                            placeholder="Rent Amount" data-msg="Please enter your last name" />
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label" for="unit-type">Unit Type</label>
                                                        <select id="unit-type" name="unit[unit_type][]" class="select2 form-select">
                                                            <option value="">Select a Unit</option>
                                                            <option value="one-room">Single Room</option>
                                                            <option value="two-rooms">Two Bed Rooms</option>
                                                            <option value="three-rooms">Three Bed Rooms</option>
                                                            <option value="five-rooms">Five Bed Rooms</option>
                                                            <option value="commercial-space">Commercial Space</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-12 col-md-6" id="bed-rooms">
                                                        <label class="form-label" for="bed-room">Bed Rooms</label>
                                                        <input type="text" id="bed-room" name="unit[bed_rooms][]" class="form-control"
                                                            placeholder="Bed Rooms" />
                                                    </div>
                                                    <div class="col-12 col-md-6" id="bath-rooms">
                                                        <label class="form-label" for="bath-room">Bath Rooms</label>
                                                        <input type="text" id="bath-room" name="unit[bath_rooms][]" class="form-control"
                                                            placeholder="Bath Rooms" />
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label class="form-label" for="total-rooms">Total Rooms</label>
                                                        <input type="text" id="total-rooms" name="unit[total_rooms][]" class="form-control"
                                                            placeholder="Total Rooms" />
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label class="form-label" for="square-foot">Square Foot</label>
                                                        <input type="number" id="square-foot" name="unit[square_foot][]" class="form-control"
                                                            placeholder="Square Foot" />
                                                    </div>


                                                    <div class="col-12 text-center d-flex justify-content-between">
                                                        {{-- <a class="btn btn-outline-secondary mt-2" onclick="unitModalDiscard()">
                                                            Discard
                                                        </a> --}}
                                                        <a class="btn btn-primary me-1 mt-2" id="submit_modal" onclick="unitModalSubmit(0);">Submit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="targetFormPage1"></div>
                            <div class="row">
                                <div class="col-12">
                                    <a class="btn btn-icon btn-primary" onclick="addNewModel('sourceFormPage1', 'targetFormPage1');">
                                        <i data-feather="plus" class="me-25"></i>
                                        <span>Add New</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <hr />
                        <div class="d-flex justify-content-between">
                            <button  type="button" class="btn btn-outline-secondary btn-prev" disabled>
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </button>
                        </div>
                    </div>
                    <div id="personal-info-vertical" class="content" role="tabpanel"
                        aria-labelledby="personal-info-vertical-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Payment Setting</h5>
                            {{-- <small>Enter Your Personal Info.</small> --}}
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="agent-commission-value">Agent Commission Value<span class="text-danger fs-5">*</span></label>
                                <input type="number" id="agent-commission-value"

                                    class="form-control"
                                    data-parsley-pattern="^\d+$"
                                data-parsley-pattern-message="Only numbers are allowed."
                                required
                                    placeholder="Agent Commission Value" name="property[agent_commission_value]"
                                    value="{{ old('property.agent_commission_value') }}" />
                                @error('property.agent_commission_value')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="agent-commission-type">Agent Commission Type<span class="text-danger fs-5">*</span></label>
                                <select
                                    required
                                    data-parsley-errors-container="#property_error"
                                    class="select2 w-100"
                                    id="agent-commission-type" name="property[agent_commission_type]">
                                    <option label=" "></option>
                                    <option value="fixed" {{ old('property.agent_commission_type') == 'fixed' ? 'selected' : '' }}>Fixed Value</option>
                                    <option value="total" {{ old('property.agent_commission_type') == 'total' ? 'selected' : '' }}>% Of Total Rent</option>
                                    <option value="total_collected" {{ old('property.agent_commission_type') == 'total_collected' ? 'selected' : '' }}>% Of Total Collected Rent</option>
                                </select>
                                <span id="property_error" class="text-danger"></span>
                                @error('property.agent_commission_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div id="payment">
                                    <div class="row d-flex align-items-end rept">
                                        <div class="mb-1 col-md-5">
                                            <label class="form-label" for="payment-method">Payment Method</label>
                                            <select
                                                class="form-control w-100"
                                                name="payment[payment_method][]">
                                                @foreach ($paymentMethod as $payment)
                                                    <option value="{{ $payment->id }}" {{ old('payment.payment_method.0') == $payment->id ? 'selected' : '' }}>{{ $payment->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('payment[payment_method][]')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-1 col-md-5">
                                            <label class="form-label" for="payment-description">Payment
                                                Description</label>
                                            <input type="text" id="payment-description"
                                                class="form-control"
                                                placeholder="Payment Description" name="payment[payment_description][]"
                                                value="{{ old('payment.payment_description.0') }}" />
                                            @error('payment[payment_description][]')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 col-12 mb-1 ">
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
                            <button type="button" class="btn btn-primary btn-prev">
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button  type="button" class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </button>
                        </div>
                    </div>
                    <div id="address-step-vertical" class="content" role="tabpanel"
                        aria-labelledby="address-step-vertical-trigger">
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
                                                    <label class="form-label" for="extra-charges-name">Extra Charges Name</label>
                                                    <select class="form-control w-100" id="extra-charges-name" name="extra[extra_charge_name][]">
                                                        @foreach ($extracharges as $charge)
                                                            <option value="{{ $charge->id }}" {{ old('extra.extra_charge_name.0') == $charge->id ? 'selected' : '' }}>
                                                                {{ $charge->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('extra.extra_charge_name.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="extra-charges-value">Extra Charges Value<span class="text-danger fs-5">*</span></label>
                                                    <input type="number" class="form-control" id="extra-charges-value" data-parsley-pattern="^\d+$"
                                                    data-parsley-pattern-message="Only numbers are allowed."
                                                    required
                                                        aria-describedby="itemname" placeholder="Extra Charges Value"
                                                        name="extra[extra_charges_value][]"
                                                        value="{{ old('extra.extra_charges_value.0') }}" />
                                                    @error('extra.extra_charges_value.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="extra-charges-type">Extra Charges Type</label>
                                                    <select class="form-control w-100" id="extra-charges-type" name="extra[extra_charges_type][]" >
                                                        <option label=" ">Select Extra Charges</option>
                                                        <option value="fixed" {{ old('extra.extra_charges_type.0') == 'fixed' ? 'selected' : '' }}>Fixed Value</option>
                                                        <option value="total" {{ old('extra.extra_charges_type.0') == 'total' ? 'selected' : '' }}>% Of Total Rent</option>
                                                        <option value="total_collected" {{ old('extra.extra_charges_type.0') == 'total_collected' ? 'selected' : '' }}>% Of Total Collected Rent</option>
                                                    </select>
                                                    @error('extra.extra_charges_type.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="extra_frequency">Frequency</label>
                                                    <select class="form-control w-100" id="extra_frequency" name="extra[extra_frequency][]">
                                                        <option label=" ">Select Frequency</option>
                                                        <option value="one_time" {{ old('extra.extra_frequency.0') == 'one_time' ? 'selected' : '' }}>One Time</option>
                                                        <option value="period" {{ old('extra.extra_frequency.0') == 'period' ? 'selected' : '' }}>Period To Period</option>
                                                    </select>
                                                    @error('extra.extra_frequency.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <div>
                                                    <a class="btn btn-outline-danger text-nowrap px-1">
                                                        <i data-feather="x" class="me-25"></i>
                                                    </a>
                                                    <a class="btn btn-outline-success text-nowrap px-1" onclick="addNew('extraCharge','extraChargeAppend')">
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
                            <button type="button" class="btn btn-primary btn-prev">
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-next">
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
                            <div>
                                <div id="lateFee">
                                    <div class="row d-flex align-items-end rept">
                                        <div class="row align-items-center">
                                            <div class="row">
                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="late-fee-name">Late Fee Name<span class="text-danger fs-5">*</span></label>
                                                    <select class="form-control w-100" id="late-fee-name" name="late[late_fee_name][]" required>
                                                        <option label=" "></option>
                                                        <option value="penalty" {{ old('late.late_fee_name.0') == 'penalty' ? 'selected' : '' }}>Penalty</option>
                                                    </select>
                                                    @error('late.late_fee_name.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="late-fee-value">Late Fee Value<span class="text-danger fs-5">*</span></label>
                                                    <input type="number" id="late-fee-value"
                                                        class="form-control"
                                                        data-parsley-pattern="^\d+$"
data-parsley-pattern-message="Only numbers are allowed."
required
                                                        placeholder="Late Fee Value" name="late[late_fee_value][]"
                                                        value="{{ old('late.late_fee_value.0') }}" />
                                                    @error('late.late_fee_value.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="late-fee-type">Late Fee type</label>
                                                    <select class="form-control w-100" id="late-fee-type" name="late[late_fee_type][]">
                                                        <option label=" "> Select Late Fee</option>
                                                        <option value="fixed" {{ old('late.late_fee_type.0') == 'fixed' ? 'selected' : '' }}>Fixed Value</option>
                                                        <option value="total" {{ old('late.late_fee_type.0') == 'total' ? 'selected' : '' }}>% Of Total Rent</option>
                                                        <option value="total_collected" {{ old('late.late_fee_type.0') == 'total_collected' ? 'selected' : '' }}>% Of Total Collected Rent</option>
                                                    </select>
                                                    @error('late.late_fee_type.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="grace-period">Grace Period(Days)<span class="text-danger fs-5">*</span></label>
                                                    <input type="number" id="grace-period"
                                                        class="form-control" data-parsley-pattern="^\d+$"
                                                        data-parsley-pattern-message="Only numbers are allowed."
                                                        required
                                                        placeholder="Grace Period(Days)" name="late[late_fee_grace_period][]"
                                                        value="{{ old('late.late_fee_grace_period.0') }}" />
                                                    @error('late.late_fee_grace_period.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="late_fee_frequency">Frequency</label>
                                                    <select class="form-control w-100" id="late_fee_frequency" name="late[late_fee_frequency][]">
                                                        <option label=" "> Select Frequency</option>
                                                        <option value="one_time" {{ old('late.late_fee_frequency.0') == 'one_time' ? 'selected' : '' }}>One Time</option>
                                                        <option value="daily" {{ old('late.late_fee_frequency.0') == 'daily' ? 'selected' : '' }}>Daily</option>
                                                        <option value="weekly" {{ old('late.late_fee_frequency.0') == 'weekly' ? 'selected' : '' }}>Weekly</option>
                                                        <option value="bi_weekly" {{ old('late.late_fee_frequency.0') == 'bi_weekly' ? 'selected' : '' }}>Bi Weekly</option>
                                                        <option value="monthly" {{ old('late.late_fee_frequency.0') == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                                    </select>
                                                    @error('late.late_fee_frequency.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-2 col-12 ">
                                                    <a class="btn btn-outline-danger text-nowrap px-1 mt-2">
                                                        <i data-feather="x" class="me-25"></i>
                                                    </a>
                                                    <a class="btn btn-outline-success text-nowrap px-1 mt-2" onclick="addNew('lateFee','latefeeAppend')">
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
                            <button type="button" class="btn btn-primary btn-prev">
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </button>
                        </div>
                    </div>

                    <div id="Utilities" class="content" role="tabpanel"
                        aria-labelledby="account-details-vertical-trigger">

                        <div>
                            <div id="utitiltyAdd">
                                <div class="row d-flex align-items-end rept">
                                    <div class="row align-items-center">

                                        <div class="col-md-4 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="utility-name"> Utility Name</label>
                                                <select class="form-control w-100" id="utility-name" name="utility[utility_name][]">
                                                    <option label=" ">Select Utility Name</option>
                                                    <option value="1" {{ old('utility.utility_name.0') == '1' ? 'selected' : '' }}>Water</option>
                                                    <option value="2" {{ old('utility.utility_name.0') == '2' ? 'selected' : '' }}>Gas</option>
                                                    <option value="3" {{ old('utility.utility_name.0') == '3' ? 'selected' : '' }}>Garbage</option>
                                                </select>
                                                @error('utility.utility_name.*')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="itemcost">Variable Cost<span class="text-danger fs-5">*</span></label>
                                                <input type="number" class="form-control" id="itemcost" data-parsley-pattern="^\d+$"
                                                data-parsley-pattern-message="Only numbers are allowed."
                                                required
                                                    aria-describedby="itemcost" placeholder="32" name="utility[utility_cost][]"
                                                    value="{{ old('utility.utility_cost.0') }}" />
                                                @error('utility.utility_cost.*')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="fix-fee">Fixed Fee<span class="text-danger fs-5">*</span></label>
                                                <input type="number" class="form-control" id="fix-fee" data-parsley-pattern="^\d+$"
                                                data-parsley-pattern-message="Only numbers are allowed."
                                                required
                                                    aria-describedby="itemquantity" placeholder="1" name="utility[fix_fee][]"
                                                    value="{{ old('utility.fix_fee.0') }}" />
                                                @error('utility.fix_fee.*')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <a class="btn btn-outline-danger text-nowrap px-1">
                                                <i data-feather="x" class="me-25"></i>
                                            </a>
                                            <a class="btn btn-outline-success text-nowrap px-1" onclick="addNew('utitiltyAdd','utitiltyAppend')">
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
                            <button type="button" class="btn btn-outline-secondary btn-prev disable">
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none ">Previous</span>
                            </button>
                            <button class="btn btn-success">Submit</button>
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

    <script src="{{ asset(mix('vendors/js/forms/repeater/jquery.repeater.min.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/forms/form-repeater.js')) }}"></script>

@endsection
@section('page-script')
<script>

    var divCounter = 1; // Initialize a counter for the unique ID

    var modalCounter = 1;
    function addNewModel(source, cloned) {
        const sourceForm = $('#' + source).clone();
        var uniqueID = "clonedForm-" + divCounter;
        sourceForm.attr('id', uniqueID);
        sourceForm.find(".rept a.btn-outline-danger").attr('onclick', 'remove(this)');

        sourceForm.find('a#submit_modal').attr('onclick', `unitModalSubmit(${modalCounter})`);

        // Remove select2 classes and attributes to prevent styling issues
        sourceForm.find('.select2').removeClass('select2-hidden-accessible').removeAttr('aria-hidden');

        $('#' + cloned).append(sourceForm);
        sourceForm.find(".modal-button").attr('modal_number', modalCounter);
        sourceForm.find(".modal").attr('id', 'addNewAddressModal-'+modalCounter);
        sourceForm.find("#unit-name").attr('modalNumber', modalCounter);
        // console.log("cloned element", );
        // var unit_name_button = $('#' + cloned).closest('.modal-button-wrapper').find('#unitName');
        // unit_name_button.attr('modal_number', modalCounter);
        modalCounter++;

        // Destroy existing select2 instances
        $('#' + uniqueID + ' .select2').each(function () {
            $(this).select2('destroy');
        });

        // Reinitialize select2 after appending a new form
        $('#' + uniqueID + ' .select2').select2();

        divCounter++;
    }

    function remove(element) {
        $(element).closest('.rept').remove();
    }
</script>

    <script>
        function showResidentials(element) {
            var unit_status = $(element).closest('.d-flex').find('#unit_status');
            unit_status.val('residential');
            $('#bed-rooms').removeClass('d-none');
            $('#bath-rooms').removeClass('d-none');
            $('#bed-rooms').addClass('d-block');
            $('#bath-rooms').addClass('d-block');
        }

        function showComercials(element) {
            var unit_status = $(element).closest('.d-flex').find('#unit_status');
            unit_status.val('commercial');
            $('#bed-rooms').removeClass('d-block');
            $('#bath-rooms').removeClass('d-block');
            $('#bed-rooms').addClass('d-none');
            $('#bath-rooms').addClass('d-none');
        }

        function unitModal(element) {
            var modal_number = $(element).attr('modal_number');
            $('#addNewAddressModal-'+modal_number).modal('show');
        }

        function unitModalSubmit(count) {
            var model = $('#addNewAddressModal-'+count);
            model.modal('hide');
            // unitName = $('input[name="unit_name"]').val();
            var unitName = model.find('#unit-name').val();
            var data = $('#unitName').attr('modal_number');
            console.log(data);
        }

        function unitModalDiscard() {
            // Clear input fields
            $('#unit_form   ').val('');

            // Close the form (you may need to adjust this part based on your specific form)
            $('#addNewAddressModal').modal(
                'hide'
            ); // Assuming it's a modal, you can use 'modal' or replace it with the appropriate method for closing your form.
        }

        $(document).on("keyup", ".unit-name", function(e) {
            let modal_number = $(this).attr('modalNumber');
            var specific_input = $("input[modal_number='" + modal_number + "']");
            specific_input.val(e.target.value);
        });

    </script>


    <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/forms/form-repeater.js')) }}"></script>

@endsection
