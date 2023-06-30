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
        ->join('pengiriman', 'pemesanan.id', '=', 'pengiriman.id_pemesanan')
        ->join('jasa_pengiriman', 'jasa_pengiriman.id', '=', 'pengiriman.id_jasa_pengiriman')
        ->where('pemesanan.id_user', Auth::user()->id)
        // ->where('pemesanan.status', 1)
        ->select(
            'user.*', 
            'pemesanan.*', 
            'pengiriman.id_jasa_pengiriman',
            'pengiriman.nama_jenis_layanan',
            'pengiriman.no_resi',
            'pengiriman.nama_lengkap_penerima',
            'pengiriman.nomor_hp_penerima',
            'jasa_pengiriman.nama_jasa_pengiriman'
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
        ->join('pengiriman', 'pemesanan.id', '=', 'pengiriman.id_pemesanan')
        ->leftJoin('provinces', 'pengiriman.id_provinsi', '=', 'provinces.id')
        ->leftJoin('regencies', 'pengiriman.id_kabupaten', '=', 'regencies.id')
        ->leftJoin('districts', 'pengiriman.id_kecamatan', '=', 'districts.id')
        ->join('jasa_pengiriman', 'jasa_pengiriman.id', '=', 'pengiriman.id_jasa_pengiriman')
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
        $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)->get();
        // dd($pemesanan);
        return view ('/reseller/histori/detailpemesananhistori', compact('pemesanan', 'detail_pemesanan', 'jenis_produk'));
    }


    public function showpembayaran($id)
    {
        $jenis_produk = JenisProduk::all();
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
        // dd($pemesanan);
        $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)->get();

        // dd($detail_pemesanan);
        return view ('/reseller/histori/detailpembayaranhistori', compact('pemesanan', 'detail_pemesanan' , 'jenis_produk'));
    }
}
