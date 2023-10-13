@section('vendor-style')
  <link rel="stylesheet" href="{{asset(mix('vendors/css/forms/select/select2.min.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('vendors/css/editors/quill/katex.min.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('vendors/css/editors/quill/monokai-sublime.min.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('vendors/css/editors/quill/quill.snow.css'))}}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{asset(mix('css/base/plugins/forms/form-quill-editor.css'))}}">
<link rel="stylesheet" type="text/css" href="{{asset(mix('css/base/pages/page-blog.css'))}}">
@endsection
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
              href="#leases"
              role="tab"
              aria-controls="home-just"
              aria-selected="true"
              >Leases</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="leases-tab-justified"
              data-bs-toggle="tab"
              href="#lease-type"
              role="tab"
              aria-controls="profile-just"
              aria-selected="true"
              >Lease Type</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="payment-tab-justified"
              data-bs-toggle="tab"
              href="#extra-charges"
              role="tab"
              aria-controls="profile-just"
              aria-selected="true"
              >Extra Charges</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="messages-tab-justified"
              data-bs-toggle="tab"
              href="#contract-document"
              role="tab"
              aria-controls="messages-just"
              aria-selected="false"
              >Contract Documents</a
            >
          </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content pt-1">
          <div class="tab-pane active" id="leases" role="tabpanel" aria-labelledby="home-tab-justified">
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
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="tenant-number-prefix">Tenant Number Prefix</label>
                                        <input
                                        readonly
                                          type="text"
                                          id="tenant-number-prefix"
                                          class="form-control"
                                          placeholder="Tenant Number Prefix"
                                          name="tenant-number-prefix"
                                        />
                                      </div>
                                </div>
                            </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="tenant-type">Invoice Number Prefix</label>
                                    <input
                                    readonly
                                      type="text"
                                      id="invoice-number-prefix"
                                      class="form-control"
                                      placeholder="Invoice Number Prefix"
                                      name="invoice-number-prefix"
                                    />
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="invoice-disclaimer">Invoice Disclaimer</label>
                                    <input
                                    readonly
                                      type="text"
                                      id="invoice-disclaimer"
                                      class="form-control"
                                      placeholder="Invoice Disclaimer"
                                      name="invoice-disclaimer"
                                    />
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="invoice-term">Invoice Terms</label>
                                    <input
                                    readonly
                                      type="text"
                                      id="invoice-term"
                                      class="form-control"
                                      placeholder="Invoice Terms"
                                      name="invoice-term"
                                    />
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="tenant-type">Receipt Notes</label>
                                    <input
                                    readonly
                                      type="text"
                                      id="receipt-notes"
                                      class="form-control"
                                      placeholder="Receipt Notes"
                                      name="receipt-notes"
                                    />
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="generate-invoice">Generate Invoice On (Day Of Month)</label>
                                    <select class="select2 w-100" id="generate-invoice">
                                        <option label=" "></option>
                                        <option>UK</option>
                                        <option>USA</option>
                                        <option>Spain</option>
                                        <option>France</option>
                                        <option>Italy</option>
                                        <option>Australia</option>
                                    </select>
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="form-check form-check-primary">
                                        <input type="checkbox" class="form-check-input" id="colorCheck1" checked />
                                        <h3 class="form-check-label" for="colorCheck1">show payment method  on invoice</h3>
                                      </div>
                                      <p>for this is Lorem, ipsum dolor.</p>
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="form-check form-check-primary">
                                        <input type="checkbox" class="form-check-input" id="colorCheck1" checked />
                                        <h3 class="form-check-label" for="colorCheck1">next period billing</h3>

                                      </div>
                                      <p>for this is Lorem, ipsum dolor.</p>
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="form-check form-check-primary">
                                        <input type="checkbox" class="form-check-input" id="colorCheck1" checked />
                                        <h3 class="form-check-label" for="colorCheck1">skip starting period</h3>

                                      </div>
                                      <p class="">for this is Lorem, ipsum dolor.</p>
                                  </div>
                            </div>
                          </div>
                          <div class="col-12 d-flex justify-content-end ">
                            <button type="reset" class="btn btn-primary me-1 ">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          </div>
          <div class="tab-pane" id="lease-type" role="tabpanel" aria-labelledby="profile-tab-justified">
            <p>
         this is lease
            </p>

          </div>


          <div class="tab-pane" id="extra-charges" role="tabpanel" aria-labelledby="settings-tab-justified">
            <p>
            this is payment
            </p>
          </div>
          <div class="tab-pane" id="contract-document" role="tabpanel" aria-labelledby="settings-tab-justified">

       @include('admin.setting.lease.contract-document')


{{-- ######## --}}
            </div>
        </div>
      </div>
    </div>
  </div>


  @section('vendor-script')
  <script src="{{asset(mix('vendors/js/forms/select/select2.full.min.js'))}}"></script>
  <script src="{{asset(mix('vendors/js/editors/quill/katex.min.js'))}}"></script>
  <script src="{{asset(mix('vendors/js/editors/quill/highlight.min.js'))}}"></script>
  <script src="{{asset(mix('vendors/js/editors/quill/quill.min.js'))}}"></script>
  @endsection

  @section('page-script')
  <script src="{{asset(mix('js/scripts/pages/page-blog-edit.js'))}}"></script>
  @endsection
