<section id="basic-tabs-components">
    <div class="row match-height shadow">
        <!-- Basic Tabs starts -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users setting</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active pe-4" id="home-tab" data-bs-toggle="tab" href="#home"
                                aria-controls="home" role="tab" aria-selected="true">Users</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link pe-4" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                aria-controls="profile" role="tab" aria-selected="false">Roles</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link pe-4" id="about-tab" data-bs-toggle="tab" href="#about" aria-controls="about"
                                role="tab" aria-selected="false">Permissions</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane active " id="home" aria-labelledby="home-tab" role="tabpanel">
                          @include('admin.setting.rolesandpermission.Users')
                        </div>
                        <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">

                            dfdf
                        </div>

                        <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">
                            @include('admin.setting.rolesandpermission.Permissions')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Tabs ends -->


    </div>
</section>
