@extends('admin.layout.template')
@section('title', 'Admin | Tambah Stok Item Produk')
@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">Item {{$item_produk->produk->nama_produk}}</h5>
        <hr><br>
        <!-- JUDUL END -->

        <!-- ISI -->
        <div class="row" style="margin-left: 20px; margin-right: 20px">
            <form action="/insertdatastokitemproduk" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_item_produk" value="{{$item_produk->id}}">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nama Ukuran</label>
                    <div class="col-sm-8 ">
                        <div class="form-control">{{ $item_produk->ukuran->nama_ukuran}}</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nama Warna</label>
                    <div class="col-sm-8 ">
                        <div class="form-control">{{ $item_produk->warna->nama_warna}}</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Stok Item Produk</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="jumlah_stok" value="{{old('jumlah_stok')}}"
                            required>
                        @error('jumlah_stok')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div style="padding-right: 5px"><a href="/indexitemproduk/{{ $item_produk->produk->id }}"
                            class="btn btn-secondary" role="button" aria-pressed="true">Cancel</a></div>
                    <div><button type="submit" class="btn btn-success">Tambah</button></div>
                </div>
            </form>
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

    @if(Session::has('update'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('update') }}");
    @endif

</script>
@endsection
