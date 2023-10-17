{{-- Sweet Alert JS --}}
<script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>

<script>
    'use strict';

    let status = "{{ session('success') ? 'success' : (session('error') ? 'error' : '') }}"
    let message = "{{ session('success') ? session('success') : (session('error') ? session('error') : '') }}"
    let errors = JSON.parse("{{ $errors }}".replaceAll('&quot;', '"'));

    if (status) {
        backendAlert();
    };

    function backendAlert() {
        Swal.fire({
            position: 'top-end',
            icon: status,
            title: message,
            showConfirmButton: false,
            timer: 1500,
            customClass: {
                confirmButton: 'btn btn-primary'
            },
            buttonsStyling: false
        });
    }
</script>
