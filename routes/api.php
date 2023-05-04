<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(App\Http\Controllers\ResellerController::class)->group(function(){
    Route::get('reseller', 'index')->name('reseller');
});

Route::controller(App\Http\Controllers\KategoriController::class)->group(function(){
    Route::get('kategori', 'index')->name('kategori');
});

Route::controller(App\Http\Controllers\KontenController::class)->group(function(){
    Route::get('konten', 'index')->name('konten');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
