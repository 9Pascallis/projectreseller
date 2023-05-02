@extends('admin.layout.template')
@section('title', 'Admin | View Kategori')
@section('header')
	<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
				<h5 class="mb-0 text-uppercase text-center">View Kategori</h5><hr><br>
			<!-- JUDUL END -->

				<div class="col-12">
					<a href="admin-createkategori" class="btn btn-success" role="button" aria-pressed="true">+ Create Kategori</a>
				</div><br>

			<!-- ISI -->
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>NAMA KATEGORI</th>
								<th>TGL UPLOAD</th>
								<th class="text-center">ACTION</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>AKSESORIS</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createkategori"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createkategori"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>TAS</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createkategori"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createkategori"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>JAKET</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createkategori"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createkategori"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>ROMPI</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createkategori"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createkategori"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td>SARUNG TANGAN</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createkategori"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createkategori"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>6</td>
								<td>T-SHIRT</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createkategori"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createkategori"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>7</td>
								<td>AKSESORIS KEPALA</td>
								<td>17/03/2023</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-warning px-2" href="admin-createkategori"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2" href="admin-createkategori"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<!-- ISI END-->
		</div>
	</div>
@endsection

@section('javascript')
<script src="assets_admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets_admin/js/table-datatable.js"></script>
@endsection