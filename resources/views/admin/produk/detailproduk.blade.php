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

                    <div class="col-12 col-lg-5">
                        <div class="text-center"><img src="{{asset('storage/'.$produk->foto_utama_produk)}}" alt=""
                                style="width: 300px">
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="product-info-section p-3">
                            <h3 class="mt-3 mt-lg-0 mb-0">{{$produk->nama_produk}}</h3>
                            <div class="d-flex align-items-center mt-3 gap-2">
                                <h5 class="mb-0" style="color: red">Rp. {{ number_format($produk->harga_produk)}}</h5>
                            </div>
                            <div class="mt-3">
                                <h6>Deskripsi :</h6>
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
