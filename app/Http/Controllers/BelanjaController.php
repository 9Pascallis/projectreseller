<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Requests\ProdukRequest;

class BelanjaController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $jenis_produk = JenisProduk::all();
        $produk = Produk::where('nama_produk', 'LIKE', '%'.$keyword.'%')->paginate(9);
        $produk->withPath('reseller-belanja');
        $produk->appends($request->all());
        return view ('reseller/belanja/belanja', compact('produk','jenis_produk', 'keyword'));
    }
}
