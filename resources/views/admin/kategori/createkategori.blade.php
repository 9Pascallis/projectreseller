@extends('admin.layout.template')
@section('title', 'Admin | Tambah Kategori')
@section('content')
	<div class="card">
		<div class="card-body">
			<!--Judul-->
				<h5 class="mb-0 text-uppercase text-center">Create Kategori</h5><hr><br>
			<!--End Judul-->
			
			<!-- ISI -->
			<form>
				<div class="row" style="margin-left: 20px; margin-right: 20px">
				<div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label">Nama Kategori</label>
					<div class="col-sm-9">
					<input type="text" class="form-control" style="text-transform:uppercase">
					</div>
				</div>
				</div>                       
			</form>
				<br><br>
				<div class="d-flex justify-content-end">
					<a href="admin-viewkategori" class="btn btn-success" role="button" aria-pressed="true">Create Kategori</a>
				</div>
			<!-- ISI END -->
		</div>
	</div>
@endsection