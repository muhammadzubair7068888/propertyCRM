@extends('layouts/contentLayoutMaster')
@section('title', 'Payments')

@section('content')
<section id="basic-layouts">
  <div class="row">
    <div class="col-xl-8 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Receipt (pdf)</h4>
        </div>
        <div class="card-body">
        </div>
      </div>
    </div>
    <div class="col-xl-4 ">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Summary</h4>
                </div> 
                <div class="ms-3 justify-content-start row">
                    <div class="text-gray mb-1 col-5">Amount
                        <p class="text-black">450.00</p>
                    </div>
                    <div class="text-gray mb-1 col-5">Payment Date
                        <p class="text-black">03-10-2023</p>
                    </div>
                  </div>
                  <div class=" ms-4">
                  <div class="text-gray mb-1 col-12">Payment Method
                        <p class="text-black">Cash</p>
                    </div>
                    <div class="col-12">
                        <div class="text-gray">Property: </div>
                        <div class="text-black  mb-1">Sahil House (sahil123) - gujranwala</div>
                    </div>
                    <div class="row">
                    <div class="col-6">
                        <div class="text-gray"> Lease: </div>
                        <div class="text-black" >sahil123</div>
                    </div>
                    <div class="col-6  text-gray"> Unit:
                    <div  class="text-black mb-1">gujranwala</div>
                  </div>
                 </div>
                
                </div>
                <div class="text-gray p-0 ms-3"> Tenant:
                  <div  class="text-black mb-1">gujranwala</div>
                  </div>
                </div>
                </div>

            </div>
                
            <!-- Filled Tabs ends -->
        </div>
  </div>
  
</section>
@endsection