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

//reseller
    //index
    Route::get('/reseller', function () {
        return view('/reseller/index');
    });

    //profile
    Route::get('/reseller-profile', function () {
        return view('/reseller/profile/profile');
    });
    Route::get('/reseller-profileedit', function () {
        return view('/reseller/profile/profileedit');
    });

    //shop
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

    //penjualan
    Route::get('/reseller-penjualan', function () {
        return view('/reseller/penjualan/index');
    });

    //profil
    Route::get('/reseller-profil', function () {
        return view('/reseller/profil/profil');
    });
    Route::get('/reseller-editprofil', function () {
        return view('/reseller/profil/editprofil');
    });