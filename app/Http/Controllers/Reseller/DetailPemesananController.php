<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

use App\Models\JenisProduk;
use App\Models\Produk;
use App\Models\ItemProduk;
use App\Models\Pemesanan;
use App\Models\DetailPemesanan;

class DetailPemesananController extends Controller
{

    public function index()
    {
        $jenis_produk = JenisProduk::all();
        $pemesanan = Pemesanan::where('id_user', Auth::user()->id)->where('status',0)->first();

        //cek validasi apakah pemesanan null
        if ($pemesanan == null) {
            return redirect('belanja');
        }
            //cek validasi apakah pemesanan ada
        else{
            //cek validasi apakah total_harga_pemesanan=0
            if ($pemesanan->total_harga_pemesanan == 0) {
                return redirect('belanja');
            }
            else
            {
                $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)->get();
                return view ('reseller/belanja/keranjang')->with(compact('jenis_produk', 'pemesanan', 'detail_pemesanan'));
            }
        }

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
        $tanggal_pemesanan= Carbon::now();

        //validasi apakah melebihi stok
        if($request->kuantitas>$item_produk->jumlah_stok)
        {
            return redirect ('detail/'.$id);
        }
        
        //cek validasi
        $cek_pemesanan= Pemesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
        if(empty($cek_pemesanan))
        {
            //Simpan ke database pemesanan
            $pemesanan = new pemesanan;
            $pemesanan->id_user = Auth::user()->id;
            $pemesanan->tanggal_pemesanan = $tanggal_pemesanan;

            //str number random
            $randomNumber = str_pad(mt_rand(0, 999999999999), 12, '0', STR_PAD_LEFT);
            $pemesanan->invoice = $randomNumber;

            // $pemesanan->invoice = Str::random(12);
            $pemesanan->total_harga_pemesanan = 0;
            $pemesanan->status = 0;
            $pemesanan->save();
        }

        //Simpan ke database detail pemesanan
        $pemesanan_baru = Pemesanan::where('id_user', Auth::user()->id)->where('status',0)->first();

        //cek detail pemesanan
        $cek_detail_pemesanan = DetailPemesanan::where('id_item_produk', $item_produk->id)->where('id_pemesanan', $pemesanan_baru->id)->first();
        if(empty($cek_detail_pemesanan))
        {
            $detail_pemesanan = new Detailpemesanan;
            $detail_pemesanan->id_item_produk = $item_produk->id;
            $detail_pemesanan->id_pemesanan = $pemesanan_baru->id;
            $detail_pemesanan->kuantitas = $request->kuantitas;
            $detail_pemesanan->jumlah_harga = $item_produk->produk->harga_produk*$request->kuantitas;
            $detail_pemesanan->save();
        } else
        {
            $detail_pemesanan = DetailPemesanan::where('id_item_produk', $item_produk->id)->where('id_pemesanan', $pemesanan_baru->id)->first();
            $detail_pemesanan->kuantitas = $detail_pemesanan->kuantitas+$request->kuantitas;
   
            //harga sekarang
            $harga_detail_pemesanan_baru = $item_produk->produk->harga_produk*$request->kuantitas;
            $detail_pemesanan->jumlah_harga = $detail_pemesanan->jumlah_harga+$harga_detail_pemesanan_baru;
            $detail_pemesanan->update();
        }

        //jumlah total
        $pemesanan = Pemesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
        $pemesanan->total_harga_pemesanan = $pemesanan->total_harga_pemesanan+$item_produk->produk->harga_produk*$request->kuantitas;
        $pemesanan->update();
        return redirect ('keranjang');

    }


    public function delete($id)
    {
        $detail_pemesanan = DetailPemesanan::where('id', $id)->first();

        $pemesanan = Pemesanan::where('id', $detail_pemesanan->id_pemesanan)->first();
        $pemesanan->total_harga_pemesanan = $pemesanan->total_harga_pemesanan-$detail_pemesanan->jumlah_harga;
        $pemesanan->update();
        $detail_pemesanan->delete();
        if ($pemesanan->total_harga_pemesanan == 0) {
            return redirect('belanja');
        }
        else
        {
            $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)->get();
            return redirect('keranjang');
        }

    }


    public function konfirmasipemesanan()
        {
            $pemesanan = Pemesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
            $id_pemesanan = $pemesanan->id;
            $pemesanan->status = 1;
            $pemesanan->update();
    
            $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $id_pemesanan)->get();
            foreach ($detail_pemesanan as $detail_pemesanan) {
                $produk = Produk::where('id', $detail_pemesanan->id_produk)->first();
                $produk->total_stok_produk = $produk->total_stok_produk-$detail_pemesanan->kuantitas;
                $produk->update();
            }
            $jenis_produk = JenisProduk::all();
            return view ('reseller/belanja/checkout', compact('jenis_produk'));
        }
        
}
