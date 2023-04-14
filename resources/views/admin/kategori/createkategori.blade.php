@extends('admin.layout.template')
@section('title', 'Admin | Tambah Kategori')
@section('content')
	<div class="card">
		<div class="card-body">
			<!--Judul-->
				<h5 class="mb-0 text-uppercase text-center">Tambah Kategori</h5><hr><br>
			<!--End Judul-->
			
			<!--Isi-->
				<div class="mb-3">
					<label class="form-label">Nama Kategori Produk</label>
					<input type="text" class="form-control" placeholder="Isi Kategori Produk">
				</div>
				<br>
				<div class="col-12">
					<button class="btn btn-success" type="submit">Tambah Kategori</button>
				</div>
			<!--End Isi-->
		</div>
	</div>
@endsection