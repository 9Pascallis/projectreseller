@extends('admin.layout.template')
@section('title', 'Admin | Detail Admin')

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
			<h5 class="mb-0 text-uppercase text-center">Detail Admin</h5><hr><br>
			<!-- JUDUL END-->

			<!-- ISI -->
			<form action="/updateadmin-{{ $data->id }}" method="POST">
				@csrf
				<div class="row" style="margin-left: 20px; margin-right: 20px">
				<div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label" >Nama Lengkap</label>
					<div class="col-sm-9">
					<input type="text" name="nama_lengkap_admin" class="form-control" style="text-transform:uppercase" value="{{ $data->nama_lengkap_admin}}">
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label">Email</label>
					<div class="col-sm-9">
					<input type="email" name="email_admin" class="form-control" value="{{ $data->email_admin}}">
					</div>
				</div>  
				<div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label">No Telp</label>
					<div class="col-sm-9">
					<input type="number" name="no_telp_admin" class="form-control" value="{{ $data->no_telp_admin}}">
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-9">
					<input type="text" name="password_admin" class="form-control" value="{{ $data->password_admin}}">
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
					<button type="submit" class="btn btn-success update" data-id="{{ $data->id }}" data-nama="{{ $data->nama_lengkap_admin}}">Update Admin</button>
					{{-- <a href="admin-viewadmin" class="btn btn-success" role="button" aria-pressed="true">Create Admin</a> --}}
				</div>    
			</form>
			<!-- ISI END -->
		</div>
	</div>
@endsection

@section('javascript')
	<script src="assets_admin/js/password.js"></script>
@endsection


