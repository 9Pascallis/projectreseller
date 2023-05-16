<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\ProdukController;

//landing
    Route::get('/landing', function () {
        return view('/landing/landing');
    });
//auth
    Route::get('/login', function () {
        return view('/auth/login');
    });

//admin
    //index
    Route::get('/admin', function () {
        return view('/admin/index');
    });

    //pelanggan
    Route::get('/admin-datareseller', function () {
        return view('/admin/pelanggan/datareseller');
    });
    Route::get('/admin-datapembeli', function () {
        return view('/admin/pelanggan/datapembeli');
    });

    //JENIS PRODUK
    Route::get('/indexjenisproduk', [JenisProdukController::class, 'index']) ->name('indexjenisproduk');
    Route::get('/tambahjenisproduk', [JenisProdukController::class, 'create']) ->name('tambahjenisproduk');
    Route::post('/insertdatajenisproduk', [JenisProdukController::class, 'store']) ->name('insertdatajenisproduk');
    Route::get('/editjenisproduk-{id}', [JenisProdukController::class, 'edit']) ->name('editjenisproduk');
    Route::post('/updatejenisproduk-{id}', [JenisProdukController::class, 'update']) ->name('updatejenisproduk');
    Route::get('/deletejenisproduk-{id}', [JenisProdukController::class, 'destroy']) ->name('deletejenisproduk');

    //PRODUK
    Route::get('/indexproduk', [ProdukController::class, 'index']) ->name('indexproduk');
    Route::get('/tambahproduk', [ProdukController::class, 'create']) ->name('tambahproduk');
    Route::post('/insertdataproduk', [ProdukController::class, 'store']) ->name('insertdataproduk');
    Route::get('/detailproduk-{id}', [ProdukController::class, 'show']) ->name('detailproduk');
    Route::get('/editproduk-{id}', [ProdukController::class, 'edit']) ->name('editproduk');
    Route::post('/updateproduk-{id}', [ProdukController::class, 'update']) ->name('updateproduk');
    Route::get('/deleteproduk-{id}', [ProdukController::class, 'destroy']) ->name('deleteproduk');

    //produk
    Route::get('/admin-viewproduk', function () {
        return view('/admin/produk/viewproduk');
    });
    Route::get('/admin-createproduk', function () {
        return view('/admin/produk/createproduk');
    });

    //USER
    Route::get('/indexuser', [UserController::class, 'index']) ->name('indexuser');
    Route::get('/tambahuser', [UserController::class, 'create']) ->name('tambahuser');
    Route::post('/insertdatauser', [UserController::class, 'store']) ->name('insertdatauser');
    Route::get('/edituser-{id}', [UserController::class, 'edit']) ->name('edituser');
    Route::post('/updateuser-{id}', [UserController::class, 'update']) ->name('updateuser');
    Route::get('/deleteuser-{id}', [UserController::class, 'destroy']) ->name('deleteuser');

    //ADMIN
    Route::get('/indexadmin', [AdminController::class, 'index']) ->name('indexadmin');
    Route::get('/tambahadmin', [AdminController::class, 'create']) ->name('tambahadmin');
    Route::post('/insertdataadmin', [AdminController::class, 'store']) ->name('insertdataadmin');
    Route::get('/editadmin-{id}', [AdminController::class, 'edit']) ->name('editadmin');
    Route::post('/updateadmin-{id}', [AdminController::class, 'update']) ->name('updateadmin');
    Route::get('/deleteadmin-{id}', [AdminController::class, 'destroy']) ->name('deleteadmin');




    //PEMESANAN
    Route::get('/admin-viewpemesanan', function () {
        return view('/admin/pemesanan/viewpemesanan');
    });

    

//RESELLER
    //INDEX
    Route::get('/reseller', function () {
        return view('/reseller/index');
    });

    //BELANJA
    Route::get('/reseller-belanja', [BelanjaController::class, 'index']) ->name('reseller-belanja');
    // Route::get('/reseller-belanja', function () {
    //     return view('/reseller/belanja/belanja');
    // });
    Route::get('/reseller-detail', function () {
        return view('/reseller/belanja/detail');
    });
    Route::get('/reseller-keranjang', function () {
        return view('/reseller/belanja/keranjang');
    });
    Route::get('/reseller-checkout', function () {
        return view('/reseller/belanja/checkout');
    });

    //PROFIL
    Route::get('/reseller-profil', function () {
        return view('/reseller/profil/profil');
    });
    Route::get('/reseller-editprofil', function () {
        return view('/reseller/profil/editprofil');
    });
    