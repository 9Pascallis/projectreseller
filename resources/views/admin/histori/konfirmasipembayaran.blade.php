@extends('admin.layout.template')
@section('title', 'Admin | Konfirmasi Pembayaran')
@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')

<div class="card">
    <div class="card-header py-3">
        <div class="row align-items-center g-3">
            <div class="col-12 col-lg-6">
                <h5 class="mb-0"><b>Konfirmasi Pembayaran</b></h5>
            </div>
            <div class="col-12 col-lg-6 text-md-end">
                <img src="{{asset('assets_reseller/img/core-img/logoorange.png')}}" class="text-center" width="180px"
                    style="padding-bottom: 10px" alt="">
            </div>
        </div>
    </div>

    <div class="card-header py-2">
        <div class="row row-cols-1 row-cols-lg-3 justify-content-between">
            <div class="col">
                <div class="">
                    <small>Invoice</small>
                    <div class=""><b> {{ $pemesanan->invoice }}</b></div>
                    <div class="invoice-detail">
                        Tgl Pemesanan: <?php echo date('d-m-Y', strtotime($pemesanan->tanggal_pemesanan));?><br>
                        <span class="badge bg-warning text-light">BELUM DIBAYAR</span>
                    </div>
                </div>
            </div>

            <div class="col text-end">
                <div class="">
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
                        <td class="text-center">Rp. {{ number_format($item->item_produk->produk->harga_produk, 0, ',', '.') }}</td>
                        <td class="text-center">{{ $item->kuantitas }}</td>
                        <td class="text-center">Rp. {{ number_format($item->jumlah_harga, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--end row-->
    </div>

    <div class="card-header py-2">
        <div class="">
            <h6 class="text-end">Total Harga:<b style="color: red"> Rp.
                    {{ number_format($pemesanan->total_harga_pemesanan, 0, ',', '.') }}</b></h6>
        </div><br><br>
        <div class="row row-cols-12 row-cols-lg-12">
            <div class="col">
                <div class="">
                    <small>Dari :</small>
                    <address class="m-t-5 m-b-5">
                        <strong class="text-inverse">Respiro Indonesia</strong><br>
                        Jl. Makam Tentara No.65 B<br>
                        Madiun, Jawa Timur<br>
                        No Telp: 08112125900<br>
                    </address>
                </div>
            </div>
            <div class="col">
                <div class="">
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
            <div class="col">
                <div class="">
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

    <div class="card-body">
        <div class="d-flex justify-content-end">
            <div style="padding-right: 5px"><a href="{{route('indexhistoripemesanan')}}" class="btn btn-secondary"
                    role="button" aria-pressed="true">Cancel</a></div>
            <form action="/konfirmasi/{{ $pemesanan->id }}" method="POST">
                @csrf
                <div><button type="submit" class="btn btn-success">Konfirmasi</button></div>
            </form>

        </div>
    </div>
</div>

{{-- </form> --}}
<!-- ISI END -->
</div>
</div>
@endsection

@section('javascript')
<script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets_admin/js/table-datatable.js"></script>
<script src="assets_admin/js/rupiah.js"></script>
@endsection
