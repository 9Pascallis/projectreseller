<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\Produk;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $jenis_produk = JenisProduk::all();
        $getCartItem = Cart::getCartItem();
        // dd($getCartItem);
        return view ('reseller/belanja/keranjang')->with(compact('getCartItem', 'jenis_produk'));
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $item = new Cart;
            $item->id_produk = $data['id_produk'];
            $item->kuantitas = $data['kuantitas'];
            $item->save();
            return redirect()->back()->with('create', 'Data Berhasil ditambah!');
        }
    }
}
