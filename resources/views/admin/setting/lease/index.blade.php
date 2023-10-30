



<div class="col-xl-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Lease Setting</h4>
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
           {{-- {{dd($leaseSetting)}} --}}
        <!-- Tab panes -->
        <div class="tab-content pt-1">
          <div class="tab-pane active" id="leases" role="tabpanel" aria-labelledby="home-tab-justified">
            <section id="multiple-column-form">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <form class="form" action="{{route('admin.setting.updatelease',$leaseSetting->id)}}" method="post">
                          @csrf
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="tenant-number-prefix">Lease Number Prefix</label>
                                        <input
                                          type="text"
                                          id="tenant-number-prefix"
                                          class="form-control"
                                          placeholder="Tenant Number Prefix"
                                          name="lease_number_prefix"
                                          value="{{$leaseSetting->lease_number_prefix}}"
                                        />
                                      </div>
                                </div>
                            </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="tenant-type">Invoice Number Prefix</label>
                                    <input
                                      type="text"
                                      id="invoice-number-prefix"
                                      class="form-control"
                                      placeholder="Invoice Number Prefix"
                                      name="invoice_number_prefix"
                                      value="{{$leaseSetting->invoice_number_prefix}}"
                                    />
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="invoice-disclaimer">Invoice Disclaimer</label>
                                    <input
                                      type="text"
                                      id="invoice-disclaimer"
                                      class="form-control"
                                      placeholder="Invoice Disclaimer"
                                      name="invoice_disclaimer"
                                      value="{{$leaseSetting->invoice_disclaimer}}"
                                    />
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="invoice-term">Invoice Terms</label>
                                    <input
                                      type="text"
                                      id="invoice-term"
                                      class="form-control"
                                      placeholder="Invoice Terms"
                                      name="invoice_term"
                                      value="{{$leaseSetting->invoice_term}}"
                                    />
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="tenant-type">Receipt Notes</label>
                                    <input
                                      type="text"
                                      id="receipt-notes"
                                      class="form-control"
                                      placeholder="Receipt Notes"
                                      name="receipt_notes"
                                      value="{{$leaseSetting->receipt_notes}}"
                                    />
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="generate-invoice">Generate Invoice On (Day Of Month)</label>
                                    <select class="select2 w-100" id="generate-invoice" name="generate_invoice">
                                        <option label=" "></option>
                                        @for ($i = 1; $i <= 28; $i++)
                                        <option {{$leaseSetting->generate_invoice==$i?'selected':''}} value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                    </select>
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="form-check form-check-primary">
                                        <input type="checkbox" class="form-check-input" id="colorCheck1" value="1" name="show_payment_method" {{$leaseSetting->show_payment_method=='1'?'checked':''}} />
                                        <h4 class="form-check-label" for="colorCheck1">show payment method  on invoice</h4>
                                      </div>
                                      <p>for this is Lorem, ipsum dolor.</p>
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="form-check form-check-primary">
                                        <input type="checkbox" class="form-check-input" id="colorCheck1" value="1" name="next_period_billing" {{$leaseSetting->next_period_billing=='1'?'checked':''}} />
                                        <h4 class="form-check-label" for="colorCheck1">next period billing</h4>

                                      </div>
                                      <p>for this is Lorem, ipsum dolor.</p>
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="form-check form-check-primary">
                                        <input type="checkbox" class="form-check-input" id="colorCheck1" value="1" name="skip_starting_period" {{$leaseSetting->skip_starting_period=='1'?'checked':''}} />
                                        <h4 class="form-check-label" for="colorCheck1">skip starting period</h4>

                                      </div>
                                      <p class="">for this is Lorem, ipsum dolor.</p>
                                  </div>
                            </div>
                          </div>
                          <div class="col-12 d-flex justify-content-end ">
                            <button class="btn btn-primary me-1 ">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          </div>
          <div class="tab-pane" id="lease-type" role="tabpanel" aria-labelledby="profile-tab-justified">
            @include('admin.setting.lease.lease-type')

          </div>


          <div class="tab-pane" id="extra-charges" role="tabpanel" aria-labelledby="settings-tab-justified">
            <p>
            @include('admin.setting.lease.extra-charges')
            </p>
          </div>
          <div class="tab-pane" id="contract-document" role="tabpanel" aria-labelledby="settings-tab-justified">

       @include('admin.setting.lease.contract-document')



            </div>
        </div>
      </div>
    </div>
  </div>



 
