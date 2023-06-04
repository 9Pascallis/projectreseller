<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use App\Models\JenisProduk;
use App\Models\User;
// use App\Models\Checkout;
// use App\Http\Requests\CheckoutRequest;

class CheckoutController extends Controller
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
        $keranjang = Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();
        //cek validasi apakah alamat null
        foreach ($user as $user) {
            if ($user->alamat == null) {
                return redirect('profil');
            }
        }

        //cek validasi apakah keranjang null
        if ($keranjang == null) {
            return redirect('belanja');
        }
            //cek validasi apakah keranjang ada
        else{
            //cek validasi apakah total_harga_keranjang=0
            if ($keranjang->total_harga_keranjang == 0) {
                return redirect('belanja');
            }
            else
            {
                $detail_keranjang = DetailKeranjang::where('id_keranjang', $keranjang->id)->get();
                return view ('reseller/belanja/checkout')->with(compact('jenis_produk', 'keranjang', 'detail_keranjang', 'user'));
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
    //     $keranjang = Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();
    //     $detail_keranjang = DetailKeranjang::where('id_keranjang', $keranjang->id)->get();

    //     $checkout = $request->validated();
    //     Checkout::create($checkout);
    //     return redirect('/profil')->with('create', 'Silakan Melakukan Pembayaran!')->with(compact('jenis_produk', 'keranjang', 'detail_keranjang', 'user', 'checkout'));

    // }
    
}
