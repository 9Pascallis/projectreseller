<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{ asset('assets_admin/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets_admin/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('assets_admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets_admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets_admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('assets_admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets_admin/images/logoorangecrop.png') }}">

    @yield('header')
    <title>@yield('title')</title>
</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">
        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('assets_admin/images/logoorangecrop.png') }}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <img src="{{ asset('assets_admin/images/respiro.jpg') }}" class="logo-text" width="150px"
                        height="25px">
                </div>
                <div class="toggle-icon ms-auto">
                    <ion-icon name="menu-sharp"></ion-icon>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/admin">
                        <div class="parent-icon">
                            <ion-icon name="home-sharp"></ion-icon>
                        </div>
                        <div class="menu-title">Dashboard Admin</div>
                    </a>
                </li>

                <li class="menu-label">HISTORI</li>
                <!-- PEMESANAN -->
                <li>
                    <a href="/indexhistoripemesanan">
                        <div class="parent-icon">
                            <ion-icon name='storefront'></ion-icon>
                        </div>
                        <div class="menu-title">Histori Pemesanan</div>
                    </a>
                </li>
                <!-- PEMBAYARAN -->
                <li>
                    <a href="/indexhistoripembayaran">
                        <div class="parent-icon">
                            <ion-icon name='wallet'></ion-icon>
                        </div>
                        <div class="menu-title">Histori Pembayaran</div>
                    </a>
                </li>
                <li class="menu-label">DATA MASTER</li>
                <!-- JENIS PRODUK -->
                <li>
                    <a href="/indexjenisproduk">
                        <div class="parent-icon">
                            <ion-icon name='prism'></ion-icon>
                        </div>
                        <div class="menu-title">Jenis Produk</div>
                    </a>
                </li>
                <!-- PRODUK -->
                <li>
                    <a href="/indexproduk">
                        <div class="parent-icon">
                            <ion-icon name='cube'></ion-icon>
                        </div>
                        <div class="menu-title">Produk</div>
                    </a>
                </li>
                <!-- UKURAN -->
                <li>
                    <a href="/indexukuran">
                        <div class="parent-icon">
                            <ion-icon name='shirt'></ion-icon>
                        </div>
                        <div class="menu-title">Ukuran</div>
                    </a>
                </li>
                <!-- WARNA -->
                <li>
                    <a href="/indexwarna">
                        <div class="parent-icon">
                            <ion-icon name='color-palette'></ion-icon>
                        </div>
                        <div class="menu-title">Warna</div>
                    </a>
                </li>
                <li class="menu-label">ROLE</li>
                <!-- USER -->
                <li>
                    <a href="/indexuser">
                        <div class="parent-icon">
                            <ion-icon name='person-sharp'></ion-icon>
                        </div>
                        <div class="menu-title">Role User</div>
                    </a>
                </li>
                <!-- ADMIN -->
                <li>
                    <a href="/indexadmin">
                        <div class="parent-icon">
                            <ion-icon name='key-sharp'></ion-icon>
                        </div>
                        <div class="menu-title">Role Admin</div>
                    </a>
                </li>

            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-menu-button">
                    <ion-icon name="menu-sharp"></ion-icon>
                </div>
                {{-- <form class="searchbar">
                    <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
                        <ion-icon name="search-sharp"></ion-icon>
                    </div>
                    <input class="form-control" type="text" placeholder="Search for anything">
                    <div class="position-absolute top-50 translate-middle-y search-close-icon">
                        <ion-icon name="close-sharp"></ion-icon>
                    </div>
                </form> --}}
                <div class="top-navbar-right ms-auto">

                    <ul class="navbar-nav align-items-center">
                        {{-- <li class="nav-item mobile-search-button">
                            <a class="nav-link" href="javascript:;">
                                <div class="">
                                    <ion-icon name="search-sharp"></ion-icon>
                                </div>
                            </a>
                        </li> --}}
                        <div class="align-items-center">Halo, {{ auth()->user()->nama_lengkap_user }}</div>
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="user-setting">
                                    <ion-icon name="person-sharp"></ion-icon>
                                    <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <ion-icon name="log-out-outline"></ion-icon>
                                                </div>
                                                <div class="ms-3"><span>Logout</span></div>
                                            </div>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <!--end top header-->
        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
            <!-- start page content-->
            <div class="page-content">
                @yield('content')
            </div>
            <!-- end page content-->
        </div>
        <!--end page content wrapper-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </a>
        <!--End Back To Top Button-->

        <!--start overlay-->
        <div class="overlay"></div>
        <!--end overlay-->

    </div>
    <!--end wrapper-->
    -
    <!-- JS Files-->
    <script src="{{ asset('assets_admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/bootstrap.bundle.min.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="{{ asset('assets_admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/index3.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets_admin/js/alertcrud.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Main JS-->
    <script src="{{ asset('assets_admin/js/main.js') }}"></script>
    @yield('javascript');
</body>

</html>
