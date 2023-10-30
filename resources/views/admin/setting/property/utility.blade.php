<!-- Multilingual -->
<section id="dt-utility">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="col-12 d-flex justify-content-end ">
                    <button type="submit" class="btn btn-primary  mt-2 " name="submit" value="Submit"
                        data-bs-toggle="modal" data-bs-target="#utilitystore">+ Add Utility Type</button>
                </div>

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
                            @foreach ($propertyUtility as $utility )
                            <tr>
                                <td>{{$utility->name}}</td>
                                <td>{{ $utility->display_name }}</td>
                                <td>{{ $utility->description }}</td>
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
    @include('admin.setting.property.propertytypemodel', ['type'=>'Utility','route' => 'utilitystore'])
</section>
<!--/ Multilingual -->


