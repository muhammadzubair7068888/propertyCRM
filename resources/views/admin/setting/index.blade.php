@extends('layouts/contentLayoutMaster')

@section('title', 'Settings')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
 

  <link rel="stylesheet" href="{{asset(mix('vendors/css/forms/select/select2.min.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('vendors/css/editors/quill/katex.min.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('vendors/css/editors/quill/monokai-sublime.min.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('vendors/css/editors/quill/quill.snow.css'))}}">
  @endsection
>





   @section('page-style')
   {{-- Page Css files --}}
   <link rel="stylesheet" type="text/css" href="{{asset(mix('css/base/plugins/forms/form-quill-editor.css'))}}">
   <link rel="stylesheet" type="text/css" href="{{asset(mix('css/base/pages/page-blog.css'))}}">
   <style>
    .nav-vertical .nav.nav-tabs.nav-left ~ .tab-content .tab-pane{
      overflow-y: unset !important  ;
    }
  </style>
   @endsection









@section('content')

<!-- Vertical Tabs start -->
<section id="vertical-tabs">
  <div class="row match-height">
    <!-- Vertical Left Tabs start -->
    <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h1 >Settings</h1>
        </div>
        <div class="card-body">
          <div class="nav-vertical">
            <ul class="nav nav-tabs nav-left flex-column shadow " role="tablist">
              <li class="nav-item " >
                <a
                style="padding-right:100px"
                  class="nav-link active fs-4"
                  id="baseVerticalLeft-tab1"
                  data-bs-toggle="tab"
                  aria-controls="tabVerticalLeft1"
                  href="#tabVerticalLeft1"
                  role="tab"
                  aria-selected="true"
                  > System </a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link fs-4"
                  id="baseVerticalLeft-tab2"
                  data-bs-toggle="tab"
                  aria-controls="tabVerticalLeft2"
                  href="#tabVerticalLeft2"
                  role="tab"
                  aria-selected="false"
                  > Property</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link fs-4"
                  id="baseVerticalLeft-tab3"
                  data-bs-toggle="tab"
                  aria-controls="tabVerticalLeft3"
                  href="#tabVerticalLeft3"
                  role="tab"
                  aria-selected="false"
                  > Lease</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link fs-4"
                  id="baseVerticalLeft-tab4"
                  data-bs-toggle="tab"
                  aria-controls="tabVerticalLeft4"
                  href="#tabVerticalLeft4"
                  role="tab"
                  aria-selected="false"
                  > Tenant</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link fs-4"
                  id="baseVerticalLeft-tab5"
                  data-bs-toggle="tab"
                  aria-controls="tabVerticalLeft5"
                  href="#tabVerticalLeft5"
                  role="tab"
                  aria-selected="false"
                  > Notifications</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link fs-4"
                  id="baseVerticalLeft-tab6"
                  data-bs-toggle="tab"
                  aria-controls="tabVerticalLeft6"
                  href="#tabVerticalLeft6"
                  role="tab"
                  aria-selected="false"
                  > Payment</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link fs-4"
                  id="baseVerticalLeft-tab7"
                  data-bs-toggle="tab"
                  aria-controls="tabVerticalLeft7"
                  href="#tabVerticalLeft7"
                  role="tab"
                  aria-selected="false"
                  >
                 User & Roles
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active " id="tabVerticalLeft1" role="tabpanel" aria-labelledby="baseVerticalLeft-tab1">
               @include('admin.setting.system')
              </div>
              <div class="tab-pane" id="tabVerticalLeft2" role="tabpanel" aria-labelledby="baseVerticalLeft-tab2">
              
                    @include('admin.setting.property.index')
                
              </div>
              <div class="tab-pane" id="tabVerticalLeft3" role="tabpanel" aria-labelledby="baseVerticalLeft-tab3">
                <p>
                    @include('admin.setting.lease.index')
                </p>
              </div>
              <div class="tab-pane" id="tabVerticalLeft4" role="tabpanel" aria-labelledby="baseVerticalLeft-tab4">
              @include('admin.setting.tenant.index')
              </div>
              <div class="tab-pane" id="tabVerticalLeft5" role="tabpanel" aria-labelledby="baseVerticalLeft-tab5">
               @include('admin.setting.notification.index')
              </div>
              <div class="tab-pane" id="tabVerticalLeft6" role="tabpanel" aria-labelledby="baseVerticalLeft-tab6">
              @include('admin.setting.payment.index')
              </div>
              <div class="tab-pane" id="tabVerticalLeft7" role="tabpanel" aria-labelledby="baseVerticalLeft-tab7">
               @include('admin.setting.rolesandpermission.index')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




  </div>
</section>
<!-- Vertical Tabs end -->




@endsection
@section('vendor-script')
{{-- vendor files --}}
{{-- <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script> --}}
{{-- <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script> --}}

<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>

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

@push('page-script')

<script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
 <script src="{{asset('js/scripts/components/components-navs.js')}}"></script>

 <script src="{{asset(mix('js/scripts/pages/page-blog-edit.js'))}}"></script>

 
@endpush




