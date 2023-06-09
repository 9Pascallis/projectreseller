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


class HistoriController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $pemesanan = Pemesanan::where('id_user', Auth::user()->id)->first();
        $jenis_produk = JenisProduk::all();
        $user = User::leftJoin('pemesanan', 'user.id', '=', 'pemesanan.id_user')
        ->join('alamat_pengiriman', 'pemesanan.id', '=', 'alamat_pengiriman.id_pemesanan')
        ->join('metode_pengiriman', 'pemesanan.id', '=', 'metode_pengiriman.id_pemesanan')
        ->where('pemesanan.id_user', Auth::user()->id)
        // ->where('pemesanan.status', 1)
        ->select(
            'user.*', 
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
        ->where('user.id', $user->id)
        ->get();
        // dd($user);
        //cek validasi apakah pemesanan null
        if ($pemesanan == null) {
            return view ('reseller/histori/historipemesanan')->with(compact('jenis_produk', 'pemesanan', 'user'));
            // return redirect()->back();
        }
        else{
            //cek validasi apakah total_harga_pemesanan = 0
            if ($pemesanan->invoice == 0) {
                return view ('reseller/histori/historipemesanan')->with(compact('jenis_produk', 'pemesanan', 'user'));
            }
            else
            {
                $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)->get();
                return view ('reseller/histori/historipemesanan')->with(compact('jenis_produk', 'pemesanan', 'detail_pemesanan', 'user'));
            }
        }
    }

    public function showpemesanan($id)
    {
        $jenis_produk = JenisProduk::all();
        $pemesanan = Pemesanan::find($id)
        ->join('alamat_pengiriman', 'pemesanan.id', '=', 'alamat_pengiriman.id_pemesanan')
        ->join('metode_pengiriman', 'pemesanan.id', '=', 'metode_pengiriman.id_pemesanan')
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
        $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)->get();
        // dd($pemesanan);
        return view ('/reseller/histori/detailpemesananhistori', compact('pemesanan', 'detail_pemesanan', 'jenis_produk'));
    }


    public function showpembayaran($id)
    {
        $jenis_produk = JenisProduk::all();
        $pemesanan = Pemesanan::find($id)
        ->join('alamat_pengiriman', 'pemesanan.id', '=', 'alamat_pengiriman.id_pemesanan')
        ->join('metode_pengiriman', 'pemesanan.id', '=', 'metode_pengiriman.id_pemesanan')
        ->join('pembayaran', 'pemesanan.id', '=', 'pembayaran.id_pemesanan')
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
            'pembayaran.tanggal_pembayaran'
        )
        ->where('pemesanan.id', $id)
        ->first();
        
        $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)->get();

        // dd($detail_pemesanan);
        return view ('/reseller/histori/detailpembayaranhistori', compact('pemesanan', 'detail_pemesanan' , 'jenis_produk'));
    }
}