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
use App\Models\Pengiriman;
use App\Models\JenisProduk;
use App\Models\User;
use App\Models\Alamat;
use App\Models\JasaPengiriman;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class PemesananController extends Controller
{

    public function index()
    {

        $provinces = Province::all();
        $user = auth()->user();
    
        $userWithAddress = User::leftJoin('alamat', 'user.id', '=', 'alamat.id_user')
            ->select('user.*', 'alamat.alamat', 'alamat.id_provinsi', 'alamat.id_kabupaten', 'alamat.id_kecamatan', 'alamat.kode_pos')
            ->where('user.id', $user->id)
            ->first();
    
        if ($userWithAddress->alamat == null) {
            return redirect('profil');
        }

        $selectedProvinceId = $userWithAddress->id_provinsi;
        $selectedRegencyId = $userWithAddress->id_kabupaten;
        $selectedDistrictId = $userWithAddress->id_kecamatan;
        $regencies = Regency::where('province_id', $selectedProvinceId)->get();
        $districts = District::where('regency_id', $selectedRegencyId)->get();

        $user = auth()->user();
        $user = User::leftJoin('alamat', 'user.id', '=', 'alamat.id_user')
        ->select('user.*', 'alamat.alamat', 'alamat.id_provinsi', 'alamat.id_kabupaten', 'alamat.id_kecamatan', 'alamat.kode_pos')
        ->where('user.id', $user->id)
        ->get();
        // dd($user);
        $jenis_produk = JenisProduk::all();
        $jasa_pengiriman = JasaPengiriman::all();
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
                    
                $alamat = User::leftJoin('alamat', 'user.id', '=', 'alamat.id_user')
                ->select('alamat.*','user.nama_lengkap_user','user.no_telp_user')
                ->where('user.id', $user->id)
                ->get();
                // dd($alamat);
                // $alamat = Alamat::where('id_user', $user->id)->get();
                // dd($detail_pemesanan);
                return view('reseller/belanja/checkout', compact('pemesanan','detail_pemesanan','jasa_pengiriman', 'user','provinces', 'regencies', 'districts', 'selectedProvinceId', 'selectedRegencyId', 'selectedDistrictId'));
            }
        }
    }

    public function getkabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $kabupatens = Regency::where('province_id', $id_provinsi)->get();
        $option = "";
        foreach ($kabupatens as $kabupaten) {
            $option.= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
        echo $option;
    }

    public function getkecamatan(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;
        $kecamatans = District::where('regency_id', $id_kabupaten)->get();
        $option = "";
        foreach ($kecamatans as $kecamatan) {
            $option.= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
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

        // Mendapatkan data jasa pengiriman berdasarkan nama jasa pengiriman yang dipilih
        $jasa_pengiriman = JasaPengiriman::where('nama_jasa_pengiriman', $request->nama_jasa_pengiriman)->first();
        // dd($jasa_pengiriman);

        //membuat pengiriman
        $pengiriman = new Pengiriman;
        $pengiriman->id_pemesanan = $cek_pemesanan->id;
        $pengiriman->id_jasa_pengiriman = $request->id_jasa_pengiriman;
        $pengiriman->nama_jenis_layanan = $request->nama_jenis_layanan;
        $pengiriman->no_resi = $request->no_resi;
        $pengiriman->nama_lengkap_penerima = $request->nama_lengkap_penerima;
        $pengiriman->nomor_hp_penerima = $request->nomor_hp_penerima;
        $pengiriman->alamat_penerima = $request->alamat_penerima;
        $pengiriman->id_provinsi = $request->id_provinsi;
        $pengiriman->id_kabupaten = $request->id_kabupaten;
        $pengiriman->id_kecamatan = $request->id_kecamatan;
        $pengiriman->kode_pos_penerima = $request->kode_pos_penerima;
        $pengiriman->save();

        $pemesanan = Pemesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
        $tanggal_pemesanan= Carbon::now();
        $pemesanan->tanggal_pemesanan = $tanggal_pemesanan;
        $randomNumber = str_pad(mt_rand(0, 999999999999), 12, '0', STR_PAD_LEFT);
        $pemesanan->invoice = $randomNumber;
        $pemesanan->status = 1;
        $pemesanan->update();

        return redirect ('pesanpembayaran/'.$id);

    }
    
}
