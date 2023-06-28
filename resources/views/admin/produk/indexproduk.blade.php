@extends('admin.layout.template')
@section('title', 'Admin | Produk')
@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">Produk</h5>
        <hr><br>
        <!-- JUDUL END -->

        <div class="col-12">
            <a href="tambahproduk" class="btn btn-success" role="button" aria-pressed="true">+ Produk</a>
        </div><br>

        {{-- <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">PILIH JENIS</label>
            <div class="col-sm-10">
                <select class="form-select mb-3" style="width: 100%;">
                    <option selected="selected">-</option>
                    <option>AKSESORIS</option>
                    <option>TAS</option>
                    <option>JAKET</option>
                    <option>ROMPI</option>
                    <option>SARUNG TANGAN</option>
                    <option>T-SHIRT</option>
                    <option>AKSESORIS KEPALA</option>
                </select>
            </div>
        </div> --}}

        <!-- ISI -->
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>JENIS PRODUK</th>
                        <th>NAMA PRODUK</th>
                        <th class="text-center">FOTO PRODUK</th>
                        <th>HARGA</th>
                        <th class="text-center">ACTION</th>
                        <th class="text-center">TAMBAH ITEM</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ( $produk as $item)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $item->jenis_produk->nama_jenis_produk}}</td>
                        <td>{{ $item->nama_produk}}</td>
                        <td class="text-center">
                            <img src="{{asset('storage/'.$item->foto_utama_produk)}}" alt="" style="width:50px">
                        </td>
                        <td>Rp. {{ number_format($item->harga_produk, 0, ',', '.')}}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-outline-info px-2" href="/detailproduk/{{ $item->id }}"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-sm btn-outline-warning px-2" href="/editproduk/{{ $item->id }}"><i
                                    class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-outline-danger px-2 deleteproduk" data-id="{{ $item->id }}"
                                data-nama="{{ $item->nama_produk}}"><i class="fa fa-trash"></i></a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-outline-info px-2" href="/indexitemproduk/{{ $item->id }}"><i
                                    class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- ISI END -->
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
