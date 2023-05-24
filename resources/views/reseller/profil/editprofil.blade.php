@extends('reseller.layout.template')
@section('title', 'Reseller | Edit Profil')
@section('content')
<br><br>
<div class="single-blog-wrapper mb-100">
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
                                            <label for="inputText">Nama Lengkap <span>*</span></label>
                                            <input type="text" name="nama_lengkap_user" class="form-control"
                                                value="{{ $user->nama_lengkap_user }}" required>
                                            @error('nama_lengkap_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Tanggal Lahir <span>*</span></label>
                                            <input type="date" name="tanggal_lahir_user" class="form-control"
                                                value="{{ $user->tanggal_lahir_user }}" required>
                                            @error('tanggal_lahir_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Nomor Telp</label>
                                            <input type="text" name="no_telp_user" class="form-control"
                                                value="{{ $user->no_telp_user }}" required>
                                            @error('no_telp_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Alamat <span>*</span></label>
                                            <input type="text" name="alamat_user" class="form-control"
                                                value="{{ $user->alamat_user }}" required>
                                            @error('alamat_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Provinsi <span>*</span></label>
                                            <input type="text" name="provinsi_user" class="form-control"
                                                value="{{ $user->provinsi_user }}" required>
                                            @error('provinsi_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Kota <span>*</span></label>
                                            <input type="text" name="kota_user" class="form-control"
                                                value="{{ $user->kota_user }}" required>
                                            @error('kota_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Kecamatan <span>*</span></label>
                                            <input type="text" name="kecamatan_user" class="form-control"
                                                value="{{ $user->kecamatan_user }}" required>
                                            @error('kecamatan_user')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Kode Pos <span>*</span></label>
                                            <input type="text" name="kode_pos_user" class="form-control"
                                                value="{{ $user->kode_pos_user }}" required>
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
