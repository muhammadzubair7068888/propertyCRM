@extends('layouts/contentLayoutMaster')

@section('title', 'Landlord')


@section('content')
<section class="invoice-list-wrapper">
  <div class="card">
    <div class="title">Landlords</div>
    <div class="card-datatable table-responsive">
      <table class="invoice-list-table table">
        <div class="d-flex">
      <span class="v-btn__prepend"><button class="btn btn-rounded"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 5v14m-7-7h14"></path></svg>Add Landlord</button></span>
      <div _ngcontent-ags-c190="" class="col-7"><mat-form-field _ngcontent-ags-c190="" class="mat-form-field search-form-field ng-tns-c65-0 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-legacy mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-star-inserted"><div class="mat-form-field-wrapper ng-tns-c65-0"><div class="mat-form-field-flex ng-tns-c65-0"><!----><!----><div class="mat-form-field-infix ng-tns-c65-0">Filter<input _ngcontent-ags-c190="" matinput="" autocomplete="off" class="mat-input-element mat-form-field-autofill-control ng-tns-c65-0 cdk-text-field-autofill-monitored" id="mat-input-0" data-placeholder="Filter" aria-invalid="false" aria-required="false"><span class="mat-form-field-label-wrapper ng-tns-c65-0"><label class="mat-form-field-label ng-tns-c65-0 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-1" for="mat-input-0" aria-owns="mat-input-0"><span class="ng-tns-c65-0 ng-star-inserted"></span><!----><!----><!----><!----></label><!----></span></div><!----></div><div class="mat-form-field-underline ng-tns-c65-0 ng-star-inserted"><span class="mat-form-field-ripple ng-tns-c65-0"></span></div><!----><div class="mat-form-field-subscript-wrapper ng-tns-c65-0"><!----><div class="mat-form-field-hint-wrapper ng-tns-c65-0 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);"><!----><div class="mat-form-field-hint-spacer ng-tns-c65-0"></div></div><!----></div></div></mat-form-field></div>
      </div>
        <thead>
          <tr>
            <th>First Name<i data-feather="trending-up"></i></th>
            <th>Last Name</th>
            <th>Phone<i data-feather="trending-up"></i></th>
            <th class="text-truncate">Email</th>
            <th class="cell-fit">Actions</th>
          </tr>
        </thead>
        <tbody>
          <td>LORD</td>
          <td>Joe</td>
          <td>09838738783</td>
          <td>oing@gmail.com</td>
          <td>del </td>

        </tbody>
      </table>

    </div>
  </div> 
</section>
@endsection
