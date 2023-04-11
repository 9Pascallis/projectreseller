<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets_reseller/img/core-img/logoorangecrop.png">
    <link rel="stylesheet" href="assets_reseller/css/core-style.css">
    <link rel="stylesheet" href="assets_reseller/style.css">
    @yield('header')
    <!-- JUDUL  -->
    <title>@yield('title')</title>

</head>

<body>
    <!-- HEADER -->
    <header class="header_area" >
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- HEADER KIRI -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- LOGO -->
                <a class="nav-brand" href="/reseller"><img src="assets_reseller/img/core-img/logoorange.png" width="180px" style="padding-bottom: 10px" alt=""></a>
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <div class="classy-menu">
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- NAVIGATION -->
                    <div class="classynav">
                        <ul>
                            <li><a href="/reseller-belanja" style="font-family: Ubuntu"><b>Belanja</b></a></li>
                            <li><a href="#" style="font-family: Ubuntu"><b>Produk</b></a>
                                <ul class="dropdown">
                                    <li><a href="/reseller-belanja">Aksesoris</a></li>
                                    <li><a href="/reseller-belanja">Tas</a></li>
                                    <li><a href="/reseller-belanja">Jaket</a></li>
                                    <li><a href="/reseller-belanja">Rompi</a></li>
                                    <li><a href="/reseller-belanja">Sarung Tangan</a></li>
                                    <li><a href="/reseller-belanja">T-Shirt</a></li>
                                    <li><a href="/reseller-belanja">Aksesoris Kepala</a></li>
                                </ul>
                            </li>
                            <li><a href="/reseller-belanja" style="font-family: Ubuntu"><b>Promo</b></a></li>
                            <li><a href="" style="font-family: Ubuntu"><b>Dashboard</b></a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- HEADER KANAN -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- PENCARIAN -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Kolom Pencarian" style="font-family: Ubuntu">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- USER LOGIN -->
                <div class="user-login-info">
                    <a href="#"><img src="assets_reseller/img/core-img/user.svg" alt=""></a>
                </div>
                <!-- KERANJANG -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="assets_reseller/img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->

    <!-- KERANJANG SAMPING -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="assets_reseller/img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="assets_reseller/img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="assets_reseller/img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="assets_reseller/img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.html" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- KERANJANG SAMPING SELESAI -->

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
                            <h6 style="color: white; font-size: 14px; padding-right: 50px">is riding ware that builds for tropical country motorcyclists. We are solving problems to support riders get total control for their journey.
                            </h6>
                        
                    </div>
                </div>
                <!-- CONTAINER TENGAH -->
                <div class="col-md-3">
                    <div class="footer_heading mb-30">
                        <h6 style="color: white">Kontak</h6><br>
                        <div></div>
                        <h6 style="color: white; font-size: 14px">Customer Service : 08112125900</h6>
                        <h6 style="color: white; font-size: 14px">After Sales &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : 08112332900</h6>
                        <h6 style="color: white; font-size: 14px">Custom Work B2B : 08112498900</h6>
                    </div>
                </div>
                
                <!-- CONTAINER KANAN -->
                <div class="col-md-4">
                    <div class="footer_heading mb-30">
                        <h6 style="color: white">Email</h6><br>
                        <h6 style="color: white; font-size: 14px">Respiro Sales Online &ensp;&ensp; : rso@respiro.id</h6>
                        <h6 style="color: white; font-size: 14px">Respiro Customer Care : wecare@respiro.id</h6>
                        <h6 style="color: white; font-size: 14px">Custom Order &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : workwear@respiro.co.id</h6>
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
                            <a href="https://www.facebook.com/RespiroIndonesia" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/respiroindonesia/?__coig_restricted=1" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/respiro_id" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com/channel/UCYu9ZURL_9e2htp580pKD1A" target="_blank" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            <a href="https://wa.me/628112125900?text=Isi Pesan" target="_blank" data-toggle="tooltip" data-placement="top" title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
            <hr color="white" size="10">
        </div>
    </footer>
    <!-- FOOTER END -->
    @yield('javascript')
    <script src="assets_reseller/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="assets_reseller/js/popper.min.js"></script>
    <script src="assets_reseller/js/bootstrap.min.js"></script>
    <script src="assets_reseller/js/plugins.js"></script>
    <script src="assets_reseller/js/classy-nav.min.js"></script>
    <script src="assets_reseller/js/active.js"></script>
</body>

</html>