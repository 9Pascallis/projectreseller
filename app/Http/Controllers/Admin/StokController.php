<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JenisProduk;
use App\Models\Produk;
use App\Models\ItemProduk;
use App\Models\Warna;
use App\Models\Ukuran;
use App\Models\Stok;
use App\Http\Requests\StokRequest;

class StokController extends Controller
{

    public function create($id)
    {
        $jenis_produk = JenisProduk::all();
        $item_produk = ItemProduk::find($id);
        return view ('/admin/produk/tambahstokitemproduk', compact('jenis_produk','item_produk'));
    }


    public function store(StokRequest $request)
    {
        $stok_total = $request->validated();
        $stok = Stok::where('id_item_produk', $request->id_item_produk)->first();
        if($stok==null)
        {
            Stok::create($stok_total);
            return redirect()->back()->with('create', 'Stok Berhasil ditambah!');
        }
        else
        {
            $stok->jumlah_stok = $request->jumlah_stok+$stok->jumlah_stok;
            $stok->update();
            return redirect()->back()->with('update', 'Data Berhasil diupdate!');
        }
    }
    
}
