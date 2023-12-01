@extends('layouts/contentLayoutMaster')
@section('title', 'Invoices')
@section('vendor-style')
{{-- vendor css files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('content')
<!-- Multilingual -->
<section id="multilingual-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Invoices</h4>
                </div>
                <!-- <div class="col-12 d-flex justify-content-end mr ">
                <button type="submit" class="btn btn-primary " name="submit" value="Submit">+ Add payment</button>
        </div> -->
                <div class="card-datatable">
                    <table class="dt-multilingual table">
                        <thead>
                            <tr>
                                <th>Invoice Number</th>
                                <th>Invoice Date</th>
                                <th>Lease</th>
                                <th> Period</th>
                                <th>Amount</th>
                                <th>Paid</th>
                                <th>Balance</th>
                                <th>Due On</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $invoice as $invoice )
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
                                <td>{{$invoice->invoice_number}}</td>
                                <td>{{$invoice->leaseInfo->generate_invoice ."-". date('m-Y',strtotime($invoice->created_at)) }}</td>
                                <td>{{$invoice->leaseInfo->lease_code}}</td>
                                <td>{{date('F, Y', strtotime($invoice->created_at))}}</td>
                                <td id="totalamount-{{$invoice->id}}">{{ number_format($invoice->leaseInfo->rent_amount +
                                    $invoice->leaseInfo->rental_deposit_amount +
                                    $invoice->leaseInfo->deposit->deposit_amount, 2) }}</td>
                                <td>{{number_format(0,2)}}</td>
                                <td>{{ number_format($invoice->leaseInfo->rent_amount +
                                    $invoice->leaseInfo->rental_deposit_amount +
                                    $invoice->leaseInfo->deposit->deposit_amount, 2) }}</td>
                                <td>{{$invoice->leaseInfo->due_on ."-". date('m-Y', strtotime($invoice->created_at))}}
                                </td>
                                <td>
                                    <span class="badge rounded-pill {{$class}}">{{$name}}</span>
                                </td>
                                <td>
                                    {{-- <a href="{{route('admin.invoice.create')}}" class="item-edit"><i data-feather='eye' class='font-medium-4'></i>
                                    </a> --}}
                                    <a href="javascript:;" class="item-edit border border-1 rounded" style="padding:6px;">
                                        <button type="button" class="btn" onclick="fetchInvoiceData({{$invoice->id}},{{$invoice->leaseInfo->tenant_info->user->phone_number}})">
                                            + Pay</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('tenant.invoice.payment-model')
</section>

<!--/ Multilingual -->
@endsection
@section('vendor-script')
{{-- vendor files --}}
<script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
{{-- Page js files --}}
{{-- <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script> --}}
<script>
    $('.dt-multilingual').DataTable({
        "paging": true
        , "searching": true
        , "ordering": true
        , "info": true
        , "autoWidth": false
    , });

    function fetchInvoiceData(id,number) {
        invoice_amount = $('#totalamount-'+id).text();
        amount =  $('input[name="amount"]').val(invoice_amount);
        $('input[name="phonenumber"]').val(number);
        console.log(number);
        var paymentModelModal = $('#inlineForm').modal('show');
    }

    $('.showmodal').on('click', function() {
        $('#showmodal').modal('show');
        var payment_id = $(this).attr('payment_id');
        $.ajax({
            type: "get"
            , url: "{{ route('admin.fetch-payment') }}"
            , data: {
                id: payment_id
            }
            , success: function(response) {
                $("#modern-amount").val(response.payment.amount);
                $("#modern-paid").val(response.payment.payment_date);
                $("#modern-pay").val(response.payment.payment_method.name);
                $("#tenant").val(response.payment.tenant_info.user.first_name + " " + response
                    .payment.tenant_info.user.last_name);
                $("#recordedby").val(response.payment.tenant_info.user.first_name);
                $("#extranote").val(response.payment.extra_note);
            }
        });
    });
</script>
@endsection
