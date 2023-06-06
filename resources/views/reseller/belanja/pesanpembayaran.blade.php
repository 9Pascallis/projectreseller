@extends('reseller.layout.template')
@section('title', 'Reseller | Lakukan Pembayaran')

@section('content')
<br><br>
<!-- SECTION -->
<div class="single-blog-wrapper mb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="order-details-confirmation">
                    <div class="col">
                        <div class="col-md-12 mb-3 mb-30 text-center">
                            <div class="text-center"><img
                                    src="{{asset('assets_reseller/img/core-img/logoorange.png')}}" class="text-center"
                                    width="180px" style="padding-bottom: 10px" alt=""></div>

                            <hr>
                        </div>
                        <h5 class="text-center">PEMESANAN BERHASIL</h5>
                        
                        <div class="text-center  mb-30">No Invoice: {{$pemesanan->invoice}}</div>

                        <div class="text-center">Silakan Transfer ke no rekening:</div>
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
                            {{-- <a href="https://wa.me/628112125900?text=Isi Pesan" target="_blank" data-toggle="tooltip"
                                data-placement="top" title="Whatsapp"></a> --}}
                        </div>
                        <!-- LIST PRODUK -->
                        <div class="order-details-confirmation">
                            <ul class="order-details-form mb-30">
                                <h6 class="text-center">TAGIHAN PEMESANAN</h6>
                                <div class="text-center mb-30">Tanggal: <?php echo date('d-m-Y', strtotime($pemesanan->tanggal_pemesanan)); ?></div>
                                <li><span><b>PRODUK</b></span><span><b>Harga</b></span></li>
                                @if (!empty($pemesanan))
                                @foreach ($detail_pemesanan as $item)
                                <li><span>{{ $item->item_produk->produk->nama_produk }} |
                                        {{ $item->item_produk->warna->nama_warna }} |
                                        {{ $item->item_produk->ukuran->nama_ukuran }} ({{ $item->kuantitas }})
                                    </span><span>Rp.
                                        {{ number_format($item->jumlah_harga) }}</span></li>
                                @endforeach
                                <li><span><b>Total Harga</b></span> <span><b>Rp.
                                            {{ number_format($pemesanan->total_harga_pemesanan) }}</b></span></li>
                                @endif
                            </ul>
                        </div>
                    <!-- LANJUT PEMBAYARAN -->
                    <div class="justify-content-center text-center">
                        <a href="{{url('belanja')}}" class="btn essence-btn bg-info mt-30">Kembali Ke Home</a>
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
