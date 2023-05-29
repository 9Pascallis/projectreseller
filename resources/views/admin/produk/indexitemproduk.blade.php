@extends('admin.layout.template')
@section('title', 'Admin | Detail Produk')
@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <a href="/indexproduk" class="btn btn-secondary" role="button" aria-pressed="true">Kembali</a><hr>
        
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center" style="padding-top: 30px">Item Produk {{ $produk->nama_produk}}</h5><br><br>
        <!-- JUDUL END -->

        <div class="row" style="margin-left: 20px; margin-right: 20px">
            <div class="col-12">
                <a href="/tambahitemproduk/{{ $produk->id }}" class="btn btn-success" role="button" aria-pressed="true">+ Item Produk</a>
            </div><br>
            <!-- ISI -->
            <div class="table-responsive" style="padding-top: 30px">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">FOTO PRODUK</th>
                            <th class="text-center">UKURAN</th>
                            <th class="text-center">WARNA</th>
                            <th class="text-center">STOK</th>
                            <th class="text-center">HAPUS</th>
                            <th class="text-center">TAMBAH STOK</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ( $item_produk as $item)
                        <tr>
                            <td class="text-center">{{ $no++}}</td>
                            <td class="text-center">
                                <img src="{{asset('storage/'.$item->foto_item_produk)}}" alt="" style="width: 75px">
                            </td>
                            <td class="text-center">{{ $item->ukuran->nama_ukuran}}</td>
                            <td class="text-center">{{ $item->warna->nama_warna}}</td>
                            <td class="text-center">{{ $item->jumlah_stok ?? '-' }}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-danger px-2 deleteitemproduk" data-id="{{ $item->id }}"><i class="fa fa-trash"></i></a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-info px-2" href="/tambahstokitemproduk/{{ $item->id }}"><i
                                        class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- ISI END -->

        </div>
        <!-- ISI END -->
    </div>
</div>
@endsection

@section('javascript')
<script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets_admin/js/table-datatable.js"></script>
<script src="assets_admin/js/rupiah.js"></script>
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
