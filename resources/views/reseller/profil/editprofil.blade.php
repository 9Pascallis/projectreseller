@extends('reseller.layout.template')
@section('title', 'Reseller | Edit Profil')
@section('content')
<br><br>
        <!-- Breadcrumb Start -->
        <div class="container-fluid mb-30">
            <div class="row px-xl-5">
                <div class="col-12">
                    <nav class="breadcrumb bg-light">
                        <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Home</a>
                        <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Halaman Profil</a>
                        <span class="breadcrumb-item text-dark active" style="font-size: 14px; font-family: ubuntu">Edit Profil</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->
        <!-- ##### Checkout Area Start ##### -->
        <div class="checkout_area section-padding-80" style="padding-top:unset">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 ml-lg-auto">
                        <div class="cart-page-heading mb-30">
                            <h5>Edit Profil</h5>
                        </div>
                        <div class="product-image-main mt-30 mb-30">
                            <img src="assets_reseller/img/product-img/product-big-1.jpg" alt="" id="product-main-image">
                        </div>
                        <a href="#" class="btn essence-btn bg-secondary">Ubah Foto Profil</a>
                    </div>
                    
                    <div class="col-12 col-md-8">
                        <div class="order-details-confirmation mt-50">
                            <div class="checkout_details_area clearfix">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-12 mb-3 mb-30 text-center">
                                            <h6 class="text-center">DETAIL PROFIL</h6>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="first_name">Nama Lengkap <span>*</span></label>
                                            <input type="text" class="form-control" id="first_name" value="Pascallis Henoch Herutomo" required>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="last_name">Alamat Email <span>*</span></label>
                                            <input type="text" class="form-control" id="last_name" value="pascallishenoch@gmail.com" required>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Nomor Whatsapp <span>*</span></label>
                                            <input type="text" class="form-control" id="company" value="0895703300407" required>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Alamat <span>*</span></label>
                                            <input type="text" class="form-control" id="company" value="Jl. Makam Tentara No.63 Madiun" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="country">Provinsi <span>*</span></label>
                                            <select class="w-100" id="country">
                                                <option value="usa">Jawa Timur</option>
                                                <option value="usa">United States</option>
                                                <option value="uk">United Kingdom</option>
                                                <option value="ger">Germany</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="country">Kota <span>*</span></label>
                                            <select class="w-100" id="country">
                                                <option value="usa">Kota Madiun</option>
                                                <option value="usa">United States</option>
                                                <option value="uk">United Kingdom</option>
                                                <option value="ger">Germany</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="country">Kecamatan <span>*</span></label>
                                            <select class="w-100" id="country">
                                                <option value="usa">Taman</option>
                                                <option value="usa">United States</option>
                                                <option value="uk">United Kingdom</option>
                                                <option value="ger">Germany</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="country">Kode Pos <span>*</span></label>
                                            <select class="w-100" id="country">
                                                <option value="usa">63131</option>
                                                <option value="usa">United States</option>
                                                <option value="uk">United Kingdom</option>
                                                <option value="ger">Germany</option>
                                            </select>
                                        </div>
                                        <div class="col-12 text-right">
                                            <a href="#" class="btn essence-btn bg-info">Simpan Perubahan</a>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                {{-- <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="first_name">Alamat <span>*</span></label>
                                            <input type="text" class="form-control" id="first_name" value="" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="country">Provinsi <span>*</span></label>
                                            <select class="w-100" id="country">
                                                <option value="usa">-</option>
                                                <option value="usa">United States</option>
                                                <option value="uk">United Kingdom</option>
                                                <option value="ger">Germany</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="country">Kota <span>*</span></label>
                                            <select class="w-100" id="country">
                                                <option value="usa">-</option>
                                                <option value="usa">United States</option>
                                                <option value="uk">United Kingdom</option>
                                                <option value="ger">Germany</option>
                                            </select>
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
                                </form> --}}

                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
        <!-- ##### Checkout Area End ##### -->

@endsection
@section('javascript')

@endsection