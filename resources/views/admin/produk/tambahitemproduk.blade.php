@extends('admin.layout.template')
@section('title', 'Admin | Tambah Item Produk')
@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">Item {{$produk->nama_produk}}</h5>
        <hr><br>
        <!-- JUDUL END -->

        <!-- ISI -->

            <div class="row" style="margin-left: 20px; margin-right: 20px">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Jenis Produk</label>
                    <div class="col-sm-8">
                        <div class="form-control">{{ $produk->jenis_produk->nama_jenis_produk}}</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nama Produk</label>
                    <div class="col-sm-8">
                        <div class="form-control">{{$produk->nama_produk}}</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Harga Produk</label>
                    <div class="col-sm-8">
                        <div class="form-control">Rp. {{ number_format($produk->harga_produk)}}</div>
                    </div>
                </div>
                <br><br>
                <div class="d-flex justify-content-end">
                    <div style="padding-right: 5px"><a href="indexjenisproduk" class="btn btn-secondary" role="button"
                            aria-pressed="true">Cancel</a></div>
                    <div><button type="submit" class="btn btn-success">Tambah</button></div>
                </div>
            </div>
            <form action="/insertdataproduk" method="POST" enctype="multipart/form-data">
                @csrf
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
