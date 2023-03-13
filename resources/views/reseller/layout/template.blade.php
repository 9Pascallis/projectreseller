<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    @yield('header')
    <!-- Title  -->
    <title>@yield('title')</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets_reseller/img/core-img/logoorangecrop.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="assets_reseller/css/core-style.css">
    <link rel="stylesheet" href="assets_reseller/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area" >
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between" >
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="/reseller"><img src="assets_reseller/img/core-img/logoorange.png" width="180px" style="padding-bottom: 10px" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            {{-- <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Blouses &amp; Shirts</a></li>
                                        <li><a href="shop.html">T-shirts</a></li>
                                        <li><a href="shop.html">Rompers</a></li>
                                        <li><a href="shop.html">Bras &amp; Panties</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Men's Collection</li>
                                        <li><a href="shop.html">T-Shirts</a></li>
                                        <li><a href="shop.html">Polo</a></li>
                                        <li><a href="shop.html">Shirts</a></li>
                                        <li><a href="shop.html">Jackets</a></li>
                                        <li><a href="shop.html">Trench</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Kid's Collection</li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Shirts</a></li>
                                        <li><a href="shop.html">T-shirts</a></li>
                                        <li><a href="shop.html">Jackets</a></li>
                                        <li><a href="shop.html">Trench</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="assets_reseller/img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li> --}}
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
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Kolom Pencarian" style="font-family: Ubuntu">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="assets_reseller/img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="assets_reseller/img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
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
    <!-- ##### Right Side Cart End ##### -->

    @yield('content')


 <!-- ##### Footer Area Start ##### -->
 <footer class="footer_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Widget Area -->
            <div class="col-md-5">
                <div class="footer_heading mb-30">
                    <div style="padding-bottom: 30px">
                        <a href="#"><img src="assets_reseller/img/core-img/logoputih.png" width="180px;" alt=""></a>
                    </div>
                        <h6 style="color: white; font-size: 14px; padding-right: 50px">is riding ware that builds for tropical country motorcyclists. We are solving problems to support riders get total control for their journey.
                        </h6>
                    
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-md-3">
                <div class="footer_heading mb-30">
                    <h6 style="color: white">Kontak</h6><br>
                    <div></div>
                    <h6 style="color: white; font-size: 14px">Customer Service : 08112125900</h6>
                    <h6 style="color: white; font-size: 14px">After Sales &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : 08112332900</h6>
                    <h6 style="color: white; font-size: 14px">Custom Work B2B : 08112498900</h6>
                </div>
            </div>
            
            <!-- Single Widget Area -->
            <div class="col-md-4">
                <div class="footer_heading mb-30">
                    <h6 style="color: white">Email</h6><br>
                    <h6 style="color: white; font-size: 14px">Respiro Sales Online &ensp;&ensp; : rso@respiro.id</h6>
                    <h6 style="color: white; font-size: 14px">Respiro Customer Care : wecare@respiro.id</h6>
                    <h6 style="color: white; font-size: 14px">Custom Order &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : workwear@respiro.co.id</h6>
                </div>
            </div>
        </div>
        <br>
        <div class="row align-items-end">
            <!-- Single Widget Area -->
            <div class="col-md-9 mb-30">
                <div class="single_widget_area">
                    <div class="footer_social_area">
                        <a href="">Informasi</a>
                        <a href="">Tentang Respiro</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-30">
                <div class="single_widget_area">
                    <div class="footer_social_area">
                        {{-- <a>KONTAK KAMI &ensp; : </a> --}}
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
        {{-- <div class="row mt-5">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made by <a href="https://colorlib.com" target="_blank">Colorlib</a>, distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright 2023 | IT Respiro</a>
                </p>
            </div>
        </div> --}}

    </div>
</footer>
<!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="assets_reseller/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="assets_reseller/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets_reseller/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="assets_reseller/js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="assets_reseller/js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="assets_reseller/js/active.js"></script>

</body>

</html>