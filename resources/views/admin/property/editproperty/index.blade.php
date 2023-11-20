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
                <form action="{{route('admin.properties.update.data',$property->id)}} " method="post">
                    @csrf
                    <div id="account-details-vertical" class="content" role="tabpanel"
                        aria-labelledby="account-details-vertical-trigger">

                        <div class="content-header">
                            <h5 class="mb-0">Property Details</h5>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="vertical-property">Property Name</label>
                                <input type="text" id="vertical-property" value="{{ $property->property_name }}"
                                    class="form-control @error('property[property_name]')
                                border-1 border-danger
                                @enderror"
                                    placeholder="Property Name" name="property[property_name]" />
                                @error('property.property_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="vertical-property-code">Property Code</label>
                                <input type="text" id="vertical-property-code" value="{{ $property->property_code }}"
                                    class="form-control @error('property[property_code]')
                                border-1 border-danger
                                @enderror"
                                    placeholder="Property Code" name="property[property_code]" aria-label="" />
                                @error('property[property_code]')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 form-password-toggle col-md-12">
                                <label class="form-label" for="vertical-location">Location</label>
                                <input type="text" id="vertical-location" value="{{ $property->location }}"
                                    name="property[location]"
                                    class="form-control @error('property[location]')
                                   border-1 border-danger
                                @enderror"
                                    placeholder="Location" />
                                @error('property[location]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="basicSelect">Landlord</label>
                                <select
                                    class="form-control @error('property[user_id]') border-1 border-danger @enderror"
                                    id="basicSelect" name="property[user_id]" value="{{ $property->user->id }}">

                                   @foreach ($landlords as $landlord)
                                        <option value="{{ $landlord->id }}">
                                            {{ $landlord->first_name . $landlord->last_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('property[user_id]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="property-type">Property Type</label>
                                <select class="form-control @error('property.property_type_id') border-1 border-danger @enderror"
                                                            id="property-type" name="property[property_type_id]">
                                                            {{-- ######### --}}
                         @foreach ($propertyTypes as $propertyType)
                         <option value="{{ $propertyType->id }}"
                           {{ $propertyType->id == old('property.property_type_id', $property->property_type_id) ? 'selected' : '' }}>
                                 {{ $propertyType->name }}
                                </option>
                             @endforeach
                            </select>

                                {{-- <select
                                    class="form-control @error('property[property_type_id]') border-1 border-danger @enderror"
                                    id="property-type" name="property[property_type_id]" >
                                    @foreach ($propertyTypes as $propertyType)
                                        <option value="{{ $propertyType->id }}"
                                            {{ $propertyType->id == $property->property_type_id ? 'selected' : '' }}>
                                            {{ $propertyType->name }}
                                        </option>
                                    </select>
                                    @endforeach --}}
                                @error('property[property_type_id]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            @foreach($property->property_unit as $unit)
                            <div id="sourceForm">
                                <div class="row d-flex align-items-end rept">
                                    <div class="col-md-10 col-12">
                                        <div class="mb-1">
                                            <input type="text" readonly value="{{$unit->unit_name}}" class="form-control"
                                                onclick="unitModal()" id="unitName" placeholder="Units" />
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-12 ">
                                        <div class="mb-1">
                                            <a class="btn btn-outline-danger text-nowrap px-1">
                                                <i data-feather="x" class="me-25"></i>
                                            </a>
                                            <a class="btn btn-outline-success text-nowrap px-1"
                                                onclick="addNew('sourceForm','targetForm')">
                                                <i data-feather="copy" class="me-25"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="addNewAddressModal" tabindex="-1" aria-labelledby="addNewAddressTitle" aria-hidden="true">
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
                                                                <a class="custom-option-item-title h4 fw-bolder mb-0" onclick="showResidentials()">
                                                                    <input class="custom-option-item-check" id="homeAddressRadio" type="radio" name="unit[status][]"
                                                                    {{ $unit->unit_status == 'residential' ? 'checked' : '' }} value="residential" />

                                                                    <label for="homeAddressRadio" class="custom-option-item px-2 py-1">
                                                                        <span class="d-flex align-items-center mb-50">
                                                                            <i data-feather="home" class="font-medium-4 me-50"></i>
                                                                            Residential
                                                                        </span>
                                                                        <span class="d-block">Delivery time (7am – 9pm)</span>
                                                                    </label>
                                                            </div>
                                                            </a>
                                                            <div class="col-md-6 mb-md-0 mb-2">
                                                                <a class="custom-option-item-title h4 fw-bolder mb-0" onclick="showComercials()">
                                                                    <input class="custom-option-item-check" id="officeAddressRadio" type="radio" name="unit[status][]"
                                                                    {{ $unit->unit_status == 'commercial' ? 'checked' : '' }} value="commercial" />

                                                                    <label for="officeAddressRadio" class="custom-option-item px-2 py-1">
                                                                        <span class="d-flex align-items-center mb-50">
                                                                            <i data-feather="briefcase" class="font-medium-4 me-50"></i>
                                                                            Commercial
                                                                        </span>
                                                                        <span class="d-block">Delivery time (10am – 6pm)</span>
                                                                    </label>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    @php
                                                        if($unitDetail->unit_status == 'commercial'){
                                                            $unitName = $unitDetail->unit_name;
                                                            $unitFloor = $unitDetail->unit_floor;
                                                            $unitAmount = $unitDetail->rent_amount;
                                                            $unitType = $unitDetail->unit_type;
                                                            $totalRoom = $unitDetail->total_room;
                                                            $squareFoot = $unitDetail->square_foot;
                                                        }elseif($unitDetail->unit_status == 'residential'){
                                                            $unitName = $unitDetail->unit_name;
                                                            $unitFloor = $unitDetail->unit_floor;
                                                            $unitAmount = $unitDetail->rent_amount;
                                                            $unitType = $unitDetail->unit_type;
                                                            $totalRoom = $unitDetail->total_room;
                                                            $bathRoom = $unitDetail->bath_room;
                                                            $bedRoom = $unitDetail->bed_room;
                                                            $squareFoot = $unitDetail->square_foot;
                                                        }
                                                    @endphp
                                                    <div class="col-12 ">
                                                        <label class="form-label" for="unit-name">Unit Name</label>
                                                        <input type="text" id="unit-name" name="unit[unit_name][]" class="form-control"
                                                            placeholder="Unit Name" data-msg="Please enter your first name" value="{{ $unit->unit_name }}"/>
                                                    </div>
                                                    <div class="col-12 ">
                                                        <label class="form-label" for="unit-floor">Unit Floor</label>
                                                        <input type="text" id="unit-floor" name="unit[unit_floor][]" class="form-control"
                                                            placeholder="Unit Floor" data-msg="Please enter your first name" value="{{ $unit->unit_floor }}"/>
                                                    </div>
                                                    <div class="col-12 ">
                                                        <label class="form-label" for="rent-amount">Rent Amount</label>
                                                        <input type="text" id="rent-amount" name="unit[rent_amount][]" class="form-control"
                                                            placeholder="Rent Amount" data-msg="Please enter your last name" value="{{ $unitAmount }}"/>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label" for="unit-type">Unit Type</label>
                                                        <select id="unit-type" name="unit[unit_type][]" class="select2 form-select">
                                                            <option value="">Select a Unit</option>
                                                            <option value="one-rooms" {{$unitType=="one-rooms" ? 'selected' : '' }}>Single Room</option>
                                                            <option value="three-rooms" {{$unitType=="three-rooms" ? 'selected' : '' }}>Two Bed Rooms</option>
                                                            <option value="three-rooms" {{$unitType=="three-rooms" ? 'selected' : '' }}>Three Bed Rooms</option>
                                                            <option value="five-rooms" {{$unitType=="five-rooms" ? 'selected' : '' }}>Five Bed Rooms</option>
                                                            <option value="comercial space" {{$unitType=="comercial space" ? 'selected' : '' }}>Commercial Space</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-md-6" id="bed-rooms">
                                                        <label class="form-label" for="bed-room">Bed Rooms</label>
                                                        <input type="text" id="bed-room" name="unit[bed_rooms][]" class="form-control"
                                                            placeholder="Bed Rooms" value="{{ @$bedRoom }}"/>
                                                    </div>
                                                    <div class="col-12 col-md-6" id="bath-rooms">
                                                        <label class="form-label" for="bath-room">Bath Rooms</label>
                                                        <input type="text" id="bath-room" name="unit[bath_rooms][]" class="form-control"
                                                            placeholder="Bath Rooms" value="{{ @$bathRoom }}"/>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label class="form-label" for="total-rooms">Total Rooms</label>
                                                        <input type="text" id="total-rooms" name="unit[total_rooms][]" class="form-control"
                                                            placeholder="Total Rooms" value="{{ $totalRoom }}"/>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label class="form-label" for="square-foot">Square Foot</label>
                                                        <input type="number" id="square-foot" name="unit[square_foot][]" class="form-control"
                                                            placeholder="Square Foot" value="{{ $squareFoot }}"/>
                                                    </div>


                                                    <div class="col-12 text-center d-flex justify-content-between">
                                                        <a class="btn btn-outline-secondary mt-2" onclick="unitModalDiscard()">
                                                            Discard
                                                        </a>
                                                        <a class="btn btn-primary me-1 mt-2" onclick="unitModalSubmit()">Submit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div id="targetForm"></div>
                            <div class="row">
                                <div class="col-12">
                                    <a class="btn btn-icon btn-primary" onclick="addNew('sourceForm','targetForm')">
                                        <i data-feather="plus" class="me-25"></i>
                                        <span>Add New</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <hr />
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
                                <input type="number" id="agent-commission-value"
                                    class="form-control @error('property[agent_commission_value]') border-1 border-danger @enderror"
                                    placeholder="Agent Commission Value" name="property[agent_commission_value]"
                                    value="{{$property->agent_commission_value}}" />
                                @error('property[agent_commission_value]')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="agent-commission-type">Agent Commission Type</label>
                                <select
                                    class="select2 w-100 @error('property[agent_commission_type]') border-1 border-danger @enderror"
                                    id="agent-commission-type" name="property[agent_commission_type]"
                                    value="">
                                    <option label=" "></option>
                                    <option value="fixed" {{$property->agent_commission_type=="fixed" ? 'selected' : '' }}>Fixed Value</option>
                                    <option value="total" {{$property->agent_commission_type=="total" ? 'selected' : '' }}>% Of Total Rent</option>
                                    <option value="total_collected" {{$property->agent_commission_type=="total_collected" ? 'selected' : '' }} >% Of Total Collected Rent</option>

                                </select>
                                @error('property[agent_commission_type]')
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
                                                class="select2 w-100 @error('payment_method') border-1 border-danger @enderror"
                                                id="payment-method" name="payment[payment_method][]">
                                                {{-- @foreach ($paymentMethod as $payment)
                                                    <option value="{{ $payment->id }}"
                                                        {{ $payment->id == $propertyMethodType[$loop->iteration]->payment_method_id ? 'selected' : '' }}>
                                                        {{ $payment->name }}</option>
                                                @endforeach --}}
                                                @foreach ($paymentMethod as $payment)
                                                    <option value="{{ $payment->id }}"
                                                        {{ $payment->id == $propertyMethodType[0]->payment_method_id ? 'selected' : '' }}>
                                                        {{ $payment->name }}</option>
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
                                                class="form-control @error('payment_description[]') border-1 border-danger @enderror"
                                                placeholder="Payment Description" name="payment[payment_description][]" value="{{$property->propertyPaymentMethod[0]->payment_description}}"/>
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
                                                        class="select2 w-100 @error('extra[extra_charge_name][]') border-1 border-danger @enderror"
                                                        id="extra-charges-name" name="extra[extra_charge_name][]">
                                                        @foreach ($extracharges as $charge)
                                                            <option value="{{ $charge->id }} {{$charge->id == $property->propertyExtra[0]->extra_charges_frequency ? 'selected' : ''}}">{{ $charge->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('extra[extra_charge_name][]')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="extra-charges-value">Extra Charges
                                                        Value</label>
                                                    <input type="number"
                                                        class="form-control @error('extra[extra_charges_value][]') border-1 border-danger @enderror"
                                                        id="extra-charges-value" aria-describedby="itemname"
                                                        placeholder="Extra Charges Value"
                                                        name="extra[extra_charges_value][]" value="{{$property->propertyExtra[0]->extra_charges_value}}" />
                                                    @error('extra[extra_charges_value][]')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="extra-charges-type">Extra Charges
                                                        Type</label>
                                                    <select
                                                        class="select2 w-100 @error('extra[extra_charges_type][]') border-1 border-danger @enderror"
                                                        id="extra-charges-type" name="extra[extra_charges_type][]">
                                                        <option label=" "></option>
                                                        <option value="fixed" {{$property->propertyExtra[0]->extra_charges_Type =='fixed' ? 'selected' : ''}}>Fixed Value</option>
                                                        <option value="total" {{$property->propertyExtra[0]->extra_charges_Type =='total' ? 'selected' : ''}}>% Of Total Rent</option>
                                                        <option value="total_collected" {{$property->propertyExtra[0]->extra_charges_Type =='total_collected' ? 'selected' : ''}}>% Of Total Collected Rent</option>
                                                    </select>
                                                    @error('extra[extra_charges_type][]')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="extra_frequency">Frequency</label>
                                                    <select
                                                        class="select2 w-100 @error('extra[extra_frequency][]') border-1 border-danger @enderror"
                                                        id="extra_frequency" name="extra[extra_frequency][]">
                                                        <option label=" "></option>
                                                        <option value="one_time" {{$property->propertyExtra[0]->extra_charges_frequency =='one_time' ? 'selected' : ''}}>One Time</option>
                                                        <option value="period" {{$property->propertyExtra[0]->extra_charges_frequency =='period' ? 'selected' : ''}}>Period To Period</option>
                                                    </select>
                                                    @error('extra[extra_frequency][]')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
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
                                                    <label class="form-label" for="late-fee-name">Late Fee Name</label>
                                                    <select
                                                        class="select2 w-100 @error('late[late_fee_name][]') border-1 border-danger @enderror"
                                                        id="late-fee-name" name="late[late_fee_name][]">

                                                        <option value="penalty" {{$property->propertyLateFee[0]->late_fee_name == "penalty" ? 'selected': ''}}>Penalty</option>

                                                    </select>
                                                    @error('late[late_fee_name][]')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="late-fee-value">Late Fee Value</label>
                                                    <input type="number" id="late-fee-value"
                                                        class="form-control @error('late[late_fee_value][]') border-1 border-danger @enderror"
                                                        placeholder="Late Fee Value" name="late[late_fee_value][]" value="{{$property->propertyLateFee[0]->late_fee_value}}" />
                                                    @error('late[late_fee_value][]')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="late-fee-type">Late Fee type</label>
                                                    <select
                                                        class="select2 w-100 @error('late[late_fee_type][]') border-1 border-danger @enderror"
                                                        id="late-fee-type" name="late[late_fee_type][]">
                                                        <option label=" "></option>
                                                        <option value="fixed" {{$property->propertyLateFee[0]->late_fee_type =='fixed' ? 'selected' : ''}}>Fixed Value</option>
                                                        <option value="total" {{$property->propertyLateFee[0]->late_fee_type =='total' ? 'selected' : ''}}>% Of Total Rent</option>
                                                        <option value="total_collected" {{$property->propertyLateFee[0]->late_fee_type =='total_collected' ? 'selected' : ''}}>% Of Total Collected Rent</option>
                                                    </select>
                                                    @error('late[late_fee_type][]')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="grace-period">Grace
                                                        Period(Days)</label>
                                                    <input type="number" id="grace-period"
                                                        class="form-control @error('late[late_fee_grace_period][]') border-1 border-danger @enderror"
                                                        placeholder="Grace Period(Days)"
                                                        name="late[late_fee_grace_period][]" value="{{$property->propertyLateFee[0]->late_fee_grace_period}}" />
                                                    @error('late[late_fee_grace_period][]')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="late_fee_frequency">Frequency</label>
                                                    <select
                                                        class="select2 w-100 @error('late[late_fee_frequency][]') border-1 border-danger @enderror"
                                                        id="late_fee_frequency" name="late[late_fee_frequency][]">
                                                        <option label=" "></option>
                                                        <option value="one_time" {{$property->propertyLateFee[0]->late_fee_frequency == 'one_time' ? 'selected' : ''}}>One Time</option>
                                                        <option value="daily" {{$property->propertyLateFee[0]->late_fee_frequency == 'daily' ? 'selected' : ''}}>Daily</option>
                                                        <option value="weekly" {{$property->propertyLateFee[0]->late_fee_frequency == 'weekly' ? 'selected' : ''}}>Weekly</option>
                                                        <option value="bi_weekly" {{$property->propertyLateFee[0]->late_fee_frequency == 'bi_weekly' ? 'selected' : ''}}>Bi Weekly</option>
                                                        <option value="monthly" {{$property->propertyLateFee[0]->late_fee_frequency == 'monthly' ? 'selected' : ''}}>Monthly</option>
                                                    </select>
                                                    @error('late[late_fee_frequency][]')
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

                    <div id="Utilities" class="content" role="tabpanel"
                        aria-labelledby="account-details-vertical-trigger">

                        <div>
                            <div id="utitiltyAdd">
                                <div class="row d-flex align-items-end rept">
                                    <div class="row align-items-center">

                                        <div class="col-md-4 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="utility-name"> Utility Name</label>
                                                <select
                                                    class="select2 w-100 @error('utility[utility_name][]') border-1 border-danger @enderror"
                                                    id="utility-name" name="utility[utility_name][]">
                                                    @foreach ($utility as $utilities )
                                                    <option label=" "></option>
                                                    <option value="{{$utilities->id}}" {{$utilities->id == $property->propertyUtility[0]->utilities_id ? 'selected' : ''}} >{{$utilities->name}}</option>
                                                    @endforeach


                                                </select>
                                                @error('utility[utility_name][]')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="itemcost">Variable Cost</label>
                                                <input type="number"
                                                    class="form-control @error('utility[utility_cost][]') border-1 border-danger @enderror"
                                                    id="itemcost" aria-describedby="itemcost" placeholder="32"
                                                    name="utility[utility_cost][]" value="{{$property->propertyUtility[0]->variable_cost}}" />
                                                @error('utility[utility_cost][]')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="fix-fee">Fixed Fee</label>
                                                <input type="number"
                                                    class="form-control @error('utility[fix_fee][]') border-1 border-danger @enderror"
                                                    id="fix-fee" aria-describedby="itemquantity" placeholder="1"
                                                    name="utility[fix_fee][]" value="{{$property->propertyUtility[0]->fixed_fee}}"/>
                                                @error('utility[fix_fee][]')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror

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
                            <button class="btn btn-outline-secondary btn-prev disable">
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
        function showResidentials() {
            $('#bed-rooms').removeClass('d-none');
            $('#bath-rooms').removeClass('d-none');
            $('#bed-rooms').addClass('d-block');
            $('#bath-rooms').addClass('d-block');
        }

        function showComercials() {
            $('#bed-rooms').removeClass('d-block');
            $('#bath-rooms').removeClass('d-block');
            $('#bed-rooms').addClass('d-none');
            $('#bath-rooms').addClass('d-none');
        }

        function unitModal() {
            $('#addNewAddressModal').modal('show')
        }

        function unitModalSubmit() {
            $('#addNewAddressModal').modal('hide');
            unitName = $('input[name="unit_floor"]').val();
            $('#unitName').val(unitName);
        }

        function unitModalDiscard() {
            // Clear input fields
            $('#unit_form   ').val('');

            // Close the form (you may need to adjust this part based on your specific form)
            $('#addNewAddressModal').modal(
                'hide'
            ); // Assuming it's a modal, you can use 'modal' or replace it with the appropriate method for closing your form.
        }
    </script>


    <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/forms/form-repeater.js')) }}"></script>

@endsection
