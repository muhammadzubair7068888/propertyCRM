{{-- Jquery JS CDN --}}
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

{{-- Parsley Js CDN --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('vendors/js/vendors.min.js')) }}"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset(mix('vendors/js/ui/jquery.sticky.js')) }}"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('js/core/app-menu.js')) }}"></script>
<script src="{{ asset(mix('js/core/app.js')) }}"></script>

<!-- custome scripts file for user -->
<script src="{{ asset(mix('js/core/scripts.js')) }}"></script>

@if ($configData['blankPage'] === false)
    <script src="{{ asset(mix('js/scripts/customizer.js')) }}"></script>
@endif

<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
@stack('page-script')
<!-- END: Page JS-->


{{-- Units Increament --}}
<script>

    var divCounter = 1; // Initialize a counter for the unique ID


    function addNew(source, cloned) {
        const sourceForm = $(`#${source}`).clone();
        console.log(source, cloned);
        var uniqueID = "clonedForm-" + divCounter;
        sourceForm.attr('id', uniqueID);
        sourceForm.find(".rept a.btn-outline-danger").attr('onclick', 'remove(this)');
        $(`#${cloned}`).append(sourceForm);
divCounter++; // Increment the counter for the next unique ID
    }
//     function addNew(source, cloned) {
//     const sourceForm = $(`#${source}`).clone();
//     var uniqueID = "clonedForm-" + divCounter;
//     sourceForm.attr('id', uniqueID);

//     // Find the original and cloned dropdowns
//     const originalDropdown = sourceForm.find("select");
//     const clonedDropdown = originalDropdown.clone();

//     // Reset the selected option in the cloned dropdown
//     clonedDropdown.val('');

//     // Append the cloned dropdown to the cloned form
//     sourceForm.find("select").remove(); // Remove the cloned form's existing dropdown
//     sourceForm.find("label[for='utility-names']").after(clonedDropdown); // Add cloned dropdown

//     // Append the cloned form to the target container
//     $(`#${cloned}`).append(sourceForm);

//     divCounter++; // Increment the counter for the next unique ID
// }


    function remove(element) {
        $(element).closest('.rept').remove();
    }
</script>
