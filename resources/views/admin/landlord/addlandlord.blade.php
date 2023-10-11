@extends('layouts/contentLayoutMaster')

@section('title', 'Add Landlord')

@section('content')




<!-- Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Multiple Column</h4>
        </div>
        <div class="card-body">
          <form class="form">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="first-name-column">First Name</label>
                  <input
                    type="text"
                    id="first-name-column"
                    class="form-control"
                    placeholder="First Name"
                    name="fname-column"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="middle-name-column">Middle Name</label>
                  <input
                    type="text"
                    id="middle-name-column"
                    class="form-control"
                    placeholder="Middle Name"
                    name="middle-name-column"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Last Name</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="last-name-column" />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="phone">Phone</label>
                  <input
                    type="text"
                    id="phone"
                    class="form-control"
                    name="phone"
                    placeholder="Phone"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="email-id-column">Email</label>
                  <input
                    type="email"
                    id="email-id-column"
                    class="form-control"
                    name="email-id-column"
                    placeholder="Email"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="registration-date-column">Registration Date</label>
                  <input
                    type="text"
                    id="registration-date-column"
                    class="form-control"
                    name="registration-date-column"
                    placeholder="Registration Date"
                  />
                </div>
              </div>

              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="country">Country</label>
                  <input
                    type="text"
                    id="country"
                    class="form-control"
                    placeholder="Country "
                    name="country"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="passport">National ID or Passport</label>
                  <input
                    type="text"
                    id="passport"
                    class="form-control"
                    placeholder="National ID or Passport"
                    name="passport"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="state">State</label>
                  <input
                    type="text"
                    id="state"
                    class="form-control"
                    placeholder="State"
                    name="state"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="city">City</label>
                  <input
                    type="text"
                    id="city"
                    class="form-control"
                    placeholder="City"
                    name="city"
                  />
                </div>
              </div>

              <div class="col-md-12 col-12">
                <div class="mb-1">
                  <label class="form-label" for="postal-address">Postal Address</label>
                  <input
                    type="text"
                    id="postal-address"
                    class="form-control"
                    placeholder="Postal Address"
                    name="postal-address"
                  />
                </div>
              </div>
              <div class="col-md-12 col-12">
                <div class="mb-1">
                  <label class="form-label" for="physical-address">Physical Address</label>
                  <input
                    type="text"
                    id="physical-address"
                    class="form-control"
                    placeholder="Physical Address"
                    name="physical-address"
                  />
                </div>
              </div>
              <div class="col-md-12 col-12">
                <div class="mb-1">
                  <label class="form-label" for="residential-address">Residential Address</label>
                  <input
                    type="text"
                    id="residential-address"
                    class="form-control"
                    placeholder="Residential Address"
                    name="residential-address"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="password">Password</label>
                  <input
                    type="text"
                    id="password"
                    class="form-control"
                    placeholder="Password"
                    name="password"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="confirm-password">Confirm Password</label>
                  <input
                    type="text"
                    id="confirm-password"
                    class="form-control"
                    placeholder="Confirm Password"
                    name="lname-column"
                  />
                </div>
              </div>
              <div class="col-12 d-flex justify-content-end ">
                <button type="reset" class="btn btn-primary me-1 ">Submit</button>

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
