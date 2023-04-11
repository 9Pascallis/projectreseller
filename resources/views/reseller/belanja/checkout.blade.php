@extends('reseller.layout.template')
@section('title', 'Reseller | Checkout')

@section('content')
<br><br>
    <!-- BREADCRUMB -->
    <div class="container-fluid mb-30">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light">
                    <a class="breadcrumb-item text-dark" href="reseller" style="font-size: 14px; font-family: ubuntu">Home</a>
                    <a class="breadcrumb-item text-dark" href="reseller-belanja" style="font-size: 14px; font-family: ubuntu">Belanja</a>
                    <a class="breadcrumb-item text-dark" href="reseller-detail" style="font-size: 14px; font-family: ubuntu">Detail</a>
                    <a class="breadcrumb-item text-dark" href="reseller-keranjang" style="font-size: 14px; font-family: ubuntu">Keranjang</a>
                    <span class="breadcrumb-item text-dark active" style="font-size: 14px; font-family: ubuntu">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END -->
    
    <!-- SECTION -->
    <div class="checkout_area section-padding-80" style="padding-top:unset">
        <div class="container">
            <div class="row">
                <!-- CONTAINER KIRI -->
                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-20 clearfix">
                        <div class="cart-page-heading mb-10">
                            <h6 class="text-dark">Cari Data Riwayat Pembeli</h6>
                        </div>
                        <form class="example mb-30" action="action_page.php">
                            <input type="text" name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <!-- INFORMASI PEMBELI -->
                            <div class="cart-page-heading mb-30">
                                <h5>Informasi Pembeli</h5>
                            </div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="first_name">Nama Lengkap <span>*</span></label>
                                        <input type="text" class="form-control" id="first_name" value="" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="company">Nomor Whatsapp</label>
                                        <input type="text" class="form-control" id="company" value="" required>
                                    </div>
                                </div>
                            </form><br>
                        <!-- INFORMASI ALAMAT PEGIRIMAN -->
                            <div class="cart-page-heading mb-30">
                                <h5>Informasi Alamat Pengiriman</h5>
                            </div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="first_name">Alamat <span>*</span></label>
                                        <input type="text" class="form-control" id="first_name" value="" required>
                                    </div>
                                    <div class="col-12 mb-3">

                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="country">Kecamatan <span>*</span></label>
                                        <select class="w-100" id="country">
                                            <option value="usa">-</option>
                                            <option value="usa">United States</option>
                                            <option value="uk">United Kingdom</option>
                                            <option value="ger">Germany</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="country">Kode Pos <span>*</span></label>
                                        <select class="w-100" id="country">
                                            <option value="usa">-</option>
                                            <option value="usa">United States</option>
                                            <option value="uk">United Kingdom</option>
                                            <option value="ger">Germany</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        <!-- KIRIM KE ALAMAT LAIN -->
                        <div class="col-md-12">
                            <button type="submit" name="addtocart" value="5" class="btn essence-btn bg-dark" data-toggle="collapse" style="height: 50px">Kirim Ke Alamat Lain</button>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER KIRI END -->

                <!-- CONTAINER KANAN -->
                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">
                        <div class="cart-page-heading">
                            <!-- JUDUL -->
                            <h5>Transaksi</h5>
                            <!-- INPUT RESI -->
                            <p>Input Resi</p>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="company" value="" required>
                            </div>
                            <!-- PENGIRIMAN -->
                            <p>Pengiriman</p>
                                <!-- JASA KURIR -->
                                <div class="col-12 mb-12" style="padding-bottom: 70px">
                                    <select class="w-100" id="country">
                                        <option value="usa">Pilih Jasa Kurir</option>
                                        <option value="usa">JNE Ekspress</option>
                                        <option value="uk">SiCepat Ekspress</option>
                                    </select>
                                </div>
                                <!-- SERVICE -->
                                <div class="col-12 mb-12" style="padding-bottom: 70px">
                                    <select class="w-100" id="country">
                                        <option value="usa">Pilih Service</option>
                                        <option value="usa">Hemat </option>
                                        <option value="uk">Reguler</option>
                                    </select>
                                </div>
                                <p style="font-size: 12px"><i>Berat: 1Kg</i></p>
                        </div>
                        <!-- LIST PRODUK -->
                        <ul class="order-details-form mb-4">
                            <li><span>PRODUK</span> <span>Total</span></li>
                            <li><span>RESPIRO TR-05 XENTRA N R1.4 RED (1)</span> <span>Rp 440.000</span></li>
                            <li><span>VELOCITY VENT R3 (1)</span> <span>Rp 836.000</span></li>
                            <li><span>NORDIC JACKET (1)</span> <span>	Rp 625.000</span></li>
                            <li><span>JASA KIRIM</span> <span>Rp. 25.000</span></li>
                            <li><span><b>TOTAL</b></span> <span><b>Rp.1.916.000</b></span></li>
                        </ul>
                        <!-- LIST PRODUK END -->
                        <a href="#" class="btn essence-btn bg-success">Lanjut Pembayaran</a>
                    </div>
                </div>
                <!-- CONTAINER KANAN END -->
            </div>
        </div>
    </div>
    <!-- SECTION END -->
@endsection