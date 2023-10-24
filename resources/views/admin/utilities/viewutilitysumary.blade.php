@extends('layouts/contentLayoutMaster')
@section('title', 'Payments')
@section('content')
<!-- Basic tabs start -->
<section id="basic-tabs-components">
  <div class="row match-height">
    <!-- Basic Tabs starts -->
    <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vacate Notice Detail</h4>
        </div>
        <div class="card-body">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="info-tab"
                data-bs-toggle="tab"
                href="#info"
                aria-controls="home"
                role="tab"
                aria-selected="true"
                >Info</a
              >
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="info" aria-labelledby="info-tab" role="tabpanel">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Summary</h4>
                </div>
                <div class="ms-1 justify-content-start row">
                    <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="phone-name-column">Property</label>
                          <input
                          readonly
                          value="{{$index->property->property_name}}"
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
                          <label class="form-label" for="phone-name-column">Property Code</label>
                          <input
                          readonly
                          value="{{$index->property->property_code}}"
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
                          <label class="form-label" for="phone-name-column">Location</label>
                          <input
                          readonly
                          value="{{$index->property->location}}"
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
                          <label class="form-label" for="phone-name-column">Utility</label>
                          <input
                          readonly
                          value="{{$index->utility->name}}"
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
                          <label class="form-label" for="phone-name-column">Reading Date</label>
                          <input
                          readonly
                          value="{{$index->reading_date}}"
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
                          <label class="form-label" for="phone-name-column">Current Reading </label>
                          <input
                          readonly
                          value="{{$index->current_reading}}"
                            type="text"
                            id="phone-name-column"
                            class="form-control"
                            placeholder="Phone"
                            name="phone-column"
                          />
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection
