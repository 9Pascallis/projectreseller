<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemProduk extends Model
{
    use HasFactory;

    protected $table = 'item_produk';
    protected $guarded = ['id'];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }

    public function ukuran()
    {
        return $this->belongsTo(Ukuran::class, 'id_ukuran', 'id');
    }

    public function warna()
    {
        return $this->belongsTo(Warna::class, 'id_warna', 'id');
    }

    public function stok()
    {
        return $this->hasOne(Stok::class, 'id_stok', 'id');
    }

    //Many to one (detailkeranjang-item_produk)
    public function detail_keranjang()
    {
        return $this->hasMany(DetailKeranjang::class, 'id_item_produk', 'id');
    }

    //Many to one (detailpemesanan-item_produk)
    public function detail_pemesanan()
    {
        return $this->hasMany(DetailPemesanan::class, 'id_item_produk', 'id');
    }
}
