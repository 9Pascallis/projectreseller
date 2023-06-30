@extends('reseller.layout.template')
@section('title', 'Reseller | Checkout')
@section('header')
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
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
                                <input type="text" name="nama_lengkap_penerima" class="form-control" id="nama_lengkap_user"
                                    value="{{ $user->nama_lengkap_user }}" required>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="no_telp_user"><b>Nomor Hp</b> <span>*</span></label>
                                <input type="number" name="nomor_hp_penerima" class="form-control" id="no_telp_user"
                                    value="{{ $user->no_telp_user }}" required>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="alamat"><b>Alamat</b> <span>*</span></label>
                                <input type="text" name="alamat_penerima" class="form-control" id="alamat"
                                    value="{{ $user->alamat }}" required>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="provinsi"><b>Provinsi </b><span>*</span></label>
                                <select class="w-100" id="provinsi" name="id_provinsi" required>
                                    @foreach ($provinces as $provinsi)
                                        <option value="{{ $provinsi->id }}" {{ $selectedProvinceId == $provinsi->id ? 'selected' : '' }}>{{ $provinsi->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-11 mb-3">
                                <label for="kabupaten"><b>Kota </b><span>*</span></label>
                                <select class="w-100" id="kabupaten" name="id_kabupaten" required>
                                    @foreach ($regencies as $kabupaten)
                                        <option value="{{ $kabupaten->id }}" {{ $selectedRegencyId == $kabupaten->id ? 'selected' : '' }}>{{ $kabupaten->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="kecamatan"><b>Kecamatan </b><span>*</span></label>
                                <select class="w-100" id="kecamatan" name="id_kecamatan" required> 
                                    @foreach ($districts as $kecamatan)
                                        <option value="{{ $kecamatan->id }}" {{ $selectedDistrictId == $kecamatan->id ? 'selected' : '' }}>{{ $kecamatan->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="no_telp_user"><b>Kode Pos</b> <span>*</span></label>
                                <input type="number" name="kode_pos_penerima" class="form-control" id="kode_pos_penerima"
                                    value="{{ $user->kode_pos }}" required>
                            </div>
<!-- KIRIM KE ALAMAT LAIN -->
<div class="col-md-11 mt-30 mb-30">
    
    <button class="btn essence-btn bg-dark" style="height: 50px" type="button" onclick="resetFields(); resetAddress();">Kirim Ke Alamat Lain</button>
    <p style="padding: 5px">*Jika tombol terpencet dan tidak jadi kirim ke alamat lain, refresh kembali halaman ini</p>
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
                            <select class="w-100 mb-3" id="id_jasa_pengiriman" name="id_jasa_pengiriman" required>
                                @foreach ($jasa_pengiriman as $item)
                                <option value="{{$item->id}}">{{$item->nama_jasa_pengiriman}}</option>
                                @endforeach
                            </select>
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
        document.getElementById("kabupaten").value = "";
        document.getElementById("kecamatan").value = "";
        document.getElementById("kode_pos_penerima").value = "";

        // Reset tampilan dropdown provinsi menjadi "Pilih Provinsi"
        $('#provinsi').val('').niceSelect('update');
    }

    function resetAddress() {
        // Reset nilai provinsi ke default
        document.getElementById("provinsi").value = "";

        // Reset nilai kota ke default
        document.getElementById("kabupaten").value = "";
        $('#kabupaten').niceSelect('destroy'); // destroy the plugin 
        $('#kabupaten').niceSelect(); // apply again

        // Reset nilai kecamatan ke default
        document.getElementById("kecamatan").value = "";
        $('#kecamatan').niceSelect('destroy'); // destroy the plugin 
        $('#kecamatan').niceSelect(); // apply again

        // Reset nilai kode pos ke default
        document.getElementById("kode_pos_penerima").value = "";
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>
    $(function() {
  $.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });

    $(function(){
        $('#provinsi').on('change',function(){
        let id_provinsi = $('#provinsi').val();
        console.log(id_provinsi); // check id_provinsi = true

        $.ajax({
            type : 'POST',
            url : "{{ route('getkabupaten') }}",
            data : {id_provinsi:id_provinsi},
            cache : false,
            success: function(msg){
            console.log(msg); // check response JSON
            $('#kabupaten').html(msg);
            $('#kabupaten').niceSelect('destroy'); //destroy the plugin 
            $('#kabupaten').niceSelect();  //apply again
            $('#kecamatan').html('');
            $('#kecamatan').niceSelect('destroy'); //destroy the plugin 
            $('#kecamatan').niceSelect();  //apply again
            },
            error: function(data){
            console.log('error:', data);
            },
        });
        });
    });

    $(function(){
    $('#kabupaten').on('change',function(){
      let id_kabupaten = $('#kabupaten').val();
      console.log(id_kabupaten); // check id_kabupaten = true

      $.ajax({
        type : 'POST',
        url : "{{ route('getkecamatan') }}",
        data : {id_kabupaten:id_kabupaten},
        cache : false,
        success: function(msg){
          console.log(msg); // check response JSON
          $('#kecamatan').html(msg);
          $('#kecamatan').niceSelect('destroy'); //destroy the plugin 
          $('#kecamatan').niceSelect();  //apply again
        },
        error: function(data){
          console.log('error:', data);
        },
      });
    });
  });
});


</script>

<script>
    // // Fungsi untuk mengisi opsi kota berdasarkan provinsi yang dipilih
    // function populateRegencies() {
    //     var provinceId = document.getElementById('provinsi').value;
    //     var kabupatenElement = document.getElementById('kabupaten');
    //     kabupatenElement.innerHTML = '';

    //     // Lakukan permintaan AJAX untuk mendapatkan daftar kota
    //     // dengan mengirimkan ID provinsi ke metode getkabupaten pada UserController
    //     axios.get('/getkabupaten/' + provinceId)
    //         .then(function (response) {
    //             var regencies = response.data;

    //             // Tambahkan opsi kota ke dropdown kota
    //             for (var i = 0; i < regencies.length; i++) {
    //                 var option = document.createElement('option');
    //                 option.value = regencies[i].id;
    //                 option.text = regencies[i].name;
    //                 kabupatenElement.appendChild(option);
    //             }
    //         });
        
    // }

    // Fungsi untuk mengisi opsi kecamatan berdasarkan kota yang dipilih
    function populateDistricts() {
        var regencyId = document.getElementById('kabupaten').value;
        var kecamatanElement = document.getElementById('kecamatan');
        kecamatanElement.innerHTML = '';

        // Lakukan permintaan AJAX untuk mendapatkan daftar kecamatan
        // dengan mengirimkan ID kota ke metode getkecamatan pada UserController
        axios.get('/getkecamatan/' + regencyId)
            .then(function (response) {
                var districts = response.data;

                // Tambahkan opsi kecamatan ke dropdown kecamatan
                for (var i = 0; i < districts.length; i++) {
                    var option = document.createElement('option');
                    option.value = districts[i].id;
                    option.text = districts[i].name;
                    kecamatanElement.appendChild(option);
                }
            });
    }

    // Panggil fungsi populateRegencies saat halaman dimuat ulang
    populateRegencies();

    // Panggil fungsi populateDistricts saat kota berubah
    document.getElementById('kabupaten').addEventListener('change', populateDistricts);
</script>


@endsection
