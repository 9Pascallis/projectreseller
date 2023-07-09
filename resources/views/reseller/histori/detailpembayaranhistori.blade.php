@extends('reseller.layout.template')
@section('title', 'Reseller | Detail Histori')

@section('content')
<br><br>
<!-- SECTION -->
<div class="checkout_area mb-100">
    <div class="container">
        <div class="card">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="col">
                            <h5 class="mb-1"><b>Detail Pembayaran</b></h5>
                            Tanggal Pembayaran:
                            <b><?php echo date('d-m-Y', strtotime($pemesanan->tanggal_pembayaran));?></b>

                        </div>
                    </div>
                    <div class="col-6 text-md-end">
                        <div class="col d-flex justify-content-end">
                            <img src="{{asset('assets_reseller/img/core-img/logoorange.png')}}" class="text-center"
                                width="180px" style="padding-bottom: 10px" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-2">
                <div class="row row-cols-1 row-cols-lg-3 justify-content-between">
                    <div class="col">
                        <div class="col">
                            <small>Invoice</small>
                            <div class=""><b> {{ $pemesanan->invoice }}</b></div>
                            <div class="invoice-detail">
                                Tgl Pemesanan: <?php echo date('d-m-Y', strtotime($pemesanan->tanggal_pemesanan));?><br>
                                <span class="badge bg-success text-light">SUDAH DIBAYAR</span>
                            </div>
                        </div>
                    </div>
                    <div class="col text-end">
                        <div class="col d-flex justify-content-end">
                            <div>
                                <small>Pemesan</small>
                                <address class="m-t-5 m-b-5">
                                    <strong class="text-inverse">{{ $pemesanan->user->nama_lengkap }}</strong><br>
                                    {{ $pemesanan->user->email }}<br>
                                    {{ $pemesanan->user->no_telp }}<br>
                                </address>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-invoice">
                        <thead>
                            <tr>
                                <th>DETAIL PEMESANAN</th>
                                <th class="text-center" width="15%">HARGA RETAIL</th>
                                <th class="text-center" width="15%">HARGA RESELLER</th>
                                <th class="text-center" width="5%">KUANTITAS</th>
                                <th class="text-center" width="15%">TOTAL CUST</th>
                                <th class="text-center" width="15%">TOTAL TAGIHAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $totalHargaCustomer = 0;
                            $totalKuantitas = 0;
                            @endphp
                            @foreach ($detail_pemesanan as $item)
                            <tr>
                                <td>
                                    <p>{{ $item->item_produk->produk->nama_produk }}
                                        ({{ $item->item_produk->warna->nama_warna }} |
                                        {{ $item->item_produk->ukuran->nama_ukuran }})</p>
                                </td>
                                <td class="text-center">Rp.
                                    {{ number_format($item->item_produk->produk->harga_produk, 0, ',', '.') }}
                                    ({{$item->item_produk->produk->diskon_produk}}%)</td>
                                <td class="text-center">Rp.
                                    {{ number_format($item->item_produk->produk->harga_reseller, 0, ',', '.') }}
                                </td>
                                <td class="text-center">
                                    @php
                                    $totalKuantitas += $item->kuantitas;
                                    @endphp
                                    {{ $item->kuantitas }}</td>
                                <td class="text-center">
                                    @php
                                    $totalHarga = $item->item_produk->produk->harga_produk * $item->kuantitas;
                                    $totalHargaCustomer += $totalHarga;
                                    @endphp
                                    Rp. {{ number_format($totalHarga, 0, ',', '.') }}
                                </td>
                                <td class="text-center">Rp.
                                    {{ number_format($item->jumlah_harga, 0, ',', '.') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-center" width="15%"></th>
                                <th class="text-center" width="15%"></th>
                                <th class="text-center" width="5%">
                                    <h6>{{$totalKuantitas}}</h6>
                                </th>
                                <th class="text-center " width="15%">
                                    <h6>Rp.
                                        {{ number_format($totalHargaCustomer, 0, ',', '.') }}</h6>
                                </th>
                                <th class="text-center " width="15%">
                                    <h6 class="text-danger">Rp.
                                        {{ number_format($pemesanan->total_harga_pemesanan, 0, ',', '.') }}</h6>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="container py-2">
                <div class="col d-flex justify-content-end">
                    <h6 class="text-end">Total Harga:<b style="color: red"> Rp.
                            {{ number_format($pemesanan->total_harga_pemesanan, 0, ',', '.') }}</b></h6>
                </div><br><br>
                <div class="row row-cols-12 row-cols-lg-12">
                    <div class="col">
                        <div class="col">
                            <small>Tujuan :</small>
                            <address class="m-t-5 m-b-5">
                                <strong class="text-inverse">{{ $pemesanan->nama_lengkap_penerima }}</strong><br>
                                {{ $pemesanan->alamat_penerima }}<br>
                                {{ $pemesanan->nama_kabupaten }}, {{ $pemesanan->nama_kecamatan }}<br>
                                {{ $pemesanan->nama_provinsi }}, {{ $pemesanan->kode_pos_penerima }}<br>
                                No Telp: {{ $pemesanan->nomor_hp_penerima }}<br>
                            </address>
                        </div>
                    </div>
                    <div class="col text-end">
                        <div class="col d-flex justify-content-end">
                            <div>
                                <small>No Resi :</small>
                                <address class="m-t-5 m-b-5">
                                    <strong class="text-inverse">{{ $pemesanan->no_resi }}</strong><br>
                                    Jasa Kurir: {{ $pemesanan->nama_jasa_pengiriman }}<br>
                                    Layanan: {{ $pemesanan->nama_jenis_layanan }}<br>
                                </address>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <div style="padding-right: 5px"><a href="{{route('histori')}}" class="btn essence-btn bg-info"
                            role="button" aria-pressed="true">Kembali</a></div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- SECTION END -->


@endsection
