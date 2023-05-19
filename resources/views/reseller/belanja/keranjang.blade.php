@extends('reseller.layout.template')
@section('title', 'Reseller | Keranjang')

@section('content')
<br><br>
    <!-- BREADCRUMB -->
    <div class="container-fluid mb-30">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light">
                    <a class="breadcrumb-item text-dark" href="reseller" style="font-size: 14px; font-family: ubuntu">Home</a>
                    <a class="breadcrumb-item text-dark" href="reseller-belanja" style="font-size: 14px; font-family: ubuntu">Belanja</a>
                    <a class="breadcrumb-item text-dark" href="reseller-detail" style="font-size: 14px; font-family: ubuntu">Detail</a>
                    <span class="breadcrumb-item text-dark active" style="font-size: 14px; font-family: ubuntu">Keranjang</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END -->

    <!-- SECTION -->
    <div class="container-fluid mb-100">
        <div class="row px-xl-5">
            <!-- TABLE -->
            <div class="col-lg-12 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0" >
                    <thead class="thead" style="background-color: rgb(248, 248, 248)">
                        <tr>
                            <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Pilih</th>
                            <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Foto</th>
                            <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Produk</th>
                            <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Variasi</th>
                            <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Harga Satuan</th>
                            <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Jumlah</th>
                            <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Total</th>
                            <th class="align-middle" style="color: black; font-family: ubuntu; font-size: 14px">Hapus</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">

                        @foreach ($getCartItem as $item)
                        <tr>
                            <td class="align-middle"><input type="checkbox" style="width: 20px; height: 20px;"></td>
                            <td class="align-middle"><img src="{{asset('storage/'.$item['produk']['foto_utama_produk'])}}" alt="" style="width: 100px;"></td>
                            <td class="align-middle">{{ $item['produk']['nama_produk'] }}</td>
                            <td class="align-middle">
                                <button id="popupBtn" class="button-60" role="button">Warna: Red-001 &ensp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
                                <div id="popupWrapper">
                                    <div id="popup">
                                        <h6>GANTI WARNA</h6><br>
                                        <div class="column" style="padding: 5px">
                                            <div style="padding-bottom: 10px"><button class="button-60" role="button" style="font-size: 16px">Red-001</button></div>
                                            <div style="padding-bottom: 10px"><button class="button-60" role="button" style="font-size: 16px">Green-001</button></div>
                                            <div style="padding-bottom: 10px"><button class="button-60" role="button" style="font-size: 16px">Grey-001</button></div>
                                            <div style="padding-bottom: 10px"><button class="button-60" role="button" style="font-size: 16px">Black-001</button></div>
                                            <div style="padding-bottom: 10px"><button class="button-60" role="button" style="font-size: 16px">Blue-001</button></div>
                                        </div>
                                        <button id="closeBtn" class="button-9" role="button" style="font-size: 16px">KONFIRMASI</button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">{{ $item['produk']['harga_produk'] }}</td>
                            <td class="align-middle">
                                <div>
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus btn btn-secondary btn-plus minus"><i class="fa fa-minus"></i></button>
                                    <input class="quantity text-center btn bg-light" min="0" name="kuantitas" value="{{ $item['kuantitas'] }}" type="number" style="width: 50px;" style="color: black">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus btn btn-secondary btn-plus plus"><i class="fa fa-plus"></i></button>
                                </div>
                            </td>
                            <td class="align-middle"></td>
                            <td class="align-middle actions" data-th="">
                                <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- TABLE END -->

            <!-- PESANAN -->
            <div class="col-lg-12">
                <div class="bg-light" style="padding: 20px">
                    <h5 class="section-title position-relative text-uppercase"><span class="pr-3">Pesanan</span></h5>
                    <div class="bg-light p-30 mt-30">
                        <!-- PILIH SEMUA -->
                        <div class="pb-2">
                            <div class="d-flex justify-content-between">
                                <p><input type="checkbox" style="width: 20px; height: 20px;">&ensp; PILIH SEMUA</p>
                            </div>
                        </div>
                        <!-- TOTAL PRODUK -->
                        <div class="border-bottom pb-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">TOTAL PRODUK</p>
                                <p class="text-dark">5 PRODUK</p>
                            </div>
                        </div>
                        <!-- TOTAL -->
                        <div class="pt-2 mb-3">
                            <div class="d-flex justify-content-between mt-2">
                                <h6>TOTAL:</h6>
                                <h6>Rp. 1.916.000</h6>
                            </div><hr>
                        </div>
                        <!-- CHECKOUT PESANAN -->
                        <div class="d-flex justify-content-end mt-30">
                            <a href="#" class="btn essence-btn bg-success">Checkout pesanan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PESANAN END-->
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
            font-family: BlinkMacSystemFont,-apple-system,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
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
            box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset,rgba(50, 50, 93, .1) 0 2px 5px 0,rgba(0, 0, 0, .07) 0 1px 1px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-family: -apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Ubuntu,sans-serif;
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
            transition: all .2s,box-shadow .08s ease-in;
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
        document.getElementById("popupBtn").addEventListener("click", function() {
            document.getElementById("popupWrapper").style.display = "block";
        });

        document.getElementById("closeBtn").addEventListener("click", function() {
            document.getElementById("popupWrapper").style.display = "none";
        });
    </script>
@endsection
@section('javascript')

@endsection

