{{-- 


<div>
   


    <!-- form -->
    <form id="systemSetting" class="row " onsubmit="return false">
    
      
      <div class="col-md-12 mb-1">
        <label class="form-label" for="Tenant">Tenant</label>
        <select class="select2 form-select" id="Tenant">
          <option value="1">Tenant</option>
          <option value="2" >Option2</option>
          <option value="3">Option3</option>
          <option value="4" >Option4</option>
        </select>
      </div>

      <div class="col-md-12 mb-1">
        <label class="form-label" for="Lease">Lease</label>
        <select class="select2 form-select" id="Lease">
          <option value="1">Lease</option>
          <option value="2" >Option2</option>
          <option value="3">Option3</option>
          <option value="4" >Option4</option>
        </select>
      </div>

      <div class="col-md-4">
        <div class="mb-1">
          <label class="form-label" for="Amount">Amount</label>
          <input
            type="number"
            class="form-control"
            id="Amount"
            aria-describedby="itemquantity"
            placeholder="1"
          />
        </div>
      </div>
      
      <div class="col-md-4 mb-1">
        <label class="form-label" for="paymentmethod">Payment Method</label>
        <select class="select2 form-select" id="paymentmethod">
          <option value="1">Payment Method</option>
          <option value="2" >Option2</option>
          <option value="3">Option3</option>
          <option value="4" >Option4</option>
        </select>
      </div>

      <div class="col-md-4 mb-1">
        <label class="form-label" for="paymentdate">Payment Date</label>
        <input type="text" id="paymentdate" class="form-control flatpickr-basic" placeholder="Payment Date" />
      </div>

      <div class="col-md-6 col-12">
        <div class="mb-1">
          <label class="form-label" for="paidby">Paid By</label>
          <input
            type="text"
            class="form-control"
            id="paidby"
            aria-describedby="paidby"
            placeholder="Paid By"
          />
        </div>
      </div>

      <div class="col-md-6 col-12">
        <div class="mb-1">
          <label class="form-label" for="referencenumber">Reference Number</label>
          <input
            type="text"
            class="form-control"
            id="referencenumber"
            aria-describedby="itemname"
            placeholder="Reference Number"
          />
        </div>
      </div>
      
      <div class="col-md-12 ">
        <div class="mb-3">
          <label class="form-label" for="paidby">Paid By</label>
          <input
            type="text"
            class="form-control"
            id="paidby"
            aria-describedby="itemname"
            placeholder="Paid By"
          />
        </div>
      </div>
    

      <div class="form-floating">
        <textarea
          class="form-control"
          placeholder="Leave a comment here (maximum 150 characters)"
          id="floatingTextarea2"
          style="height: 80px"
          maxlength="150"
        ></textarea>
        <label for="floatingTextarea2">Extra Notes</label>
        <p id="charCount">0 / 150 characters</p>
      </div>

     <div class="col-12 text-center">
        
        <button type="reset" class="btn  mt-1" data-bs-dismiss="modal" aria-label="Close">
      Cancel
        </button>
        <button type="submit" class="btn btn-primary me-1 mt-1">Save</button>
      </div>
    </form>
  </div>
  
   --}}



<h3>General Setting</h3>
   <form class="needs-validation" novalidate>
    <div class="mb-1">
      <label class="form-label" for="basic-addon-name">Name</label>
      <input
        type="text"
        id="basic-addon-name"
        class="form-control"
        placeholder="Name"
        aria-label="Name"
        aria-describedby="basic-addon-name"
        required
      />
    
    </div>
    <div class="mb-1">
      <label class="form-label" for="basic-default-email1">Email</label>
      <input
        type="email"
        id="basic-default-email1"
        class="form-control"
        placeholder="john.doe@email.com"
        aria-label="john.doe@email.com"
        required
      />
      
    </div>
    <div class="mb-1">
      <label class="form-label" for="basic-default-password1">Password</label>
      <input
        type="password"
        id="basic-default-password1"
        class="form-control"
        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
        required
      />
     
    </div>
    <div class="mb-1">
      <label class="form-label" for="bsDob">DOB</label>
      <input type="text" class="form-control " name="dob" id="bsDob" required />
   
    </div>
    <div class="mb-1">
      <label class="form-label" for="select-country1">Country</label>
      <select class="form-select" id="select-country1" required>
        <option value="">Select Country</option>
        <option value="usa">USA</option>
        <option value="uk">UK</option>
        <option value="france">France</option>
        <option value="australia">Australia</option>
        <option value="spain">Spain</option>
      </select>
      
    </div>
    <div class="mb-1">
      <label for="customFile1" class="form-label">Profile pic</label>
      <input class="form-control" type="file" id="customFile1" required />
    </div>
    <div class="mb-1">
      <label class="form-label" class="d-block">Gender</label>
      <div class="form-check my-50">
        <input
          type="radio"
          id="validationRadio3"
          name="validationRadioBootstrap"
          class="form-check-input"
          required
        />
        <label class="form-check-label" for="validationRadio3">Male</label>
      </div>
      <div class="form-check">
        <input
          type="radio"
          id="validationRadio4"
          name="validationRadioBootstrap"
          class="form-check-input"
          required
        />
        <label class="form-check-label" for="validationRadio4">Female</label>
      </div>
    </div>
    <div class="mb-1">
      <label for="validationCustomUsername" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input
          type="text"
          class="form-control"
          id="validationCustomUsername"
          aria-describedby="inputGroupPrepend"
          required
        />
        <div class="invalid-feedback">Please choose a username.</div>
      </div>
    </div>
    <div class="mb-1">
      <label class="d-block form-label" for="validationBioBootstrap">Bio</label>
      <textarea
        class="form-control"
        id="validationBioBootstrap"
        name="validationBioBootstrap"
        rows="3"
        required
      ></textarea>
    </div>
    <div class="mb-1">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="validationCheckBootstrap" required />
        <label class="form-check-label" for="validationCheckBootstrap">Agree to our terms and conditions</label>
        <div class="invalid-feedback">You must agree before submitting.</div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>