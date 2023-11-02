


<section id="multilingual-datatable">
    <div class="row">
      <div class="col-12">
        <div class="card">

          <div class="card-datatable">
            <table class="dt-multilingual1 table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Invoice Number</th>
                        <th>Invoice Date</th>
                        <th>Amount</th>
                        <th>Paid</th>
                        <th>Balance</th>
                        <th>Due On</th>
                        <th>Status</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoice as $invoice )
                    {{-- {{dd($invoice->leaseInfo)}} --}}
                    @php
                    $class='';
                    $name='';
                      if($invoice->status==0){
                        $class='badge-light-warning';
                        $name='Over Due';
                      }elseif ($invoice->status==1) {
                        $class='badge-light-success';
                        $name='Paid';
                      }

                      // $invoiceCreatedDate = strtotime($invoice->created_at);
                      // $previousMonthDate = strtotime('-1 month', $invoiceCreatedDate);
                      // $previousMonthFormattedDate = date('F, Y', $previousMonthDate);
                    @endphp
                    <tr>
                        <td>{{$loop->iteration}}</td>
                      <td>{{$invoice->invoice_number}}</td>

                      <td>{{$invoice->leaseInfo->generate_invoice ."-". date('m-Y', strtotime($invoice->created_at)) }}</td>
                      {{-- <td>{{$invoice->leaseInfo->lease_code}}</td> --}}
                      {{-- <td>{{date('F, Y', strtotime($invoice->created_at))}}</td> --}}
                      <td>{{ number_format($invoice->leaseInfo->rent_amount + $invoice->leaseInfo->rental_deposit_amount + $invoice->leaseInfo->deposit->deposit_amount, 2) }}</td>
                      <td>{{number_format(0,2)}}</td>
                      <td>{{ number_format($invoice->leaseInfo->rent_amount + $invoice->leaseInfo->rental_deposit_amount + $invoice->leaseInfo->deposit->deposit_amount, 2) }}</td>
                      <td>{{$invoice->leaseInfo->due_on ."-". date('m-Y', strtotime($invoice->created_at))}}</td>
                      <td>
                        <span class="badge rounded-pill {{$class}}">{{$name}}</span>
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



  <!-- Multilingual -->

  <!--/ Multilingual -->

  {{-- @section('page-script') --}}

  @push('page-script')

  <script>

    $('.dt-multilingual4').DataTable({

    });

  </script>

  @endpush

  {{-- @endsection --}}
