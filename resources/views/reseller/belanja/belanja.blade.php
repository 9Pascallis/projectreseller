@extends('reseller.layout.template')
@section('title', 'Reseller | Belanja')

@section('content')
<br><br>
    <!-- BREADCRUMB -->
    <div class="container-fluid mb-30 ">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light">
                    <a class="breadcrumb-item text-dark" href="reseller" style="font-size: 14px; font-family: ubuntu">Home</a>
                    <span class="breadcrumb-item text-dark active" style="font-size: 14px; font-family: ubuntu">Belanja</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END -->

    <!-- SECTION -->
    <section class="shop_grid_area section-padding-80" style="padding-top:unset">
        <div class="container">
            <div class="row">
                <!-- CONTAINER KATEGORI DAN FILTER -->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="shop_sidebar_area">
                        <!-- KATEGORI -->
                        <div class="widget catagory mb-30">
                            <!-- JUDUL -->
                            <h6 class="widget-title mb-30">KATEGORI: </h6>
                            <!-- KONTEN -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <ul class="sub-menu collapse show" >
                                            <div style="padding-right: 50px"><hr></div>
                                            <li><a href="reseller-belanja"><b class="text-dark" style="font-family: ubuntu">&#8226; SEMUA</b></a></li>
                                            <div style="padding-right: 50px"><hr></div>
                                            @foreach ( $jenis_produk as $item)
                                            <li><a href="#"><b class="text-dark" style="font-family: ubuntu">&#8226; {{ $item->nama_jenis_produk}}</b></a></li>
                                            <div style="padding-right: 50px"><hr></div>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- KATEGORI END -->

                        {{-- <!-- FILTER HARGA -->
                        <div class="widget price mb-30">
                            <!-- JUDUL -->
                            <a style="color: black; font-size: 18px" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <h6 class="widget-title mb-30">Filter Harga <i class="fa fa-chevron-down" aria-hidden="true"></i></h6>
                            </a>
                            <!-- KONTEN -->
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
                        <!-- FILTER HARGA END --> --}}

                        {{-- <!-- FILTER KATEGORI -->
                        <div class="widget catagory mb-50">
                            <!-- JUDUL -->
                            <a style="color: black; font-size: 18px" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <h6 class="widget-title mb-30">Filter Kategori <i class="fa fa-chevron-down" aria-hidden="true"></i></h6>
                            </a>
                            <!-- JUDUL -->
                            <div class="collapse" id="collapseExample1">
                                <div class="catagories-menu">
                                    <ul id="menu-content2" class="menu-content collapse show">
                                        <li data-toggle="collapse" data-target="#clothing">
                                            <ul class="sub-menu collapse show">
                                                <div>
                                                    <input type="checkbox" id="scales" name="scales">
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
                        <!-- FILTER KATEGORI END -->  --}}
                    </div>
                </div>
                <!-- CONTAINTER KATEGORI DAN FILTER END -->

                <!-- CONTAINER KONTEN -->
                <div class="col-12 col-md-9 col-lg-9">
                    <!-- PRODUK -->
                    <div class="shop_grid_product_area">
                        <!-- HEADER -->
                        <div class="row">
                            <div class="col-12">
                                <!-- JUDUL -->
                                <h5 class="text-uppercase">DAFTAR PRODUK</h5><hr>
                                <!-- TOTAL PRODUK -->
                                <div class="total-products">
                                    <p><span style="color: #ff4a00">186</span> Produk Ditemukan</p>
                                </div>
                                <!-- ATUR DAN TAMPILKAN -->
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- ATUR -->
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
                                    <!-- TAMPILKAN -->
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
                        </div>
                        <!-- HEADER END -->

                        <!-- ISI -->
                        
                            <div class="row">
                                @foreach ( $produk as $item)
                                <!-- Single Product -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
                                        <div class="product-img">
                                            <a href="reseller-detail">
                                                <img src="{{asset('storage/'.$item->foto_utama_produk)}}" alt="">
                                                <!-- Product Badge -->
                                                {{-- <div class="product-badge offer-badge bg-dark">
                                                    <span>-30%</span>
                                                </div> --}}
                                                <!-- Favourite -->
                                            </a>
                                        </div>

                                        <!-- Product Description -->
                                        <div class="product-description">
                                            <span>{{ $item->jenis_produk->nama_jenis_produk}}</span>
                                            <a href="single-product-details.html">
                                                <h6>{{ $item->nama_produk}}</h6>
                                            </a>
                                            <b class="product-price text-danger">{{ $item->harga_produk}}</b>
                                            <!-- Hover Content -->
                                            <div class="hover-content">
                                                <!-- Add to Cart -->
                                                <div class="add-to-cart-btn">
                                                    <a href="/reseller-detail-{{ $item->id }}" class="btn essence-btn" style="background-color: #ff4a00">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        <!-- ISI END -->
                    </div>
                    <!-- PRODUK -->
                    
                    <!-- PAGINATION -->
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
                    <!-- PAGINATION END -->
                </div>
                <!-- CONTAINER KONTEN END-->
            </div>
        </div>
    </section>
    <!-- SECTION END -->
@endsection
