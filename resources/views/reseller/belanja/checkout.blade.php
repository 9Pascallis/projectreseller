@extends('reseller.layout.template')
@section('title', 'Reseller | Checkout')

@section('content')
<br><br>
<!-- SECTION -->
<div class="checkout_area mb-100">
    <div class="container">
        <div class="row">
            <!-- CONTAINER KIRI -->
            <div class="col-12 col-md-6">
                <div class="checkout_details_area mt-20 clearfix">
                    <!-- INFORMASI PEMBELI -->
                    <div class="cart-page-heading mb-30">
                        <h5>Alamat Pengiriman</h5>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="first_name">Nama Lengkap <span>*</span></label>
                                <input type="text" class="form-control" id="first_name" value="" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="company">Nomor Hp <span>*</span></label>
                                <input type="text" class="form-control" id="company" value="" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="first_name">Alamat <span>*</span></label>
                                <input type="text" class="form-control" id="first_name" value="" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="inputText">Provinsi <span>*</span></label>
                                <select class="w-100" id="provinsi" value="">
                                    <option selected="">-</option>
                                    <option value="1">United States</option>
                                    <option value="2">United Kingdom</option>
                                    <option value="3">Germany</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="inputText">Kota <span>*</span></label>
                                <select class="w-100" id="kota" value="">
                                    <option value="usa">-</option>
                                    <option value="usa">United States</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="ger">Germany</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="inputText">Kecamatan <span>*</span></label>
                                <select class="w-100" id="kecamatan" value="">
                                    <option value="usa">-</option>
                                    <option value="usa">United States</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="ger">Germany</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="inputText">Kode Pos <span>*</span></label>
                                <select class="w-100" id="kode_pos" value="">
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
                        <button class="btn essence-btn bg-dark" style="height: 50px" type="reset" value="Reset">Kirim Ke
                            Alamat Lain</button>
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
                    </div>
                    <!-- LIST PRODUK -->
                    <ul class="order-details-form mb-4">
                        <li><span>PRODUK</span> <span>Total</span></li>
                        <li><span>RESPIRO TR-05 XENTRA N R1.4 RED (1)</span> <span>Rp 440.000</span></li>
                        <li><span>VELOCITY VENT R3 (1)</span> <span>Rp 836.000</span></li>
                        <li><span>ONGKIR JASA KIRIM</span> <span>Rp. 25.000</span></li>
                        <li><span><b>TOTAL</b></span> <span><b>Rp.1.916.000</b></span></li>
                    </ul>
                    <!-- LANJUT PEMBAYARAN -->
                    <a href="#" class="btn essence-btn bg-success">Lanjut Pembayaran</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SECTION END -->
@endsection
