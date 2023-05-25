<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\Produk;
use App\Models\ItemProduk;
use App\Models\Warna;
use App\Models\Ukuran;
use App\Http\Requests\ItemProdukRequest;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ItemProdukController extends Controller
{
    // public function index()
    // {
    //     $produk = Produk::all();
    //     return view ('admin/produk/indexproduk', compact('produk'));
    // }

    public function create($id)
    {
        $warna = Warna::all();
        $ukuran = Ukuran::all();
        $produk = Produk::find($id);
        $jenis_produk = JenisProduk::all();
        return view ('/admin/produk/tambahitemproduk', compact('jenis_produk','produk','warna', 'ukuran'));
    }

    public function store(ItemProdukRequest $request)
    {

        $item_produk = $request->validated();
        if ($request->hasFile('foto_item_produk')) {
            $file = $request->file('foto_item_produk');
            $file_extension = $file->getClientOriginalName();
            $destination_path = public_path() . '/storage';
            $filename = $file_extension;
            $request->file('foto_item_produk')->move($destination_path, $filename);
            $item_produk['foto_item_produk'] = $filename;
        }
        ItemProduk::create($item_produk);
        return redirect()->back();
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
