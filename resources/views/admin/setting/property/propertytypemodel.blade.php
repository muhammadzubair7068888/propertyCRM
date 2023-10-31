<!-- add new card modal  -->
<div class="modal fade" id="{{$route}}" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30%;">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <h1 class="" id="addNewCardTitle">Add {{$type}} Type</h1>

                <!-- form -->
              
                <form action="{{ route('admin.setting.'.$route) }}" method="post" id="addNewCardValidation"
                    class="row gy-1 gx-2 ">
                    @csrf
                    <div class="col-md-6 mb-1">
                       
                        <label class="form-label" for="Leases">Name</label>
                        <input type="text" class="form-control" placeholder="Vacating Date" name="name" />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="Leases">Display Name</label>
                        <input type="text" class="form-control" placeholder="Vacating Date" name="display_name" />
                       </div>

                  

                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here (maximum 150 characters)" id="vacatingreason"
                            style="height: 80px" maxlength="150" name="description"></textarea>
                        <label for="floatingTextarea2">Description</label>
                        <p id="charCount">0 / 150 characters</p>
                    </div>

                    <div class="col-12 text-center">

                        <button type="reset" class="btn  mt-1" data-bs-dismiss="modal" aria-label="Close">
                            Close
                        </button>
                        <button class="btn btn-primary me-1 mt-1">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
