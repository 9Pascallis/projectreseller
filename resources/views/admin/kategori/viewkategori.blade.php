@extends('admin.layout.template')
@section('title', 'Admin | View Kategori')
@section('header')
	<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')
	<div class="card">
		<div class="card-body">
			<!--Judul-->
				<h5 class="mb-0 text-uppercase text-center">View Kategori</h5><hr><br>
			<!--End Judul-->

				<div class="col-12">
					<button class="btn btn-success" type="submit">+ Tambah Kategori</button>
				</div><br>

			<!--Table-->
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nama Kategori Produk</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Aksesoris</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Tas</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Jaket</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Rompi</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Sarung Tangan</td>
							</tr>
							<tr>
								<td>6</td>
								<td>T-Shirt</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Aksesoris Kepala</td>
							</tr>
						</tbody>
					</table>
				</div>
			<!--End Table-->
		</div>
	</div>
@endsection

@section('javascript')
<script src="assets_admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets_admin/js/table-datatable.js"></script>
@endsection