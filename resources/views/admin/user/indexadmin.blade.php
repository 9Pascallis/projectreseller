@extends('admin.layout.template')
@section('title', 'Admin | Admin')

@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">Admin</h5>
        <hr><br>

        <!-- TAMBAH USER -->
        <div class="col-12">
            <a href="tambahadmin" class="btn btn-success" role="button" aria-pressed="true">+ Admin</a>
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
                        <th>ASAL KOTA</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ( $user as $item)
                    @if ($item->role->nama_role == 'admin')
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $item->nama_lengkap}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->no_telp}}</td>
                        <td>{{ $item->nama_kabupaten}}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-outline-info px-2" href="/detailadmin/{{ $item->id }}"><i
                                class="fa fa-eye"></i></a>
                            <a class="btn btn-sm btn-outline-warning px-2" href="/editadmin/{{ $item->id }}"><i
                                    class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-outline-danger px-2 deleteadmin" data-id="{{ $item->id }}"
                                data-nama="{{ $item->nama_lengkap}}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endif

                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection

@section('javascript')
<script src="assets_admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets_admin/js/table-datatable.js"></script>
<script>
    @if(Session::has('create'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('create') }}");
    @endif

    @if(Session::has('update'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('update') }}");
    @endif

    @if(Session::has('destroy'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('destroy') }}");
    @endif

</script>
@endsection
