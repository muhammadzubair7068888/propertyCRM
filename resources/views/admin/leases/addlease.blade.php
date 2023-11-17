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
                <form action="{{ route('admin.leases.store') }}" method="post" id="multiStepForm" >
                    @csrf

                    <div id="account-details-vertical" class="content" role="tabpanel"
                        aria-labelledby="account-details-vertical-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Lease Info</h5>

                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="property">Property</label>
                                <select class="select2 form-select" id="lease-property" name="form[property_id]"

                                >
                                    <option value=""></option>
                                    @foreach ($property as $property)
                                        <option value="{{ $property->id }}">{{ $property->property_name }}</option>
                                    @endforeach

                                </select>
                                @error('form.property_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="unit">Unit</label>
                                <select class="select2 form-select" id="property-unit" name="form[property_unit_id]"
                                >
                                    <option value=""></option>
                                </select>
                                @error('form.property_unit_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="lease-type">Lease Type</label>
                                <select class="select2 form-select" id="lease-type" name="form[lease_type_id]"  >
                                    <option value=""></option>
                                    @foreach ($leasetype as $lease)
                                        <option value="{{ $lease->id }}">{{ $lease->name }}</option>
                                    @endforeach
                                </select>
                                @error('form.lease_type_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            </div>
                            <div class="mb-1 form-password-toggle col-md-6">
                                <label class="form-label" for="rent-amount">Rent Amount</label>
                                <input type="number" id="rent-amount" class="form-control" placeholder="rent_amount"
                                name="form[rent_amount]"  />
                            @error('form.rent_amount')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="lease-date">Starts Date</label>
                                <input type="date" id="lease-date" class="form-control flatpickr-basic"
                                    placeholder="YYYY-MM-DD" name="form[start_date]"  />
                                @error('form.start_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="lease-date">Due On(Day of Month)</label>
                                <select class="select2 form-select" id="lease-date" name="form[due_on]" >
                                    <option value=""></option>
                                    @for ($i = 1; $i <= 28; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('form.due_on')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                                <div class="mb-1 col-md-12">
                                    <label class="form-label" for="rent-deposit-amount">Rent Deposit Amount</label>
                                    <input type="number" id="rent-deposit-amount" class="form-control"
                                        placeholder="Rent Deposit Amount" name="form[rental_deposit_amount]" />
                                        @error('form.rental_deposit_amount')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div id="payment">
                                    <div class="row d-flex align-items-end rept">

                                        <div class="mb-1 col-md-5">
                                            <label class="form-label" for="utility-names">Utility Name</label>
                                            <select class="select2 w-100" id="utility-names"
                                                name="deposit[utility_names][]">
                                                <option value=""></option>
                                                @foreach ($utility as $utility)
                                                    <option value="{{ $utility->id }}">{{ $utility->name }}</option>
                                                @endforeach

                                            </select>
                                        @error('deposit.utility_names')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        </div>
                                        <div class="mb-1 col-md-5">
                                            <label class="form-label" for="deposit-amount"> Deposit Amount</label>
                                            <input type="number" id="deposit-amount" class="form-control"
                                                placeholder="deposit-amount" name="deposit[deposit_amounts][]" />

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
                                <select class="select2 w-100 " id="tenant" name="form[tenant_info_id]">
                                    <option value=""></option>
                                    @foreach ($tenant as $tenant)
                                        <option value="{{ $tenant->id }}">{{ $tenant->user->first_name }}
                                            {{ $tenant->user->last_name }}</option>
                                    @endforeach
                                </select>
                                @error('form.tenant_info_id')
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
                        <div class="row" id="cha"></div>


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

                    <div id="late-fee-charges" class="content" role="tabpanel"
                        aria-labelledby="address-step-vertical-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Late Fee</h5>
                        </div>
                        <div class="row" id="fees" >

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

                    <div id="lease-utilities" class="content" role="tabpanel"
                        aria-labelledby="address-step-vertical-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Utilities</h5>
                        </div>
                        <div class="row" id="util">

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

                    <div id="lease-payment" class="content" role="tabpanel"
                        aria-labelledby="address-step-vertical-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Payment Settings</h5>
                        </div>
                        <div class="row" id="pay">

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

                    <div id="lease-settings" class="content" role="tabpanel"
                        aria-labelledby="address-step-vertical-trigger">

                        <div class="row">
                            <div class="row">
                                <div class="mb-1 col-md-12">
                                    <label class="form-label" for="generate-invoice">Generate Invoice On (Day of
                                        Month)</label>
                                    <select class="select2 form-select" id="generate-invoice"
                                        name="form[generate_invoice]" >
                                        <option value=""></option>
                                        @for ($i = 1; $i <= 28; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    @error('form.generate_invoice')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row ms-1">
                            <div class="row mt-2">
                                <div class="form-check form-check-primary">

                                    <input type="checkbox" class="form-check-input" id="colorCheck1"
                                        name="form[next_period_bill]" value="1" />
                                    <h6>Next Period Billing (When billing, invoice period is set as next month.)</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-check form-check-primary">

                                    <input type="checkbox" class="form-check-input" id="colorCheck2"
                                        name="form[waive_penalty]" value="1" />
                                    <h6>Waive Penalty (For this lease, do not charge penalties.)</h6>

                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="form-check form-check-primary">

                                    <input type="checkbox" class="form-check-input" id="colorCheck3"
                                        name="form[skip_starting_period]" value="1" />
                                    <h6>Skip Starting Period (For this lease, do not bill the first period.)</h6>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-prev disable">
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button class="btn btn-success  lease-save">Save Lease</button>

                        </div>
                    </div>

                </form>
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
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}

    <script>
        $("#lease-property").on('change', function() {
            $("#property-unit").empty();
            $("#cha").empty();
            $("#fees").empty();
            $("#util").empty();
            $("#pay").empty();
            var selected_property = $(this).find('option:selected').val();
            if (selected_property != '') {
                $.ajax({
                    type: "get",
                    url: "{{ route('admin.fetch-units') }}",
                    data: {
                        'id': selected_property
                    },
                    success: function(response) {
                        response.units.forEach(unit => {
                            var option =
                            `<option value='${unit.id}'>${unit.unit_name}</option>`;
                            $("#property-unit").append(option);
                        });
                        response.extra_charges.forEach( charge => {

                            console.log(charge);
                            var extracharge = `
                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="extra-charges-name">Extra Charges Name</label>
                                                    <select
                                                        class="form-select w-100 @error('extra_charge_name') border-1 border-danger @enderror"
                                                        id="extra-charges-name" name=""  disabled>
                                                        <option value="${charge.charge_name.id}">${charge.charge_name.name}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="extra-charges-value">Extra Charges Value</label>
                                                    <input type="number" class="form-control " id="extra-charges-value"
                                                        aria-describedby="itemname" placeholder="Extra Charges Value" value="${charge.extra_charges_value}"
                                                        name="" readonly />
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="extra-charges-type">Extra Charges Type</label>
                                                    <select
                                                        class="form-select w-100 @error('extra_charges_type') border-1 border-danger @enderror"
                                                        id="extra-charges-type" name=""  disabled>
                                                        <option value="">${charge.extra_charges_Type}</option>
                                                      </select>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="extra_frequency">Frequency</label>
                                                    <select
                                                        class="form-select w-100 @error('extra_frequency') border-1 border-danger @enderror"
                                                        id="extra_frequency" name=""  disabled>
                                                        <option value="">${charge.extra_charges_frequency}</option>

                                                    </select>
                                                </div>
                                            </div>`;
                            $("#cha").append(extracharge);
                        });
                        response.late_fee.forEach(fee => {

                            console.log(fee);
                            var latefee = `

                            <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="late-fee-name">Late Fee Name</label>
                                                    <select class="form-select w-100 @error('late_fee_name') border-1 border-danger @enderror"
                                                        id="late-fee-name" name="" disabled>
                                                        <option label="">${fee.late_fee_name}</option>
                                                       </select>

                                                </div>
                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="late-fee-value">Late Fee Value</label>
                                                    <input type="number" id="late-fee-value"
                                                        class="form-control @error('late_fee_value') border-1 border-danger @enderror"
                                                        placeholder="Late Fee Value" name="" value="${fee.late_fee_value}" readonly />

                                                </div>
                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="late-fee-type">Late Fee type</label>
                                                    <select
                                                        class="form-select w-100 @error('late_fee_type') border-1 border-danger @enderror"
                                                        id="late-fee-type" name="" disabled>
                                                        <option label=" ">${fee.late_fee_type}</option>

                                                    </select>
                                                </div>

                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="grace-period">Grace Period(Days)</label>
                                                    <input type="number" id="grace-period"
                                                        class="form-control @error('late_fee_grace_period') border-1 border-danger @enderror"
                                                        placeholder="Grace Period(Days)" name="" value="${fee.late_fee_grace_period}" readonly />
                                                        </div>

                                                        <div class="mb-1 col-md-12">
                                                            <div class="mb-1 col-md-6">
                                                    <label class="form-label" for="late_fee_frequency">Frequency</label>
                                                    <select
                                                        class="form-select w-100 @error('late_fee_frequency') border-1 border-danger @enderror"
                                                        id="late_fee_frequency" name="" disabled>
                                                        <option label=" ">${fee.late_fee_frequency}</option>

                                                    </select>
                                                  </div>
                                                </div>
                                            `;
                            $("#fees").append(latefee);
                        });

                        response.utility.forEach(utility => {
                            console.log(utility);

                            var utilities = `
                            <div class="col-md-4 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="utility-name"> Utility Name</label>
                                                <select
                                                    class="form-select w-100 @error('utility_name') border-1 border-danger @enderror"
                                                    id="utility-name" name="" disabled>
                                                    <option label=" ">${utility.util_name.name}</option>
                                                    </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="itemcost">Variable Cost</label>
                                                <input type="number" class="form-control" id="itemcost"
                                                    aria-describedby="itemcost" placeholder="32" name="" value="${utility.variable_cost}" readonly/>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="fix-fee">Fixed Fee</label>
                                                <input type="number" class="form-control" id="fix-fee"
                                                    aria-describedby="itemquantity" placeholder="1" name="" value="${utility.fixed_fee}" readonly />

                                            </div>
                                        </div>`;
                            $("#util").append(utilities);
                        });
                        response.payment.forEach(payment => {
                            console.log(payment);

                            var payment = `
                            <div class="mb-1 col-md-5">
                                            <label class="form-label" for="payment-method">Payment Method</label>
                                            <select class="form-select w-100 " id="payment-method"
                                                name="" disabled>
                                                <option value="">${payment.payment_name.name}</option>
                                              </select>

                                        </div>
                                        <div class="mb-1 col-md-5">
                                            <label class="form-label" for="payment-description">Payment Description</label>
                                            <input type="text" id="payment-description" class="form-control "
                                                placeholder="Payment Description" name="" value="${payment.payment_description}" readonly />

                                        </div>`;
                            $("#pay").append(payment);
                        });
                        // $(".select-2").select2();
                    }
                });
            }
        });

    </script>
@endsection
