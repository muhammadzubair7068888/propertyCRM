@extends('layouts/contentLayoutMaster')
@section('title', (@$user ? 'Edit' : 'Add') . ' Landlord')

@section('content')

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
                        <form class="form" action="{{ @$user ? route('admin.landlord.update', @$user->id) : route('admin.landlord.store') }}" method="post">
                            @csrf
                          <input type="hidden" name="user_type" value="landlord">
                          <input type="hidden" name="gender" value="male">
                          <input type="hidden" name="status" value="1">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('first_name') text-danger @enderror" for="first-name-column">First Name</label>
                                        <input type="text" id="first-name-column"
                                            class="form-control @error('first_name') border-1 border-danger @enderror"
                                            placeholder="First Name" name="first_name" value="{{ @$user->first_name ?? old('first_name') }}"/>
                                        @error('first_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('middle_name') text-danger @enderror" for="middle-name-column">Middle Name</label>
                                        <input type="text" id="middle-name-column"
                                            class="form-control @error('middle_name') border-1 border-danger @enderror"
                                            placeholder="Middle Name" name="middle_name" value="{{ @$user->middle_name ?? old('middle_name') }}"/>
                                        @error('middle_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('last_name') text-danger @enderror" for="last-name-column">Last Name</label>
                                        <input type="text" id="last-name-column"
                                            class="form-control @error('last_name') border-1 border-danger @enderror"
                                            placeholder="Last Name" name="last_name" value="{{ @$user->last_name ?? old('last_name') }}" />
                                        @error('last_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('phone_number') text-danger @enderror" for="phone_number">phone_number</label>
                                        <input type="text" id="phone_number"
                                            class="form-control @error('phone_number') border-1 border-danger @enderror"
                                            name="phone_number" placeholder="Phone" value="{{ @$user->phone_number ?? old('phone_number') }}"/>
                                        @error('phone_number')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('email') text-danger @enderror" for="email-id-column">Email</label>
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
                                        <label class="form-label @error('registration_date') text-danger @enderror" for="registration-date-column">Registration Date</label>
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
                                        <label class="form-label @error('country') text-danger @enderror" for="country">Country</label>
                                        <input type="text" id="country"
                                            class="form-control @error('country') border-1 border-danger @enderror"
                                            placeholder="Country " name="country" value="{{ @$user->country ?? old('country') }}"/>
                                        @error('country')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('national_id') text-danger @enderror" for="passport">National ID or Passport</label>
                                        <input type="text" id="passport"
                                            class="form-control @error('national_id') border-1 border-danger @enderror"
                                            placeholder="National ID or Passport" name="national_id" value="{{ @$user->national_id ?? old('national_id') }}" />
                                        @error('national_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('state') text-danger @enderror" for="state">State</label>
                                        <input type="text" id="state"
                                            class="form-control @error('state') border-1 border-danger @enderror"
                                            placeholder="State" name="state" value="{{ @$user->state ?? old('state') }}" />
                                        @error('state')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('city') text-danger @enderror" for="city">City</label>
                                        <input type="text" id="city"
                                            class="form-control @error('city') border-1 border-danger @enderror"
                                            placeholder="City" name="city" value="{{ @$user->city ?? old('city') }}" />
                                        @error('city')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('postal_address') text-danger @enderror" for="postal-address">Postal Address</label>
                                        <input type="text" id="postal-address"
                                            class="form-control @error('postal_address') border-1 border-danger @enderror"
                                            placeholder="Postal Address" name="postal_address" value="{{ @$user->postal_address ?? old('postal_address') }}" />
                                        @error('postal_address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('physical_address') text-danger @enderror" for="physical-address">Physical Address</label>
                                        <input type="text" id="physical-address"
                                            class="form-control @error('physical_address') border-1 border-danger @enderror"
                                            placeholder="Physical Address" name="physical_address" value="{{ @$user->physical_address ?? old('physical_address') }}"/>
                                        @error('physical_address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('residential_address') text-danger @enderror" for="residential-address">Residential Address</label>
                                        <input type="text" id="residential-address"
                                            class="form-control @error('residential_address') border-1 border-danger @enderror"
                                            placeholder="Residential Address" name="residential_address" value="{{ @$user->residential_address ?? old('residential_address') }}" />
                                        @error('residential_address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label @error('password') text-danger @enderror" for="password">Password</label>
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
                                        <label class="form-label @error('password') text-danger @enderror" for="confirm-password">Confirm Password</label>
                                        <input type="password" id="confirm-password"
                                            class="form-control @error('password') border-1 border-danger @enderror"
                                            placeholder="Confirm Password" name="password_confirmation" />
                                        @error('password')
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
    <!-- Basic Floating Label Form section end -->
@endsection
