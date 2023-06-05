<?php
use Illuminate\Support\Facades\Route;

//LOGIN
use App\Http\Controllers\LoginController;

//RESELLER
use App\Http\Controllers\Reseller\IndexResellerController;
use App\Http\Controllers\Reseller\BelanjaController;
use App\Http\Controllers\Reseller\CartController;
use App\Http\Controllers\Reseller\CheckoutController;
use App\Http\Controllers\Reseller\ProfilController;

//ADMIN
use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\JenisProdukController;
use App\Http\Controllers\Admin\WarnaController;
use App\Http\Controllers\Admin\UkuranController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\ItemProdukController;
use App\Http\Controllers\Admin\StokController;


    Route::middleware(['auth'])->group(function () {
        
        //INDEX
        Route::get('/reseller', [IndexResellerController::class, 'index']) ->name('reseller');
        Route::get('/admin', [IndexAdminController::class, 'index']) ->name('admin');

        //BELANJA
        Route::get('/belanja', [BelanjaController::class, 'index']) ->name('belanja');
        Route::get('/detail/{id}', [BelanjaController::class, 'show']) ->name('detail');
        
        //DETAIL PEMESANAN
        Route::get('/keranjang', [CartController::class, 'index']) ->name('keranjang');
        Route::post('pesan/{id}', [CartController::class, 'store']) ->name('pesan/{id}');
        Route::delete('/deletekeranjang/{id}', [CartController::class, 'delete']);

        //PEMESANAN
        Route::get('/checkout', [CheckoutController::class, 'index']) ->name('checkout');

        //PROFIL
        Route::get('/profil', [ProfilController::class, 'index']) ->name('profil');

        //ALAMAT
        Route::get('/tambahalamat', [ProfilController::class, 'createalamat']) ->name('tambahalamat');
        Route::get('/editalamat/{id}', [ProfilController::class, 'editalamat']) ->name('editalamat/{id}');
        Route::post('tambahalamat/{id}', [ProfilController::class, 'storealamat']) ->name('tambahalamat/{id}');
        Route::post('updatealamat/{id}', [ProfilController::class, 'updatealamat']) ->name('updatealamat/{id}');

        
        // Route::get('/checkout', [CartController::class, 'konfirmasikeranjang']) ->name('checkout');
        // Route::post('checkout/{id}', [CheckoutController::class, 'store']) ->name('checkout/{id}');
        // Route::post('cart/add', [CartController::class, 'store']) ->name('cart/add');

        //LOGOUT
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });



//ROUTE ADMIN

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



//ROUTE LOGIN & ROLE

    //LOGIN
    Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/loginauth', [LoginController::class, 'store']);

    //USER
    Route::get('/indexuser', [UserController::class, 'index']) ->name('indexuser');
    Route::get('/indexuser', [UserController::class, 'index']) ->name('indexuser');
    Route::get('/tambahuser', [UserController::class, 'create']) ->name('tambahuser');
    Route::post('/insertdatauser', [UserController::class, 'store']) ->name('insertdatauser');
    Route::get('/edituser/{id}', [UserController::class, 'edit']) ->name('edituser');
    Route::post('/updateuser/{id}', [UserController::class, 'update']) ->name('updateuser');
    Route::get('/deleteuser/{id}', [UserController::class, 'destroy']) ->name('deleteuser');
    
    //ADMIN
    Route::get('/indexadmin', [UserController::class, 'indexadmin']) ->name('indexadmin');
    Route::get('/tambahadmin', [UserController::class, 'createadmin']) ->name('tambahadmin');
    Route::post('/insertdataadmin', [UserController::class, 'storeadmin']) ->name('insertdataadmin');
    Route::get('/editadmin/{id}', [UserController::class, 'editadmin']) ->name('editadmin');
    Route::post('/updateadmin/{id}', [UserController::class, 'updateadmin']) ->name('updateadmin');
    Route::get('/deleteadmin/{id}', [UserController::class, 'destroyadmin']) ->name('deleteadmin');

    //PEMESANAN
    Route::get('/admin-viewpemesanan', function () {
        return view('/admin/pemesanan/viewpemesanan');
    });

