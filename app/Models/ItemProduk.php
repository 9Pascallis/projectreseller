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
}
