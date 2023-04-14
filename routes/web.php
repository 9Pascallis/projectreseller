<?php

use Illuminate\Support\Facades\Route;

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

    //kategori
    Route::get('/admin-viewkategori', function () {
        return view('/admin/kategori/viewkategori');
    });
    Route::get('/admin-createkategori', function () {
        return view('/admin/kategori/createkategori');
    });

    //produk
    Route::get('/admin-viewproduk', function () {
        return view('/admin/produk/viewproduk');
    });
    Route::get('/admin-createproduk', function () {
        return view('/admin/produk/createproduk');
    });

    //USER
    Route::get('/admin-viewuser', function () {
        return view('/admin/user/viewuser');
    });
    Route::get('/admin-createuser', function () {
        return view('/admin/user/createuser');
    });

    //ADMIN
    Route::get('/admin-viewadmin', function () {
        return view('/admin/admin/viewadmin');
    });
    Route::get('/admin-createadmin', function () {
        return view('/admin/admin/createadmin');
    });


//RESELLER
    //INDEX
    Route::get('/reseller', function () {
        return view('/reseller/index');
    });

    //BELANJA
    Route::get('/reseller-belanja', function () {
        return view('/reseller/belanja/belanja');
    });
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
    