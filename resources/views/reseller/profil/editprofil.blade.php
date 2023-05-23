@extends('reseller.layout.template')
@section('title', 'Reseller | Edit Profil')
@section('content')
<br><br>
<div class="single-blog-wrapper mb-100">

    <!-- Single Blog Post Thumb -->
    <div class="single-blog-post-thumb">
        <img src="img/bg-img/bg-8.jpg" alt="">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="regular-page-content-wrapper">
                    <div class="regular-page-text">
                        <div class="order-details-confirmation">
                            <form action="/updateuser-{{ $user->id }}" method="POST">
                                @csrf
                                <div class="checkout_details_area clearfix">
                                    <div class="row">
                                        <div class="col-md-12 mb-3 mb-30 text-center">
                                            <h4 class="text-center">EDIT PROFIL</h4>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="first_name">Nama Lengkap <span>*</span></label>
                                            <input type="text" name="nama_lengkap_user" class="form-control"
                                                value="{{ $user->nama_lengkap_user }}">
                                            @error('nama_lengkap_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="first_name">Tanggal Lahir <span>*</span></label>
                                            <input type="text" name="tanggal_lahir_user" class="form-control"
                                                value="{{ $user->tanggal_lahir_user }}">
                                            @error('tanggal_lahir_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="first_name">Email <span>*</span></label>
                                            <input type="text" name="email" class="form-control"
                                                value="{{ $user->email }}">
                                            @error('email')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Nomor Telp</label>
                                            <input type="text" name="no_telp_user" class="form-control"
                                                value="{{ $user->no_telp_user }}">
                                            @error('no_telp_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="password" value="{{ $user->password }}}">
                                        <div class="col-md-12 mb-3">
                                            <label for="first_name">Password <span>*</span></label>
                                            <input type="text" name="password" class="form-control"
                                                value="{{ $user->password }}">
                                            @error('password')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Alamat <span>*</span></label>
                                            <input type="text" name="alamat_user" class="form-control"
                                                value="{{ $user->alamat_user }}">
                                            @error('alamat_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Provinsi <span>*</span></label>
                                            <input type="text" name="provinsi_user" class="form-control"
                                                value="{{ $user->provinsi_user }}">
                                            @error('provinsi_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Kota <span>*</span></label>
                                            <input type="text" name="kota_user" class="form-control"
                                                value="{{ $user->kota_user }}">
                                            @error('kota_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Kecamatan <span>*</span></label>
                                            <input type="text" name="kecamatan_user" class="form-control"
                                                value="{{ $user->kecamatan_user }}">
                                            @error('kecamatan_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="company">Kode Pos <span>*</span></label>
                                            <input type="text" name="kode_pos_user" class="form-control"
                                                value="{{ $user->kode_pos_user }}">
                                            @error('kode_pos_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="row justify-content-end">
                                        <div style="padding-right: 5px; padding-bottom: 10px"><a href="reseller-profil"
                                                class="btn essence-btn bg-warning" role="button"
                                                aria-pressed="true">Cancel</a></div>
                                        <div><button type="submit"
                                                class="btn essence-btn bg-success">Simpan</button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Wrapper Area End ##### -->
@endsection
