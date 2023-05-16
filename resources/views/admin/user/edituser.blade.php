@extends('admin.layout.template')
@section('title', 'Admin | Edit User')

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
			<h5 class="mb-0 text-uppercase text-center">Edit User</h5><hr><br>
			<!-- JUDUL END-->

			<!-- ISI -->
			<form action="/updateuser-{{ $user->id }}" method="POST">
				@csrf
				<div class="row" style="margin-left: 20px; margin-right: 20px">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label" >Nama Lengkap</label>
                        <div class="col-sm-9">
                        <input type="text" name="nama_lengkap_user" class="form-control" value="{{ $user->nama_lengkap_user}}">
                        @error('nama_lengkap_user')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                        <input type="date" name="tanggal_lahir_user" class="form-control" value="{{ $user->tanggal_lahir_user}}">
                        @error('tanggal_lahir_user')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                        </div>
                    </div> 
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                        <input type="email" name="email_user" class="form-control @error('email_user') is-invalid @enderror me-2" value="{{ $user->email_user}}">
                        @error('email_user')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                        </div>
                    </div> 
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">No Telp</label>
                        <div class="col-sm-9">
                        <input type="number" name="no_telp_user" class="form-control" value="{{ $user->no_telp_user}}">
                        @error('no_telp_user')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                        <input type="text" name="password_user" class="form-control" value="{{ $user->password_user}}">
                        @error('password_user')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                        </div>
                    </div>   
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                        <input type="text" name="alamat_user" class="form-control" value="{{ $user->alamat_user}}">
                        @error('alamat_user')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                        </div>
                    </div>   
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Provinsi</label>
                        <div class="col-sm-9">
                        <input type="text" name="provinsi_user" class="form-control" value="{{ $user->provinsi_user}}">
                        @error('provinsi_user')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                        </div>
                    </div>   
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Kota</label>
                        <div class="col-sm-9">
                        <input type="text" name="kota_user" class="form-control" value="{{ $user->kota_user}}">
                        @error('kota_user')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                        </div>
                    </div>   
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Kecamatan</label>
                        <div class="col-sm-9">
                        <input type="text" name="kecamatan_user" class="form-control" value="{{ $user->kecamatan_user}}">
                        @error('kecamatan_user')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                        </div>
                    </div>   
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">kode_pos</label>
                        <div class="col-sm-9">
                        <input type="text" name="kode_pos_user" class="form-control" value="{{ $user->kode_pos_user}}">
                        @error('kode_pos_user')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                        </div>
                    </div>   
				{{-- <div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-9">
						<input type="password" class="form-control mb-2" id="myInput" >
						<input class="form-check-input" type="checkbox" value="" onclick="password()" required>
						<label class="form-check-label">Show Password</label>
					</div>
				</div>    --}}
				</div>             
				<br><br>
				<div class="d-flex justify-content-end">
                    <div style="padding-right: 5px"><a href="indexuser" class="btn btn-secondary" role="button" aria-pressed="true">Cancel</a></div>
                    <div><button type="submit" class="btn btn-success">Simpan</button></div>
				</div>    
			</form>
			<!-- ISI END -->
		</div>
	</div>
@endsection

@section('javascript')
	<script src="assets_admin/js/password.js"></script>
@endsection


