<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('reseller/belanja/keranjang');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $produk = Produk::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['kuantitas']++;
        } else {
            $cart[$id] = [
                "nama_produk" => $produk->nama_produk,
                "kuantitas" => 1,
                "harga_produk" => $produk->harga_produk,
                "foto_utama_produk" => $produk->foto_utama_produk
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produk added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
