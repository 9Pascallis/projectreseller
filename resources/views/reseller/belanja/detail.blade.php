@extends('reseller.layout.template')
@section('title', 'Reseller | Detail')

@section('content')
<br><br>
<!-- SECTION -->
<div class="checkout_area mb-100">
    <div class="container">
        <div class="col-12">
            <nav class="breadcrumb bg-light">
                <a class="breadcrumb-item text-dark" href="{{route('belanja')}}"
                    style="font-size: 14px; font-family: ubuntu">Belanja</a>
                <span class="breadcrumb-item text-dark active"
                    style="font-size: 14px; font-family: ubuntu">{{$produk->nama_produk}}</span>
            </nav>
        </div>
        <!-- KONTEN ATAS -->
        <div class="row mb-100">
            <!-- FOTO PRODUK -->
            <div class="col-lg-5 mb-50">
                <div class="product-image col-md-12">
                    <div class="product-image-main mb-30 shadow">
                        <figure class="zoom" onmousemove="zoom(event)">
                            <img id="product-main-image" src="{{asset('storage/'.$produk->foto_utama_produk)}}" alt="">
                        </figure>
                    </div>
                    <!-- LIST FOTO -->
                    <div class="col-md-12 product-image-slider">
                        {{-- @foreach ($item_produk as $item)
                        <img class="item" src="{{asset('storage/'.$item->foto_item_produk)}}" alt="">
                        @endforeach --}}
                        <img class="item" src="{{asset('storage/'.$produk->foto_utama_produk)}}">
                        {{-- <img id="product-main-image" src="{{asset('storage/'.$produk->foto_utama_produk)}}" alt="">
                        --}}
                        @foreach ($groupedPhotos as $warna => $foto)
                        <img class="item" src="{{ asset('storage/' . $foto) }}" alt="{{ $warna }}">
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- DESKRIPSI -->
            <div class="col-lg-7 h-auto mb-50" style="padding-right: 50px">
                <div class="single_product_desc clearfix">
                    <span
                        style="font-family: ubuntu; font-size:medium"><b>{{ $produk->jenis_produk->nama_jenis_produk}}</b></span>
                    <h4 style="font-family: ubuntu">{{$produk->nama_produk}}</h4>
                    <b class="product-price" style="font-family: ubuntu; font-size:large"><b>Retail: Rp.
                            {{ number_format($produk->harga_produk, 0, ',', '.')}}</b></b><br>
                    <b class="product-price" style="font-family: ubuntu; font-size:large"><b
                            class="text-danger">Reseller: Rp.
                            {{ number_format($produk->harga_reseller, 0, ',', '.')}}</b></b>
                    <hr>
                    <p class="text-dark"><b>DETAIL PRODUK {{$produk->nama_produk}}</b></p>
                    <p class="text-dark" style="font-family: ubuntu">{{$produk->deskripsi_produk}}</p>
                    {{-- <p class="text-dark" style="font-family: ubuntu"><b>Stok Tersedia :</b> {{number_format($produk->total_stok_produk)}}
                    </p> --}}

                    <!-- POST DATA -->
                    <form action="{{url('pesan')}}/{{$produk->id}}" method="POST">
                        @csrf

                        {{-- <!-- PRODUK -->
                        <input type="hidden" name="id_produk" value="{{$produk->id}}"> --}}



                        <!-- ITEM PRODUK -->
                        <div class="row mb-3">
                            <div class="col col-md-1">
                                <label for="inputText" style="font-family: ubuntu"
                                    class="col-form-label"><b>Varian</b>:</label>
                            </div>
                            <div class="col col-md-11">
                                <select class="form-select" name="id_item_produk" required>
                                    @foreach ($item_produk as $item)
                                    @if ($item->jumlah_stok == 0)
                                    @else
                                    <option value="{{$item->id}}">{{$item->warna->nama_warna}} |
                                        {{$item->ukuran->nama_ukuran}} </option>
                                    @endif
                                    @endforeach
                                    @error('id_item_produk')
                                    <span class="invalid-feedback">{{ $message}}</span>
                                    @enderror
                                </select>
                            </div>
                        </div>

                        <!-- JUMLAH PEMBELIAN -->
                        <p class="text-dark" style="font-family: ubuntu"><b>Jumlah Pembelian: </b></p>
                        <div>
                            <button type="button"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                class="btn essence1-btn bg-info"><i class="fa fa-minus"></i></button>
                            <input class="quantity text-center btn bg-light" min="1" name="kuantitas" value="1"
                                type="number" style="width: 70px;" style="color: black">
                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                class="btn essence1-btn bg-info"><i class="fa fa-plus"></i></button>
                        </div>
                        <hr><br>

                        <!-- CHECKOUT -->
                        <div class="cart-fav-box d-flex align-items-center">
                            <div>
                                <button type="submit" class="btn essence-btn bg-success"><i class="fa fa-shopping-cart"
                                        style="font-size: 14px"></i> Add to Cart + </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
