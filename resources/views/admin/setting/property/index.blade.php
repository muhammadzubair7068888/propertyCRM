
<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Property Setting</h4>
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
              >Property Type</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="leases-tab-justified"
              data-bs-toggle="tab"
              href="#document-just"
              role="tab"
              aria-controls="profile-just"
              aria-selected="true"
              >Amenities</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="payment-tab-justified"
              data-bs-toggle="tab"
              href="#payment-just"
              role="tab"
              aria-controls="profile-just"
              aria-selected="true"
              >Utilities</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="messages-tab-justified"
              data-bs-toggle="tab"
              href="#leases-just"
              role="tab"
              aria-controls="messages-just"
              aria-selected="false"
              >Unit Types</a
            >
          </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content pt-1">
          <div class="tab-pane active" id="home-just" role="tabpanel" aria-labelledby="home-tab-justified">
         @include('admin.setting.property.property-type')
          </div>
          <div class="tab-pane" id="document-just" role="tabpanel" aria-labelledby="profile-tab-justified">
         @include('admin.setting.property.anemities')
          </div>


          <div class="tab-pane" id="payment-just" role="tabpanel" aria-labelledby="settings-tab-justified">
            @include('admin.setting.property.utility')
          </div>
          <div class="tab-pane" id="leases-just" role="tabpanel" aria-labelledby="we-tab-justified">

            @include('admin.setting.property.unit-type')
          </div>
        </div>
      </div>
    </div>
  </div>

