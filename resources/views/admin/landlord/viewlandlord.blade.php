@extends('layouts/contentLayoutMaster')

@section('title', 'Tabs')

@section('content')
<div class="row">
    <div class="col-lg-4 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">21,459</h3>
            <span>Total Property</span>
          </div>
          <div class="avatar bg-light-primary p-50">
            <span class="avatar-content">
              <i data-feather="home" class="font-medium-5"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">4,567</h3>
            <span>Units</span>
          </div>
          <div class="avatar bg-light-danger p-50">
            <span class="avatar-content">
              <i data-feather="user-plus" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>


  </div>
<div class="col-xl-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Landlord</h4>
      </div>
      <div class="card-body">
        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="home-tab-justified"
              data-bs-toggle="tab"
              href="#home-just"
              role="tab"
              aria-controls="home-just"
              aria-selected="true"
              >Info</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="profile-tab-justified"
              data-bs-toggle="tab"
              href="#profile-just"
              role="tab"
              aria-controls="profile-just"
              aria-selected="true"
              >Properties</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="messages-tab-justified"
              data-bs-toggle="tab"
              href="#messages-just"
              role="tab"
              aria-controls="messages-just"
              aria-selected="false"
              >Documents</a
            >
          </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content pt-1">
          <div class="tab-pane active" id="home-just" role="tabpanel" aria-labelledby="home-tab-justified">
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
                                readonly
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
                                  readonly
                                    type="text"
                                    id="middle-name-column"
                                    class="form-control"
                                    placeholder="Middle Name"
                                    name="mname-column"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6 col-12">
                                <div class="mb-1">
                                  <label class="form-label" for="last-name-column">Last Name</label>
                                  <input
                                  readonly
                                    type="text"
                                    id="last-name-column"
                                    class="form-control"
                                    placeholder="Last Name"
                                    name="lname-column"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6 col-12">
                                <div class="mb-1">
                                  <label class="form-label" for="phone-name-column">Phone</label>
                                  <input
                                  readonly
                                    type="text"
                                    id="phone-name-column"
                                    class="form-control"
                                    placeholder="Phone"
                                    name="phone-column"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6 col-12">
                                <div class="mb-1">
                                  <label class="form-label" for="email-column">Email</label>
                                  <input
                                  readonly
                                    type="text"
                                    id="email-column"
                                    class="form-control"
                                    placeholder="Email"
                                    name="email-column"
                                  />
                                </div>
                              </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="registration-name-column">Registration</label>
                                <input
                                readonly
                                  type="text"
                                  id="registration-name-column"
                                  class="form-control"
                                  placeholder="Registration"
                                  name="registration-column"
                                />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="country-column">Country</label>
                                <input readonly type="text" id="country-column" class="form-control" placeholder="Country" name="country-column" />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="city-floating">City</label>
                                <input
                                readonly
                                  type="text"
                                  id="city-floating"
                                  class="form-control"
                                  name="city-floating"
                                  placeholder="City"
                                />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="state-column">State</label>
                                <input
                                readonly
                                  type="text"
                                  id="state-column"
                                  class="form-control"
                                  name="state-column"
                                  placeholder="State"
                                />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-1">
                                <label class="form-label" for="passport-id-column">National ID or Passport</label>
                                <input
                                readonly
                                  type="email"
                                  id="passport-id-column"
                                  class="form-control"
                                  name="passport-id-column"
                                  placeholder="National ID or Passport"
                                />
                              </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                  <label class="form-label" for="postal-address-column">Postal Address</label>
                                  <input
                                  readonly
                                    type="email"
                                    id="postal-address-column"
                                    class="form-control"
                                    name="postal-address-column"
                                    placeholder="Postal Address"
                                  />
                                </div>
                              </div>
                              <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="physical-address-column">Physical Address</label>
                                    <input
                                    readonly
                                      type="email"
                                      id="physical-address-column"
                                      class="form-control"
                                      name="physical-address-column"
                                      placeholder="Physical Address"
                                    />
                                </div>
                              </div>
                              <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="residential-address-column">Residential Address</label>
                                    <input
                                    readonly
                                      type="email"
                                      id="residential-address-column"
                                      class="form-control"
                                      name="residential-address-column"
                                      placeholder="Residential Address"
                                    />
                                </div>
                              </div>

                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          </div>
          <div class="tab-pane" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-justified">
            <p>
              Bear claw jelly beans wafer pastry jelly beans candy macaroon biscuit topping. Sesame snaps lemon drops
              donut gingerbread dessert cotton candy wafer croissant jelly beans. Sweet roll halvah gingerbread bonbon
              apple pie gummies chocolate bar pastry gummi bears.
            </p>
            <p>
              Croissant danish chocolate bar pie muffin. Gummi bears marshmallow chocolate bar bear claw. Fruitcake
              halvah chupa chups dragée carrot cake cookie. Carrot cake oat cake cake chocolate bar cheesecake. Wafer
              gingerbread sweet roll candy chocolate bar gingerbread.
            </p>
          </div>
          <div class="tab-pane" id="messages-just" role="tabpanel" aria-labelledby="messages-tab-justified">
            <p>
              Croissant jelly tootsie roll candy canes. Donut sugar plum jujubes sweet roll chocolate cake wafer. Tart
              caramels jujubes. Dragée tart oat cake. Fruitcake cheesecake danish. Danish topping candy jujubes. Candy
              canes candy canes lemon drops caramels tiramisu chocolate bar pie.
            </p>
            <p>
              Gummi bears tootsie roll cake wafer. Gummies powder apple pie bear claw. Caramels bear claw fruitcake
              topping lemon drops. Carrot cake macaroon ice cream liquorice donut soufflé. Gummi bears carrot cake
              toffee bonbon gingerbread lemon drops chocolate cake.
            </p>
          </div>
          <div class="tab-pane" id="settings-just" role="tabpanel" aria-labelledby="settings-tab-justified">
            <p>
              Candy canes halvah biscuit muffin dessert biscuit marzipan. Gummi bears marzipan bonbon chupa chups
              biscuit lollipop topping. Muffin sweet apple pie sweet roll jujubes chocolate. Topping cake chupa chups
              chocolate bar tiramisu tart sweet roll chocolate cake.
            </p>
            <p>
              Jelly beans caramels muffin wafer sesame snaps chupa chups chocolate cake pastry halvah. Sugar plum
              cotton candy macaroon tootsie roll topping. Liquorice topping chocolate cake tart tootsie roll danish
              bear claw. Donut candy canes marshmallow. Wafer cookie apple pie.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @section('page-script')
  <script src="{{asset('js/scripts/components/components-navs.js')}}"></script>
@endsection