<!-- SECTION END -->

<style>
    /* ZOOM */
    .zoom {
        position: relative;
        overflow: hidden;
    }

    .zoom img {
        display: block;
        max-width: 100%;
        transition: transform 0.3s ease;
    }

    .zoom:hover img {
        transform: scale(1.2);
    }

    /* KUANTITAS */
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }

    /* PRODUK */
    /** product image **/
    .single-product .product-image {
        width: 100%;
    }

    .product-image .product-image-main {
        position: relative;
        display: block;
        height: 400px;
        background: var(--bg-grey);
    }

    .product-image-main img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .product-image-slider {
        gap: 10px;
        margin: 10px 0;
    }

    .product-image-slider img {
        width: 90px;
        height: 90px;
        background: var(--bg-grey);
        padding: 6px;
        cursor: pointer;
    }

    /** Product size **/
    .product-size {
        margin: 10px 0;
    }

    .product-size h4 {
        font-size: 16px;
        font-weight: 500;
    }

    .product-size .size-layout {
        margin: 0px 0;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
    }

    .product-size .size-layout .size-input {
        display: none;
    }

    .product-size .size-layout .size {
        background: var(--bg-grey);
        padding: 10px 18px;
        border: 1px solid var(--bg-grey);
        margin-left: 0px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        background-color: #ececec;
    }

    .product-size .size-layout .size:hover {
        border: 1px solid var(--grey);
        background-color: #cccccc;
    }

    .product-size .size-layout input[type="radio"]:checked+.size {
        background-color: #cccccc;
        color: white;
        border: 1px solid var(--grey);
        color: var(--bg-grey);
        box-shadow: 0 3px 6px var(--shadow);

    }

    /** Product color **/
    .product-color {
        margin: 10px 0;
    }

    .product-color h4 {
        font-size: 16px;
        font-weight: 500;
    }

    .product-color .color-layout {
        margin: 0px 0;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
    }

    .product-color .color-layout .color-input {
        display: none;
    }

    .product-color .color-layout .color {
        background: var(--bg-grey);
        padding: 10px 18px;
        border: 1px solid var(--bg-grey);
        margin-left: 0px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        background-color: #ececec;
    }

    .product-color .color-layout .color:hover {
        border: 1px solid var(--grey);
        background-color: #cccccc;
    }

    .product-color .color-layout input[type="radio"]:checked+.color {
        background-color: #cccccc;
        color: white;
        border: 1px solid var(--grey);
        color: var(--bg-grey);
        box-shadow: 0 3px 6px var(--shadow);
    }


    /** divider **/
    .divider {
        display: block;
        height: 1px;
        width: 100%;
        background: #48484830;
        margin: 20px 0;
    }

    /** product Button Group **/

    .product-btn-group {
        display: flex;
        gap: 15px;
    }

    .product-btn-group .button {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        padding: 10px 16px;
        font-size: 12px;
        font-weight: 500;
    }

    .product-btn-group .buy-now {
        background-color: var(--accent-color);
        color: #fff;
        border: 1px solid var(--accent-color);
        border-radius: 4px;
        cursor: pointer;
    }

    .product-btn-group .buy-now i {
        font-size: 20px;
    }

    .product-btn-group .buy-now:hover {
        box-shadow: 0 3px 6px var(--shadow);
    }

    .product-btn-group .add-cart {

        background-color: var(--bg-grey);
        color: var(--grey);
        border-radius: 4px;
        cursor: pointer;
    }

    .product-btn-group .add-cart i {
        font-size: 20px;
    }

    .product-btn-group .add-cart:hover {
        box-shadow: 0 3px 6px var(--shadow);
        background: var(--grey);
        color: #fff;
    }

    .product-btn-group .heart {
        color: var(--grey);
        cursor: pointer;
    }

    .product-btn-group .heart i {
        font-size: 20px;
    }

    .product-btn-group .heart:hover {
        color: var(--accent-color);
    }

</style>

<script>
    /* ZOOM */
    function zoom(e) {
        var zoomer = e.currentTarget;
        var mainImage = document.getElementById("product-main-image");
        var bounds = mainImage.getBoundingClientRect();
        var offsetX = e.offsetX ? e.offsetX : e.touches[0].pageX - bounds.left;
        var offsetY = e.offsetY ? e.offsetY : e.touches[0].pageY - bounds.top;
        var x = (offsetX / bounds.width) * 100;
        var y = (offsetY / bounds.height) * 100;
        zoomer.style.backgroundPosition = x + "% " + y + "%";
    }

    /* SLIDER */
    const sliderMainImage = document.getElementById("product-main-image"); // product container image
    const sliderItems = document.getElementsByClassName("item"); // image item selection

    for (let i = 0; i < sliderItems.length; i++) {
        sliderItems[i].addEventListener("click", function () {
            sliderMainImage.src = this.src;
        });
    }

</script>

@endsection
