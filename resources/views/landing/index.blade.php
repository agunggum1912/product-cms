<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vascomm - Home</title>

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
        <nav class="navbar navbar-expand-md w-100" aria-label="Fourth navbar example"
            style="border-bottom: 1px solid#E4E4E4">
            <div class="container-fluid px-5 py-2">
                <img src="{{ asset('/image/icon/logo.png') }}" alt="Logo" class="navbar-brand mx-auto mx-5 px-5"
                    height="28">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="btn-group navbar-nav ms-auto mx-5 px-5 mb-0 text-white w-100" role="group"
                        aria-label="Basic example">
                        <div class="input-group">
                            <input type="text" class="rounded-0 form-control bg-low-gray text-gray border-end-0"
                                placeholder="Cari parfum kesukaanmu" aria-describedby="button-addon2">
                            <span class="input-group-text bg-low-gray text-gray border-start-0 rounded-0"
                                id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </div>
                    <ul class="navbar-nav mb-0 text-white">
                        @if (!Auth()->check())
                            <li class="d-flex justify-content-center py-1">
                                <button class="btn btn-outline-primary-app rounded-0 app-14 mx-2" data-bs-toggle="modal"
                                    data-bs-target="#modal-login">MASUK</button>
                                <button class="btn btn-primary-app rounded-0 app-14 text-cream mx-2"
                                    data-bs-toggle="modal" data-bs-target="#modal-register">DAFTAR</button>
                            </li>                            
                        @else
                            <li class="d-flex justify-content-center py-1">
                                <a href="{{ route('home.logout') }}" class="btn btn-outline-primary-app rounded-0 app-14 mx-2">LOGOUT</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <section class="content my-5">
            <div class="container-fluid px-5">
                <div class="row owl-banner owl-carousel owl-theme">
                    <div class="col-12 item">
                        <img src="{{ asset('/image/banner/banner1.png') }}" alt="img banner" class="w-100 my-4">
                    </div>
                    <div class="col-12 item">
                        <img src="{{ asset('/image/banner/banner1.png') }}" alt="img banner" class="w-100 my-4">
                    </div>
                    <div class="col-12 item">
                        <img src="{{ asset('/image/banner/banner1.png') }}" alt="img banner" class="w-100 my-4">
                    </div>
                </div>
            </div>
        </section>

        <section class="content my-5">
            <div class="container-fluid px-5">
                <h4>Terbaru</h4>

                <div class="row owl-product owl-carousel owl-theme">

                    @foreach ($products as $product)
                        <div class="card rounded-0 border-0 hover-card-handle item">
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <img src="{{ asset('/image/product/' . $product->image) }}" alt="img product"
                                        class="w-100 object-fit-cover mb-3">
                                    <span class="app-14 d-block text-truncate">{{ $product->name }}</span>
                                    <span class="app-14 text-primary-app d-block">IDR
                                        {{ number_format($product->price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="content my-5">
            <div class="container-fluid px-5">
                <h4>Product Tersedia</h4>

                <div class="row">

                    @foreach ($products as $key => $product)
                        <div class="app-col-sm-2 card rounded-0 border-0 hover-card-handle item">
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <img src="{{ asset('/image/product/' . $product->image) }}" alt="img product"
                                        class="w-100 object-fit-cover mb-3">
                                    <span class="app-14 d-block text-truncate">{{ $product->name }}</span>
                                    <span class="app-14 text-primary-app d-block">IDR
                                        {{ number_format($product->price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <button class="btn btn-outline-primary-app rounded-0 app-14">Lihat lebih banyak</button>
                </div>
            </div>
        </section>
    </main>

    <footer style="border-top: 1px solid#E4E4E4">
        <section class="py-4">
            <div class="container">
                <div class="row text-white">
                    <div class="col-md-3 mb-3">
                        <div class="d-flex mb-4 align-items-center justify-content-center">
                            <img src="{{ asset('/image/icon/logo.png') }}" alt="Logo" height="28">
                        </div>
                        <p class="text-black-app app-12 mb-2 text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo in vestibulum, sed
                            dapibus tristique nullam.
                        </p>
                        <div class="d-flex justify-content-center text-primary-app mt-5">
                            <i class="mx-2 fa-brands fa-facebook-f"></i>
                            <i class="mx-2 fa-brands fa-twitter"></i>
                            <i class="mx-2 fa-brands fa-instagram"></i>
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-2 mb-3">
                        <h5 class="text-black-app mb-3">Layanan</h5>
                        <p class="text-black-app mb-2" style="font-weight: 400; font-size: 12px">BANTUAN</p>
                        <p class="text-black-app mb-2" style="font-weight: 400; font-size: 12px">TANYA JAWAB</p>
                        <p class="text-black-app mb-2" style="font-weight: 400; font-size: 12px">HUBUNGI KAMI</p>
                        <p class="text-black-app mb-2" style="font-weight: 400; font-size: 12px">CARA BERJUALAN</p>
                    </div>
                    <div class="col-md-2 mb-3">
                        <h5 class="text-black-app mb-3">Tentang Kami</h5>
                        <p class="text-black-app mb-2" style="font-weight: 400; font-size: 12px">ABOUT US</p>
                        <p class="text-black-app mb-2" style="font-weight: 400; font-size: 12px">KARIR</p>
                        <p class="text-black-app mb-2" style="font-weight: 400; font-size: 12px">BLOG</p>
                        <p class="text-black-app mb-2" style="font-weight: 400; font-size: 12px">KEBIJAKAN PRIVASI</p>
                        <p class="text-black-app mb-2" style="font-weight: 400; font-size: 12px">SYARAT DAN KETENTUAN
                        </p>
                    </div>
                    <div class="col-md-2 mb-3">
                        <h5 class="text-black-app mb-3">Mitra</h5>
                        <p class="text-black-app mb-2" style="font-weight: 400; font-size: 12px">SUPPLIER</p>
                    </div>
                </div>
            </div>
        </section>
        <section style="height: 24px; background: #E4FDFF;">
        </section>

    </footer>

    <!-- Modal -->
    <div class="modal fade" id="modal-register" tabindex="-1" aria-labelledby="modal-register" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <form id="form-daftar">
                    <div class="modal-header">
                        <h4 class="modal-title text-center w-100">Register</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control rounded-0" name="nama" id="nama"
                                placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control number rounded-0" name="nomor_telepon"
                                id="nomor_telepon" placeholder="Masukkan Nomor Telepon">
                        </div>
                        <div class="form-group mb-3">
                            <label for="_email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-0" name="_email" id="_email"
                                placeholder="Masukkan Email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary-app w-100 rounded-0">DAFTAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="modal-login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <form id="form-login">
                    <div class="modal-header">
                        <h4 class="modal-title text-center w-100">Login</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-0" name="email" id="email"
                                placeholder="Masukkan Email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-0" name="password" id="password"
                                placeholder="Masukkan Password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary-app w-100 rounded-0">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



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

<script src="{{ asset('/js/home.js') }}"></script>

</html>
