<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\IndexResellerController;


// Route::get('/', [IndexResellerController::class, 'index']) ->name('index');

Route::middleware(['auth'])->group(function () {
    


    //INDEX
    Route::get('/reseller-index', [IndexResellerController::class, 'index']) ->name('reseller-index');
    Route::get('/reseller-belanja', [BelanjaController::class, 'index']) ->name('reseller-belanja');
    Route::get('/reseller-keranjang', [CartController::class, 'index']) ->name('reseller-keranjang');
    Route::get('/reseller-checkout', [CheckoutController::class, 'index']) ->name('reseller-checkout');
    Route::get('/admin-index', [IndexAdminController::class, 'index']) ->name('admin-index');

    //EDIT
    Route::get('/reseller-editprofil', [ProfilController::class, 'edit']) ->name('reseller-editprofil');

    //SHOW
    Route::get('/reseller-profil', [ProfilController::class, 'show']) ->name('reseller-profil');
    Route::get('/reseller-detail-{id}', [DetailController::class, 'show']) ->name('reseller-detail');

    //STORE
    Route::post('cart/add', [CartController::class, 'store']) ->name('cart/add');

    //LOGOUT
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

//LOGIN
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/loginauth', [LoginController::class, 'store']);

//ADMIN

    //INDEX

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

    //USER
    Route::get('/indexuser', [UserController::class, 'index']) ->name('indexuser');
    Route::get('/tambahuser', [UserController::class, 'create']) ->name('tambahuser');
    Route::post('/insertdatauser', [UserController::class, 'store']) ->name('insertdatauser');
    Route::get('/detailuser-{id}', [UserController::class, 'show']) ->name('detailuser');
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

    




    