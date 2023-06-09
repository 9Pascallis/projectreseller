@extends('admin.layout.template')
@section('title', 'Admin | Histori Pemesanan')
@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">HISTORI PEMESANAN</h5>
        <hr><br>
        <!-- JUDUL END -->

        <!-- ISI -->
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NO INVOICE</th>
                        <th>TGL PEMESANAN</th>
                        <th>NAMA RESELLER</th>
                        <th>TOTAL HARGA</th>
                        <th class="text-center">STATUS</th>
                        <th class="text-center">CONFIRM</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($pemesanan as $item)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{$item->invoice}}</td>
                        <td><?php echo date('d-m-Y', strtotime($item->tanggal_pemesanan)); ?></td>
                        <td>{{$item->user->nama_lengkap_user}}</td>
                        <td>Rp. {{ number_format($item->total_harga_pemesanan, 0, ',', '.') }}</td>
                        <td class="text-center"><span class="badge bg-warning text-light">BELUM DIBAYAR</span></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-outline-warning px-2"
                                href="/konfirmasipembayaran/{{ $item->id }}"><i class="fa fa-pencil"></i></a>
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
@endsection
