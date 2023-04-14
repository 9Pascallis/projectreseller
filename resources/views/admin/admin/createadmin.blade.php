@extends('admin.layout.template')
@section('title', 'Admin | Create Admin')

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
			<h5 class="mb-0 text-uppercase text-center">Create Admin</h5><hr><br>
			<!-- JUDUL END-->

			<!-- ISI -->
			<form>
				<div class="row" style="margin-left: 20px; margin-right: 20px">
				<div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label">Nama Lengkap</label>
					<div class="col-sm-9">
					<input type="text" class="form-control" >
					</div>
				</div>
				<div class="row mb-3">
				<label for="inputText" class="col-sm-3 col-form-label">Divisi</label>
					<div class="col-sm-9">
						<select class="form-control select2" style="width: 100%;">
						<option selected="selected">-</option>
						<option>Divisi Marketing</option>
						<option>Divisi Produksi</option>
						<option>Divisi Sales</option>
						</select>
					</div>  
				</div>
				<div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label">No Telp</label>
					<div class="col-sm-9">
					<input type="text" class="form-control" >
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label">Username</label>
					<div class="col-sm-9">
					<input type="text" class="form-control" >
					</div>
				</div>   
				<div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-9">
					<input type="text" class="form-control" >
					</div>
				</div>   
				</div>                       
			</form>
				<br><br>
				<div class="d-flex justify-content-end">
					<a href="admin-viewadmin" class="btn btn-success" role="button" aria-pressed="true">Create Admin</a>
				</div>
			<!-- ISI END -->
		</div>
	</div>
@endsection


