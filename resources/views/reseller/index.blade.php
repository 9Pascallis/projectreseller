@extends('reseller.layout.template')
@section('title', 'Reseller | Home')

@section('content')
    <!-- KONTEN -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(assets_reseller/img/bg-img/bg-1.jpg);">
        <div class="container h-100 section-padding-80">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h6>SELAMAT DATANG</h6>
                        <h2>RESPIRO</h2>
                        <a href="reseller-belanja" class="btn essence-btn">BELANJA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END KONTEN -->

    <!-- PROMO -->
    <div class="cta-area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(assets_reseller/img/bg-img/bg-5.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-60%</h6>
                                <h2>Global Sale</h2>
                                <a href="#" class="btn essence-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PROMO END -->

    <!-- PRODUK TERBARU -->
    <section class="new_arrivals_area section-padding-80 clearfix" style="padding-top: unset">
        <div class="container">
            <h5>PRODUK TERBARU</h5>
            <hr style="height:1px;border:none; background-color:#333;">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 BLACK</h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-01 THERMOLINE N R1.5 CHARCOAL </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO ESSENZO SPORTO VENT R1 NAVY </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO SALVATORE URBAN CHIC </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-5.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRODUK TERBARU END -->

    <!-- PRODUK TERLARIS -->
    <section class="new_arrivals_area section-padding-80 clearfix" style="padding-top: unset">
        <div class="container">
            <h5>PRODUK TERLARIS</h5>
            <hr style="height:1px;border:none; background-color:#333;">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 BLACK</h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-01 THERMOLINE N R1.5 CHARCOAL </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO ESSENZO SPORTO VENT R1 NAVY </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO SALVATORE URBAN CHIC </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-5.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRODUK TERLARIS END -->

    <!-- JAKET -->
    <section class="new_arrivals_area section-padding-80 clearfix" style="padding-top: unset">
        <div class="container">
            <h5>JAKET</h5>
            <hr style="height:1px;border:none; background-color:#333;">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 BLACK</h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-01 THERMOLINE N R1.5 CHARCOAL </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO ESSENZO SPORTO VENT R1 NAVY </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO SALVATORE URBAN CHIC </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-5.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JAKET END -->

    <!-- AKSESORIS -->
    <section class="new_arrivals_area section-padding-80 clearfix" style="padding-top: unset">
        <div class="container">
            <h5>AKSESORIS</h5>
            <hr style="height:1px;border:none; background-color:#333;">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 BLACK</h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-01 THERMOLINE N R1.5 CHARCOAL </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO ESSENZO SPORTO VENT R1 NAVY </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO SALVATORE URBAN CHIC </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-5.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- AKSESORIS END -->

    <!-- TAS -->
    <section class="new_arrivals_area section-padding-80 clearfix" style="padding-top: unset">
        <div class="container">
            <h5>TAS</h5>
            <hr style="height:1px;border:none; background-color:#333;">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 BLACK</h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-01 THERMOLINE N R1.5 CHARCOAL </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO ESSENZO SPORTO VENT R1 NAVY </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO SALVATORE URBAN CHIC </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-5.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TAS END -->

    <!-- ROMPI -->
    <section class="new_arrivals_area section-padding-80 clearfix" style="padding-top: unset">
        <div class="container">
            <h5>ROMPI</h5>
            <hr style="height:1px;border:none; background-color:#333;">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 BLACK</h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-01 THERMOLINE N R1.5 CHARCOAL </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO ESSENZO SPORTO VENT R1 NAVY </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO SALVATORE URBAN CHIC </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-5.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ROMPI END -->

    <!-- SARUNG TANGAN -->
    <section class="new_arrivals_area section-padding-80 clearfix" style="padding-top: unset">
        <div class="container">
            <h5>SARUNG TANGAN</h5>
            <hr style="height:1px;border:none; background-color:#333;">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 BLACK</h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-01 THERMOLINE N R1.5 CHARCOAL </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO ESSENZO SPORTO VENT R1 NAVY </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO SALVATORE URBAN CHIC </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-5.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SARUNG TANGAN END -->

    <!-- T-SHIRT -->
    <section class="new_arrivals_area section-padding-80 clearfix" style="padding-top: unset">
        <div class="container">
            <h5>T-SHIRT</h5>
            <hr style="height:1px;border:none; background-color:#333;">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 BLACK</h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-01 THERMOLINE N R1.5 CHARCOAL </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO ESSENZO SPORTO VENT R1 NAVY </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO SALVATORE URBAN CHIC </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-5.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- T-SHIRT END -->

    <!-- AKSESORIS KEPALA -->
    <section class="new_arrivals_area section-padding-80 clearfix" style="padding-top: unset">
        <div class="container">
            <h5>AKSESORIS KEPALA</h5>
            <hr style="height:1px;border:none; background-color:#333;">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 BLACK</h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-01 THERMOLINE N R1.5 CHARCOAL </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO ESSENZO SPORTO VENT R1 NAVY </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO SALVATORE URBAN CHIC </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="assets_reseller/img/product-img/product-5.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Jaket</span>
                                <a href="single-product-details.html">
                                    <h6>RESPIRO TR-05 XENTRA N R1.4 </h6>
                                </a>
                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- AKSESORIS KEPALA END -->
@endsection