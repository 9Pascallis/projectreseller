<?php

namespace App\Http\Controllers\Reseller;
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

class PembayaranController extends Controller
{
    public function index($id)
    {

        $user = auth()->user();
        // dd($user);
        $jenis_produk = JenisProduk::all();
        
        // $pemesanan = Pemesanan::where('id_user', Auth::user()->id)
        // ->where('status', 1)
        // ->latest('created_at')
        // ->first();

        $pemesanan = Pemesanan::join('alamat_pengiriman', 'pemesanan.id', '=', 'alamat_pengiriman.id_pemesanan')
        ->join('metode_pengiriman', 'pemesanan.id', '=', 'metode_pengiriman.id_pemesanan')
        ->where('pemesanan.id_user', Auth::user()->id)
        ->where('pemesanan.status', 1)
        ->select(
            'pemesanan.*', 
            'alamat_pengiriman.nama_lengkap', 
            'alamat_pengiriman.nomor_hp', 
            'alamat_pengiriman.alamat', 
            'alamat_pengiriman.provinsi', 
            'alamat_pengiriman.kota', 
            'alamat_pengiriman.kecamatan', 
            'alamat_pengiriman.kode_pos', 
            'metode_pengiriman.nama_jasa_kurir',
            'metode_pengiriman.nama_jenis_layanan',
            'metode_pengiriman.no_resi',
            )
        ->where('pemesanan.id', $id)
        ->first();
        // dd($pemesanan);
        //cek validasi apakah pemesanan null
        if ($pemesanan == null || $pemesanan->status == 2) {
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
                // dd($pemesanan);
                return view ('reseller/belanja/pesanpembayaran')->with(compact('jenis_produk', 'pemesanan', 'detail_pemesanan', 'user'));
            }
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
