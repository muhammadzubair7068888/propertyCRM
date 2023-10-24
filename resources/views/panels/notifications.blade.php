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
    
    function Alert(url, title,btn,icon,color) {
    Swal.fire({
        title: title,
        icon: icon,
        customClass: {
            confirmButton: 'btn btn-'+color,
            title: color == 'danger' ? "text-danger" : 'text-black',
        },
        buttonsStyling: false,
        showCancelButton: false,
        confirmButtonText: btn ?? 'Ok',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url;
        }
    });
}

</script>
