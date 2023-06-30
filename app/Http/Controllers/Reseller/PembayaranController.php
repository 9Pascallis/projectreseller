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
use App\Models\JasaPengiriman;

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

        $pemesanan = Pemesanan::join('pengiriman', 'pemesanan.id', '=', 'pengiriman.id_pemesanan')
            ->join('jasa_pengiriman', 'jasa_pengiriman.id', '=', 'pengiriman.id_jasa_pengiriman')
            ->leftJoin('provinces', 'pengiriman.id_provinsi', '=', 'provinces.id')
            ->leftJoin('regencies', 'pengiriman.id_kabupaten', '=', 'regencies.id')
            ->leftJoin('districts', 'pengiriman.id_kecamatan', '=', 'districts.id')
            ->where('pemesanan.id_user', Auth::user()->id)
            ->where('pemesanan.status', 1)
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
                'districts.name as nama_kecamatan'
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
                // $pemesanan =JasaPengiriman::find($pemesanan->id_jasa_pengiriman)->nama_jasa_pengiriman;
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
