<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JenisProduk;
use App\Models\Produk;
use App\Models\Warna;
use App\Models\Ukuran;
use App\Models\ItemProduk;
use App\Http\Requests\ItemProdukRequest;

class ItemProdukController extends Controller
{

    public function index($id)
    {
        $jenis_produk = JenisProduk::all();
        $produk = Produk::with('item_produk')->find($id);

        $item_produk = ItemProduk::where('item_produk.id_produk', $id)
        ->with(['produk','ukuran','warna'])->get();
        $result = $produk->toArray();
        $result['item_produk'] = $item_produk->toArray();

        return view ('/admin/produk/indexitemproduk', compact('jenis_produk','produk','item_produk'));
    }


    public function create($id)
    {
        $ukuran = Ukuran::all();
        $warna = Warna::all();
        $produk = Produk::find($id);

        return view ('/admin/produk/tambahitemproduk', compact('produk','warna', 'ukuran'));
    }


    public function store(ItemProdukRequest $request)
    {
        $item_produk= ItemProduk::where('id_warna',$request->id_warna)
        ->where('id_ukuran',$request->id_ukuran)
        ->where('id_produk', $request->id_produk)
        ->first();

        if($item_produk==null){
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
            return redirect()->route('indexitemproduk', ['id' => $request->id_produk])->with('create', 'Item berhasil ditambah!');
        }
        else
        {
            return redirect()->back()->with('error', 'Data ada yang sama!');
        }
    }


    public function destroy($id)
    {
        $item_produk = ItemProduk::find($id);
        $item_produk->delete();
        return redirect()->back()->with('destroy', 'Data Berhasil dihapus!');
    }
    
}
