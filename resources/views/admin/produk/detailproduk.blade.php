@extends('admin.layout.template')
@section('title', 'Admin | Detail Produk')
@section('header')
	<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
			<h5 class="mb-0 text-uppercase text-center">Detail Produk</h5><hr><br>
			<!-- JUDUL END -->

			<!-- ISI -->
			<form action="/updateproduk-{{$produk->id}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row" style="margin-left: 20px; margin-right: 20px">
                    <div class="row mb-3">
						<label for="inputText" class="col-sm-3 col-form-label">Jenis Produk</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="nama_jenis_produk" style="text-transform:uppercase" value="{{ $produk->jenis_produk->nama_jenis_produk}}" disabled>
                        </div>
					</div>
					<div class="row mb-3">
						<label for="inputText" class="col-sm-3 col-form-label">Nama Produk</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="nama_produk" style="text-transform:uppercase" value="{{$produk->nama_produk}}" disabled>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputText" class="col-sm-3 col-form-label">Deskripsi Produk</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="deskripsi_produk" disabled >{{$produk->deskripsi_produk}}</textarea>
						</div>
					</div>   
					<div class="row mb-3">
						<label for="inputText" class="col-sm-3 col-form-label">Harga Sebelum Diskon</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="harga_produk" id="dengan-rupiah" value="{{$produk->harga_produk}}" disabled>
						</div>
					</div> 
					<div class="row mb-3">
						<label for="inputText" class="col-sm-3 col-form-label">Total Stok Produk</label>
						<div class="col-sm-8">
							<input type="number" class="form-control" name="total_stok_produk" value="{{$produk->total_stok_produk}}" disabled>
						</div>
					</div>     
					<div class="row mb-3">
						<label for="image" class="col-sm-3 col-form-label">Foto Utama Produk</label>
						<div class="col-sm-8">
							<input type="file" id="foto_utama_produk" class="form-control" name="foto_utama_produk" disabled>
						</div>
					</div>                    
				</div>	
			</form>
			<!-- ISI END -->
		</div>
	</div>
@endsection

@section('javascript')
    <script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets_admin/js/table-datatable.js"></script>
	<script src="assets_admin/js/rupiah.js"></script>
@endsection