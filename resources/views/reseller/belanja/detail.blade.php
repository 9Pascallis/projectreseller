@extends('reseller.layout.template')
@section('title', 'Reseller | Detail')

@section('content')
<br><br>
    <!-- BREADCRUMB -->
    <div class="container-fluid mb-30 ">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light">
                    <a class="breadcrumb-item text-dark" href="reseller" style="font-size: 14px; font-family: ubuntu">Home</a>
                    <a class="breadcrumb-item text-dark" href="reseller-belanja" style="font-size: 14px; font-family: ubuntu">Belanja</a>
                    <span class="breadcrumb-item text-dark active" style="font-size: 14px; font-family: ubuntu">Detail</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END-->

    <!-- SECTION -->
    <div class="checkout_area" style="padding-top:unset;">
        <div class="container">
            <!-- KONTEN ATAS -->
            <div class="row mb-100">
                <!-- FOTO PRODUK -->
                <div class="col-lg-5 mb-50 mt-50">
                    <div class="product-image col-md-12">
                        <!-- ZOOM -->
                        <div class="product-image-main mb-30 shadow">
                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{asset('storage/'.$produk->foto_utama_produk)}})">
                                <img src="{{asset('storage/'.$produk->foto_utama_produk)}}" alt="">
                            </figure>
                            {{-- <img src="{{asset('storage/'.$produk->foto_utama_produk)}}" alt=""> --}}
                        </div>

                        <!-- LIST FOTO -->
                        {{-- <div class="product-image-slider">
                                <img src="assets_reseller/img/product-img/product-big-1.jpg" alt=""  class="image-list">
                                <img src="assets_reseller/img/product-img/product-big-2.jpg" alt=""  class="image-list">
                                <img src="assets_reseller/img/product-img/product-big-3.jpg" alt=""  class="image-list">
                                <img src="assets_reseller/img/product-img/product-big-1.jpg" alt=""  class="image-list">
                        </div> --}}
                    </div>
                </div>
                <!-- FOTO PRODUK END -->

                <!-- DESKRIPSI -->
                <div class="col-lg-7 h-auto mb-50 mt-50" style="padding-right: 50px">
                    <div class="single_product_desc clearfix">
                        <!-- KATEGORI -->
                        <span style="font-family: ubuntu; font-size:medium"><b>{{ $produk->jenis_produk->nama_jenis_produk}}</b></span>
                        <!-- NAMA PRODUK -->
                        <h4 style="font-family: ubuntu">{{$produk->nama_produk}}</h4>
                        <!-- HARGA -->
                        <p class="product-price" style="font-family: ubuntu; font-size:large"><b class="text-danger">{{$produk->harga_produk}}</b></p>
                        <!-- DESKRIPSI PRODUK -->
                        <hr><p class="text-dark"><b>DETAIL PRODUK {{$produk->nama_produk}}</b></p>
                        <p class="product-desc text-dark" style="font-family: ubuntu">{{$produk->deskripsi_produk}}</p>
                        <!-- SISA STOK -->
                        <p class="text-dark"><b style="font-family: ubuntu">Stok Tersedia : {{$produk->total_stok_produk}}</b> </p>
                        <!-- POST DATA -->
                            <!-- KUANTITAS -->
                            <div>
                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn essence1-btn bg-info"><i class="fa fa-minus"></i></button>
                                <input class="quantity text-center btn bg-light" min="1" name="kuantitas" value="1" type="number" style="width: 70px;" style="color: black">
                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn essence1-btn bg-info"><i class="fa fa-plus"></i></button>
                            </div>
                            {{-- <div>
                                <!-- UKURAN -->
                                <div class="product-size">
                                    <h4 style="padding-top: 10px">Ukuran</h4>
                                    <div class="size-layout">
                                        <input type="radio" name="size" value="S" id="1" class="size-input">
                                        <label for="1" class="size">S</label>
        
                                        <input type="radio" name="size" value="M" id="2" class="size-input">
                                        <label for="2" class="size">M</label>
        
                                        <input type="radio" name="size" value="L" id="3" class="size-input">
                                        <label for="3" class="size">L</label>
        
                                        <input type="radio" name="size" value="XL" id="4" class="size-input">
                                        <label for="4" class="size">XL</label>
        
                                        <input type="radio" name="size" value="XXL" id="5" class="size-input">
                                        <label for="5" class="size">XXL</label>
                                    </div>
                                </div>
                                <!-- WARNA -->
                                <div class="product-color">
                                    <h4 style="padding-top: 10px">Warna</h4>
                                    <div class="color-layout">
                                        <input type="radio" name="color" value="S" id="6" class="color-input">
                                        <label for="6" class="color">Red</label>
        
                                        <input type="radio" name="color" value="M" id="7" class="color-input">
                                        <label for="7" class="color">Blue</label>
        
                                        <input type="radio" name="color" value="L" id="8" class="color-input">
                                        <label for="8" class="color">Black</label>
                                    </div>
                                </div>
                                <span class="divider"></span>
                                <!-- JUMLAH PEMBELIAN -->
                                <p class="text-dark" style="font-family: ubuntu"><b>Jumlah Pembelian: </b></p>
                                <div class="product-btn-group">
                                
                                <!-- ADD TO CART -->
                                
                            </div> --}}

                            <!-- CHECKOUT -->
                            <br>
                            <div class="cart-fav-box d-flex align-items-center">
                                    {{-- <div style="padding-right: 15px">
                                        <button type="submit" name="addtocart" value="5" class="btn essence-btn bg-primary">Buy Now</button>
                                    </div> --}}
                                    <div>
                                        <a href="{{ route('add.to.cart', $produk->id) }}"><button type="submit" class="btn essence-btn bg-warning"><i class="fa fa-shopping-cart" style="font-size: 14px"></i> Add to Cart + </button></a>
                                        
                                    </div>
                            </div>
                        <!-- POST DATA END -->
                    </div>
                    
                </div>
                <!-- DESKRIPSI END -->
            </div>
            <!-- KONTEN ATAS END -->

            {{-- <!-- DETAIL PRODUK -->
            <div class="row mb-30">
                <div class="col">
                    <h5 style="font-family: ubuntu">DETAIL PRODUK DARI RESPIRO TR-05 XENTRA N R1.4 RED</h5>
                    <hr style="height:1px;border:none; background-color:#333;">
                    <p class="text-dark" style="font-family: ubuntu">{{$produk->deskripsi_produk}}</p>
                    <img src="assets_reseller/img/core-img/d1.png" alt="Image" width="30%">

                </div>
            </div><br>
            <!-- DETAIL PRODUK END --> --}}
            
            {{-- <!-- SIZE SPEC -->
            <div class="row mb-30">
                <div class="col">
                    <h5 style="font-family: ubuntu">SIZE SPEC RESPIRO</h5>
                    <hr style="height:1px;border:none; background-color:#333;">
                    <div class="p-30">
                        <div class="tab-content">
                                <img src="assets_reseller/img/core-img/d2.jpg" alt="Image" width="100%" class="mb-30">
                        </div>
                    </div>
                </div>
            </div>
            <!-- SIZE SPEC END -->

            <!-- PRODUK SERUPA -->
            <div class="row mb-30">
                <div class="col">
                    <!-- JUDUL -->
                    <h5 style="font-family: ubuntu">PRODUK SERUPA</h5>
                    <hr style="height:1px;border:none; background-color:#333;">
                    <!-- ISI KONTEN -->
                    <div class="p-30">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="popular-products-slides owl-carousel">
                                        <!-- Single Product -->
                                        <div class="single-product-wrapper">
                                            <!-- Product Image -->
                                            <div class="product-img">
                                                <img src="assets_reseller/img/product-img/product-1.jpg" alt="">
                                            </div>
                                            <!-- Product Description -->
                                            <div class="product-description">
                                                <span>Jaket</span>
                                                <a href="single-product-details.html">
                                                    <h6>RESPIRO TR-05 XENTRA N R1.4 BLACK</h6>
                                                </a>
                                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                                <!-- Hover Content -->
                                                <div class="hover-content">
                                                    <!-- Add to Cart -->
                                                    <div class="add-to-cart-btn">
                                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Product -->
                                        <div class="single-product-wrapper">
                                            <!-- Product Image -->
                                            <div class="product-img">
                                                <img src="assets_reseller/img/product-img/product-2.jpg" alt="">
                                            </div>
                                            <!-- Product Description -->
                                            <div class="product-description">
                                                <span>Jaket</span>
                                                <a href="single-product-details.html">
                                                    <h6>RESPIRO TR-01 THERMOLINE N R1.5 CHARCOAL </h6>
                                                </a>
                                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                                <!-- Hover Content -->
                                                <div class="hover-content">
                                                    <!-- Add to Cart -->
                                                    <div class="add-to-cart-btn">
                                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Product -->
                                        <div class="single-product-wrapper">
                                            <!-- Product Image -->
                                            <div class="product-img">
                                                <img src="assets_reseller/img/product-img/product-3.jpg" alt="">
                                            </div>
                                            <!-- Product Description -->
                                            <div class="product-description">
                                                <span>Jaket</span>
                                                <a href="single-product-details.html">
                                                    <h6>RESPIRO ESSENZO SPORTO VENT R1 NAVY </h6>
                                                </a>
                                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                                <!-- Hover Content -->
                                                <div class="hover-content">
                                                    <!-- Add to Cart -->
                                                    <div class="add-to-cart-btn">
                                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Product -->
                                        <div class="single-product-wrapper">
                                            <!-- Product Image -->
                                            <div class="product-img">
                                                <img src="assets_reseller/img/product-img/product-4.jpg" alt="">
                                            </div>
                                            <!-- Product Description -->
                                            <div class="product-description">
                                                <span>Jaket</span>
                                                <a href="single-product-details.html">
                                                    <h6>RESPIRO SALVATORE URBAN CHIC </h6>
                                                </a>
                                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                                <!-- Hover Content -->
                                                <div class="hover-content">
                                                    <!-- Add to Cart -->
                                                    <div class="add-to-cart-btn">
                                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Product -->
                                        <div class="single-product-wrapper">
                                            <!-- Product Image -->
                                            <div class="product-img">
                                                <img src="assets_reseller/img/product-img/product-5.jpg" alt="">
                                            </div>
                                            <!-- Product Description -->
                                            <div class="product-description">
                                                <span>Jaket</span>
                                                <a href="single-product-details.html">
                                                    <h6>RESPIRO TR-05 XENTRA N R1.4 </h6>
                                                </a>
                                                <p class="product-price text-dark">Rp. 440.000 <s style="color: red; font-size: 12px">Rp. 640.000</s></p>
                                                <!-- Hover Content -->
                                                <div class="hover-content">
                                                    <!-- Add to Cart -->
                                                    <div class="add-to-cart-btn">
                                                        <a href="#" class="btn essence-btn" style="background-color: #ff4a00">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRODUK SERUPA END --> --}}
        </div>
    </div>
    <!-- SECTION END -->


    <style>
        /* ZOOM */
            figure.zoom {
            background-position: 50% 50%;
            position: relative;

            overflow: hidden;
            cursor: zoom-in;
            }
            figure.zoom img:hover {
            opacity: 0;
            }
            figure.zoom img {
            transition: opacity .5s;
            display: block;
            width: 100%;
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
                .single-product .product-image{
                    width: 100%;
                }

                .product-image .product-image-main{
                    position: relative;
                    display: block;
                    height: 400px;
                    background: var(--bg-grey);
                }

                .product-image-main img{
                    display: block;
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                }

                .product-image-slider{
                    display: flex;
                    gap: 10px;
                    margin: 10px 0;
                }

                .product-image-slider img{
                    width: 90px;
                    height: 90px;
                    background: var(--bg-grey);
                    padding: 6px;
                    cursor: pointer;
                }

            /** Product size **/
                .product-size{
                    margin: 10px 0;
                }
                .product-size h4{
                    font-size: 16px;
                    font-weight: 500;
                }

                .product-size .size-layout{
                    margin: 0px 0;
                    display: inline-flex;
                    align-items: center;
                    gap: 10px;
                    cursor: pointer;
                }

                .product-size .size-layout .size-input{
                    display: none;
                }
                .product-size .size-layout .size{
                    background: var(--bg-grey);
                    padding: 10px 18px;
                    border: 1px solid var(--bg-grey);
                    margin-left: 0px;
                    font-size: 14px;
                    font-weight: 600;
                    cursor: pointer;
                    background-color: #ececec;
                }
                .product-size .size-layout .size:hover{
                    border: 1px solid var(--grey);
                    background-color: #cccccc;
                }

                .product-size .size-layout input[type="radio"]:checked + .size{
                    background-color: #cccccc;
                    color: white;
                    border: 1px solid var(--grey);
                    color: var(--bg-grey);
                    box-shadow: 0 3px 6px var(--shadow);

                }

            /** Product color **/
                .product-color{
                    margin: 10px 0;
                }
                .product-color h4{
                    font-size: 16px;
                    font-weight: 500;
                }

                .product-color .color-layout{
                    margin: 0px 0;
                    display: inline-flex;
                    align-items: center;
                    gap: 10px;
                    cursor: pointer;
                }

                .product-color .color-layout .color-input{
                    display: none;
                }
                .product-color .color-layout .color{
                    background: var(--bg-grey);
                    padding: 10px 18px;
                    border: 1px solid var(--bg-grey);
                    margin-left: 0px;
                    font-size: 14px;
                    font-weight: 600;
                    cursor: pointer;
                    background-color: #ececec;
                }
                .product-color .color-layout .color:hover{
                    border: 1px solid var(--grey);
                    background-color: #cccccc;
                }

                .product-color .color-layout input[type="radio"]:checked + .color{
                    background-color: #cccccc;
                    color: white;
                    border: 1px solid var(--grey);
                    color: var(--bg-grey);
                    box-shadow: 0 3px 6px var(--shadow);
                }


            /** divider **/
                .divider{
                    display: block;
                    height: 1px;
                    width: 100%;
                    background: #48484830;
                    margin: 20px 0;
                }

            /** product Button Group **/

                .product-btn-group{
                    display: flex;
                    gap: 15px;
                }
                .product-btn-group .button{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 4px;
                    padding: 10px 16px;
                    font-size: 12px;
                    font-weight: 500;
                }
                .product-btn-group .buy-now{
                    background-color: var(--accent-color);
                    color: #fff;
                    border: 1px solid var(--accent-color);
                    border-radius: 4px;
                    cursor: pointer;
                }

                .product-btn-group .buy-now i{
                    font-size: 20px;
                }
                .product-btn-group .buy-now:hover{
                    box-shadow: 0 3px 6px var(--shadow);
                }

                .product-btn-group .add-cart{
                    
                    background-color: var(--bg-grey);
                    color: var(--grey);
                    border-radius: 4px;
                    cursor: pointer;
                }
                .product-btn-group .add-cart i{
                    font-size: 20px;
                }
                .product-btn-group .add-cart:hover{
                    box-shadow: 0 3px 6px var(--shadow);
                    background: var(--grey);
                    color: #fff;
                }
                .product-btn-group .heart{
                    color: var(--grey);
                    cursor: pointer;
                }
                .product-btn-group .heart i{
                    font-size: 20px;
                }
                .product-btn-group .heart:hover{
                    color: var(--accent-color);
                }
    </style>

    <script>
        /* ZOOM */
        function zoom(e){
        var zoomer = e.currentTarget;
        e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
        e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
        x = offsetX/zoomer.offsetWidth*100
        y = offsetY/zoomer.offsetHeight*100
        zoomer.style.backgroundPosition = x + '% ' + y + '%';
        }

        /* SLIDER */
        const sliderMainImage = document.getElementById("product-main-image"); //product container image
        const sliderImageList = document.getElementsByClassName("image-list"); // image thumblian group selection
        console.log(sliderImageList);

        sliderImageList[0].onclick = function(){
            sliderMainImage.src = sliderImageList[0].src;
            console.log(sliderMainImage.src);
        };

        sliderImageList[1].onclick = function(){
            sliderMainImage.src = sliderImageList[1].src;
            console.log(sliderMainImage.src);
        };

        sliderImageList[2].onclick = function(){
            sliderMainImage.src = sliderImageList[2].src;
            console.log(sliderMainImage.src);
        };

        sliderImageList[3].onclick = function(){
            sliderMainImage.src = sliderImageList[3].src;
            console.log(sliderMainImage.src);
        };
    </script>
@endsection
