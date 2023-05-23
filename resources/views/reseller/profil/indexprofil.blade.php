@extends('reseller.layout.template')
@section('title', 'Reseller | Profil')
@section('content')
<br><br>
<!-- ##### Blog Wrapper Area Start ##### -->
<div class="single-blog-wrapper">

    <!-- Single Blog Post Thumb -->
    <div class="single-blog-post-thumb">
        <img src="img/bg-img/bg-8.jpg" alt="">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="regular-page-content-wrapper section-padding-80">
                    <div class="regular-page-text">
                        <div class="order-details-confirmation">
                            <div class="checkout_details_area clearfix">
                                    <div class="row">
                                        <div class="col-md-12 mb-3 mb-30 text-center">
                                            <h4 class="text-center">DETAIL PROFIL</h4>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="first_name">Nama Lengkap <span>*</span></label>
                                            <input type="text" class="form-control" value="{{ $user->nama_lengkap_user }}" disabled>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="last_name">Email</label>
                                            <input type="text" class="form-control" value="{{ $user->email }}" disabled>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Nomor Telp</label>
                                            <input type="text" class="form-control" value="{{ $user->no_telp_user }}" disabled>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Alamat <span>*</span></label>
                                            <input type="text" class="form-control"  value="{{ $user->alamat_user }}" disabled>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Provinsi <span>*</span></label>
                                            <input type="text" class="form-control"  value="{{ $user->provinsi_user }}" disabled>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Kota <span>*</span></label>
                                            <input type="text" class="form-control"  value="{{ $user->kota_user }}" disabled>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Kecamatan <span>*</span></label>
                                            <input type="text" class="form-control"  value="{{ $user->kecamatan_user }}" disabled>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Kode Pos <span>*</span></label>
                                            <input type="text" class="form-control"  value="{{ $user->kode_pos_user }}" disabled>
                                        </div>
                                        {{-- <div class="col-12 text-right">
                                            <a href="{{route('editprofil')}}" class="btn essence-btn bg-warning">Edit Profil</a>
                                        </div> --}}
                                    </div>
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
    </div>
</div>
<!-- ##### Blog Wrapper Area End ##### -->
@endsection
