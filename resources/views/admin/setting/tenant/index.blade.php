<section id="nav-filled">
    <div class="row match-height">
        <!-- Filled Tabs starts -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tenant Setting</h4>
                </div>
                <div class="card-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-fill" data-bs-toggle="tab" href="#home-fill"
                                role="tab" aria-controls="home-fill" aria-selected="true">Tenant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-fill" data-bs-toggle="tab" href="#profile-fill"
                                role="tab" aria-controls="profile-fill" aria-selected="false">Tenant Type</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                            <section id="basic-vertical-layouts">
                                <form class="form form-vertical" action="{{route('admin.setting.tenantprefixupdate',$tenantSetting->id)}}" method="post">
                                  @csrf
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="first-name-icon">Tenant Number Prefix</label>

                                            <input type="text" id="first-name-icon" class="form-control"
                                                name="tenant_prefix" value="{{$tenantSetting->tenant_prefix}}"  placeholder="First Name" />
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button  class="btn btn-primary me-1">Update Settings</button>

                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                        <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                            @include('admin.setting.tenant.tenant-type')

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Filled Tabs ends -->


    </div>
</section>
