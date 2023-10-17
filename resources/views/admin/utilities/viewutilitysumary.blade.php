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
                    <div class="text-black col-4">Vacating Date : <span class="text-gray">17-10-2023</span>

                    </div>
                    <div class="text-black mb-1 col-4">Property :
                    <span class="text-gray">Sahil House (sahil123) - (gujranwala)</span>
                    </div>
                    <div class=" text-black mb-1 col-4">Unit :
                    <span class="text-gray">sahil first</span>
                    </div>
                    <div class="col-12">
                        <div  class="text-black"> Lease:
                        <span  class="text-gray">LS0008</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-black"> Vacating Reason:
                        <span class="text-gray">ect</span>
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
