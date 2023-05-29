<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JenisProduk;
use App\Models\Produk;
use App\Models\ItemProduk;
use App\Http\Requests\ItemProdukRequest;

class DetailController extends Controller
{

    public function show($id)
    {
        $jenis_produk = JenisProduk::all();
        $produk = Produk::with('item_produk')->find($id);

        $item_produk = ItemProduk::leftJoin('stok', 'item_produk.id', '=', 'stok.id_item_produk')
        ->select('item_produk.*', 'stok.jumlah_stok')
        ->where('item_produk.id_produk', $id)
        ->with(['produk','ukuran','warna'])->get();


        $result = $produk->toArray();
        $result['item_produk'] = $item_produk->toArray();
        // dd($result);

        return view ('reseller/belanja/detail', compact('jenis_produk','produk','item_produk'));
    }
    
}
