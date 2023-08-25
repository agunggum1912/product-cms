$(function () {
    "use strict";

    $(document).on("input", ".number", function () {
        this.value = this.value.replace(/\D/g, '');
    });

    function csrf() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }

    $('#form-login').validate({
        rules: {
            email_nomor_telpon: "required",
            password: "required",
        },
        messages: {
            email_nomor_telpon: {
                required: "Bidang ini wajib diisi.",
            },
            password: {
                required: "Bidang ini wajib diisi.",
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function (form) {
            var data = $(form).serialize();

            csrf()
            $.post(window.location.origin + '/admin/login', data)
            .done(res => {
                Swal.fire(
                    'Berhasil',
                    res.message,
                    'success'
                ).then(() => {
                    window.location.replace("/admin/dashboard")
                })
            })
            .fail(res => {
                res.status == 500 ?
                    swal.fire('Error', 'Server sibuk, coba beberapa saat kembali.', 'error') :
                    swal.fire('Gagal', res.responseJSON.message, 'warning')
            })
        }
    })

    
})