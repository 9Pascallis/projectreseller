@extends('reseller.layout.template')
@section('title', 'Reseller | Belanja')

@section('content')
<br><br>
<!-- SECTION -->
<section class="shop_grid_area mb-100">
    <div class="container">
        <div class="row">

            <!-- CONTAINER KATEGORI -->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="shop_sidebar_area">
                    <div class="widget catagory mb-30">
                        <h6 class="widget-title mb-30">KATEGORI: </h6>
                        <div class="catagories-menu">
                            <ul id="menu-content2" class="menu-content collapse show">
                                <li data-toggle="collapse" data-target="#clothing">
                                    <ul class="sub-menu collapse show">
                                        <div style="padding-right: 50px">
                                            <hr>
                                        </div>
                                        <li><a href="reseller-belanja"><b class="text-dark"
                                                    style="font-family: ubuntu; font-weight: 600">&#8226; SEMUA</b></a>
                                        </li>
                                        <div style="padding-right: 50px">
                                            <hr>
                                        </div>
                                        @foreach ( $jenis_produk as $item)
                                        <li><a
                                                href="{{route('reseller-belanja', ['jenis_kategori' => $item->nama_jenis_produk])}}"><b
                                                    class="text-dark"
                                                    style="font-family: ubuntu; font-weight: 600">&#8226;
                                                    {{ $item->nama_jenis_produk}}</b></a></li>
                                        <div style="padding-right: 50px">
                                            <hr>
                                        </div>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONTAINER KONTEN -->
            <div class="col-12 col-md-9 col-lg-9">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <div class="col-12">
                            <!-- JUDUL -->
                            <h5 class="text-uppercase">DAFTAR PRODUK</h5>
                            <hr>
                            <!-- SEARCH -->
                            <form method="GET" action="{{route('reseller-belanja')}}">
                                <div class="input-group mb-3">
                                    <input type="text" name="keyword" value="{{$keyword}}" style="font-family: ubuntu"
                                        class="form-control" placeholder="Search Produk">
                                    <button class="btn btn-info" style="font-family: ubuntu"
                                        type="submit">Search</button>
                                </div>
                            </form>
                            <!-- TOTAL PRODUK DAN TAMPILKAN -->
                            <div class="product-topbar d-flex align-items-center justify-content-between">
                                <!-- TOTAL PRODUK -->
                                <div class="total-products">
                                    <p><span style="color: #ff4a00">186</span> Produk Ditemukan</p>
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

                    <!-- ISI -->
                    <div class="row">
                        @foreach ( $produk as $item)
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <!-- FOTO PRODUK -->
                                <div class="product-img">
                                    <a href="/reseller-detail-{{ $item->id }}">
                                        <img src="{{asset('storage/'.$item->foto_utama_produk)}}" alt="">
                                    </a>
                                </div>
                                <!-- DESKRIPSI PRODUK -->
                                <div class="product-description">
                                    <span>{{ $item->jenis_produk->nama_jenis_produk}}</span>
                                    <a href="/reseller-detail-{{ $item->id }}">
                                        <h6>{{ $item->nama_produk}}</h6>
                                    </a>
                                    <b class="product-price text-danger">{{ $item->harga_produk}}</b>
                                    <div class="hover-content">
                                        <!-- TAMBAH KERANJANG -->
                                        <div class="add-to-cart-btn">
                                            <a href="/reseller-detail-{{ $item->id }}" class="btn essence-btn"
                                                style="background-color: #ff4a00">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- PAGINATION -->
                {{$produk->links()}}
                {{-- <nav aria-label="navigation">
                        <ul class="pagination mt-30 mb-30">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav> --}}
            </div>
        </div>
    </div>
</section>
@endsection
