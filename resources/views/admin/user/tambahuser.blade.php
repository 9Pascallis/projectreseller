@extends('admin.layout.template')
@section('title', 'Admin | Tambah User')
@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">Tambah User</h5>
        <hr><br>
        <!-- JUDUL END-->

        <!-- ISI -->
        <form action="/insertdatauser" method="POST">
            @csrf
            <div class="row" style="margin-left: 20px; margin-right: 20px">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_lengkap_user"
                            value="{{old('nama_lengkap_user')}}" required>
                        @error('nama_lengkap_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="tanggal_lahir_user"
                            value="{{old('tanggal_lahir_user')}}" required>
                        @error('tanggal_lahir_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('email') is-invalid @enderror me-2" name="email"
                            value="{{old('email')}}" required>
                        @error('email')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">No Telp</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_telp_user" value="{{old('no_telp_user')}}"
                            required>
                        @error('no_telp_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="password" value="{{old('password')}}" required>
                        @error('password')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="alamat_user" value="{{old('alamat_user')}}"
                            required>
                        @error('alamat_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Provinsi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="provinsi_user" value="{{old('provinsi_user')}}"
                            required>
                        @error('provinsi_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Kota</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kota_user" value="{{old('kota_user')}}" required>
                        @error('kota_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Kecamatan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kecamatan_user" value="{{old('kecamatan_user')}}"
                            required>
                        @error('kecamatan_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Kode Pos</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kode_pos_user" value="{{old('kode_pos_user')}}"
                            required>
                        @error('kode_pos_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                {{-- <hr>

				<div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-9">
						<input type="password" class="form-control mb-2" id="myInput" >
						<input class="form-check-input" type="checkbox" value="" onclick="password()" required>
						<label class="form-check-label">Show Password</label>
					</div>
				</div>   --}}
            </div>
            <br><br>
            <div class="d-flex justify-content-end">
                <div style="padding-right: 5px"><a href="indexuser" class="btn btn-secondary" role="button"
                        aria-pressed="true">Cancel</a></div>
                <div><button type="submit" class="btn btn-success">Tambah</button></div>
            </div>
        </form>
        <!-- ISI END -->
    </div>
</div>
@endsection

@section('javascript')
<script src="assets_admin/js/password.js"></script>
@endsection
