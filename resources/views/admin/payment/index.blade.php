@extends('layouts/contentLayoutMaster')
@section('title', 'Payment')
@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">

  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">

  @endsection
  @include('admin.payment.show-payment-model')
@section('content')
<!-- Multilingual -->


<section id="multilingual-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Vacate Notices</h4>
        </div>
        <div class="col-12 d-flex justify-content-end " >

            <button type="submit" class="btn btn-primary me-2 mt-2 " id="addNewCardTitle" data-bs-toggle="modal" data-bs-target="#addNewCard" >+ Add Payment</button>

        </div>

        <div class="card-datatable">
          <table class="dt-multilingual table">
            <thead>
               <tr>
                <th></th>
                <th>Amount</th>
                <th>Payment Method</th>
                <th>Payment Date</th>
                <th>Tenant </th>
                <th> Lease</th>
                <th> Property</th>
                <th>Receipt Number</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($payment as $item )
                <tr>
                    <td></td>
                    <td>{{$item->amount}}</td>
                    <td>{{$item->payment_method->name}}</td>
                    <td>{{$item->payment_date}}</td>
                    <td>{{$item->tenant_info->user->first_name ." ".$item->tenant_info->user->last_name}}</td>
                    <td>{{$item->lease->lease_code}}</td>
                    <td>property</td>
                    <td>RS00{{$item->id}}</td>
                    <td>pending</td>

                        <td class="d-flex">
                            <button type="button"  payment_id="{{$item->id}}" class="item-edit border-0 bg-white text-success pe-1 showmodal">
                                <i data-feather="eye" class="font-medium-4 text-primary"></i>
                            </button>
                            <a href="{{route('admin.payment.show',$item->id)}}"
                                class="item-edit pe-1 text-success">
                                <i data-feather="download" class="font-medium-4"></i>
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
  @include('admin.payment.show-payment-model')
</section>
@include('admin.payment.modal-add-new-cc')
<!--/ Multilingual -->
@endsection
@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>

  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>

  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>

@endsection
@section('page-script')
  {{-- Page js files --}}
  {{-- <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script> --}}

<script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>

<script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>




<script>
$('.showmodal').on('click',function(){
    $('#showmodal').modal('show');
    var payment_id = $(this).attr('payment_id');
    $.ajax({
        type: "get",
        url: "{{route('admin.fetch-payment')}}",
        data: {
            id: payment_id
        },
        success: function (response) {
            // console.log(response.payment.amount);
            $("#modern-amount").val(response.payment.amount);
            $("#modern-paid").val(response.payment.payment_date);
            $("#modern-pay").val(response.payment.payment_method.name);
            $("#tenant").val(response.payment.tenant_info.user.first_name + " " + response.payment.tenant_info.user.last_name);
            $("#recordedby").val(response.payment.tenant_info.user.first_name);
            $("#extranote").val(response.payment.extra_note);
        }
    });
})





$('#tenant').on('change' , function () {
$('#lease').empty();
var selected_tenant= $(this).find('option:selected').val();
 console.log(selected_tenant);
if(selected_tenant != ""){
$.ajax({
    type: "get",
    url: "{{route('admin.fetch-lease')}}",
    data: {
        'id': selected_tenant
    },
    success: function (response) {
        response.lease.forEach(lease => {
            console.log(lease);
            var option =`<option value='${lease.id}'>${lease.lease_code}</option>`;
            $('#lease').append(option);
        });

    }
});
}

});


</script>


<script>
  const textarea = document.getElementById('floatingTextarea2');
  const charCount = document.getElementById('charCount');

  textarea.addEventListener('input', function() {
    const currentCharCount = textarea.value.length;
    charCount.textContent = `${currentCharCount} / 150 characters`;

    if (currentCharCount > 150) {
      // Agar 150 se zyada characters enter kiye gaye hain, to unhe rokna
      textarea.value = textarea.value.slice(0, 150);
      charCount.textContent = '150 / 150 characters';
    }
  });

</script>

@endsection
