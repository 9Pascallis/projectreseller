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
        $pemesanan = Pemesanan::join('pengiriman', 'pemesanan.id', '=', 'pengiriman.id_pemesanan')
        ->join('jasa_pengiriman', 'jasa_pengiriman.id', '=', 'pengiriman.id_jasa_pengiriman')
        ->leftJoin('provinces', 'pengiriman.id_provinsi', '=', 'provinces.id')
            ->leftJoin('regencies', 'pengiriman.id_kabupaten', '=', 'regencies.id')
            ->leftJoin('districts', 'pengiriman.id_kecamatan', '=', 'districts.id')    
        ->select(
            'pemesanan.*',
            'pengiriman.id_jasa_pengiriman',
            'pengiriman.nama_jenis_layanan',
            'pengiriman.no_resi',
            'pengiriman.nama_lengkap_penerima',
            'pengiriman.nomor_hp_penerima',
            'pengiriman.alamat_penerima',
            'pengiriman.id_provinsi',
            'pengiriman.id_kabupaten',
            'pengiriman.id_kecamatan',
            'pengiriman.kode_pos_penerima',
            'jasa_pengiriman.nama_jasa_pengiriman',
            'provinces.name as nama_provinsi', 
            'regencies.name as nama_kabupaten', 
            'districts.name as nama_kecamatan',
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
        ->join('pengiriman', 'pemesanan.id', '=', 'pengiriman.id_pemesanan')
        ->join('jasa_pengiriman', 'jasa_pengiriman.id', '=', 'pengiriman.id_jasa_pengiriman')
        ->join('pembayaran', 'pemesanan.id', '=', 'pembayaran.id_pemesanan')
        ->leftJoin('provinces', 'pengiriman.id_provinsi', '=', 'provinces.id')
            ->leftJoin('regencies', 'pengiriman.id_kabupaten', '=', 'regencies.id')
            ->leftJoin('districts', 'pengiriman.id_kecamatan', '=', 'districts.id')
        ->select(
            'pemesanan.*',
                'pengiriman.id_jasa_pengiriman',
                'pengiriman.nama_jenis_layanan',
                'pengiriman.no_resi',
                'pengiriman.nama_lengkap_penerima',
                'pengiriman.nomor_hp_penerima',
                'pengiriman.alamat_penerima',
                'pengiriman.id_provinsi',
                'pengiriman.id_kabupaten',
                'pengiriman.id_kecamatan',
                'pengiriman.kode_pos_penerima',
                'jasa_pengiriman.nama_jasa_pengiriman',
                'provinces.name as nama_provinsi', 
                'regencies.name as nama_kabupaten', 
                'districts.name as nama_kecamatan',
                'pembayaran.tanggal_pembayaran',
            
        )
        ->where('pemesanan.id', $id)
        ->first();
        
        $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)->get();

        // dd($detail_pemesanan);
        return view ('/admin/histori/detailhistoripembayaran', compact('pemesanan', 'detail_pemesanan'));
    }
}
