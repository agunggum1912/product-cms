<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vascomm - Login</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />

    {{-- Font Google --}}
    <link href='https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap' rel='stylesheet'>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/image/icon/favicon.png') }}" />
    {{-- PLUGINS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/bootstrap-5.3.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/sweetalert2/sweetalert2.min.css') }}">

    <!-- Icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/fontawesome-6.4.2/css/all.min.css') }}">

    {{-- Core CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">

    {{-- Owl Carousel --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/owl-carousel/css/owl.theme.default.min.css') }}">

</head>

<body>
    <main class="wrapper">
        <div class="content-wrapper">
            <div class="row vh-100 mx-0">
                <div class="col-lg-6 d-none d-lg-flex mx-0 px-0 position-fixed" style="background: url('{{ asset('/image/background/bg-login.png') }}')">
                    <img src="{{ asset('/image/background/bg-login.png') }}"
                        alt="Image Login" style="object-fit: cover" class="vh-100 w-100 position-relative">
                    <div class="position-absolute text-center" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <h2>NAMA APLIKASI</h2>
                        <p style="font-size: 14px; font-weight: 400;">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
                <div class="offset-lg-6 col-lg-6 py-5 d-flex flex-column align-items-center justify-content-center p-5">
                    <form id="form-login">
                        <p style="font-weight: 500; font-size: 24px; color: #3E3E3E">Selamat Datang Admin</p>
                        <p style="font-weight: 400; font-size: 12px; color: #9B9B9B">
                            Silahkan masukkan email atau nomor telepon dan password
                            Anda untuk mulai menggunakan aplikasi
                        </p>
                        <div class="form-group mb-3 w-100">
                            <label for="email_nomor_telpon" class="form-label">Email / Nomor Telpon</label>
                            <input type="text" class="form-control rounded-0" name="email_nomor_telpon"
                                id="email_nomor_telpon" placeholder="Contoh: admin@gmail.com">
                        </div>
                        <div class="form-group mb-3 w-100">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-0" name="password"
                                id="password" placeholder="Masukkan Password">
                        </div>
                        <div class="form-group w-100">
                            <button type="submit" class="btn btn-primary-app rounded-0 app-14 w-100">MASUK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>



</body>

{{-- PLUGINS --}}
<script src="{{ asset('/plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/plugins/bootstrap-5.3.1/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/plugins/popper/popper.js') }}"></script>
<script src="{{ asset('/plugins/sweetalert2/sweetalert2.11.min.js') }}"></script>
<script src="{{ asset('/plugins/fontawesome-6.4.2/js/all.min.js') }}"></script>

{{-- Owl Carousel --}}
<script src="{{ asset('/plugins/owl-carousel/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('/js/admin/login.js') }}"></script>

</html>
