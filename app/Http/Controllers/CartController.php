<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\Produk;
use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        
        
        $jenis_produk = JenisProduk::all();
        $keranjang = Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();
        //masih bingung cart terbaca saat keranjang juga kosong
        if(empty($keranjang))
        {
            return redirect()->back();
        }
        $detail_keranjang = DetailKeranjang::where('id_keranjang', $keranjang->id)->get();
        return view ('reseller/belanja/keranjang')->with(compact('jenis_produk', 'keranjang', 'detail_keranjang'));
    }

    public function store(Request $request, $id)
    {
        $produk = Produk::where('id',$id)->first();
        $tanggal_keranjang= Carbon::now();


        //validasi apakah melebihi stok
        if($request->kuantitas>$produk->total_stok_produk)
        {
            return redirect ('reseller-detail-'.$id);
        }

        //cek validasi
        $cek_keranjang= Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();
        //simpan ke database keranjang
        if(empty($cek_keranjang))
        {
            $keranjang = new Keranjang;
            $keranjang->id_user = Auth::user()->id;
            $keranjang->tanggal_keranjang = $tanggal_keranjang;
            $keranjang->total_harga_keranjang = 0;
            $keranjang->status = 0;
            $keranjang->save();
        }
        
        //simpan ke database detail keranjang
        $keranjang_baru = Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();

        //cek detail keranjang
        $cek_detail_keranjang = DetailKeranjang::where('id_produk', $produk->id)->where('id_keranjang', $keranjang_baru->id)->first();
        if(empty($cek_detail_keranjang))
        {
            $detail_keranjang = new DetailKeranjang;
            $detail_keranjang->id_produk = $produk->id;
            $detail_keranjang->id_keranjang = $keranjang_baru->id;
            $detail_keranjang->kuantitas = $request->kuantitas;
            $detail_keranjang->jumlah_harga = $produk->harga_produk*$request->kuantitas;
            $detail_keranjang->save();
        }else
        {
            $detail_keranjang = DetailKeranjang::where('id_produk', $produk->id)->where('id_keranjang', $keranjang_baru->id)->first();
            $detail_keranjang->kuantitas = $detail_keranjang->kuantitas+$request->kuantitas;
   
            //harga sekarang
            $harga_detail_keranjang_baru = $produk->harga_produk*$request->kuantitas;
            $detail_keranjang->jumlah_harga = $detail_keranjang->jumlah_harga+$harga_detail_keranjang_baru;
            $detail_keranjang->update();
        }
        //jumlah total
        $keranjang = Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();
        $keranjang->total_harga_keranjang = $keranjang->total_harga_keranjang+$produk->harga_produk*$request->kuantitas;
        $keranjang->update();
        return redirect('/reseller-belanja');

    }

    public function delete($id)
    {
        $detail_keranjang = DetailKeranjang::where('id', $id)->first();

        $keranjang = Keranjang::where('id', $detail_keranjang->id_keranjang)->first();
        $keranjang->total_harga_keranjang = $keranjang->total_harga_keranjang-$detail_keranjang->jumlah_harga;
        $keranjang->update();
        $detail_keranjang->delete();
        return redirect('reseller-keranjang');
    }
}
