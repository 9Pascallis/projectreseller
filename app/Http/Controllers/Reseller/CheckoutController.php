<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use App\Models\JenisProduk;

class CheckoutController extends Controller
{

    public function index()
    {
        $keranjang = Keranjang::where('id_user', Auth::user()->id)->where('status',0)->first();
        $id_keranjang = $keranjang->id;
        $keranjang->status = 1;
        $keranjang->update();

        $detail_keranjang = DetailKeranjang::where('id_keranjang', $id_keranjang)->get();
        foreach ($detail_keranjang as $detail_keranjang) {
            $produk = Produk::where('id', $detail_keranjang->id_produk)->first();
            $produk->total_stok_produk = $produk->total_stok_produk-$detail_keranjang->kuantitas;
            $produk->update();
        }
        

        $jenis_produk = JenisProduk::all();
        return view ('reseller/belanja/checkout', compact('jenis_produk'));
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        
    }
    
}
