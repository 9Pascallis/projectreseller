@extends('admin.layout.template')
@section('title', 'Admin | Detail Produk')
@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <a href="/indexproduk" class="btn btn-secondary" role="button" aria-pressed="true">Kembali</a>

        <!-- JUDUL -->

        <hr><br>
        <!-- JUDUL END -->

        <!-- ISI -->
        <div class="product-detail-card">
            <div class="product-detail-body">
                <div class="row g-0">

                    <div class="col-12 col-lg-4">
                        <div class="text-center"><img src="{{asset('storage/'.$produk->foto_utama_produk)}}" alt=""
                                style="width: 200px">
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="product-info-section p-3">
                            <h6 class="mt-3 mt-lg-0 mb-30">{{$produk->jenis_produk->nama_jenis_produk}}</h6>
                            <h5 class="mt-3 mt-lg-0 mb-0"><b>{{$produk->nama_produk}}</b></h5>
                            <p class="mt-1">Berat Produk: <b>{{$produk->berat_produk}} Gram</b> </p>
                            <hr>

                            <div class="d-flex align-items-center mt-3 gap-2">
                                <p class="mb-0">Harga Produk: <h6>Rp.
                                        {{ number_format($produk->harga_produk, 0, ',', '.')}}</h6>
                                </p>
                                <p class="mb-0"><b>|</b> Diskon Produk: <h6>{{$produk->diskon_produk}}%</h6>
                                </p>
                                <p class="mb-0"><b>|</b> Harga Reseller: <h6 class="text-danger"><b>Rp.
                                            {{ number_format($produk->harga_produk, 0, ',', '.')}}</b></h6>
                                </p>
                            </div>
                            <div class="mt-3">
                                <h6>Deskripsi:</h6>
                                <p class="mb-0">{{$produk->deskripsi_produk}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
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
