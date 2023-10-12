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
    <div class="row">
        <div class="mb-1 col-8">
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
          <div class="col-3">
            <div class="d-flex flex-column align-items-center">
              <img
                src="{{asset('images/slider/03.jpg')}}"
                id="blog-feature-image"
                class="rounded me-2 mb-1 mb-md-0"
                width="170"
                height="110"
                alt="Blog Featured Image"
              />


                <div class="d-inline-block pt-1">
                  <input class="form-control" type="file" id="blogCustomFile" accept="image/*" />

              </div>
            </div>
          </div>


    </div>
    <div class="row">
        <div class="mb-1 col-4">
            <label class="form-label" for="basic-default-email1">Contact Email</label>
            <input
              type="email"
              id="basic-default-email1"
              class="form-control"
              placeholder="john.doe@email.com"
              aria-label="john.doe@email.com"
              required
            />

          </div>
          <div class="mb-1 col-4">
            <label class="form-label" for="phone">Phone</label>
            <input
              type="email"
              id="phone"
              class="form-control"
              placeholder=""
              aria-label=""
              required
            />

          </div>
    </div>

<div class="row">
    <div class="col-8 mb-1">
        <label class="form-label" for="currency">Default Currency</label>
        <select class="select2 form-select" id="currency">
          <option value="AK">Alaska</option>
          <option value="HI">Hawaii</option>
          <option value="CA">California</option>
          <option value="SC">South Carolina</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WV">West Virginia</option>
        </select>
      </div>
</div>
<div class="row">
    <div class="col-8 mb-1">
        <label class="form-label" for="color-theme">Color Theme</label>
        <select class="select2 form-select" id="color-theme">
          <option value="AK">Alaska</option>
          <option value="HI">Hawaii</option>
          <option value="CA">California</option>
          <option value="SC">South Carolina</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WV">West Virginia</option>
        </select>
      </div>
</div>
<div class="row">
    <div class="col-8 mb-1">
        <label class="form-label" for="language">Language</label>
        <select class="select2 form-select" id="language">
          <option value="AK">Alaska</option>
          <option value="HI">Hawaii</option>
          <option value="CA">California</option>
          <option value="SC">South Carolina</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WV">West Virginia</option>
        </select>
      </div>
</div>
<div class="row">
    <div class="mb-1 col-12">
      <label class="form-label" for="physical-address">Physical Adress</label>
      <input type="text" class="form-control " name="physical-address" id="physical-address" required />

    </div>
</div>
<div class="row">
    <div class="mb-1 col-12">
      <label class="form-label" for="postal-address">Postal Adress</label>
      <input type="text" class="form-control " name="postal-address" id="postal-address" required />

    </div>
</div>
<div class="row">
    <div class="mb-1 col-12">
      <label class="form-label" for="website-url">Website Url</label>
      <input type="text" class="form-control " name="website-url" id="website-url" required />

    </div>
</div>
<div class="row">
    <div class="mb-1 col-6">
        <label class="form-label" for="zip-code">Zip Code</label>
        <input type="text" class="form-control " name="zip-code" id="zip-code" required />

      </div>
      <div class="mb-1 col-6">
        <label class="form-label" for="date-formate">Date Formate</label>
        <input type="text" class="form-control " name="date-formate" id="date-formate" required />

      </div>
</div>
<div class="row">
    <div class="mb-1 col-4">
        <label class="form-label" for="amount-thousand-separator">Amount Thousand Separator</label>
        <select class="select2 form-select" id="amount-thousand-separator">
          <option value="AK">Alaska</option>
          <option value="HI">Hawaii</option>
          <option value="CA">California</option>
          <option value="SC">South Carolina</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WV">West Virginia</option>
        </select>
      </div>
      <div class="mb-1 col-4">
        <label class="form-label" for="amount-decimal-separator">Amount Decimal Separator</label>
        <select class="select2 form-select" id="amount-decimal-separator">
          <option value="AK">Alaska</option>
          <option value="HI">Hawaii</option>
          <option value="CA">California</option>
          <option value="SC">South Carolina</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WV">West Virginia</option>
        </select>
      </div>
      <div class="mb-1 col-4">
        <label class="form-label" for="amount-decimal">Amount Decimals</label>
        <select class="select2 form-select" id="amount-decimal">
          <option value="AK">Alaska</option>
          <option value="HI">Hawaii</option>
          <option value="CA">California</option>
          <option value="SC">South Carolina</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WV">West Virginia</option>
        </select>
      </div>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
