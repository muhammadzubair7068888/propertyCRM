<section id="basic-vertical-layouts">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Vertical Form</h4>
          </div>
          <div class="card-body">
            <form class="form form-vertical">
              <div class="row">
                <div class="col-6">
                  <div class="mb-1">

                    <label class="form-label" for="lease-number">Lease Number</label>
                    <input
                      type="text"
                      id="lease-number"
                      class="form-control"
                      name="lease-number"
                      value="{{$lease->lease_code}}"
                    />
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-1">
                    <label class="form-label" for="property">Property</label>
                    <input type="text" id="property" class="form-control" name="property" value="{{$lease->property->property_name}}" />
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-1">
                    <label class="form-label" for="Unit">Unit</label>
                    <input
                      type="text"
                      id="Unit"
                      class="form-control"
                      name="Unit"
                      value="{{$lease->unit->unit_name}}"
                    />
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-1">
                    <label class="form-label" for="lease-type">Lease Type</label>
                    <input
                      type="text"
                      id="lease-type"
                      class="form-control"
                      name="lease-type"
                      value="{{$lease->lease_type->name}}"
                    />
                  </div>
                </div>

                <div class="col-6">
                    <div class="mb-1">
                      <label class="form-label" for="start-date">Start Date</label>
                      <input
                        type="text"
                        id="start-date"
                        class="form-control"
                        name="start-date"
                        value="{{$lease->start_date}}"
                      />
                    </div>
                  </div>
                <div class="col-6">
                    <div class="mb-1">
                      <label class="form-label" for="due-date">Due on (Day of Month)</label>
                      <input
                        type="text"
                        id="due-date"
                        class="form-control"
                        name="due-date"
                        value="{{$lease->due_on}}"
                      />
                    </div>
                  </div>


              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section id="accordion">
    <div class="row">
      <div class="col-sm-12">
        <div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-body">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionOne"
                      aria-expanded="true"
                      aria-controls="accordionOne"
                    >
                      Utility Deposits
                    </button>
                  </h2>
                  <div
                    id="accordionOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Utility</th>
                                    <th>Deposit Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$lease->property->propertyUtility->first()->util_name->name}}</td>
                                    <td>{{$lease->rental_deposit_amount}}</td>


                                </tr>
                            </tbody>
                        </table>

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionTwo"
                      aria-expanded="false"
                      aria-controls="accordionTwo"
                    >
                      Utilities
                    </button>
                  </h2>
                  <div
                    id="accordionTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Utility Name</th>
                                    <th>Variable Cost</th>
                                    <th>Fixed Fee</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$lease->property->propertyUtility->first()->util_name->name}}</td>
                                    <td>{{$lease->property->propertyUtility->first()->variable_cost}}</td>
                                    <td>{{$lease->property->propertyUtility->first()->fixed_fee}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionThree"
                      aria-expanded="false"
                      aria-controls="accordionThree"
                    >
                     Extra Charges
                    </button>
                  </h2>
                  <div
                    id="accordionThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Extra Charge Name</th>
                                    <th>Frequency</th>
                                    <th>Extra Charge Value</th>
                                    <th>Extra Charge Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>



                                    <td>{{$lease->property->propertyExtra[0]->chargeName->name}}</td>
                                    <td>{{$lease->property->propertyExtra[0]->extra_charges_frequency}}</td>
                                    <td>{{$lease->property->propertyExtra[0]->extra_charges_value}}</td>
                                    <td>{{$lease->property->propertyExtra[0]->extra_charges_Type}}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFour"
                      aria-expanded="false"
                      aria-controls="accordionFour"
                    >
                      Late Fee
                    </button>
                  </h2>
                  <div
                    id="accordionFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Late Fee Name</th>
                                    <th>Grace Period (Days)</th>
                                    <th>Frequency</th>
                                    <th>Late Fee Value</th>
                                    <th>Late Fee Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>{{$lease->property->propertyLateFee[0]->late_fee_name}}</td>
                                    <td>{{$lease->property->propertyLateFee[0]->late_fee_grace_period}}</td>
                                    <td>{{$lease->property->propertyLateFee[0]->late_fee_frequency}}</td>
                                    <td>{{$lease->property->propertyLateFee[0]->late_fee_value}}</td>
                                    <td>{{$lease->property->propertyLateFee[0]->late_fee_type}}</td>

                                </tr>
                            </tbody>
                        </table>
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
