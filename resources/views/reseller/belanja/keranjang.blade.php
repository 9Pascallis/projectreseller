@extends('reseller.layout.template')
@section('title', 'Reseller | Keranjang')

@section('content')
<br><br>
<!-- SECTION -->
<div class="container-fluid mb-100">
    <div class="row px-xl-5">
        <div class="col-12 text-center">
            <h5 style="font-family: ubuntu">KERANJANG</h5>
            <br>
        </div>
        <!-- TABLE -->
        <div class="col-lg-12 table-responsive mb-5">

            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead" style="background-color: rgb(248, 248, 248)">
                    <tr>
                        <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">No</th>
                        <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Foto</th>
                        <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Produk</th>
                        <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Variasi</th>
                        <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Harga Satuan
                        </th>
                        <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Jumlah</th>
                        <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Total</th>
                        <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Hapus</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @if (!empty($pemesanan))
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($detail_pemesanan as $item)
                    <tr>
                        <td class="align-middle">{{ $no++}}</td>
                        <td class="align-middle"><img
                                src="{{asset('storage/'.$item['item_produk']['foto_item_produk'])}}" alt=""
                                style="width: 100px;"></td>
                        <td class="align-middle">{{ $item->item_produk->produk->nama_produk }}</td>
                        <td class="align-middle">{{ $item->item_produk->warna->nama_warna }} |
                            {{ $item->item_produk->ukuran->nama_ukuran }}</td>
                        <td class="align-middle">Rp. {{ number_format($item->item_produk->produk->harga_produk) }}</td>
                        <td class="align-middle">{{ $item->kuantitas }}</td>
                        <td class="align-middle">Rp. {{ number_format($item->jumlah_harga) }}</td>
                        <td class="align-middle actions" data-th="">
                            <form action="{{url('deletekeranjang')}}/{{$item->id}}" method="POST">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger btn-sm remove-from-cart"
                                    onclick="return confirm('Anda yakin menghapus data?');"><i
                                        class="fa fa-trash-o"></i></button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>

            </table>

        </div>
        <!-- TABLE END -->

        @if (!empty($pemesanan))
        <!-- PESANAN -->
        <div class="col-lg-12">
            <div class="bg-light" style="padding: 20px">
                {{-- <h5 class="section-title position-relative text-uppercase"><span class="pr-3">Pesanan</span></h5> --}}
                <div class="bg-light p-30">

                    <!-- TOTAL -->
                    <div class="pt-2 mb-3">
                        <div class="d-flex justify-content-between mt-2">
                            <h6>TOTAL HARGA:</h6>
                            <h6>Rp. {{ number_format($pemesanan->total_harga_pemesanan) }}</h6>
                        </div>
                        <hr>
                    </div>

                    <!-- CHECKOUT PESANAN -->
                    <div class="d-flex justify-content-end mt-30">
                        <a href="{{url('checkout')}}" class="btn essence-btn bg-success">Checkout pesanan</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- PESANAN END-->
        @endif
    </div>
</div>
<!-- SECTION END-->

<style>
    /* KUANTITAS */
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }

    /* POPUP */
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: center;
    }

    #popupWrapper {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    #popup {
        width: 300px;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        margin: 100px auto;
        text-align: center;
    }

    #closeBtn {
        margin-top: 20px;
    }

    /* BUTTON 60 */
    .button-60 {
        align-items: center;
        appearance: none;
        background-color: #fff;
        border: 1px solid #dbdbdb;
        border-radius: .375em;
        box-shadow: none;
        box-sizing: border-box;
        color: #363636;
        cursor: pointer;
        display: inline-flex;
        font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 1rem;
        height: 2.5em;
        justify-content: center;
        line-height: 1.5;
        padding: calc(.5em - 1px) 1em;
        position: relative;
        text-align: center;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: top;
        white-space: nowrap;
    }

    .button-60:active {
        border-color: #4a4a4a;
        outline: 0;
    }

    .button-60:focus {
        border-color: #485fc7;
        outline: 0;
    }

    .button-60:hover {
        border-color: #b5b5b5;
    }

    .button-60:focus:not(:active) {
        box-shadow: rgba(72, 95, 199, .25) 0 0 0 .125em;
    }

    /* BUTTON 90 */
    .button-9 {
        appearance: button;
        backface-visibility: hidden;
        background-color: #e4751b;
        border-radius: 6px;
        border-width: 0;
        box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset, rgba(50, 50, 93, .1) 0 2px 5px 0, rgba(0, 0, 0, .07) 0 1px 1px 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        font-family: -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", Ubuntu, sans-serif;
        font-size: 100%;
        height: 44px;
        line-height: 1.15;
        margin: 12px 0 0;
        outline: none;
        overflow: hidden;
        padding: 0 25px;
        position: relative;
        text-align: center;
        text-transform: none;
        transform: translateZ(0);
        transition: all .2s, box-shadow .08s ease-in;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: 70%;
    }

    .button-9:disabled {
        cursor: default;
    }

    .button-9:focus {
        box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset, rgba(50, 50, 93, .2) 0 6px 15px 0, rgba(0, 0, 0, .1) 0 2px 2px 0, rgba(50, 151, 211, .3) 0 0 0 4px;
    }

</style>

<script>
    document.getElementById("popupBtn").addEventListener("click", function () {
        document.getElementById("popupWrapper").style.display = "block";
    });

    document.getElementById("closeBtn").addEventListener("click", function () {
        document.getElementById("popupWrapper").style.display = "none";
    });

</script>
@endsection
@section('javascript')

@endsection
