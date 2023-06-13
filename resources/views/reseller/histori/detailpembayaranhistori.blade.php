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
                                    <strong class="text-inverse">{{ $pemesanan->user->nama_lengkap_user }}</strong><br>
                                    {{ $pemesanan->user->email }}<br>
                                    {{ $pemesanan->user->no_telp_user }}<br>
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
                                <th class="text-center" width="20%">HARGA</th>
                                <th class="text-center" width="10%">KUANTITAS</th>
                                <th class="text-center" width="20%">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_pemesanan as $item)
                            <tr>
                                <td>
                                    <p>{{ $item->item_produk->produk->nama_produk }}
                                        ({{ $item->item_produk->warna->nama_warna }} |
                                        {{ $item->item_produk->ukuran->nama_ukuran }})</p>
                                </td>
                                <td class="text-center">Rp.
                                    {{ number_format($item->item_produk->produk->harga_produk, 0, ',', '.') }}</td>
                                <td class="text-center">{{ $item->kuantitas }}</td>
                                <td class="text-center">Rp. {{ number_format($item->jumlah_harga, 0, ',', '.') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--end row-->
            </div>

            <div class="container py-2">
                <div class="col d-flex justify-content-end">
                    <h6 class="text-end">Total Harga:<b style="color: red"> Rp.
                            {{ number_format($pemesanan->total_harga_pemesanan, 0, ',', '.') }}</b></h6>
                </div><br><br>
                <div class="row row-cols-12 row-cols-lg-12">
                    <div class="col">
                        <div class="col">
                            <small>Kepada :</small>
                            <address class="m-t-5 m-b-5">
                                <strong class="text-inverse">{{ $pemesanan->nama_lengkap_penerima }}</strong><br>
                                {{ $pemesanan->alamat_penerima }}<br>
                                {{ $pemesanan->kota_penerima }}, {{ $pemesanan->kode_pos_penerima }}<br>
                                {{ $pemesanan->provinsi_penerima }}<br>
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
