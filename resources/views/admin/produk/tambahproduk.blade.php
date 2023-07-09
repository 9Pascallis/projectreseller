@extends('admin.layout.template')
@section('title', 'Admin | Tambah Produk')
@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">Tambah Produk</h5>
        <hr><br>
        <!-- JUDUL END -->

        <!-- ISI -->
        <form action="/insertdataproduk" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row" style="margin-left: 20px; margin-right: 20px">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Jenis Produk</label>
                    <div class="col-sm-8">
                        <select class="form-select" style="width: 100%;" name="id_jenis_produk" required>
                            @foreach ($jenis_produk as $item)
                            <option value="{{$item->id}}">{{$item->nama_jenis_produk}}</option>
                            @endforeach
                            @error('nama_jenis_produk')
                            <span class="invalid-feedback">{{ $message}}</span>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nama Produk</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror me-2"
                            name="nama_produk" value="{{old('nama_produk')}}" required>
                        @error('nama_produk')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Deskripsi Produk</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="deskripsi_produk" rows="10"
                            required>{{{ Request::old('deskripsi_produk') }}}</textarea>
                        @error('deskripsi_produk')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Harga Produk</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="harga_produk" value="{{old('harga_produk')}}"
                            required>
                        @error('harga_produk')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Diskon Produk</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="diskon_produk" value="{{old('diskon_produk')}}"
                            required>
                        @error('diskon_produk')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Berat Produk (Gram)</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="berat_produk" value="{{old('berat_produk')}}"
                            required>
                        @error('berat_produk')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <input type="hidden" name="harga_reseller" value="">
                <div class="row mb-3">
                    <label for="image" class="col-sm-3 col-form-label">Foto Utama Produk</label>
                    <div class="col-sm-8">
                        <input type="file" id="foto_utama_produk" class="form-control" name="foto_utama_produk"
                            required>
                        @error('foto_utama_produk')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>

                <br><br>
                <div class="d-flex justify-content-end">
                    <div style="padding-right: 5px"><a href="indexproduk" class="btn btn-secondary" role="button"
                            aria-pressed="true">Cancel</a></div>
                    <div><button type="submit" class="btn btn-success">Tambah</button></div>
                </div>
            </div>
        </form>
        <!-- ISI END -->
    </div>
</div>
@endsection

@section('javascript')
<script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets_admin/js/table-datatable.js"></script>
<script src="assets_admin/js/rupiah.js"></script>
<script>
    // Ambil elemen input harga_produk, diskon_produk, dan harga_reseller
    var inputHargaProduk = document.getElementById('harga_produk');
    var inputDiskonProduk = document.getElementById('diskon_produk');
    var inputHargaReseller = document.getElementById('harga_reseller');

    // Tambahkan event listener untuk menghitung harga reseller saat nilai harga_produk atau diskon_produk berubah
    inputHargaProduk.addEventListener('input', hitungHargaReseller);
    inputDiskonProduk.addEventListener('input', hitungHargaReseller);

    function hitungHargaReseller() {
        // Ambil nilai harga_produk dan diskon_produk
        var hargaProduk = parseInt(inputHargaProduk.value);
        var diskonProduk = parseInt(inputDiskonProduk.value);

        // Hitung harga reseller
        var hargaReseller = hargaProduk * (100 - diskonProduk) / 100;

        // Set nilai harga_reseller
        inputHargaReseller.value = hargaReseller;
    }

</script>

@endsection
