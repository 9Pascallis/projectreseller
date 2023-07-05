<?php
use Illuminate\Support\Facades\Route;

//LOGIN
use App\Http\Controllers\LoginController;

//RESELLER
use App\Http\Controllers\Reseller\IndexResellerController;
use App\Http\Controllers\Reseller\BelanjaController;
use App\Http\Controllers\Reseller\CartController;
use App\Http\Controllers\Reseller\CheckoutController;
use App\Http\Controllers\Reseller\DetailPemesananController;
use App\Http\Controllers\Reseller\PemesananController;
use App\Http\Controllers\Reseller\PembayaranController;
use App\Http\Controllers\Reseller\ProfilController;
use App\Http\Controllers\Reseller\HistoriController;

//ADMIN
use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\JenisProdukController;
use App\Http\Controllers\Admin\WarnaController;
use App\Http\Controllers\Admin\UkuranController;
use App\Http\Controllers\Admin\JasaPengirimanController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\ItemProdukController;
use App\Http\Controllers\Admin\StokController;
use App\Http\Controllers\Admin\HistoriPemesananController;
use App\Http\Controllers\Admin\HistoriPembayaranController;



        Route::middleware(['auth', 'cekrole:1'])->group(function () {
            // Rute yang membutuhkan otentikasi (auth) dan middleware 'cekrole:1'
            Route::get('/admin', [IndexAdminController::class, 'index']) ->name('admin');
            //JENIS PRODUK
            Route::get('/indexjenisproduk', [JenisProdukController::class, 'index']) ->name('indexjenisproduk');
            Route::get('/tambahjenisproduk', [JenisProdukController::class, 'create']) ->name('tambahjenisproduk');
            Route::post('/insertdatajenisproduk', [JenisProdukController::class, 'store']) ->name('insertdatajenisproduk');
            Route::get('/deletejenisproduk/{id}', [JenisProdukController::class, 'destroy']) ->name('deletejenisproduk');

            //PRODUK
            Route::get('/indexproduk', [ProdukController::class, 'index']) ->name('indexproduk');
            Route::get('/tambahproduk', [ProdukController::class, 'create']) ->name('tambahproduk');
            Route::post('/insertdataproduk', [ProdukController::class, 'store']) ->name('insertdataproduk');
            Route::get('/detailproduk/{id}', [ProdukController::class, 'show']) ->name('detailproduk');
            Route::get('/editproduk/{id}', [ProdukController::class, 'edit']) ->name('editproduk');
            Route::post('/updateproduk/{id}', [ProdukController::class, 'update']) ->name('updateproduk');
            Route::get('/deleteproduk/{id}', [ProdukController::class, 'destroy']) ->name('deleteproduk');

            //UKURAN
            Route::get('/indexukuran', [UkuranController::class, 'index']) ->name('indexukuran');
            Route::get('/tambahukuran', [UkuranController::class, 'create']) ->name('tambahukuran');
            Route::post('/insertdataukuran', [UkuranController::class, 'store']) ->name('insertdataukuran');
            Route::get('/deleteukuran/{id}', [UkuranController::class, 'destroy']) ->name('deleteukuran');

            //UKURAN
            Route::get('/indexjasapengiriman', [JasaPengirimanController::class, 'index']) ->name('indexjasapengiriman');
            Route::get('/tambahjasapengiriman', [JasaPengirimanController::class, 'create']) ->name('tambahjasapengiriman');
            Route::post('/insertdatajasapengiriman', [JasaPengirimanController::class, 'store']) ->name('insertdatajasapengiriman');
            Route::get('/deletejasapengiriman/{id}', [JasaPengirimanController::class, 'destroy']) ->name('deletejasapengiriman');


            //WARNA
            Route::get('/indexwarna', [WarnaController::class, 'index']) ->name('indexwarna');
            Route::get('/tambahwarna', [WarnaController::class, 'create']) ->name('tambahwarna');
            Route::post('/insertdatawarna', [WarnaController::class, 'store']) ->name('insertdatawarna');
            Route::get('/deletewarna/{id}', [WarnaController::class, 'destroy']) ->name('deletewarna');

            //ITEM PRODUK
            Route::get('/indexitemproduk/{id}', [ItemProdukController::class, 'index']) ->name('indexitemproduk');
            Route::get('/tambahitemproduk/{id}', [ItemProdukController::class, 'create']) ->name('tambahitemproduk');
            Route::post('/insertdataitemproduk', [ItemProdukController::class, 'store']) ->name('insertdataitemproduk');
            Route::get('/deleteitemproduk/{id}', [ItemProdukController::class, 'destroy']) ->name('deleteitemproduk');

            //STOK
            Route::get('/tambahstokitemproduk/{id}', [StokController::class, 'create']) ->name('tambahstokitemproduk');
            Route::post('/insertdatastokitemproduk', [StokController::class, 'store']) ->name('insertdatastokitemproduk');

            //HISTORI PEMESANAN
            Route::get('/indexhistoripemesanan', [HistoriPemesananController::class, 'index']) ->name('indexhistoripemesanan');
            Route::get('/konfirmasipembayaran/{id}', [HistoriPemesananController::class, 'edit']) ->name('konfirmasipembayaran/{id}');
            Route::post('konfirmasi/{id}', [HistoriPemesananController::class, 'update']) ->name('konfirmasi/{id}');

            //HISTORI PEMBAYARAN
            Route::get('/indexhistoripembayaran', [HistoriPembayaranController::class, 'index']) ->name('indexhistoripembayaran');
            Route::get('/detailhistoripembayaran/{id}', [HistoriPembayaranController::class, 'show']) ->name('detailhistoripembayaran/{id}');

            
            
            
        });

        Route::middleware(['auth', 'cekrole:2'])->group(function () {
            //INDEX
            Route::get('/reseller', [IndexResellerController::class, 'index']) ->name('reseller');
                    

            //BELANJA
            Route::get('/belanja', [BelanjaController::class, 'index']) ->name('belanja');
            Route::get('/detail/{id}', [BelanjaController::class, 'show']) ->name('detail');

            //DETAIL PEMESANAN
            Route::get('/keranjang', [DetailPemesananController::class, 'index']) ->name('keranjang');
            Route::post('pesan/{id}', [DetailPemesananController::class, 'store']) ->name('pesan/{id}');
            Route::delete('/deletekeranjang/{id}', [DetailPemesananController::class, 'delete']);

            //PEMESANAN
            Route::get('/checkout', [PemesananController::class, 'index']) ->name('checkout');
            Route::post('/getkabupaten', [PemesananController::class, 'getkabupaten'])->name('getkabupaten');
            Route::post('/getkecamatan', [PemesananController::class, 'getkecamatan'])->name('getkecamatan');
            Route::post('checkout/{id}', [PemesananController::class, 'store']) ->name('checkout/{id}');

            //PEMBAYARAN
            Route::get('/pesanpembayaran/{id}', [PembayaranController::class, 'index']) ->name('pesanpembayaran/{id}');

            //PROFIL
            Route::get('/profil', [ProfilController::class, 'index']) ->name('profil');
            Route::post('/getkabupaten', [ProfilController::class, 'getkabupaten'])->name('getkabupaten');
            Route::post('/getkecamatan', [ProfilController::class, 'getkecamatan'])->name('getkecamatan');
            Route::get('/editprofil/{id}', [ProfilController::class, 'edit']) ->name('editprofil/{id}');
            Route::post('updateprofil/{id}', [ProfilController::class, 'update']) ->name('updateprofil/{id}');

            //HISTORI
            Route::get('/histori', [HistoriController::class, 'index']) ->name('histori');
            Route::get('/historipemesanan/{id}', [HistoriController::class, 'showpemesanan']) ->name('historipemesanan/{id}');
            Route::get('/historipembayaran/{id}', [HistoriController::class, 'showpembayaran']) ->name('historipembayaran/{id}');
        });

    Route::middleware(['auth'])->group(function () {
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });

    //USER
    Route::get('/indexuser', [UserController::class, 'index']) ->name('indexuser');
    Route::get('/indexuser', [UserController::class, 'index']) ->name('indexuser');
    Route::get('/tambahuser', [UserController::class, 'create']) ->name('tambahuser');
    Route::post('/getkabupaten', [UserController::class, 'getkabupaten'])->name('getkabupaten');
    Route::post('/getkecamatan', [UserController::class, 'getkecamatan'])->name('getkecamatan');
    Route::post('/insertdatauser', [UserController::class, 'store']) ->name('insertdatauser');
    Route::get('/detailuser/{id}', [UserController::class, 'show']) ->name('detailuser');
    Route::get('/edituser/{id}', [UserController::class, 'edit']) ->name('edituser');
    Route::post('/updateuser/{id}', [UserController::class, 'update']) ->name('updateuser');
    Route::get('/deleteuser/{id}', [UserController::class, 'destroy']) ->name('deleteuser');

    //ADMIN
    Route::get('/indexadmin', [UserController::class, 'indexadmin']) ->name('indexadmin');
    Route::get('/tambahadmin', [UserController::class, 'createadmin']) ->name('tambahadmin');
    Route::post('/insertdataadmin', [UserController::class, 'storeadmin']) ->name('insertdataadmin');
    Route::get('/detailadmin/{id}', [UserController::class, 'showadmin']) ->name('detailadmin');
    Route::get('/editadmin/{id}', [UserController::class, 'editadmin']) ->name('editadmin');
    Route::post('/updateadmin/{id}', [UserController::class, 'updateadmin']) ->name('updateadmin');
    Route::get('/deleteadmin/{id}', [UserController::class, 'destroyadmin']) ->name('deleteadmin');

    //LOGIN
    Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/loginauth', [LoginController::class, 'store']);

    


