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

    var owl_banner = $('.owl-banner');
    owl_banner.owlCarousel({
        margin: 0,
        nav: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            }
        }
    })


    var owl_product = $('.owl-product');
    owl_product.owlCarousel({
        margin: 50,
        nav: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 5
            }
        }
    })
    

    $('#form-daftar').validate({
        rules: {
            nama: "required",
            nomor_telepon: "required",
            _email: {
                required: true,
                email: true,
            },
        },
        messages: {
            nama: {
                required: "Bidang ini wajib diisi.",
            },
            nomor_telepon: {
                required: "Bidang ini wajib diisi.",
            },
            _email: {
                required: "Bidang ini wajib diisi.",
                email: "Silahkab masukkan email valid.",
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
            $.post(window.location.origin + '/home/register', data)
            .done(res => {
                Swal.fire(
                    'Berhasil',
                    res.message,
                    'success'
                ).then(() => {
                    $('#nama').val('')
                    $('#email').val('')
                    $('#nomor_telepon').val('')
                    $('#modal-register').modal('hide')
                })
            })
            .fail(res => {
                res.status == 500 ?
                    swal.fire('Error', 'Server sibuk, coba beberapa saat kembali.', 'error') :
                    swal.fire('Gagal', res.responseJSON.message, 'warning')
            })
        }
    })

    $('#form-login').validate({
        rules: {
            password: "required",
            email: {
                required: true,
                email: true,
            },
        },
        messages: {
            password: {
                required: "Bidang ini wajib diisi.",
            },
            email: {
                required: "Bidang ini wajib diisi.",
                email: "Silahkab masukkan email valid.",
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
            $.post(window.location.origin + '/home/login', data)
            .done(res => {
                Swal.fire(
                    'Berhasil',
                    res.message,
                    'success'
                )

                setTimeout(() => {
                    location.reload();
                }, 1500);
            })
            .fail(res => {
                res.status == 500 ?
                    swal.fire('Error', 'Server sibuk, coba beberapa saat kembali.', 'error') :
                    swal.fire('Gagal', res.responseJSON.message, 'warning')
            })
        }
    })
    
})