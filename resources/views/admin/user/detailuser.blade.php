@extends('admin.layout.template')
@section('title', 'Admin | Detail User')

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
			<h5 class="mb-0 text-uppercase text-center">Detail User</h5><hr><br>
			<!-- JUDUL END-->

			<!-- ISI -->
			<form action="/updateuser-{{ $user->id }}" method="POST">
				@csrf
				<div class="row" style="margin-left: 20px; margin-right: 20px">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label" >Nama Lengkap</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->nama_lengkap_user}}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->tanggal_lahir_user}}</p>
                        </div>
                    </div> 
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->email}}</p>
                        </div>
                    </div> 
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">No Telp</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->no_telp_user}}</p>
                        </div>
                    </div> 
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->alamat_user}}</p>
                        </div>
                    </div>   
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Provinsi</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->provinsi_user}}</p>
                        </div>
                    </div>   
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Kota</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->kota_user}}</p>
                        </div>
                    </div>   
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Kecamatan</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->kecamatan_user}}</p>
                        </div>
                    </div>   
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">kode_pos</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->kode_pos_user}}</p>
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
			</form>
			<!-- ISI END -->
		</div>
	</div>
@endsection

@section('javascript')
	<script src="assets_admin/js/password.js"></script>
@endsection


