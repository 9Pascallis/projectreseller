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
        // $produk = Produk::find($id);
        // $produk = Produk::leftJoin('item_produk', 'produk.id','=', 'item_produk.id_produk')
        // ->select('produk.*', 'item_produk.id')->get();
        $produk = Produk::with('item_produk')->find($id);

        $item_produk = ItemProduk::leftJoin('stok', 'item_produk.id', '=', 'stok.id_item_produk')
        ->select('item_produk.*', 'stok.jumlah_stok')
        ->where('item_produk.id_produk', $id)
        ->with(['produk','ukuran','warna'])->get();


        $result = $produk->toArray();
        $result['item_produk'] = $item_produk->toArray();
        // dd($result);

        return view ('/admin/produk/indexitemproduk', compact('jenis_produk','produk','item_produk'));
    }


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
        $stok= ItemProduk::where('id_warna',$request->id_warna)->where('id_ukuran',$request->id_ukuran)->where('id_produk', $request->id_produk)->first();

        if($stok==null){
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
            return redirect()->route('indexitemproduk', ['id' => $request->id_produk])->with('create', 'Data berhasil!');
            // return redirect()->back()->with('create', 'Data Berhasil ditambah!');
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
