@extends('admin.layout.template')
@section('title', 'Admin | Ukuran')

@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">Ukuran</h5>
        <hr><br>

        <!-- TAMBAH UKURAN -->
        <div class="col-12">
            <a href="tambahukuran" class="btn btn-success" role="button" aria-pressed="true">+ Ukuran</a>
        </div><br>

        <!-- ISI -->
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA UKURAN</th>
                        <th>TGL UPLOAD</th>
                        <th class="text-center">HAPUS</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ( $ukuran as $item)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $item->nama_ukuran}}</td>
                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-outline-danger px-2 deleteukuran" data-id="{{ $item->id }}"
                                data-nama="{{ $item->nama_ukuran}}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
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

    @if(Session::has('destroy'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('destroy') }}");
    @endif

</script>
@endsection
