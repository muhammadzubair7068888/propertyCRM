<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
  <div class="row">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Property Details</h4>
        </div>
        <div class="card-body">
          <form class="form form-vertical">

            <div class="row">
                <div class=" col-6">
                    <div class="mb-1">
                        <label class="form-label " for="property-type">Property Type</label>
                        <input type="text" id="property-typ" readonly
                            class="form-control   "
                            placeholder="Property Type" name="property-type" value="{{$property->property_name}}" />
                    </div>
                </div>
                <div class=" col-6">
                  <div class="mb-1">
                      <label class="form-label " for="property-name ">Property Name</label>
                      <input type="text" id="property-name " readonly
                          class="form-control "
                          placeholder="Property Name" name="property-name " value="" />
                  </div>
              </div>
              <div class=" col-6">
                  <div class="mb-1">
                      <label class="form-label " for="property-code">Property Code</label>
                      <input type="text" id="property-code" readonly
                          class="form-control   "
                          placeholder="Property Code" name="property-code" value="" />
                  </div>
              </div>
              <div class=" col-6">
                  <div class="mb-1">
                      <label class="form-label " for="location">Location</label>
                      <input type="text" id="location" readonly
                          class="form-control   "
                          placeholder="Location" name="location" value="" />
                  </div>
              </div>
              {{-- <div class=" col-6">
                  <div class="mb-1">
                      <label class="form-label " for="address">Address</label>
                      <input type="text" id="address"readonly
                          class="form-control  "
                          placeholder="Address" name="address" />
                  </div>
              </div> --}}








            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Vertical form layout section end -->
