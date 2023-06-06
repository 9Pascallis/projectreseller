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
use App\Models\AlamatPengiriman;
use App\Models\MetodePengiriman;
use App\Models\JenisProduk;
use App\Models\User;

class PemesananController extends Controller
{

    public function index()
    {

        $user = auth()->user();
        $user = User::leftJoin('alamat', 'user.id', '=', 'alamat.id_user')
        ->select('user.*', 'alamat.alamat', 'alamat.provinsi', 'alamat.kota', 'alamat.kecamatan', 'alamat.kode_pos')
        ->where('user.id', $user->id)
        ->get();
        // dd($user);
        $jenis_produk = JenisProduk::all();
        $pemesanan = Pemesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
        //cek validasi apakah alamat null
        foreach ($user as $user) {
            if ($user->alamat == null) {
                return redirect('profil');
            }
        }

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
                // dd($detail_pemesanan);
                return view ('reseller/belanja/checkout')->with(compact('jenis_produk', 'pemesanan', 'detail_pemesanan', 'user'));
            }
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function store(Request $request, $id)
    {
        $user = auth()->user();
        $jenis_produk = JenisProduk::all();

        $cek_pemesanan = Pemesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
        //membuat alamat pengiriman
        $alamat_pengiriman = new AlamatPengiriman;
        $alamat_pengiriman->id_pemesanan = $cek_pemesanan->id;
        $alamat_pengiriman->nama_lengkap = $request->nama_lengkap;
        $alamat_pengiriman->nomor_hp = $request->nomor_hp;
        $alamat_pengiriman->alamat = $request->alamat;
        $alamat_pengiriman->provinsi = $request->provinsi;
        $alamat_pengiriman->kota = $request->kota;
        $alamat_pengiriman->kecamatan = $request->kecamatan;
        $alamat_pengiriman->kode_pos = $request->kode_pos;
        $alamat_pengiriman->save();

        //membuat metode pengiriman
        $metode_pengiriman = new MetodePengiriman;
        $metode_pengiriman->id_pemesanan = $cek_pemesanan->id;
        $metode_pengiriman->nama_jasa_kurir = $request->nama_jasa_kurir;
        $metode_pengiriman->nama_jenis_layanan = $request->nama_jenis_layanan;
        $metode_pengiriman->no_resi = $request->no_resi;
        $metode_pengiriman->save();


        $pemesanan = Pemesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
        $tanggal_pemesanan= Carbon::now();
        $pemesanan->tanggal_pemesanan = $tanggal_pemesanan;
        $randomNumber = str_pad(mt_rand(0, 999999999999), 12, '0', STR_PAD_LEFT);
        $pemesanan->invoice = $randomNumber;
        $pemesanan->status = 1;
        $pemesanan->update();

        return redirect ('pesanpembayaran');

    }
    
}
