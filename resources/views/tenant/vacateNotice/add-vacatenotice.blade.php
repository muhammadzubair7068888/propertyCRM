<section id="form-and-scrolling-components">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"></h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <div class="form-modal-ex">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                Login Form
              </button>
              <!-- Modal -->
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
                      <h4 class="modal-title" id="myModalLabel33">New Vacation Notice</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#">
                      <div class="modal-body">
                      <div class="mb-1">
                            <label class="form-label" for="basicSelectlease">Lease</label>
                            <select class="form-select" id="basicSelectlease">
                            <option>LS00008</option>
                            <option>LS00009</option>
                            <option>LS00010</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="basicSelectdate">Vacating Date</label>
                            <input type="text" id="basicSelectdate" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                        </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" disabled>Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
</section>