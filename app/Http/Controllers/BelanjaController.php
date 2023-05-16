<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Requests\ProdukRequest;

class BelanjaController extends Controller
{
    public function index()
    {
        $jenis_produk = JenisProduk::all();
        $produk = Produk::all();
        return view ('reseller/belanja/belanja', compact('produk','jenis_produk'));
    }
}
