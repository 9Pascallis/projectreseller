<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JenisProduk;
use App\Models\Produk;
use App\Models\ItemProduk;

class BelanjaController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $jenis_produk = JenisProduk::all();
        $produk = Produk::where('nama_produk', 'LIKE', '%'.$keyword.'%')->paginate(9);
        $produk->withPath('belanja');
        $produk->appends($request->all());

        if ($request->jenis_produk) {
            $jenisProduk = JenisProduk::where('nama_jenis_produk', $request->jenis_produk)->firstOrFail();
            $produk = $jenisProduk->produk()->paginate(3);

        }
        $totalProduk = $produk->count();

        
        return view ('reseller/belanja/belanja', compact('produk','jenis_produk', 'keyword', 'totalProduk'));
    }

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

        return view ('reseller/belanja/detail', compact('jenis_produk','produk','item_produk'));
    }
    
}
