@extends('admin.layout.template')
@section('title', 'Admin | Detail Produk')
@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase">Detail Produk</h5>
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
                            <dl class="row mt-3">
                                <dt class="col-sm-3">Total Stok Produk:</dt>
                                <dd class="col-sm-9">{{$produk->total_stok_produk}}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div><hr>

        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center" style="padding-top: 30px">Item Produk</h5><br>
        <!-- JUDUL END -->

        <div class="row" style="margin-left: 20px; margin-right: 20px">
            <div class="col-12">
                <a href="/tambahitemproduk-{{ $produk->id }}" class="btn btn-success" role="button" aria-pressed="true">+ Item Produk</a>
            </div><br>
            <!-- ISI -->
            <div class="table-responsive" style="padding-top: 30px">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">FOTO PRODUK</th>
                            <th class="text-center">WARNA</th>
                            <th class="text-center">UKURAN</th>
                            <th class="text-center">STOK</th>
                            <th class="text-center">ACTION</th>
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
                            <td class="text-center">{{ $item->warna->nama_warna}}</td>
                            <td class="text-center">{{ $item->ukuran->nama_ukuran}}</td>
                            <td class="text-center">{{ $item->total_stok_item_produk}}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-warning px-2" href="/editproduk-{{ $item->id }}"><i
                                        class="fa fa-pencil"></i></a>
                                <a class="btn btn-sm btn-outline-danger px-2 deleteproduk" data-id="{{ $item->id }}"
                                    data-nama="{{ $produk->nama_produk}}"><i class="fa fa-trash"></i></a>
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
@endsection
