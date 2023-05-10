@extends('admin.layout.template')
@section('title', 'Admin | Create Produk')
@section('header')
	<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
			<h5 class="mb-0 text-uppercase text-center">Create Produk</h5><hr><br>
			<!-- JUDUL END -->

			<!-- ISI -->
			<form action="/insertdataproduk" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row" style="margin-left: 20px; margin-right: 20px">
					<div class="row mb-3">
						<label for="inputText" class="col-sm-3 col-form-label">Jenis Produk</label>
						<div class="col-sm-8">
						<select class="form-select" style="width: 100%;" name="id_jenis_produk">
							<option selected="selected">-</option>
							@foreach ($datajenisproduk as $item)
								<option style="text-transform:uppercase" value="{{$item->id}}">{{$item->nama_jenis_produk}}</option>
							@endforeach
							</select>
						</div>  
					</div>
					<div class="row mb-3">
						<label for="inputText" class="col-sm-3 col-form-label">Nama Produk</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="nama_produk" style="text-transform:uppercase">
							@error('nama_produk')
								<div class="alert alert-danger">{{ $message}}</div>
							@enderror
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputText" class="col-sm-3 col-form-label">Deskripsi Produk</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="deskripsi_produk" required></textarea>
							@error('deskripsi_produk')
								<div class="alert alert-danger">{{ $message}}</div>
							@enderror
						</div>
					</div>   
					<div class="row mb-3">
						<label for="inputText" class="col-sm-3 col-form-label">Harga Sebelum Diskon</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="harga_sebelum_diskon_produk" id="dengan-rupiah" >
							@error('harga_sebelum_diskon_produk')
								<div class="alert alert-danger">{{ $message}}</div>
							@enderror
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputText" class="col-sm-3 col-form-label">Harga Setelah Diskon</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="harga_setelah_diskon_produk" id="rupiah" >
							@error('harga_setelah_diskon_produk')
								<div class="alert alert-danger">{{ $message}}</div>
							@enderror
						</div>
					</div>  
					<div class="row mb-3">
						<label for="image" class="col-sm-3 col-form-label">Foto Utama Produk</label>
						<div class="col-sm-8">
							<input type="file" id="foto_utama_produk" class="form-control" name="foto_utama_produk" >
							@error('foto_utama_produk')
							<div class="alert alert-danger">{{ $message}}</div>
							@enderror
						</div>
					</div>                    
					<div class="row mb-3">
						<label for="inputText" class="col-sm-3 col-form-label">Total Stok Produk</label>
						<div class="col-sm-8">
							<input type="number" class="form-control" name="total_stok_produk" >
							@error('total_stok_produk')
							<div class="alert alert-danger">{{ $message}}</div>
							@enderror
						</div>
					</div>                    
					<div class="d-flex justify-content-end">
						<button type="submit" class="btn btn-success insert">Create Produk</button>
					</div>    
				</div>	
			</form>
				{{-- <!-- Modal -->
				<div class="col" style="padding-bottom: 20px">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">+ Tambah Ukuran</button>
					
					<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Tambah Ukuran</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row mb-3">
								<label for="inputText" class="col-sm-3 col-form-label">Warna</label>
								<div class="col-sm-8">
								<input type="text" class="form-control" style="text-transform:uppercase">
								</div>
							</div>  
							<div class="row mb-3">
								<label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
								<div class="col-sm-8">
								<input type="text" class="form-control" style="text-transform:uppercase" maxlength="3">
								</div>
							</div>  
							<div class="row mb-3">
								<label for="inputText" class="col-sm-3 col-form-label">Stok</label>
								<div class="col-sm-8">
								<input type="number" class="form-control">
								</div>
							</div>
							<div class="row mb-3">
								<label for="inputText" class="col-sm-3 col-form-label">Foto Varian</label>
								<div class="col-sm-8">
								<input type="file" class="form-control" >
								</div>
							</div>                    
						</div>
						<div class="modal-footer">
							<a href="admin-createproduk" class="btn btn-success" role="button" aria-pressed="true">Tambah Ukuran</a>
						</div>
						</div>
					</div>
					</div>
				</div>     
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>WARNA</th>
								<th>UKURAN</th>
								<th>STOK</th>
								<th>FOTO</th>
								<th>TGL UPLOAD</th>
								<th>TGL UPDATE</th>
								<th class="text-center">ACTION</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>MERAH 001</td>
								<td>S</td>
								<td>43</td>
								<td>FOTOMERAH.JPG</td>
								<td>07/01/2023</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-warning px-2" href="/input-cutting-output"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="/input-cutting-output"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div> --}}
			<!-- ISI END -->

		</div>
	</div>
@endsection

@section('javascript')
    <script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets_admin/js/table-datatable.js"></script>
	<script src="assets_admin/js/rupiah.js"></script>
@endsection