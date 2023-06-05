<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
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
                return view ('reseller/belanja/checkout')->with(compact('jenis_produk', 'pemesanan', 'detail_pemesanan', 'user'));
            }
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function store(CheckoutRequest $request, $id)
    // {
    //     $user = auth()->user();
    //     $jenis_produk = JenisProduk::all();
    //     $pemesanan = Pemesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
    //     $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)->get();

    //     $checkout = $request->validated();
    //     Checkout::create($checkout);
    //     return redirect('/profil')->with('create', 'Silakan Melakukan Pembayaran!')->with(compact('jenis_produk', 'pemesanan', 'detail_pemesanan', 'user', 'checkout'));

    // }
    
}
