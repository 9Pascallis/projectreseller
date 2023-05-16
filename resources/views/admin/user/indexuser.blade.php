@extends('admin.layout.template')
@section('title', 'Admin | View User')
@section('header')
	<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
				<h5 class="mb-0 text-uppercase text-center">User</h5><hr><br>
			<!-- JUDUL END -->

				<div class="col-12">
					<a href="tambahuser" class="btn btn-success" role="button" aria-pressed="true">+ User</a>
				</div><br>

			<!-- ISI -->
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>NAMA LENGKAP</th>
								<th>EMAIL</th>
								<th>NO TELP</th>
								<th>TGL BERGABUNG</th>
								<th class="text-center">ACTION</th>
							</tr>
						</thead>
						<tbody>
							@php
								$no = 1;
							@endphp
							@foreach ( $user as $item)
							<tr>
								<td>{{ $no++}}</td>
								<td>{{ $item->nama_lengkap_user}}</td>
								<td>{{ $item->email_user}}</td>
								<td>{{ $item->no_telp_user}}</td>
								<td>{{ $item->created_at->format('d-m-Y') }}</td>
								<td class="text-center">
									<a class="btn btn-sm btn-outline-warning px-2" href="/edituser-{{ $item->id }}"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-sm btn-outline-danger px-2 deleteuser" data-id="{{ $item->id }}" data-nama="{{ $item->nama_lengkap_user}}"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							@endforeach
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
	<script>
		@if(Session::has('create'))
			toastr.options =
			{
				"closeButton" : true,
				"progressBar" : true
			}
					toastr.success("{{ session('create') }}");
		@endif
		
		@if(Session::has('update'))
			toastr.options =
			{
				"closeButton" : true,
				"progressBar" : true
			}
					toastr.success("{{ session('update') }}");
		@endif
		
		@if(Session::has('destroy'))
			toastr.options =
			{
				"closeButton" : true,
				"progressBar" : true
			}
					toastr.success("{{ session('destroy') }}");
		@endif
	  </script>
@endsection