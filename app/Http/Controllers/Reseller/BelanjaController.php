<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\JenisProduk;
use App\Models\Produk;
use App\Models\ItemProduk;

class BelanjaController extends Controller
{

    public function index(Request $request)
{
    $keyword = $request->keyword;
    $jenis_produk = JenisProduk::all();

    $produkQuery = Produk::query();

    $produkQuery->whereHas('item_produk', function ($query) {
        $query->where('jumlah_stok', '>', 0);
    });
    

    if ($keyword) {
        $produkQuery->where('nama_produk', 'LIKE', '%'.$keyword.'%');
    }

    if ($request->jenis_produk) {
        $produkQuery->whereHas('jenis_produk', function ($query) use ($request) {
            $query->where('nama_jenis_produk', $request->jenis_produk);
        });
    }

    $produk = $produkQuery->paginate(9);
    $produk->withPath('belanja');
    $produk->appends($request->all());

    $totalProduk = $produk->count();

    return view('reseller/belanja/belanja', compact('produk', 'jenis_produk', 'keyword', 'totalProduk'));
}


    

public function show($id)
{
    $jenis_produk = JenisProduk::all();
    $produk = Produk::with('item_produk')->find($id);

    $item_produk = ItemProduk::where('item_produk.id_produk', $id)
        ->with(['produk', 'ukuran', 'warna'])
        ->get();

    // Membuat array asosiatif untuk mengelompokkan foto berdasarkan warna
    $groupedPhotos = [];
    foreach ($item_produk as $item) {
        $warna = $item->warna->nama_warna;

        if (!isset($groupedPhotos[$warna])) {
            $groupedPhotos[$warna] = $item->foto_item_produk;
        }
    }

    // Menambahkan array foto yang telah dikelompokkan ke dalam data produk
    $result = $produk->toArray();
    $result['grouped_photos'] = $groupedPhotos;

    return view('reseller.belanja.detail', compact('jenis_produk', 'produk', 'item_produk', 'groupedPhotos'));
}


    
}
