<div class="form-modal-ex">
    <!-- Button trigger modal -->

    <!-- Modal -->

    <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Edit Utility Reading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('admin.utilities.update')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <input type="hidden" name="utility_id" id="utility_id">
                                <div class="mb-1">
                                    <label class="form-label" for="property">Property</label>
                                    <input type="text" class="form-control " id="property"
                                        aria-describedby="itemcost"  readonly />

                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="utility">Utility</label>
                                    <input type="text" class="form-control " id="utility"
                                        aria-describedby="itemcost"  readonly />
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="unit">Unit</label>
                                    <input type="text" class="form-control " id="unit"
                                        aria-describedby="itemcost"  readonly />
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="reading-date">Reading Date</label>
                                    <input type="date" class="form-control " id="reading-date"
                                        aria-describedby="itemcost"  name="reading_date" />
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="current-reading">Current Reading</label>
                                    <input type="number" class="form-control " id="current-reading"
                                        aria-describedby="itemquantity"
                                        name="current_reading" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
