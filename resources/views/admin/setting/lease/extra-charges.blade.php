<!-- Multilingual -->
<section id="multilingual-datatable11">
    <div class="row">
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header border-bottom">
                    <div class="col-md-4 mb-1">
                        <label class="form-label" for="journalproperty">Property</label>
                        <select class="select2 form-select" id="journalproperty">
                            <option value="1">Property</option>
                            <option value="2">Option2</option>
                            <option value="3">Option3</option>
                            <option value="4">Option4</option>
                        </select>
                    </div>
                </div> --}}

                <div class="card-datatable">
                    <table class="dt-propertytype table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                               
                             </tr>
                        </thead>
                        <tbody>
                            @foreach ($extraCharge as $type )
                            <tr>
                                <td>{{$type->name}}</td>
                                <td>{{$type->display_name}}</td>
                                <td>{{$type->description}}</td>
                                <td>
                                    <a class="item-edit pe-1 text-success">
                                        <i data-feather="edit" class="font-medium-4"></i>
                                    </a>
                                    {{-- onclick="Alert(`{{ route('admin.landlord.destroy', $user->id) }}`,'Are you sure you want to delete this user?','Delete','error','danger')" --}}
                                    <a class="item-edit text-danger">
                                        <i data-feather="trash" class="font-medium-4"></i>
                                    </a>
                                </td>
                            </tr> 
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Multilingual -->


