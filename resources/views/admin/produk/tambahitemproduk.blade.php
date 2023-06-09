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
            <form action="/insertdataitemproduk" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_produk" value="{{$produk->id}}">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Pilih Ukuran</label>
                    <div class="col-sm-8">
                        <select class="form-select" style="width: 100%;" name="id_ukuran" required>
                            @foreach ($ukuran as $item)
                            <option value="{{$item->id}}">{{$item->nama_ukuran}}</option>
                            @endforeach
                            @error('nama_ukuran')
                            <span class="invalid-feedback">{{ $message}}</span>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Pilih Warna</label>
                    <div class="col-sm-8">
                        <select class="form-select" style="width: 100%;" name="id_warna" required>
                            @foreach ($warna as $item)
                            <option value="{{$item->id}}">{{$item->nama_warna}}</option>
                            @endforeach
                            @error('nama_warna')
                            <span class="invalid-feedback">{{ $message}}</span>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-3 col-form-label">Foto Item Produk</label>
                    <div class="col-sm-8">
                        <input type="file" id="foto_item_produk" class="form-control" name="foto_item_produk" required>
                        @error('foto_item_produk')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Stok Item</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="jumlah_stok" value="{{old('jumlah_stok')}}"
                            required>
                        @error('jumlah_stok')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-end">
                    <div style="padding-right: 5px"><a href="/indexitemproduk/{{ $produk->id }}"
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

    @if(Session::has('destroy'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('destroy') }}");
    @endif

    @if(Session::has('error'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.error("{{ session('error') }}");
    @endif

</script>
@endsection
