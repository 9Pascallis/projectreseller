<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Requests\ProdukRequest;

class DetailController extends Controller
{
    public function show($id)
    {
        $produk = Produk::find($id);
        $jenis_produk = JenisProduk::all();
        return view ('reseller/belanja/detail', compact('produk','jenis_produk'));
    }
}
