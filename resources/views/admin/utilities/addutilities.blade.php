@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')
@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Utilities Reading</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.utilities.store') }}" method="POST" class="form form-vertical ">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="select3-basic">Property</label>
                                        <select class="select2 form-select" id="select3-basic" name="property_id">
                                            <option value=""></option>
                                            @foreach ($property as $data)
                                                <option value="{{ $data->id }}">{{ $data->property_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('property_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="select2-basic">Utility</label>
                                        <select class="select2 form-select" id="select2-basic" name="utility_id">

                                            @foreach ($utility as $utilities)
                                                <option value="{{ $utilities->id }}">{{ $utilities->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('utility_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="demo-inline-spacing">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="entry_type" id="inlineRadio1"
                                            value="option1" checked required />
                                        <label class="form-check-label" for="inlineRadio1">Manual Entry</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="entry_type" id="inlineRadio2"
                                            value="option2" required />
                                        <label class="form-check-label" for="inlineRadio2">Auto Import(CSV or Excel)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1">
                                <div id="utitiltyAdd">
                                    <div class="row d-flex align-items-end rept">
                                        <div class="row align-items-center">

                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="unit-name"> Unit</label>

                                                    <select class="select2 w-100" id="unit-name"
                                                        name="utility[property_unit_id][]">
                                                        @foreach ($propertyUnit as $unit)
                                                            <option value="{{ $unit->id }}"> {{ $unit->unit_name }}
                                                            </option>
                                                        @endforeach


                                                    </select>
                                                    @error('utility.property_unit_id')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror


                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="reading-date">Reading Date</label>
                                                    <input type="date" class="form-control " id="reading-date"
                                                        aria-describedby="itemcost" placeholder="2023-03-21"
                                                        name="utility[reading_date][]" required />
                                                    @error('utility.*.reading_date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="current-reading">Current Reading</label>
                                                    <input type="number" class="form-control " id="current-reading"
                                                        aria-describedby="itemquantity" placeholder="Current Reading"
                                                        name="utility[current_reading][]" required />
                                                    @error('utility.*.current_reading')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <a class="btn btn-outline-danger text-nowrap px-1">
                                                    <i data-feather="x" class="me-25"></i>
                                                </a>
                                                <a class="btn btn-outline-success text-nowrap px-1"
                                                    onclick="addNew('utitiltyAdd','utitiltyAppend')">
                                                    <i data-feather="copy" class="me-25"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="utitiltyAppend"></div>
                                <div class="row">
                                    <div class="col-12 pb-2">
                                        <a class="btn btn-icon btn-primary"
                                            onclick="addNew('utitiltyAdd','utitiltyAppend')">
                                            <i data-feather="plus" class="me-25"></i>
                                            <span>Add New</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                            </div>
                        </form>

                        {{-- <form action="{{route('admin.utilities.store')}}" method="POST" class="form form-vertical">
                                @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">

                                        <label class="form-label" for="select3-basic">Property</label>
                                        <select class="select2 form-select" id="select3-basic" name="property_id">
                                            @foreach ($property as $data)
                                            <option value="{{$data->id}}">{{$data->property_name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="mb-1">

                                        <label class="form-label" for="select2-basic">Utility</label>
                                        <select class="select2 form-select" id="select2-basic" name="utility_id">\
                                            @foreach ($utility as $utilities)
                                            <option value="{{$utilities->id}}">{{$utilities->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="demo-inline-spacing">
                                    <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name=""
                                        id="inlineRadio1"
                                        value="option1"
                                        checked
                                    />
                                    <label class="form-check-label" for="inlineRadio1">Manual Entry</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name=""
                                        id="inlineRadio2"
                                        value="option2"
                                    />
                                    <label class="form-check-label" for="inlineRadio2">Auto Import(CSV or Excel)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1">
                                <div id="utitiltyAdd">
                                    <div class="row d-flex align-items-end rept">
                                        <div class="row align-items-center">

                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="unit-name"> Unit</label>

                                                    <select
                                                        class="select2 w-100"
                                                        id="unit-name" name="utility[property_unit_id][]">
                                                        @foreach ($propertyUnit as $unit)
                                                        <option value="{{$unit->id}}"> {{$unit->unit_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="reading-date">Reading Date</label>
                                                    <input type="date" class="form-control " id="reading-date"
                                                        aria-describedby="itemcost" placeholder="2023-03-21" name="utility[reading_date][]" />
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="current-reading">Current Reading</label>
                                                    <input type="number" class="form-control " id="current-reading"
                                                        aria-describedby="itemquantity" placeholder="Current Reading" name="utility[current_reading][]" />
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <a class="btn btn-outline-danger text-nowrap px-1">
                                                    <i data-feather="x" class="me-25"></i>
                                                </a>
                                                <a class="btn btn-outline-success text-nowrap px-1"
                                                    onclick="addNew('utitiltyAdd','utitiltyAppend')">
                                                    <i data-feather="copy" class="me-25"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="utitiltyAppend"></div>
                                <div class="row">
                                    <div class="col-12 pb-2">
                                        <a class="btn btn-icon btn-primary" onclick="addNew('utitiltyAdd','utitiltyAppend')">
                                            <i data-feather="plus" class="me-25"></i>
                                            <span>Add New</span>
                                        </a>
                                    </div>
                                </div>
                            </div>



                            <div class="col-12 d-flex justify-content-end" >
                                <button type="submit" class="btn btn-primary me-1">Submit</button>

                            </div>
                        </form> --}}
                        {{-- </div> --}}
                    </div>
                    {{-- <div class="d-flex">
                        <form action="upload.php" method="post" enctype="multipart/form-data" >
                            <div class="custom-file justify-content-start">
                                <input type="file" class="custom-file-input" id="bootstrap-file" name="file">

                            </div>
                            <div class="justify-content-end">
                            <input type="submit" class="btn btn-primary" value="Upload">
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
    <script>
        //     function addNew(sourceId, targetId) {
        //     var source = document.getElementById(sourceId);
        //     var target = document.getElementById(targetId);

        //     // Clone the source element
        //     var clone = source.cloneNode(true);

        //     // Append the cloned element to the target
        //     target.appendChild(clone);

        //     // Reinitialize select2 for the newly added element
        //     $('.select2').select2();
        // }
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add('was-validated');
                    }, false);
                });
        })();
    </script>
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
@endsection
