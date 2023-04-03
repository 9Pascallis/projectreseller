@extends('reseller.layout.template')
@section('title', 'Reseller | Home')
@section('content')

<br><br>
    <!-- Breadcrumb Start -->
    <div class="container-fluid mb-30 ">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light">
                    <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Home</a>
                    <span class="breadcrumb-item text-dark active" style="font-size: 14px; font-family: ubuntu">Belanja</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80" style="padding-top:unset">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-30">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Kategori</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        {{-- <h6>Kategori</h6> --}}
                                        <ul class="sub-menu collapse show">
                                            <li><a href="#"><b class="text-dark" style="font-family: ubuntu">Semua</b></a></li>
                                            <li><a href="#"><b class="text-dark" style="font-family: ubuntu">Aksesoris</b></a></li>
                                            <li><a href="#"><b class="text-dark" style="font-family: ubuntu">Jaket</b></a></li>
                                            <li><a href="#"><b class="text-dark" style="font-family: ubuntu">Tas</b></a></li>
                                            <li><a href="#"><b class="text-dark" style="font-family: ubuntu">Rompi</b></a></li>
                                            <li><a href="#"><b class="text-dark" style="font-family: ubuntu">Sarung Tangan</b></a></li>
                                            <li><a href="#"><b class="text-dark" style="font-family: ubuntu">T-Shirt</b></a></li>
                                            <li><a href="#"><b class="text-dark" style="font-family: ubuntu">Aksesoris Kepala</b></a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-30">
                            <p>
                                <a style="color: black; font-size: 18px" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <h6 class="widget-title mb-30">Filter Harga <i class="fa fa-chevron-down" aria-hidden="true"></i></h6>
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <p class="widget-title2" style="padding-bottom: 10px">Harga Minimum-Maksimum</p>
                                <div class="widget-desc">
                                    <div class="slider-range">
                                        <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range-price">Range: Rp. 0 - Rp. 1.000.000</div>
                                    </div>
                                </div>
                         
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <p>
                                <a style="color: black; font-size: 18px" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <h6 class="widget-title mb-30">Filter Kategori<i class="fa fa-chevron-down" aria-hidden="true"></i></h6>
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample1">
                                <div class="catagories-menu">
                                    <ul id="menu-content2" class="menu-content collapse show">
                                        <!-- Single Item -->
                                        <li data-toggle="collapse" data-target="#clothing">
                                            {{-- <h6>Kategori</h6> --}}
                                            <ul class="sub-menu collapse show">
                                                <div>
                                                    <input type="checkbox" id="scales" name="scales" checked>
                                                    <label for="scales" class="text-dark" style="font-family: ubuntu">&ensp;Aksesoris</label>
                                                  </div>
                                                  <div>
                                                    <input type="checkbox" id="scales" name="scales">
                                                    <label for="scales" class="text-dark" style="font-family: ubuntu">&ensp;Jaket</label>
                                                  </div>
                                                  <div>
                                                    <input type="checkbox" id="scales" name="scales">
                                                    <label for="scales" class="text-dark" style="font-family: ubuntu">&ensp;Tas</label>
                                                  </div>
                                                  <div>
                                                    <input type="checkbox" id="scales" name="scales">
                                                    <label for="scales" class="text-dark" style="font-family: ubuntu">&ensp;Rompi</label>
                                                  </div>
                                                  <div>
                                                    <input type="checkbox" id="scales" name="scales">
                                                    <label for="scales" class="text-dark" style="font-family: ubuntu">&ensp;Sarung Tangan</label>
                                                  </div>
                                                  <div>
                                                    <input type="checkbox" id="scales" name="scales">
                                                    <label for="scales" class="text-dark" style="font-family: ubuntu">&ensp;T-Shirt</label>
                                                  </div>
                                                  <div>
                                                    <input type="checkbox" id="scales" name="scales">
                                                    <label for="scales" class="text-dark" style="font-family: ubuntu">&ensp;Aksesoris Kepala</label>
                                                  </div>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                         
                            </div>
                        </div>
                        

                         
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-uppercase">DAFTAR PRODUK</h5>
                                
                                <hr>
                                <div class="total-products">
                                    <p><span style="color: #ff4a00">186</span> Produk Ditemukan</p>
                                </div>
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Atur:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Default</option>
                                                <option value="value">Terlaris</option>
                                                <option value="value">Terbaru</option>
                                                <option value="value">Terlama</option>
                                                <option value="value">Harga Termurah</option>
                                                <option value="value">Harga Termahal</option>
                                                <option value="value">A-Z</option>
                                                <option value="value">Z-A</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                   <!-- Sorting -->
                                   <div class="product-sorting d-flex">
                                    <p>Tampilkan :</p>
                                    <form action="#" method="get">
                                        <select name="select" id="t">
                                            <option value="value">1-10</option>
                                            <option value="value">1-20</option>
                                            <option value="value">1-50</option>
                                            
                                        </select>
                                        <input type="submit" class="d-none" value="">
                                    </form>
                                </div>
                                    
                                </div>
                            </div>
                            {{-- <div class="col-12">

                                <h5 class="text-uppercase">DAFTAR PRODUK</h5>
                                <!-- Total Products -->
                                <hr>
                                <div class="total-products">
                                    <p><span style="color: #ff4a00">186</span> Produk Ditemukan</p>
                                </div>
                                <div class="product-topbar d-flex align-items-center justify-content-between">


                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Tampilkan :</p>
                                        <form action="#" method="get">
                                            <select name="select" id="t">
                                                <option value="value">1-10</option>
                                                <option value="value">1-20</option>
                                                <option value="value">1-50</option>
                                                
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Atur :</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Default</option>
                                                <option value="value">Terlaris</option>
                                                <option value="value">Terbaru</option>
                                                <option value="value">Terlama</option>
                                                <option value="value">Harga Termurah</option>
                                                <option value="value">Harga Termahal</option>
                                                <option value="value">A-Z</option>
                                                <option value="value">Z-A</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <div class="row">

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="reseller-detail">
                                            <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                                            <!-- Product Badge -->
                                            <div class="product-badge offer-badge bg-dark">
                                                <span>-30%</span>
                                            </div>
                                            <!-- Favourite -->
                                        </a>
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
                                                <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="reseller-detail">
                                            <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                                            <!-- Product Badge -->
                                            <div class="product-badge offer-badge bg-dark">
                                                <span>-30%</span>
                                            </div>
                                            <!-- Favourite -->
                                        </a>
                                        
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
                                                <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="reseller-detail">
                                            <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                                            <!-- Product Badge -->
                                            <div class="product-badge offer-badge bg-dark">
                                                <span>-30%</span>
                                            </div>
                                            <!-- Favourite -->
                                        </a>
                                        
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
                                                <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="reseller-detail">
                                            <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                                            <!-- Product Badge -->
                                            <div class="product-badge offer-badge bg-dark">
                                                <span>-30%</span>
                                            </div>
                                            <!-- Favourite -->
                                        </a>
                                        
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
                                                <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="reseller-detail">
                                            <img src="assets_reseller/img/product-img/product-5.jpg" alt="">
                                            <!-- Product Badge -->
                                            <div class="product-badge offer-badge bg-dark">
                                                <span>-30%</span>
                                            </div>
                                            <!-- Favourite -->
                                        </a>
                                        
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
                                                <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="reseller-detail">
                                            <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                                            <!-- Product Badge -->
                                            <div class="product-badge offer-badge bg-dark">
                                                <span>-30%</span>
                                            </div>
                                            <!-- Favourite -->
                                        </a>
                                        
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
                                                <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="reseller-detail">
                                            <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                                            <!-- Product Badge -->
                                            <div class="product-badge offer-badge bg-dark">
                                                <span>-30%</span>
                                            </div>
                                            <!-- Favourite -->
                                        </a>
                                        
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
                                                <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="reseller-detail">
                                            <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                                            <!-- Product Badge -->
                                            <div class="product-badge offer-badge bg-dark">
                                                <span>-30%</span>
                                            </div>
                                            <!-- Favourite -->
                                        </a>
                                        
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
                                                <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="reseller-detail">
                                            <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                                            <!-- Product Badge -->
                                            <div class="product-badge offer-badge bg-dark">
                                                <span>-30%</span>
                                            </div>
                                            <!-- Favourite -->
                                        </a>
                                        
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
                                                <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-30 mb-30">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

@endsection
@section('javascript')
@endsection