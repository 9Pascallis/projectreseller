@extends('reseller.layout.template')
@section('title', 'Reseller | Histori')

@section('content')
@if ($pemesanan == null || $pemesanan->invoice == 0  )
<br><br>
<!-- SECTION -->
<div class="checkout_area mb-100">
    <div class="container">
        <div class="card-body">
            <!-- JUDUL -->
            <h5 class="mb-0 text-uppercase text-center mb-50">Histori Pemesanan<hr></h5>
            <!-- JUDUL END -->
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NO INVOICE</th>
                            <th>TGL PEMESANAN</th>
                            <th>NAMA PEMESAN</th>
                            <th>NO TELP PEMESAN</th>
                            <th>TOTAL HARGA</th>
                            <th class="text-center">STATUS</th>
                            <th class="text-center">DETAIL</th>
                        </tr>
                    </thead>
                </table>
                <div class="d-flex justify-content-center mt-30 mb-50">
                    <p>TIDAK ADA PEMESANAN!</p>
                </div>
                <div class="d-flex justify-content-center mt-50">
                    <a href="{{url('belanja')}}" class="btn essence-btn bg-info">SILAKAN BELANJA</a>
                </div>
            </div>
            <!-- ISI END -->
        </div>
    </div>
</div>
<!-- SECTION END -->
@else
<br><br>
<!-- SECTION -->
<div class="checkout_area mb-100">
    <div class="container">
        <div class="card-body">
            <!-- JUDUL -->
            <h5 class="mb-0 text-uppercase text-center mb-50">Histori Pemesanan<hr></h5>
            <!-- JUDUL END -->
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NO INVOICE</th>
                            <th>TGL PEMESANAN</th>
                            <th>NAMA PEMESAN</th>
                            <th>NO TELP PEMESAN</th>
                            <th>TOTAL HARGA</th>
                            <th class="text-center">STATUS</th>
                            <th class="text-center">DETAIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($user as $item)
                        <tr>
                            <td>{{ $no++}}</td>
                            <td>{{$item->invoice}}</td>
                            <td><?php echo date('d-m-Y', strtotime($pemesanan->tanggal_pemesanan)); ?></td>
                            <td>{{$item->nama_lengkap}}</td>
                            <td>{{$item->nomor_hp}}</td>
                            <td>Rp. {{ number_format($item->total_harga_pemesanan) }}</td>
                            @if ($item->status == 1)
                            <td class="text-center"><span class="badge bg-warning text-light">BELUM DIBAYAR</span></td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-warning" href="/historipemesanan/{{ $item->id }}"><i
                                    class="fa fa-eye"></i></a>
                            </td>
                            @else
                            <td class="text-center"><span class="badge bg-success text-light">SUDAH DIBAYAR</span></td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-success" href="/historipembayaran/{{ $item->id }}"><i
                                        class="fa fa-eye"></i></a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- ISI END -->
        </div>
    </div>
</div>
<!-- SECTION END -->
@endif

@endsection
