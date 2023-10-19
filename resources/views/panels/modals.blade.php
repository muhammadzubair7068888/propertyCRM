<div class="modal fade" id="addNewAddressModal" tabindex="-1" aria-labelledby="addNewAddressTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-4 mx-50">

                {{-- <a class="custom-option-item btn btn-primary" onclick="showResidentials()">
                    Residential
                  </a>
                  <a class="custom-option-item btn btn-primary" onclick="showComercials()">
                    Commercial
                  </a> --}}


                <form class="row gy-1 gx-2" id="unit_form">
                    <div class="col-12">
                        <div class="d-flex justify-content-row custom-options-checkable">
                            <div class="col-md-6 mb-md-0 mb-2">
                                <a class="custom-option-item-title h4 fw-bolder mb-0" onclick="showResidentials()">
                                    <input class="custom-option-item-check" id="homeAddressRadio" checked type="radio"
                                        name="newAddress" value="HomeAddress" />
                                    <label for="homeAddressRadio" class="custom-option-item px-2 py-1">
                                        <span class="d-flex align-items-center mb-50">
                                            <i data-feather="home" class="font-medium-4 me-50"></i>
                                            Residential
                                        </span>
                                        <span class="d-block">Delivery time (7am – 9pm)</span>
                                    </label>
                            </div>
                            </a>
                            <div class="col-md-6 mb-md-0 mb-2">
                                <a class="custom-option-item-title h4 fw-bolder mb-0" onclick="showComercials()">
                                    <input class="custom-option-item-check" id="officeAddressRadio" type="radio"
                                        name="newAddress" value="OfficeAddress" />
                                    <label for="officeAddressRadio" class="custom-option-item px-2 py-1">
                                        <span class="d-flex align-items-center mb-50">
                                            <i data-feather="briefcase" class="font-medium-4 me-50"></i>
                                            Commercial
                                        </span>
                                        <span class="d-block">Delivery time (10am – 6pm)</span>
                                    </label>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 ">
                        <label class="form-label" for="unit-floor">Unit Floor</label>
                        <input type="text" id="unit-floor" name="unit_floor" class="form-control"
                            placeholder="Unit Floor" data-msg="Please enter your first name" />
                    </div>
                    <div class="col-12 ">
                        <label class="form-label" for="rent-amount">Rent Amount</label>
                        <input type="text" id="rent-amount" name="rent_amount" class="form-control"
                            placeholder="Rent Amount" data-msg="Please enter your last name" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="unit-type">Unit Type</label>
                        <select id="unit-type" name="unit-type" class="select2 form-select">
                            <option value="">Select a Unit</option>
                            <option value="one-rooms">Single Room</option>
                            <option value="three-rooms">Two Bed Rooms</option>
                            <option value="three-rooms">Three Bed Rooms</option>
                            <option value="five-rooms">Five Bed Rooms</option>
                            <option value="comercial space">Commercial Space</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6" id="bed-rooms">
                        <label class="form-label" for="bed-room">Bed Rooms</label>
                        <input type="text" id="bed-room" name="bed-rooms" class="form-control"
                            placeholder="Bed Rooms" />
                    </div>
                    <div class="col-12 col-md-6" id="bath-rooms">
                        <label class="form-label" for="bath-room">Bath Rooms</label>
                        <input type="text" id="bath-room" name="bath-rooms" class="form-control"
                            placeholder="Bath Rooms" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="total-rooms">Total Rooms</label>
                        <input type="text" id="total-rooms" name="total-rooms" class="form-control"
                            placeholder="Total Rooms" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="square-foot">Square Foot</label>
                        <input type="number" id="square-foot" name="square-foot" class="form-control"
                            placeholder="Square Foot" />
                    </div>


                    <div class="col-12 text-center d-flex justify-content-between">
                        <a class="btn btn-outline-secondary mt-2" onclick="unitModalDiscard()">
                            Discard
                        </a>
                        <a class="btn btn-primary me-1 mt-2" onclick="unitModalSubmit()">Submit</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
