<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';
    protected $guarded = ['id'];

    public static function getCartItem(){
        $getCartItem = Cart::with(['produk'=>function($query){
            $query->select('id','nama_produk','harga_produk', 'foto_utama_produk');
        }])->get()->toArray();
        return $getCartItem;
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

}
