<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\JenisProduk;
use App\Models\Produk;
use App\Models\ItemProduk;
use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use App\Models\Cart;

class CartController extends Controller
{

    public function index()
    {
        $jenis_produk = JenisProduk::all();
        $keranjang = Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();
        //masih bingung cart terbaca saat keranjang juga kosong
        if(empty($keranjang))
        {
            return view ('reseller/belanja/keranjang')->with(compact('jenis_produk'));
            // return redirect()->back();
        }
        else
        {
            $detail_keranjang = DetailKeranjang::where('id_keranjang', $keranjang->id)->get();
        }
        return view ('reseller/belanja/keranjang')->with(compact('jenis_produk', 'keranjang', 'detail_keranjang'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, $id)
    {
        $id_item_produk = $request->input('id_item_produk');

        $item_produk = ItemProduk::leftJoin('stok', 'item_produk.id', '=', 'stok.id_item_produk')
        ->select('item_produk.*', 'stok.jumlah_stok')
        ->where('item_produk.id', $id_item_produk)
        ->first();
        $tanggal_keranjang= Carbon::now();

        //validasi apakah melebihi stok
        if($request->kuantitas>$item_produk->jumlah_stok)
        {
            return redirect ('detail/'.$id);
        }
        
        //cek validasi
        $cek_keranjang= Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();
        if(empty($cek_keranjang))
        {
            //Simpan ke database keranjang
            $keranjang = new Keranjang;
            $keranjang->id_user = Auth::user()->id;
            $keranjang->tanggal_keranjang = $tanggal_keranjang;
            $keranjang->total_harga_keranjang = 0;
            $keranjang->status = 0;
            $keranjang->save();
        }

        //Simpan ke database detail keranjang
        $keranjang_baru = Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();

        //cek detail keranjang
        $cek_detail_keranjang = DetailKeranjang::where('id_item_produk', $item_produk->id)->where('id_keranjang', $keranjang_baru->id)->first();
        if(empty($cek_detail_keranjang))
        {
            $detail_keranjang = new DetailKeranjang;
            $detail_keranjang->id_item_produk = $item_produk->id;
            $detail_keranjang->id_keranjang = $keranjang_baru->id;
            $detail_keranjang->kuantitas = $request->kuantitas;
            $detail_keranjang->jumlah_harga = $item_produk->produk->harga_produk*$request->kuantitas;
            $detail_keranjang->save();
        } else
        {
            $detail_keranjang = DetailKeranjang::where('id_item_produk', $item_produk->id)->where('id_keranjang', $keranjang_baru->id)->first();
            $detail_keranjang->kuantitas = $detail_keranjang->kuantitas+$request->kuantitas;
   
            //harga sekarang
            $harga_detail_keranjang_baru = $item_produk->produk->harga_produk*$request->kuantitas;
            $detail_keranjang->jumlah_harga = $detail_keranjang->jumlah_harga+$harga_detail_keranjang_baru;
            $detail_keranjang->update();
        }

        //jumlah total
        $keranjang = Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();
        $keranjang->total_harga_keranjang = $keranjang->total_harga_keranjang+$item_produk->produk->harga_produk*$request->kuantitas;
        $keranjang->update();
        return redirect ('keranjang');

    }


    public function delete($id)
    {
        $detail_keranjang = DetailKeranjang::where('id', $id)->first();

        $keranjang = Keranjang::where('id', $detail_keranjang->id_keranjang)->first();
        $keranjang->total_harga_keranjang = $keranjang->total_harga_keranjang-$detail_keranjang->jumlah_harga;
        $keranjang->update();
        $detail_keranjang->delete();
        return redirect('keranjang');
    }


    public function konfirmasikeranjang()
        {
            $keranjang = Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();
            $id_keranjang = $keranjang->id;
            $keranjang->status = 1;
            $keranjang->update();
    
            $detail_keranjang = DetailKeranjang::where('id_keranjang', $id_keranjang)->get();
            foreach ($detail_keranjang as $detail_keranjang) {
                $produk = Produk::where('id', $detail_keranjang->id_produk)->first();
                $produk->total_stok_produk = $produk->total_stok_produk-$detail_keranjang->kuantitas;
                $produk->update();
            }
            $jenis_produk = JenisProduk::all();
            return view ('reseller/belanja/checkout', compact('jenis_produk'));
        }
        
}
