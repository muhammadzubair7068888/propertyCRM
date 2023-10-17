@section('vendor-style')
  <link rel="stylesheet" href="{{asset(mix('vendors/css/forms/select/select2.min.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('vendors/css/editors/quill/katex.min.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('vendors/css/editors/quill/monokai-sublime.min.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('vendors/css/editors/quill/quill.snow.css'))}}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{asset(mix('css/base/plugins/forms/form-quill-editor.css'))}}">
<link rel="stylesheet" type="text/css" href="{{asset(mix('css/base/pages/page-blog.css'))}}">
@endsection





<section id="nav-filled">
    <div class="row match-height">
      <!-- Filled Tabs starts -->
      <div class="col-xl-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Notification Setting</h4>
          </div>
          <div class="card-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  id="general-tab"
                  data-bs-toggle="tab"
                  href="#general-fill"
                  role="tab"
                  aria-controls="general-fill"
                  aria-selected="true"
                  >General</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="template-tab-fill"
                  data-bs-toggle="tab"
                  href="#template-fill"
                  role="tab"
                  aria-controls="template-fill"
                  aria-selected="false"
                  >Template</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="configruation-tab-fill"
                  data-bs-toggle="tab"
                  href="#configruation-fill"
                  role="tab"
                  aria-controls="configruation-fill"
                  aria-selected="false"
                  >Configurations</a
                >
              </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content pt-1">
              <div class="tab-pane active" id="general-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                <p>
             @include('admin.setting.notification.general')
                </p>

              </div>
              <div class="tab-pane" id="template-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
              @include('admin.setting.notification.template')
              </div>
              <div class="tab-pane" id="configruation-fill" role="tabpanel" aria-labelledby="messages-tab-fill">
              @include('admin.setting.notification.configuration')
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Filled Tabs ends -->


    </div>
  </section>


  @section('vendor-script')
  <script src="{{asset(mix('vendors/js/forms/select/select2.full.min.js'))}}"></script>
  <script src="{{asset(mix('vendors/js/editors/quill/katex.min.js'))}}"></script>
  <script src="{{asset(mix('vendors/js/editors/quill/highlight.min.js'))}}"></script>
  <script src="{{asset(mix('vendors/js/editors/quill/quill.min.js'))}}"></script>
  @endsection

  @section('page-script')
  <script src="{{asset(mix('js/scripts/pages/page-blog-edit.js'))}}"></script>
  @endsection
