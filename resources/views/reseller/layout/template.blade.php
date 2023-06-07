<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('assets_reseller/img/core-img/logoorangecrop.png')}}">
    <link rel="stylesheet" href="{{asset('assets_reseller/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets_reseller/style.css')}}">
    @yield('header')
    <!-- JUDUL  -->
    <title>@yield('title')</title>
</head>

<body>
    <!-- HEADER -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between"
            style="background-color: #ff4a00">
            <!-- HEADER KIRI -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- LOGO -->
                <div style="padding-right: 10px"><a href="{{route('belanja')}}">
                    <img src="{{asset('assets_reseller/img/core-img/logoputih.png')}}" width="180px" style="padding-bottom: 10px" alt="">

                </a>

                </div>
                {{-- <a class="nav-brand" href="{{route('reseller-index')}}"><img
                    src="assets_reseller/img/core-img/logoputih.png" width="180px" style="padding-bottom: 10px"
                    alt=""></a> --}}
                <!-- NAVIGASI -->
                <div class="classy-menu">
                    <div class="classynav">
                        <ul>
                            <li><a href="{{route('belanja')}}"
                                    style="font-weight: 600; color: #ffffff; font-family: ubuntu">Belanja</a></li>
                            <li><a href="#" style="font-weight: 600; color: #ffffff; font-family: ubuntu">Produk</a>
                                <ul class="dropdown btn-light">
                                    @foreach ( $jenis_produk as $item)
                                    <li><a
                                            href="{{route('belanja', ['jenis_kategori' => $item->nama_jenis_produk])}}">{{ $item->nama_jenis_produk}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{route('histori')}}"
                                style="font-weight: 600; color: #ffffff; font-family: ubuntu">Histori</a>
                            </li>
                            <li><a href="{{route('indexadmin')}}"
                                    style="font-weight: 600; color: #ffffff; font-family: ubuntu">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- HEADER KANAN -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- PROFIL -->
                <div class="user-login-info">
                    <a href="{{route('profil')}}"><img src="{{asset('assets_reseller/img/core-img/user.svg')}}" alt=""></a>
                </div>
                <!-- KERANJANG -->
                <div class="user-login-info">
                    <a href="{{route('keranjang')}}">
                        <i class="fa fa-shopping-cart fa-lg"
                            style="color: #ffffff;"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- KONTEN -->
    @yield('content')

    <!-- FOOTER -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- CONTAINER KIRI -->
                <div class="col-md-5">
                    <div class="footer_heading mb-30">
                        <div style="padding-bottom: 30px">
                            <a href="#"><img src="assets_reseller/img/core-img/logoputih.png" width="180px;" alt=""></a>
                        </div>
                        <h6 style="color: white; font-size: 14px; padding-right: 50px">is riding ware that builds for
                            tropical country motorcyclists. We are solving problems to support riders get total control
                            for their journey.
                        </h6>
                    </div>
                </div>
                <!-- CONTAINER TENGAH -->
                <div class="col-md-3">
                    <div class="footer_heading mb-30">
                        <h6 style="color: white">Kontak</h6><br>
                        <div></div>
                        <h6 style="color: white; font-size: 14px">Customer Service : 08112125900</h6>
                        <h6 style="color: white; font-size: 14px">After Sales &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; :
                            08112332900</h6>
                        <h6 style="color: white; font-size: 14px">Custom Work B2B : 08112498900</h6>
                    </div>
                </div>
                <!-- CONTAINER KANAN -->
                <div class="col-md-4">
                    <div class="footer_heading mb-30">
                        <h6 style="color: white">Email</h6><br>
                        <h6 style="color: white; font-size: 14px">Respiro Sales Online &ensp;&ensp; : rso@respiro.id
                        </h6>
                        <h6 style="color: white; font-size: 14px">Respiro Customer Care : wecare@respiro.id</h6>
                        <h6 style="color: white; font-size: 14px">Custom Order
                            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : workwear@respiro.co.id</h6>
                    </div>
                </div>
            </div><br>
            <div class="row align-items-end">
                <!-- INFORMASI -->
                <div class="col-md-9 mb-30">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="">Informasi</a>
                            <a href="">Tentang Respiro</a>
                        </div>
                    </div>
                </div>
                <!-- SOSMED -->
                <div class="col-md-3 mb-30">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="https://www.facebook.com/RespiroIndonesia" target="_blank" data-toggle="tooltip"
                                data-placement="top" title="Facebook"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/respiroindonesia/?__coig_restricted=1" target="_blank"
                                data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a>
                            <a href="https://twitter.com/respiro_id" target="_blank" data-toggle="tooltip"
                                data-placement="top" title="Twitter"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com/channel/UCYu9ZURL_9e2htp580pKD1A" target="_blank"
                                data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play"
                                    aria-hidden="true"></i></a>
                            <a href="https://wa.me/628112125900?text=Isi Pesan" target="_blank" data-toggle="tooltip"
                                data-placement="top" title="Whatsapp"><i class="fa fa-whatsapp"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr color="white" size="10">
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    @yield('javascript')
    <script src="{{asset('assets_reseller/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets_reseller/js/popper.min.js')}}"></script>
    <script src="{{asset('assets_reseller/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets_reseller/js/plugins.js')}}"></script>
    <script src="{{asset('assets_reseller/js/classy-nav.min.js')}}"></script>
    <script src="{{asset('assets_reseller/js/active.js')}}"></script>
    <script src="{{asset('assets_admin/js/alertcrud.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
