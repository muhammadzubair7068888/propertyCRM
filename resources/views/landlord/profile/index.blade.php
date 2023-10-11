@extends('layouts/contentLayoutMaster')

@section('title', 'Landlord')
@section('vendor-style')
  {{-- Vendor Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
@endsection
@section('content')
<section class="bs-validation">
  <div class="row">
    <!-- Profile validations-->
    <div class="col-md-10 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Profile</h4>
        </div>
        <div class="card-body">
          <form class="needs-validation" novalidate>
            <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="basic-addon-name">First Name</label>

              <input
                type="text"
                id="basic-addon-name"
                class="form-control"
                placeholder="First Name"
                aria-label="Name"
                aria-describedby="basic-addon-name"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your First name.</div>
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="basic-addon1-name">Middle Name</label>
              <input
                type="text"
                id="basic-addon1-name"
                class="form-control"
                placeholder="Middle Name"
                aria-label="Name"
                aria-describedby="basic-addon-name1"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your Middle name.</div>
            </div>
            </div>
            <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="basic-addon2-name">Last Name</label>
              <input
                type="text"
                id="basic-addon2-name"
                class="form-control"
                placeholder="Last Name"
                aria-label="Name"
                aria-describedby="basic-addon-name2"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your Last name.</div>
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="basic-default-email1">Email</label>
              <input
                type="email"
                id="basic-default-email1"
                class="form-control"
                placeholder="john.doe@email.com"
                aria-label="john.doe@email.com"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter a valid email</div>
            </div>
            </div>
            <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="basic-default-phone">Phone</label>
              <input
                type="text"
                id="basic-default-phone"
                class="form-control"
                placeholder="0986272562"
                aria-label="0986272562"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter a phone number</div>
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="select-country1">Country</label>
              <select class="form-select" id="select-country1" required>
                <option value="">Select Country</option>
                <option value="usa">USA</option>
                <option value="uk">UK</option>
                <option value="france">France</option>
                <option value="australia">Australia</option>
                <option value="spain">Spain</option>
                <option value="spain">Pakistan</option>
              </select>
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please select your country</div>
            </div>
            </div>
            <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="select-city1">City</label>
              <input
                type="text"
                id="select-city1"
                class="form-control"
                placeholder="any"
                aria-label="any"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please select your city</div>
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="select-state1">State</label>
              <input
                type="text"
                id="select-state1"
                class="form-control"
                placeholder="any"
                aria-label="any"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please select your state</div>
            </div>
            </div>
           
            <div class="mb-1">
              <label class="form-label" for="phy-address">Physical Address</label>
              <input type="text" class="form-control " name="phy-address" id="phy-address" required />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your physical address.</div>
            </div>
            <div class="mb-1">
              <label class="form-label" for="pos-address">Postal Address</label>
              <input type="text" class="form-control " name="pos-address" id="pos-address" required />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your postal address.</div>
            </div>
            <div class="mb-1">
              <label class="form-label" for="pos-code">Postal Code</label>
              <input type="text" class="form-control " name="pos-code" id="pos-code" required />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your postal code.</div>
            </div>
            <div class="row">
               <div class="mb-1 col-md-4">
              <label class="form-label" for="basic-default-password1">Current Password</label>
              <input
                type="password"
                id="basic-default-password1"
                class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your current password.</div>
            </div>
            <div class="mb-1 col-md-4">
              <label class="form-label" for="basic-default-password2">New Password</label>
              <input
                type="password"
                id="basic-default-password2"
                class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your new password.</div>
            </div>
            <div class="mb-1 col-md-4">
              <label class="form-label" for="basic-default-password3">Confirm New Password</label>
              <input
                type="password"
                id="basic-default-password3"
                class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please confirm your password.</div>
            </div>
            </div>
            <button type="submit" data-bs-target="alerts-closable" class="btn btn-success">Update Profile </button>
          </form>
        </div>
      </div>
    </div>
    <!-- /Profile validations -->
  </div>
</section>
@endsection
@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-validation.js')) }}"></script>
  <script src="{{asset(mix('js/scripts/components/components-alerts.js'))}}"></script>
  <script src="{{ asset(mix('js/scripts/components/components-modals.js')) }}"></script>
@endsection
