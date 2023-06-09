@extends('reseller.layout.template')
@section('title', 'Reseller | Checkout')

@section('content')
<br><br>
<!-- SECTION -->
<div class="checkout_area mb-100">
    <div class="container">
        <form action="/checkout/{{ $pemesanan->id }}" method="POST">
            @csrf
            <div class="row">
                <!-- CONTAINER KIRI -->
                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-20 clearfix">
                        <!-- INFORMASI PEMBELI -->
                        <div class="cart-page-heading mb-30">
                            <h5>Alamat Pengiriman</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-11 mb-3">
                                <label for="nama_lengkap_user"><b>Nama Lengkap</b> <span>*</span></label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap_user"
                                    value="{{ $user->nama_lengkap_user }}" required>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="no_telp_user"><b>Nomor Hp</b> <span>*</span></label>
                                <input type="number" name="nomor_hp" class="form-control" id="no_telp_user"
                                    value="{{ $user->no_telp_user }}" required>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="alamat"><b>Alamat</b> <span>*</span></label>
                                <input type="text" name="alamat" class="form-control" id="alamat"
                                    value="{{ $user->alamat }}" required>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="provinsi"><b>Provinsi</b> <span>*</span></label>
                                <input type="text" name="provinsi" class="form-control" id="provinsi"
                                    value="{{ $user->provinsi }}" required>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="kota"><b>Kota</b> <span>*</span></label>
                                <input type="text" name="kota" class="form-control" id="kota" value="{{ $user->kota }}"
                                    required>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="kecamatan"><b>Kecamatan</b> <span>*</span></label>
                                <input type="text" name="kecamatan" class="form-control" id="kecamatan"
                                    value="{{ $user->kecamatan }}" required>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="kode_pos"><b>Kode Pos</b> <span>*</span></label>
                                <input type="text" name="kode_pos" class="form-control" id="kode_pos"
                                    value="{{ $user->kode_pos }}" required>
                            </div>
                            <!-- KIRIM KE ALAMAT LAIN -->
                            <div class="col-md-11 mt-30 mb-30">
                                <button class="btn essence-btn bg-dark" style="height: 50px" type="button"
                                    onclick="resetFields()">Kirim Ke Alamat Lain</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- CONTAINER KIRI END -->

                <!-- CONTAINER KANAN -->
                <div class="col-12 col-md-6 col-lg-6 ml-lg-auto">
                    <div class="order-details-confirmation">
                        <div class="cart-page-heading text-center">
                            <!-- JUDUL -->
                            <h5>Transaksi</h5>
                        </div>
                        <!-- LIST PRODUK -->
                        <ul class="order-details-form">
                            <li><span>PRODUK</span><span>Harga</span></li>
                            @if (!empty($pemesanan))
                            @foreach ($detail_pemesanan as $item)
                            <li><span>{{ $item->item_produk->produk->nama_produk }} |
                                    {{ $item->item_produk->warna->nama_warna }} |
                                    {{ $item->item_produk->ukuran->nama_ukuran }} ({{ $item->kuantitas }})
                                </span><span>Rp.
                                    {{ number_format($item->jumlah_harga, 0, ',', '.') }}</span></li>
                            @endforeach
                            <li><span><b>Total Harga</b></span> <span><b>Rp.
                                        {{ number_format($pemesanan->total_harga_pemesanan, 0, ',', '.') }}</b></span></li>
                            @endif

                        </ul>
                        <p class="mb-4">* Total harga belum termasuk ongkir</p>
                        <div class="cart-page-heading mb-30 mt-30 text-center">
                            <!-- JUDUL -->
                            <h5>Lain-Lain</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="input_jasa_kurir"><b>Nama Jasa Kurir </b><span>*</span></label>
                            <input type="text" name="nama_jasa_kurir" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="input_jenis_layanan"><b>Nama Jenis Layanan </b><span>*</span></label>
                            <input type="text" name="nama_jenis_layanan" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="input_no_resi"><b>No Resi </b><span>*</span></label>
                            <input type="number" name="no_resi" class="form-control" required>
                        </div>
                        <!-- LANJUT PEMBAYARAN -->
                        <div class="mt-30">
                            <div><button type="submit" class="btn essence-btn bg-success">Lanjut Pembayaran</button>
                            </div>
                            {{-- <a href="{{url('pesanpembayaran')}}" class="btn essence-btn bg-success">Lanjut
                            Pembayaran</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
