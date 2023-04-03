@extends('reseller.layout.template')
@section('title', 'Reseller | Home')
@section('content')
<br><br>
        <!-- Breadcrumb Start -->
        <div class="container-fluid mb-30">
            <div class="row px-xl-5">
                <div class="col-12">
                    <nav class="breadcrumb bg-light">
                        <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Home</a>
                        <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Belanja</a>
                        <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Detail</a>
                        <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Keranjang</a>
                        <span class="breadcrumb-item text-dark active" style="font-size: 14px; font-family: ubuntu">Checkout</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->
        <!-- ##### Checkout Area Start ##### -->
        <div class="checkout_area section-padding-80" style="padding-top:unset">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12 col-md-6">

                        <div class="checkout_details_area mt-20 clearfix">
                            <div class="cart-page-heading mb-10">
                                <h6 class="text-dark">Cari Data Riwayat Pembeli</h6>
                            </div>
                            <form class="example mb-30" action="action_page.php">
                                <input type="text" name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>

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
                            </form>
                            <br>
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
                            <div class="col-md-12">
                                <button type="submit" name="addtocart" value="5" class="btn essence-btn bg-dark" data-toggle="collapse" style="height: 50px">Kirim Ke Alamat Lain</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                        <div class="order-details-confirmation">
                            <div class="cart-page-heading">
                                <h5>Transaksi</h5>
                                <p>Input Resi</p>
                                <div class="col-md-12 mb-3">
                                    <input type="text" class="form-control" id="company" value="" required>
                                </div>
                                <p>Pengiriman</p>
                                <div class="col-12 mb-12" style="padding-bottom: 70px">
                                    <select class="w-100" id="country">
                                        <option value="usa">Pilih Jasa Kurir</option>
                                        <option value="usa">JNE Ekspress</option>
                                        <option value="uk">SiCepat Ekspress</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-12" style="padding-bottom: 70px">
                                    <select class="w-100" id="country">
                                        <option value="usa">Pilih Service</option>
                                        <option value="usa">Hemat </option>
                                        <option value="uk">Reguler</option>
                                    </select>
                                </div>
                                <p style="font-size: 12px"><i>Berat: 1Kg</i></p>
                            </div>
                            <ul class="order-details-form mb-4">
                                <li><span>PRODUK</span> <span>Total</span></li>
                                <li><span>RESPIRO TR-05 XENTRA N R1.4 RED (1)</span> <span>Rp 440.000</span></li>
                                <li><span>VELOCITY VENT R3 (1)</span> <span>Rp 836.000</span></li>
                                <li><span>NORDIC JACKET (1)</span> <span>	Rp 625.000</span></li>
                                <li><span>JASA KIRIM</span> <span>Rp. 25.000</span></li>
                                
                                <li><span><b>TOTAL</b></span> <span><b>Rp.1.916.000</b></span></li>
                            </ul>

                            {{-- <div id="accordion" role="tablist" class="mb-4">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h6 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-circle-o mr-3"></i>Paypal</a>
                                        </h6>
                                    </div>

                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-circle-o mr-3"></i>cash on delievery</a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quis in veritatis officia inventore, tempore provident dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-circle-o mr-3"></i>credit card</a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFour">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><i class="fa fa-circle-o mr-3"></i>direct bank transfer</a>
                                        </h6>
                                    </div>
                                    <div id="collapseFour" class="collapse show" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est cum autem eveniet saepe fugit, impedit magni.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <a href="#" class="btn essence-btn bg-success">Lanjut Pembayaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Checkout Area End ##### -->

@endsection
@section('javascript')

@endsection