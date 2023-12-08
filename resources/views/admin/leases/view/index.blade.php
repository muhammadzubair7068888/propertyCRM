@extends('layouts/contentLayoutMaster')

@section('title', 'Tabs')

@section('content')

<section id="nav-filled">
    <div class="row match-height">
      <!-- Filled Tabs starts -->
      <div class="col-xl-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Filled</h4>
          </div>
          <div class="card-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  id="home-tab-fill"
                  data-bs-toggle="tab"
                  href="#home-fill"
                  role="tab"
                  aria-controls="home-fill"
                  aria-selected="true"
                  >Info</a
                >
              </li>
              {{-- <li class="nav-item">
                <a
                  class="nav-link"
                  id="profile-tab-fill"
                  data-bs-toggle="tab"
                  href="#profile-fill"
                  role="tab"
                  aria-controls="profile-fill"
                  aria-selected="false"
                  >Invoice</a
                >
              </li> --}}

            </ul>

            <!-- Tab panes -->
            <div class="tab-content pt-1">
              <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                <p>
                   @include('admin.leases.view.info')
                </p>
              </div>
              <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                <p>
                    @include('admin.leases.view.invoice')
                </p>
              </div>
              <div class="tab-pane" id="messages-fill" role="tabpanel" aria-labelledby="messages-tab-fill">
                <p>
                  Croissant jelly tootsie roll candy canes. Donut sugar plum jujubes sweet roll chocolate cake wafer. Tart
                  caramels jujubes. Dragée tart oat cake. Fruitcake cheesecake danish. Danish topping candy jujubes. Candy
                  canes candy canes lemon drops caramels tiramisu chocolate bar pie.
                </p>
                <p>
                  Gummi bears tootsie roll cake wafer. Gummies powder apple pie bear claw. Caramels bear claw fruitcake
                  topping lemon drops. Carrot cake macaroon ice cream liquorice donut soufflé. Gummi bears carrot cake
                  toffee bonbon gingerbread lemon drops chocolate cake.
                </p>
              </div>
              <div class="tab-pane" id="settings-fill" role="tabpanel" aria-labelledby="settings-tab-fill">
                <p>
                  Candy canes halvah biscuit muffin dessert biscuit marzipan. Gummi bears marzipan bonbon chupa chups
                  biscuit lollipop topping. Muffin sweet apple pie sweet roll jujubes chocolate. Topping cake chupa chups
                  chocolate bar tiramisu tart sweet roll chocolate cake.
                </p>
                <p>
                  Jelly beans caramels muffin wafer sesame snaps chupa chups chocolate cake pastry halvah. Sugar plum
                  cotton candy macaroon tootsie roll topping. Liquorice topping chocolate cake tart tootsie roll danish
                  bear claw. Donut candy canes marshmallow. Wafer cookie apple pie.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Filled Tabs ends -->

      <!-- Justified Tabs starts -->

      <!-- Justified Tabs ends -->
    </div>
  </section>
  @endsection

  @section('page-script')
    <script src="{{asset('js/scripts/components/components-navs.js')}}"></script>
  @endsection
