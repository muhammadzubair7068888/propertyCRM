
              <!-- Modal -->
              <div
                class="modal fade text-start"
                id="showmodal"
                tabindex="-1"
                aria-labelledby="myModalLabel33"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33"><i data-feather='clock'></i>Pending</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                      </button>
                    </div>
                    <form action="#">
                      <div class="modal-body">
                        <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="modern-amount">Amount</label>
                            <input
                              type="text"
                              id="modern-amount"
                              class="form-control"
                              readonly="readonly"
                              value=""
                            />
                          </div>
                          <div class="mb-1 col-md-6">
                            <label class="form-label" for="modern-paid">Paid On</label>
                            <input
                              type="text"
                              id="modern-paid"
                              class="form-control"
                              readonly="readonly"
                              placeholder=""
                            />
                          </div>
                          </div>
                          <div class="row">
                          <div class="mb-1  col-md-6">
                            <label class="form-label" for="modern-pay">Payment Method</label>
                            <input
                              type="text"
                              id="modern-pay"
                              class="form-control"
                              readonly="readonly"
                              placeholder=""
                            />
                          </div>
                          <div class="mb-1 col-md-6">
                            <label class="form-label" for="tenant">Tenant</label>
                            <input
                              type="text"
                              id="tenant"
                              readonly="readonly"
                              class="form-control"
                              value=""
                            />
                          </div>
                          </div>
                          <div class="col-12 mb-1">
                              <label class="form-label" for="disabledInputRecord">Recorded By</label>
                              <textarea
                               type="text"
                                class="form-control"
                                id="disabledInputRecord"
                                readonly="readonly"
                                rows="2"
                                value=""
                              ></textarea>

                          </div>
                          <div class="col-12 mb-1 ">
                              <label class="form-label" for="disabledInputNotes">Extra Notes</label>
                              <textarea
                                type="text"
                                class="form-control"
                                id="readonlyInputNotes"
                                readonly="readonly"
                                rows="2"
                                value=""
                                ></textarea>
                            </div>

                      </div>
                    </form>
                  </div>
                </div>
              </div>



<!-- Approved modal -->
<!-- {{-- <section id="form-and-scrolling-components">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Approved</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <div class="form-modal-ex">

              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
              <i data-feather='check-circle'>Approved</i>
              </button>

              <div
                class="modal fade text-start"
                id="inlineForm"
                tabindex="-1"
                aria-labelledby="myModalLabel33"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33"><i data-feather='check-circle'>Approved</i></h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                      </button>
                    </div>
                    <form action="#">
                      <div class="modal-body">
                        <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="modern-amount">Amount</label>
                            <input
                              type="text"
                              id="modern-amount"
                              class="form-control"
                              readonly="readonly"
                              placeholder=""
                            />
                          </div>
                          <div class="mb-1 col-md-6">
                            <label class="form-label" for="modern-paid">Paid On</label>
                            <input
                              type="text"
                              id="modern-paid"
                              class="form-control"
                              readonly="readonly"
                              placeholder=""
                            />
                          </div>
                          </div>
                          <div class="row">
                          <div class="mb-1  col-md-6">
                            <label class="form-label" for="modern-pay">Payment Method</label>
                            <input
                              type="text"
                              id="modern-pay"
                              class="form-control"
                              readonly="readonly"
                              placeholder=""
                            />
                          </div>
                          <div class="mb-1 col-md-6">
                            <label class="form-label" for="disabledInputtenant">Tenant</label>
                            <input
                              type="text"
                              id="disabledInputtenant"
                              readonly="readonly"
                              class="form-control"
                              value=""
                            />
                          </div>
                          </div>
                          <div class="col-12 mb-1">
                              <label class="form-label" for="disabledInputRecord">Recorded By</label>
                              <textarea
                               type="text"
                                class="form-control"
                                id="disabledInputRecord"
                                readonly="readonly"
                                rows="2"
                                value=""
                              ></textarea>

                          </div>
                          <div class="col-12 mb-1 ">
                              <label class="form-label" for="disabledInputNotes">Extra Notes</label>
                              <textarea
                                type="text"
                                class="form-control"
                                id="readonlyInputNotes"
                                readonly="readonly"
                                value=""
                                ></textarea>
                            </div>
                            <div class="col-12 mb-1 ">
                              <label class="form-label" for="disabledInputApproved">Approved By</label>
                              <textarea
                                type="text"
                                class="form-control"
                                id="readonlyInputApproved"
                                readonly="readonly"
                                value=""
                                ></textarea>
                            </div>
                            <div class="alert alert-warning mt-1 alert-validation-msg" role="alert">
                              <div class="alert-body d-flex align-items-center">
                                <span><i data-feather='bell'></i> You do,t have permission to access this resource.</span>
                              </div>
                            </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="scrolling-content-ex">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}} -->
