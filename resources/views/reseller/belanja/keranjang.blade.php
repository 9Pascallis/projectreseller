@extends('reseller.layout.template')
@section('title', 'Reseller | Home')
@section('content')
<br><br>
        <!-- Breadcrumb Start -->
        <div class="container-fluid mb-30">
            <div class="row px-xl-5">
                <div class="col-12">
                    <nav class="breadcrumb bg-light">
                        <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Home</a>
                        <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Belanja</a>
                        <a class="breadcrumb-item text-dark" href="#" style="font-size: 14px; font-family: ubuntu">Detail</a>
                        <span class="breadcrumb-item text-dark active" style="font-size: 14px; font-family: ubuntu">Keranjang</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->
    <!-- Cart Start -->
    <div class="container-fluid mb-100">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead" style="background-color: grey">
                        <tr>
                            <th class="align-middle" style="color: white; font-family: ubuntu">Foto</th>
                            <th class="align-middle" style="color: white; font-family: ubuntu">Produk</th>
                            <th class="align-middle" style="color: white; font-family: ubuntu">Harga</th>
                            <th class="align-middle" style="color: white; font-family: ubuntu">Jumlah</th>
                            <th class="align-middle" style="color: white; font-family: ubuntu">Total</th>
                            <th class="align-middle" style="color: white; font-family: ubuntu">Hapus</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <tr>
                            <td class="align-middle"><img src="assets_reseller/img/product-img/product-2.jpg" alt="" style="width: 120px;"></td>
                            <td class="align-middle">RESPIRO TR-05 XENTRA N R1.4 RED</td>
                            <td class="align-middle">Rp. 440.000</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Rp. 440.000</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="assets_reseller/img/product-img/product-1.jpg" alt="" style="width: 120px;"></td>
                            <td class="align-middle">RESPIRO TR-05 XENTRA N R1.4 RED</td>
                            <td class="align-middle">Rp. 440.000</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Rp. 440.000</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="assets_reseller/img/product-img/product-3.jpg" alt="" style="width: 120px;"></td>
                            <td class="align-middle">RESPIRO TR-05 XENTRA N R1.4 RED</td>
                            <td class="align-middle">Rp. 440.000</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Rp. 440.000</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="assets_reseller/img/product-img/product-4.jpg" alt="" style="width: 120px;"></td>
                            <td class="align-middle">RESPIRO TR-05 XENTRA N R1.4 RED</td>
                            <td class="align-middle">Rp. 440.000</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Rp. 440.000</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="assets_reseller/img/product-img/product-5.jpg" alt="" style="width: 120px;"></td>
                            <td class="align-middle">RESPIRO TR-05 XENTRA N R1.4 RED</td>
                            <td class="align-middle">Rp. 440.000</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Rp. 440.000</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="bg-light" style="padding: 20px">
                    <h6 class="section-title position-relative text-uppercase mb-4"><span class="pr-3">Total Pesanan</span></h6>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">NORDIC JACKET (1)</p>
                            <p class="text-dark">Rp. 625.000</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">VELOCITY VENT R3 (1)</p>
                            <p class="text-dark">Rp. 836.000</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">RESPIRO TR-05 XENTRA N R1.4 RED (1)</p>
                            <p class="text-dark">Rp.440.000</p>
                        </div>
                    </div>
                    <div class="pt-2 mb-3">
                        <div class="d-flex justify-content-between mt-2">
                            <h6>Total</h6>
                            <h6>Rp. 1.916.000</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn essence-btn bg-success">Checkout pesanan</a>
                    </div>
                    
                </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Cart End -->

    


@endsection
@section('javascript')

@endsection