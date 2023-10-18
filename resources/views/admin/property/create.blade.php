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
                <form action="{{ route('admin.properties.store') }}" method="post">
                    @csrf
                    <div id="account-details-vertical" class="content" role="tabpanel"
                        aria-labelledby="account-details-vertical-trigger">

                        <div class="content-header">
                            <h5 class="mb-0">Property Details</h5>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="vertical-property">Property Name</label>
                                <input type="text" id="vertical-property"
                                    class="form-control @error('property_name')
                                border-1 border-danger
                                @enderror"
                                    placeholder="Property Name" name="property_name" />
                                @error('property_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="vertical-property-code">Property Code</label>
                                <input type="text" id="vertical-property-code"
                                    class="form-control @error('property_code')
                                border-1 border-danger
                                @enderror"
                                    placeholder="Property Code" name="property_code" aria-label="" />
                                @error('property_code')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 form-password-toggle col-md-12">
                                <label class="form-label" for="vertical-location">Location</label>
                                <input type="text" id="vertical-location" name="location"
                                    class="form-control @error('location')
                                   border-1 border-danger
                                @enderror"
                                    placeholder="Location" />
                                @error('location')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="basicSelect">Landlord</label>
                                <select class="select2 form-select @error('user_id') border-1 border-danger @enderror"
                                    id="basicSelect" name="user_id">
                                    @foreach ($landlords as $landlord)
                                        <option value="{{ $landlord->id }}">
                                            {{ $landlord->first_name . $landlord->last_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="property-type">Property Type</label>
                                <select class="select2 w-100 @error('property_type_id') border-1 border-danger @enderror"
                                    id="property-type" name="property_type_id">
                                    @foreach ($propertyTypes as $propertyType)
                                        <option value="{{ $propertyType->id }}">{{ $propertyType->name }}</option>
                                    @endforeach
                                </select>
                                @error('property_type_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>








                        <div>
                            <div action="#" id="sourceForm">
                                <div class="row d-flex align-items-end rept">
                                    <div class="col-md-10 col-12">
                                        <div class="mb-1">
                                            <input type="text" class="form-control" id="itemname"
                                                aria-describedby="itemname" placeholder="Vuexy Admin Template" />
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-12 ">
                                        <div class="mb-1">
                                            <a class="btn btn-outline-danger text-nowrap px-1" >
                                                <i data-feather="x" class="me-25"></i>
                                            </a>
                                            <a class="btn btn-outline-success text-nowrap px-1" onclick="addNew('sourceForm','targetForm')">
                                                <i data-feather="copy" class="me-25"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

                        {{-- <div>
                            <form action="#">

                                <div class="row d-flex align-items-end rept">
                                   
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-icon btn-primary" type="button" >
                                            <i data-feather="plus" class="me-25"></i>
                                            <span>Add New</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
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
                                    class="form-control @error('agent_commission_value') border-1 border-danger @enderror"
                                    placeholder="Agent Commission Value" name="agent_commission_value" />
                                @error('agent_commission_value')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="agent-commission-type">Agent Commission Type</label>
                                <select
                                    class="select2 w-100 @error('agent_commission_type') border-1 border-danger @enderror"
                                    id="agent-commission-type" name="agent_commission_type">
                                    <option label=" "></option>
                                    <option>Fixed Value</option>
                                    <option>% Of Total Rent</option>
                                    <option>% Of Total Collected Rent</option>

                                </select>
                                @error('agent_commission_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="payment-method">Payment Method</label>
                                <select class="select2 w-100 @error('payment_method') border-1 border-danger @enderror"
                                    id="payment-method" name="payment_method">
                                    <option label=" "></option>
                                    <option>Mpaisa</option>
                                    <option>Cash</option>
                                    <option>Spain</option>
                                </select>
                                @error('payment_method')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="payment-description">Payment Description</label>
                                <input type="number" id="payment-description"
                                    class="form-control @error('payment_description') border-1 border-danger @enderror"
                                    placeholder="Payment Description" name="payment_description" />
                                @error('payment_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div>
                                <div  id="payment">
                                    <div class="row d-flex align-items-end rept">
                                        <div class="row align-items-center">
                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemname">Item
                                                        Name</label>
                                                    <input type="text" class="form-control "
                                                        id="itemname" aria-describedby="itemname"
                                                        placeholder="Vuexy Admin Template"
                                                        name="test" />
                                                </div>
                                            </div>
        
                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemcost">Cost</label>
                                                    <input type="number" class="form-control"
                                                        id="itemcost" aria-describedby="itemcost"
                                                        placeholder="32" />
                                                </div>
                                            </div>
        
                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                        for="itemquantity">Quantity</label>
                                                    <input type="number" class="form-control"
                                                        id="itemquantity" aria-describedby="itemquantity"
                                                        placeholder="1" />
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12 ">
                                                <div >
                                                    <a class="btn btn-outline-danger text-nowrap px-1" >
                                                        <i data-feather="x" class="me-25"></i>
                                                    </a>
                                                    <a class="btn btn-outline-success text-nowrap px-1" onclick="addNew('payment','paymentAppend')">
                                                        <i data-feather="copy" class="me-25"></i>
                                                    </a>
                                                </div>
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
                            <h5 class="mb-0">Address</h5>
                            <small>Enter Your Address.</small>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="extra-charges-name">Extra Charges Name</label>
                                <select class="select2 w-100 @error('extra_charge_name') border-1 border-danger @enderror"
                                    id="extra-charges-name" name="extra_charge_name">

                                    <option>VAT</option>
                                    <option>Service Fee</option>
                                    <option>Processing Fee</option>
                                </select>
                                @error('extra_charge_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="extra-charges-value">Extra Charges Value</label>
                                <input type="number" id="extra-charges-value"
                                    class="form-control @error('extra_charge_value') border-1 border-danger @enderror"
                                    placeholder="Extra Charges Value" name="extra_charge_value" />
                                @error('extra_charge_value')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="extra-charges-type">Extra Charges type</label>
                                <select class="select2 w-100 @error('extra_charge_type') border-1 border-danger @enderror"
                                    id="extra-charges-type" name="extra_charge_type">
                                    <option label=" "></option>
                                    <option>Fixed Value</option>
                                    <option>% Of Total Rent</option>
                                    <option>% Of Total Amount Over Due</option>
                                </select>
                                @error('extra_charge_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="extra-charges-frequency">Frequency</label>
                                <select
                                    class="select2 w-100 @error('extra_charge_frequency') border-1 border-danger @enderror"
                                    id="extra-charges-frequency" name="extra_charge_frequency">
                                    <option label=" "></option>
                                    <option>One Time</option>
                                    <option>Period To Period</option>

                                </select>
                                @error('extra_charge_frequency')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                            <div class="row">
                                <div>
                                    <div  id="extraCharge">
                                        <div class="row d-flex align-items-end rept">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="itemname">Item
                                                            Name</label>
                                                        <input type="text" class="form-control "
                                                            id="itemname" aria-describedby="itemname"
                                                            placeholder="Vuexy Admin Template"
                                                            name="test" />
                                                    </div>
                                                </div>
            
                                                <div class="col-md-2 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="itemcost">Cost</label>
                                                        <input type="number" class="form-control"
                                                            id="itemcost" aria-describedby="itemcost"
                                                            placeholder="32" />
                                                    </div>
                                                </div>
            
                                                <div class="col-md-2 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label"
                                                            for="itemquantity">Quantity</label>
                                                        <input type="number" class="form-control"
                                                            id="itemquantity" aria-describedby="itemquantity"
                                                            placeholder="1" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12 ">
                                                    <div >
                                                        <a class="btn btn-outline-danger text-nowrap px-1" >
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
                                            <a class="btn btn-icon btn-primary" onclick="addNew('extraCharge','extraChargeAppend')">
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
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="late-fee-name">Late Fee Name</label>
                                <select class="select2 w-100 @error('late_fee_name') border-1 border-danger @enderror"
                                    id="late-fee-name" name="late_fee_name">
                                    <option label=" "></option>
                                    <option>Penalty</option>

                                </select>
                                @error('late_fee_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="late-fee-value">Late Fee Value</label>
                                <input type="number" id="late-fee-value"
                                    class="form-control @error('late_fee_value') border-1 border-danger @enderror"
                                    placeholder="Late Fee Value" name="late_fee_value" />
                                @error('late_fee_value')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="late-fee-type">Late Fee type</label>
                                <select class="select2 w-100 @error('late_fee_type') border-1 border-danger @enderror"
                                    id="late-fee-type" name="late_fee_type">
                                    <option label=" "></option>
                                    <option>Fixed Value</option>
                                    <option>% Of Total Rent</option>
                                    <option>% Of Total Amount Over Due</option>
                                </select>
                                @error('late_fee_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="grace-period">Grace Period(Days)</label>
                                <input type="number" id="grace-period"
                                    class="form-control @error('late_fee_grace_period') border-1 border-danger @enderror"
                                    placeholder="Grace Period(Days)" name="late_fee_grace_period" />
                                @error('late_fee_grace_period')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="frequency">Frequency</label>
                                <select
                                    class="select2 w-100 @error('late_fee_frequency') border-1 border-danger @enderror"
                                    id="frequency" name="late_fee_frequency">
                                    <option label=" "></option>
                                    <option>One Time</option>
                                    <option>Daily</option>
                                    <option>Weekly</option>
                                    <option>Bi Weekly</option>
                                    <option>Monthly</option>
                                </select>
                                @error('late_fee_frequency')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="row">
                            <div>
                                <div  id="lateFee">
                                    <div class="row d-flex align-items-end rept">
                                        <div class="row align-items-center">
                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemname">Item
                                                        Name</label>
                                                    <input type="text" class="form-control "
                                                        id="itemname" aria-describedby="itemname"
                                                        placeholder="Vuexy Admin Template"
                                                        name="test" />
                                                </div>
                                            </div>
        
                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemcost">Cost</label>
                                                    <input type="number" class="form-control"
                                                        id="itemcost" aria-describedby="itemcost"
                                                        placeholder="32" />
                                                </div>
                                            </div>
        
                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                        for="itemquantity">Quantity</label>
                                                    <input type="number" class="form-control"
                                                        id="itemquantity" aria-describedby="itemquantity"
                                                        placeholder="1" />
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12 ">
                                                <div >
                                                    <a class="btn btn-outline-danger text-nowrap px-1" >
                                                        <i data-feather="x" class="me-25"></i>
                                                    </a>
                                                    <a class="btn btn-outline-success text-nowrap px-1" onclick="addNew('lateFee','latefeeAppend')">
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
                            <div  id="utitiltyAdd">
                                <div class="row d-flex align-items-end rept">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="itemname">Item
                                                    Name</label>
                                                <input type="text" class="form-control "
                                                    id="itemname" aria-describedby="itemname"
                                                    placeholder="Vuexy Admin Template"
                                                    name="test" />
                                            </div>
                                        </div>
    
                                        <div class="col-md-2 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="itemcost">Cost</label>
                                                <input type="number" class="form-control"
                                                    id="itemcost" aria-describedby="itemcost"
                                                    placeholder="32" />
                                            </div>
                                        </div>
    
                                        <div class="col-md-2 col-12">
                                            <div class="mb-1">
                                                <label class="form-label"
                                                    for="itemquantity">Quantity</label>
                                                <input type="number" class="form-control"
                                                    id="itemquantity" aria-describedby="itemquantity"
                                                    placeholder="1" />
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12 ">
                                            <div >
                                                <a class="btn btn-outline-danger text-nowrap px-1" >
                                                    <i data-feather="x" class="me-25"></i>
                                                </a>
                                                <a class="btn btn-outline-success text-nowrap px-1" onclick="addNew('utitiltyAdd','utitiltyAppend')">
                                                    <i data-feather="copy" class="me-25"></i>
                                                </a>
                                            </div>
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


                        {{-- <section class="form-control-repeater">
                            <div class="row">
                                <!-- Invoice repeater -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Invoice</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="#" class="invoice-repeater">
                                                <div data-repeater-list="invoice">
                                                    <div data-repeater-item>
                                                        <div class="row align-items-center">
                                                            <div class="col-md-4 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="itemname">Item
                                                                        Name</label>
                                                                    <input type="text" class="form-control "
                                                                        id="itemname" aria-describedby="itemname"
                                                                        placeholder="Vuexy Admin Template"
                                                                        name="test" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="itemcost">Cost</label>
                                                                    <input type="number" class="form-control"
                                                                        id="itemcost" aria-describedby="itemcost"
                                                                        placeholder="32" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label"
                                                                        for="itemquantity">Quantity</label>
                                                                    <input type="number" class="form-control"
                                                                        id="itemquantity" aria-describedby="itemquantity"
                                                                        placeholder="1" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2 col-12 mt-1">
                                                                <button
                                                                    class="btn btn-outline-danger text-nowrap px-1 pr-2"
                                                                    data-repeater-delete type="button">
                                                                    <i data-feather="x" class="me-25"></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-outline-success text-nowrap px-1 pr-2"
                                                                    data-repeater-delete type="button">
                                                                    <i data-feather="copy" class="me-25"></i>
                                                                </button>
                                                            </div>

                                                        </div>
                                                        <hr />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button class="btn btn-icon btn-primary" type="button"
                                                            data-repeater-create>
                                                            <i data-feather="plus" class="me-25"></i>
                                                            <span>Add New</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Invoice repeater -->
                            </div>
                        </section> --}}

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
   


    <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/forms/form-repeater.js')) }}"></script>

@endsection
