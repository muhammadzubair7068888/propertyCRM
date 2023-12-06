@extends('layouts/contentLayoutMaster')
@section('title', (@$user ? 'Edit' : 'Add') . ' Landlord')

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
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{@$user ? 'Edit' : 'Add'}} Landlord</h4>
                        <a href="{{ route('admin.landlord.index') }}" class="btn btn-secondary">Go Back</a>
                    </div>
                    <div class="card-body">
                        <form class="form " action="{{ @$user ? route('admin.landlord.update', @$user->id) : route('admin.landlord.store') }}" method="post" data-parsley-validate>
                            @csrf
                          <input type="hidden" name="user_type" value="landlord">
                          <input type="hidden" name="gender" value="male">
                          <input type="hidden" name="status" value="0">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">First Name <span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="first-name-column"
                                            class="form-control @error('first_name') border-1 border-danger @enderror"
                                            placeholder="First Name"  name="first_name" value="{{ @$user->first_name ?? old('first_name') }}"
                                            data-parsley-pattern="^[a-zA-Z\s]+$"
                                            data-parsley-pattern-message="Only letters and spaces are allowed." required/>
                                        @error('first_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="middle-name-column">Middle Name<span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="middle-name-column"
                                            class="form-control @error('middle_name') border-1 border-danger @enderror"
                                            data-parsley-pattern="^[a-zA-Z\s]+$"
                                            data-parsley-pattern-message="Only letters and spaces are allowed." required
                                            placeholder="Middle Name" name="middle_name" value="{{ @$user->middle_name ?? old('middle_name') }}"/>
                                        @error('middle_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="last-name-column">Last Name<span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="last-name-column"
                                            class="form-control @error('last_name') border-1 border-danger @enderror"
                                            placeholder="Last Name" data-parsley-pattern="^[a-zA-Z\s]+$"
                                            data-parsley-pattern-message="Only letters and spaces are allowed." required name="last_name" value="{{ @$user->last_name ?? old('last_name') }}" />
                                        @error('last_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="phone_number">phone_number<span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="phone_number"
                                            class="form-control @error('phone_number') border-1 border-danger @enderror"
                                            data-parsley-pattern="^\+254[0-9]{9}$" data-parsley-pattern-message="Please enter a valid Kenyan phone number." required
                                            name="phone_number" placeholder="Phone" value="{{ @$user->phone_number ?? old('phone_number') }}"/>
                                        @error('phone_number')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-column">Email<span class="text-danger fs-5">*</span></label>
                                        <input type="email" id="email-id-column"
                                            class="form-control @error('email') border-1 border-danger text-danger @enderror"
                                            name="email" placeholder="Email" value="{{ @$user->email ?? old('email') }}"/>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="registration-date-column">Registration Date<span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="registration-date-column"
                                            class="form-control @error('registration_date') border-1 border-danger @enderror" readonly
                                            name="registration_date" placeholder="Registration Date" value="{{ @$user->registration_date ??  date('Y-m-d') }}"  />
                                        @error('registration_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="country">Country<span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="country"
                                        data-parsley-pattern="^[a-zA-Z\s]+$"
data-parsley-pattern-message="Only letters and spaces are allowed."
required
                                            class="form-control @error('country') border-1 border-danger @enderror"
                                            placeholder="Country " name="country" value="{{ @$user->country ?? old('country') }}"/>
                                        @error('country')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="passport">National ID or Passport<span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="passport"
                                            class="form-control @error('national_id') border-1 border-danger @enderror"
                                            data-parsley-pattern="^\d+$"
data-parsley-pattern-message="Only letters and spaces are allowed."
required
                                            placeholder="National ID or Passport" name="national_id" value="{{ @$user->national_id ?? old('national_id') }}" />
                                        @error('national_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="state">State<span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="state"
                                        data-parsley-pattern="^[a-zA-Z\s]+$"
data-parsley-pattern-message="Only letters and spaces are allowed."
required
                                            class="form-control @error('state') border-1 border-danger @enderror"
                                            placeholder="State" name="state" value="{{ @$user->state ?? old('state') }}" />
                                        @error('state')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="city">City<span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="city"
                                        data-parsley-pattern="^[a-zA-Z\s]+$"
data-parsley-pattern-message="Only letters and spaces are allowed."
required
                                            class="form-control @error('city') border-1 border-danger @enderror"
                                            placeholder="City" name="city" value="{{ @$user->city ?? old('city') }}" />
                                        @error('city')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="postal-address">Postal Address<span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="postal-address"
                                        data-parsley-pattern="^[a-zA-Z\s]+$"
data-parsley-pattern-message="Only letters and spaces are allowed."
required
                                            class="form-control @error('postal_address') border-1 border-danger @enderror"
                                            placeholder="Postal Address" name="postal_address" value="{{ @$user->postal_address ?? old('postal_address') }}" />
                                        @error('postal_address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="physical-address">Physical Address<span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="physical-address"
                                        data-parsley-pattern="^[a-zA-Z\s]+$"
data-parsley-pattern-message="Only letters and spaces are allowed."
required
                                            class="form-control @error('physical_address') border-1 border-danger @enderror"
                                            placeholder="Physical Address" name="physical_address" value="{{ @$user->physical_address ?? old('physical_address') }}"/>
                                        @error('physical_address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="residential-address">Residential Address<span class="text-danger fs-5">*</span></label>
                                        <input type="text" id="residential-address"
                                        data-parsley-pattern="^[a-zA-Z\s]+$"
data-parsley-pattern-message="Only letters and spaces are allowed."
required
                                            class="form-control @error('residential_address') border-1 border-danger @enderror"
                                            placeholder="Residential Address" name="residential_address" value="{{ @$user->residential_address ?? old('residential_address') }}" />
                                        @error('residential_address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="password">Password<span class="text-danger fs-5">*</span></label>
                                        <input type="password" id="password"
                                            class="form-control @error('password') border-1 border-danger @enderror"
                                            placeholder="Password" name="password"  />
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="confirm-password">Confirm Password<span class="text-danger fs-5">*</span></label>
                                        <input type="password" id="confirm-password"
                                            class="form-control @error('password_confirmation') border-1 border-danger @enderror"
                                            placeholder="Confirm Password" name="password_confirmation" />
                                        @error('password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-12 d-flex justify-content-end ">
                                    <button class="btn btn-primary me-1 ">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @section('page-script')
    <script>
        $(document).ready(function(){
            $('.validation').parsley();
        });
    </script>
    @endsection
    <!-- Basic Floating Label Form section end -->
@endsection
