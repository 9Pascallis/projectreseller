@extends('admin.layout.template')
@section('title', 'Admin | View Produk')
@section('header')
	<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
				<h5 class="mb-0 text-uppercase text-center">View Produk</h5><hr><br>
			<!-- JUDUL END -->

				<div class="col-12">
					<a href="admin-createproduk" class="btn btn-success" role="button" aria-pressed="true">+ Tambah Produk</a>
				</div><br>
				<div class="row mb-3">
					<label for="inputText" class="col-sm-2 col-form-label">PILIH JENIS KATEGORI</label>
					<div class="col-sm-10">
					<select class="form-select mb-3" style="width: 100%;">
						<option selected="selected">-</option>
						<option>AKSESORIS</option>
						<option>TAS</option>
						<option>JAKET</option>
						<option>ROMPI</option>
						<option>SARUNG TANGAN</option>
						<option>T-SHIRT</option>
						<option>AKSESORIS KEPALA</option>
						</select>
					</div>  
				</div>

			<!-- ISI -->
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>NAMA PRODUK</th>
								<th>KATEGORI</th>
								<th>HARGA</th>
								<th>STOK</th>
								<th>TGL UPLOAD</th>
								<th>TGL UPDATE</th>
								<th class="text-center">ACTION</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>RESPIRO TR-05 XENTRA N R1.4 RED</td>
								<td>JAKET</td>
								<td>Rp.440.000</td>
								<td>56</td>
								<td>07/01/2023</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-info px-2" href="admin-createproduk"><i class="fa fa-eye"></i></a>
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createproduk"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createproduk"><i class="fa fa-trash"></i></a>
								</td>

							</tr>
							<tr>
								<td>2</td>
								<td>RESPIRO TR-05 XENTRA N R1.4 RED</td>
								<td>JAKET</td>
								<td>Rp.440.000</td>
								<td>56</td>
								<td>07/01/2023</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-info px-2" href="admin-createproduk"><i class="fa fa-eye"></i></a>
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createproduk"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createproduk"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>RESPIRO TR-05 XENTRA N R1.4 RED</td>
								<td>JAKET</td>
								<td>Rp.440.000</td>
								<td>56</td>
								<td>07/01/2023</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-info px-2" href="admin-createproduk"><i class="fa fa-eye"></i></a>
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createproduk"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createproduk"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>RESPIRO TR-05 XENTRA N R1.4 RED</td>
								<td>JAKET</td>
								<td>Rp.440.000</td>
								<td>56</td>
								<td>07/01/2023</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-info px-2" href="admin-createproduk"><i class="fa fa-eye"></i></a>
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createproduk"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createproduk"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td>RESPIRO TR-05 XENTRA N R1.4 RED</td>
								<td>JAKET</td>
								<td>Rp.440.000</td>
								<td>56</td>
								<td>07/01/2023</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-info px-2" href="admin-createproduk"><i class="fa fa-eye"></i></a>
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createproduk"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createproduk"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>6</td>
								<td>RESPIRO TR-05 XENTRA N R1.4 RED</td>
								<td>JAKET</td>
								<td>Rp.440.000</td>
								<td>56</td>
								<td>07/01/2023</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-info px-2" href="admin-createproduk"><i class="fa fa-eye"></i></a>
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createproduk"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createproduk"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>7</td>
								<td>RESPIRO TR-05 XENTRA N R1.4 RED</td>
								<td>JAKET</td>
								<td>Rp.440.000</td>
								<td>56</td>
								<td>07/01/2023</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-info px-2" href="admin-createproduk"><i class="fa fa-eye"></i></a>
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createproduk"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createproduk"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>8</td>
								<td>RESPIRO TR-05 XENTRA N R1.4 RED</td>
								<td>JAKET</td>
								<td>Rp.440.000</td>
								<td>56</td>
								<td>07/01/2023</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-info px-2" href="admin-createproduk"><i class="fa fa-eye"></i></a>
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createproduk"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createproduk"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>9</td>
								<td>RESPIRO TR-05 XENTRA N R1.4 RED</td>
								<td>JAKET</td>
								<td>Rp.440.000</td>
								<td>56</td>
								<td>07/01/2023</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-info px-2" href="admin-createproduk"><i class="fa fa-eye"></i></a>
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createproduk"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createproduk"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>10</td>
								<td>RESPIRO TR-05 XENTRA N R1.4 RED</td>
								<td>JAKET</td>
								<td>Rp.440.000</td>
								<td>56</td>
								<td>07/01/2023</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-info px-2" href="admin-createproduk"><i class="fa fa-eye"></i></a>
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createproduk"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createproduk"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
			<!-- ISI END -->
		</div>
	</div>
@endsection

@section('javascript')
<script src="assets_admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets_admin/js/table-datatable.js"></script>
@endsection