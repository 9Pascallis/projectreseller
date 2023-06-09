@extends('reseller.layout.template')
@section('title', 'Reseller | Lakukan Pembayaran')

@section('content')
<br><br>
<!-- SECTION -->
<div class="single-blog-wrapper mb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card">
                    <div class="container py-3">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="col">
                                    <h6 class="mb-1"><b>DETAIL PEMESANAN</b></h6>
                                    {{-- <div class="">No Invoice: {{$pemesanan->invoice}}
                                </div> --}}
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
                <div class="container">
                    {{-- <div class="text-center mt-30"><img src="{{asset('assets_reseller/img/core-img/logoorange.png')}}"
                    class="text-center"
                    width="180px" style="padding-bottom: 10px" alt=""></div>
                <div class="text-center">
                    <h5 class="text-center">DETAIL PEMESANAN</h5>
                </div> --}}
                <div class="text-center">
                    <h5 class="mb-1"><b>INVOICE</b></h5>
                </div>
                <div class="text-center">
                    <h6 class="mb-1">No: <b>{{$pemesanan->invoice}}</b></h6>
                </div>
                <div class="text-center">Tanggal Pemesanan:
                    <?php echo date('d-m-Y', strtotime($pemesanan->tanggal_pemesanan));?></div>
                <div class="text-center mt-30">Silakan Transfer ke no rekening:</div>
                <br>
                <div class="text-center"><b>BCA: 151290120 (respiro)</b></div>
                <div class="text-center"><b>BRI: 102931027 (respiro)</b></div>
                <div class="text-center mb-30"><b>Mandiri: 234720422342 (respiro)</b></div>
                <div class="text-center">Jika sudah melakukan pembayaran, harap konfirmasi ke:</div>
                <div class="text-center mb-30">
                    <a href="https://wa.me/628112125900?text=Isi Pesan">
                        <p><b><i class="fa fa-whatsapp" style="color: green; font-size: 16px"></b></i><b><u
                                    style="color: green; font-size: 15px"> +628112125900</u></b></p>
                    </a>
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
                            <small>Tujuan :</small>
                            <address class="m-t-5 m-b-5">
                                <strong class="text-inverse">{{ $pemesanan->nama_lengkap }}</strong><br>
                                {{ $pemesanan->alamat }}<br>
                                {{ $pemesanan->kota }}, {{ $pemesanan->kode_pos }}<br>
                                {{ $pemesanan->provinsi }}<br>
                                No Telp: {{ $pemesanan->nomor_hp }}<br>
                            </address>
                        </div>
                    </div>
                    <div class="col text-end">
                        <div class="col d-flex justify-content-end">
                            <div>
                                <small>No Resi :</small>
                                <address class="m-t-5 m-b-5">
                                    <strong class="text-inverse">{{ $pemesanan->no_resi }}</strong><br>
                                    Jasa Kurir: {{ $pemesanan->nama_jasa_kurir }}<br>
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
</div>
</div>

<!-- SECTION END -->
@endsection

@section('javascript')
<script>
    function resetFields() {
        // Reset nilai-nilai input fields
        document.getElementById("nama_lengkap_user").value = "";
        document.getElementById("no_telp_user").value = "";
        document.getElementById("alamat").value = "";
        document.getElementById("provinsi").value = "";
        document.getElementById("kota").value = "";
        document.getElementById("kecamatan").value = "";
        document.getElementById("kode_pos").value = "";
    }

</script>

@endsection
