@extends('layouts/contentLayoutMaster')

@section('title', 'Tabs')

@section('content')
<div class="row">
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">21,459</h3>
            <span>Total</span>
          </div>
          <div class="avatar bg-light-primary p-50">
            <span class="avatar-content">
              <i data-feather="home" class="font-medium-5"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">4,567</h3>
            <span>Occupied</span>
          </div>
          <div class="avatar bg-light-danger p-50">
            <span class="avatar-content">
              <i data-feather="check-circle" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
          <div class="card-body d-flex align-items-center justify-content-between">
            <div>
              <h3 class="fw-bolder mb-75">4,567</h3>
              <span>Vacant</span>
            </div>
            <div class="avatar bg-light-danger p-50">
              <span class="avatar-content">
                <i data-feather="search" class="font-medium-4"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card">
          <div class="card-body d-flex align-items-center justify-content-between">
            <div>
              <h3 class="fw-bolder mb-75">4,567</h3>
              <span>Info</span>
            </div>
            <div class="avatar bg-light-danger p-50">
              <span class="avatar-content">
                <i data-feather="user" class="font-medium-4"></i>
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
              >Total Units</a
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
              >Occupied</a
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
              >Vacant</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="invoices"
              data-bs-toggle="tab"
              href="#invoice"
              role="tab"
              aria-controls="messages-just"
              aria-selected="false"
              >Info</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="vacate-notices"
              data-bs-toggle="tab"
              href="#vacate-notice"
              role="tab"
              aria-controls="messages-just"
              aria-selected="false"
              >Vacate Notice</a
            >
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content pt-1">
          <div class="tab-pane active" id="home-just" role="tabpanel" aria-labelledby="home-tab-justified">
         1st
          </div>
          <div class="tab-pane" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-justified">
          2nd
          </div>
          <div class="tab-pane" id="messages-just" role="tabpanel" aria-labelledby="messages-tab-justified">
       3rd
          </div>
          <div class="tab-pane" id="settings-just" role="tabpanel" aria-labelledby="settings-tab-justified">
       4th
          </div>
          <div class="tab-pane" id="vacate-notice" role="tabpanel" aria-labelledby="settings-tab-justified">
           <h2>this is 5th part</h2>
          </div>
          <div class="tab-pane" id="invoice" role="tabpanel" aria-labelledby="settings-tab-justified">
           <h2>this is 6th part</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @section('page-script')
  <script src="{{asset('js/scripts/components/components-navs.js')}}"></script>
@endsection
