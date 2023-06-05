<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesanan extends Model
{
    use HasFactory;
    protected $table = 'detail_pemesanan';
    protected $guarded = ['id'];

    //One to Many (detailpemesanan-item_produk)
    public function item_produk()
    {
        return $this->belongsTo(ItemProduk::class, 'id_item_produk', 'id');
    }

    //One to Many (detailpemesanan-pemesanan)
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id');
    }
}
