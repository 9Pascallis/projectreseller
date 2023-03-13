@extends('reseller.layout.template')
@section('title', 'Reseller | Home')
@section('content')
<br><br>
        <!-- Breadcrumb Start -->
        <div class="container-fluid mb-30 ">
            <div class="row px-xl-5">
                <div class="col-12">
                    <nav class="breadcrumb bg-light">
                        <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Home</a>
                        <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Belanja</a>
                        <span class="breadcrumb-item text-dark active" style="font-size: 14px; font-family: ubuntu">Detail</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->


        <!-- ##### Checkout Area Start ##### -->
        <div class="checkout_area section-padding-80" style="padding-top:unset">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-lg-5 mb-30">
                        <div class="product-image col-md-12">
                            <div class="product-image-main">
                                <img src="assets_reseller/img/product-img/product-big-1.jpg" alt="" id="product-main-image">
                            </div>
                            <div class="product-image-slider">
                                    <img src="assets_reseller/img/product-img/product-big-1.jpg" alt=""  class="image-list">
                                    <img src="assets_reseller/img/product-img/product-big-2.jpg" alt=""  class="image-list">
                                    <img src="assets_reseller/img/product-img/product-big-3.jpg" alt=""  class="image-list">
                                    <img src="assets_reseller/img/product-img/product-big-1.jpg" alt=""  class="image-list">
                                
                                <script>
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
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-7 h-auto mb-30">
                        <div class="single_product_desc clearfix">
                            <span style="font-family: ubuntu">Jaket</span>
                            <h4 style="font-family: ubuntu">RESPIRO TR-05 XENTRA N R1.4 RED</h4>
                            <p class="product-price" style="font-family: ubuntu"><span class="old-price"><b class="text-dark">Rp. 440.000</b> &ensp;</span><s style="color: red"> Rp. 660.000</s></p>
                            <p class="product-desc" style="font-family: ubuntu">Jalani segala aktifitas dengan percaya diri bersama TR-05 Xentra. Dilengkapi dengan inner Poly Cotton yang akan membuat anda nyaman berkendara baik dalam cuaca dingin maupun panas. Desain sporty-nya cocok untuk anda yang berkarakter dinamis. </p>
                            <!-- Form -->
                            {{-- <img src="assets_reseller/img/core-img/d1.png" alt="Image" width="50%"> --}}
                            <form class="cart-form clearfix" method="post">
                                <!-- Select Box -->
                                {{-- <div class="d-flex" style="width: 100px">
                                    <input type="number" class="form-control" id="first_name" value="" placeholder="0" required>
                                </div> --}}
                                {{-- <div>
                                    <p class="text-dark" style="font-family: ubuntu">Pilih Ukuran dan Warna</p>
                                    <div class="select-box d-flex">
                                        <select name="select" id="productSize" class="mr-3">
                                            <option value="value">Size: XL</option>
                                            <option value="value">Size: X</option>
                                            <option value="value">Size: M</option>
                                            <option value="value">Size: S</option>
                                        </select>
                                        <select name="select" id="productColor">
                                            <option value="value">Warna: Black</option>
                                            <option value="value">Warna: White</option>
                                            <option value="value">Warna: Red</option>
                                            <option value="value">Warna: Purple</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div>
                                    <div class="product-size">
                                        <h4 style="padding-top: 10px">Size</h4>
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
                                    <div class="product-color">
                                        <h4 style="padding-top: 10px">Color</h4>
                                        <div class="color-layout">
                                            <input type="radio" name="color" value="S" id="6" class="color-input">
                                            <label for="6" class="color">Red</label>
            
                                            <input type="radio" name="color" value="M" id="7" class="color-input">
                                            <label for="7" class="color">Blue</label>
            
                                            <input type="radio" name="color" value="L" id="8" class="color-input">
                                            <label for="8" class="color">Black</label>
            
                                           
                                        </div>
                                    </div>
                                    {{-- <div class="product-color">
                                        <h4>Color</h4>
                                        <div class="color-layout">
                                            <input type="radio" name="color"  value="black" class="color-input">
                                            <label for="black" class="black"></label>
                                            <input type="radio" name="color"  value="red" class="color-input">
                                            <label for="red" class="red"></label>
            
                                            <input type="radio" name="color"  value="blue" class="color-input">
                                            <label for="blue" class="blue"></label>
                                        </div>
                                    </div> --}}
                                    <span class="divider"></span>
                                    <p class="text-dark" style="font-family: ubuntu">Jumlah Pembelian</p>
                                    <div class="product-btn-group">
                                        <div>
                                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus btn btn-info btn-plus minus"><i class="fa fa-minus"></i></button>
                                            <input class="quantity text-center btn bg-light" min="0" name="quantity" value="1" type="number" style="width: 80px;" style="color: black">
                                            <style>
                                                input[type="number"]::-webkit-outer-spin-button,
                                                input[type="number"]::-webkit-inner-spin-button {
                                                    -webkit-appearance: none;
                                                    margin: 0;
                                                }
                                                input[type="number"] {
                                                    -moz-appearance: textfield;
                                                }
                                            </style>
                                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus btn btn-info btn-plus plus"><i class="fa fa-plus"></i></button>
                                        </div>
                                        
                                        <div class="button add-cart bg-warning"><i class="fa fa-shopping-cart" style="font-size: 14px"></i> Add to Cart</div>

                                    </div>
                                    <style>
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
                                </div>
                                <br>
                                
                                
                                <!-- Cart & Favourite Box -->

                                <div class="cart-fav-box d-flex align-items-center">
                                    <!-- Cart -->
                                    <button type="submit" name="addtocart" value="5" class="btn essence-btn bg-primary">Checkout</button>
                                    <!-- Favourite -->
                                    <div class="product-favourite ml-4">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                    

                               
                            </form>
                        </div>
                        <!-- ##### Single Product Details Area Start ##### -->
                    </div>
                <!-- ##### Single Product Details Area End ##### -->
                </div>
                <div class="row mb-30">
                    <div class="col">
                        <h5 style="font-family: ubuntu">DETAIL PRODUK DARI RESPIRO TR-05 XENTRA N R1.4 RED</h5>
                        <hr style="height:1px;border:none; background-color:#333;">
                        <p class="text-dark" style="font-family: ubuntu">Jalani segala aktifitas dengan percaya diri bersama TR-05 Xentra. Dilengkapi dengan inner Poly Cotton yang akan membuat anda nyaman berkendara baik dalam cuaca dingin maupun panas. Desain sporty-nya cocok untuk anda yang berkarakter dinamis.          

                            Jaket Respiro ini cocok untuk anda yang sering berkendara di pagi hari dan malam hari.Teknologi windproof dan fitur cuff tab-nya akan memaksimalkan perlindungan anda selama berkendara. TR-05 Xentra juga dilengkapi dengan fitur air exhaust yang membantu mengeluarkan udara panas dari dalam jaket. Dengan fitur chest pocket-nya memudahkan anda untuk menjangkau barang bawaan anda</p>
                        <img src="assets_reseller/img/core-img/d1.png" alt="Image" width="30%">

                    </div>
                </div>
                <br>
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
                <div class="row mb-30">
                    <div class="col">
                        <h5 style="font-family: ubuntu">PRODUK SERUPA</h5>
                        <hr style="height:1px;border:none; background-color:#333;">
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
            </div>
        </div>
    <!-- ##### Checkout Area End ##### -->



@endsection
@section('javascript')

@endsection