{{-- Sweet Alert JS --}}
<script src="{{ asset(mix('js/scripts/extensions/ext-component-sweet-alerts.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/polyfill.min.js')) }}"></script>

<script>
    'use strict';

    let status = "{{ session('success') ? 'success' : (session('error') ? 'error' : '') }}"
    let message = "{{ session('success') ? session('success') : (session('error') ? session('error') : '') }}"
    let errors = JSON.parse("{{ $errors }}".replaceAll('&quot;', '"'));

    if (status) {
        alert();
    };

    function alert() {
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
