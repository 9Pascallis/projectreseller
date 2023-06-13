<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\Produk;
use App\Models\ItemProduk;
use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use App\Models\JenisProduk;
use App\Models\User;

class HistoriPembayaranController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $jenis_produk = JenisProduk::all();
        $pemesanan = Pemesanan::join('metode_pengiriman', 'pemesanan.id', '=', 'metode_pengiriman.id_pemesanan')
        ->join('jasa_pengiriman', 'jasa_pengiriman.id', '=', 'metode_pengiriman.id_jasa_pengiriman')
            ->select(
                'pemesanan.*', 
                'metode_pengiriman.id_jasa_pengiriman',
                'metode_pengiriman.nama_jenis_layanan',
                'metode_pengiriman.no_resi',
                'jasa_pengiriman.nama_jasa_pengiriman'
            )
            ->where('status',2)
            ->get();
                // dd($pemesanan);
        // cek validasi apakah pemesanan kosong
        if ($pemesanan->isEmpty()) {
            return view('/admin/histori/historipembayaran')->with(compact('jenis_produk', 'pemesanan'));
        } else {
            $detail_pemesanan = DetailPemesanan::whereIn('id_pemesanan', $pemesanan->pluck('id'))->get();
            return view('/admin/histori/historipembayaran')->with(compact('jenis_produk', 'pemesanan', 'detail_pemesanan'));
        }
    }

    public function show($id)
    {
        $pemesanan = Pemesanan::find($id)
        ->join('metode_pengiriman', 'pemesanan.id', '=', 'metode_pengiriman.id_pemesanan')
        ->join('jasa_pengiriman', 'jasa_pengiriman.id', '=', 'metode_pengiriman.id_jasa_pengiriman')
        ->join('pembayaran', 'pemesanan.id', '=', 'pembayaran.id_pemesanan')
        ->select(
            'pemesanan.*',  
            'metode_pengiriman.id_jasa_pengiriman',
            'metode_pengiriman.nama_jenis_layanan',
            'metode_pengiriman.no_resi',
            'pembayaran.tanggal_pembayaran',
            'jasa_pengiriman.nama_jasa_pengiriman'
        )
        ->where('pemesanan.id', $id)
        ->first();
        
        $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)->get();

        // dd($detail_pemesanan);
        return view ('/admin/histori/detailhistoripembayaran', compact('pemesanan', 'detail_pemesanan'));
    }
}
