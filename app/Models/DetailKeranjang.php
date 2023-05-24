<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKeranjang extends Model
{
    use HasFactory;
    protected $table = 'detail_keranjang';
    protected $guarded = ['id'];

    //One to Many (detailkeranjang-produk)
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }

    //One to Many (detailkeranjang-keranjang)
    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id_keranjang', 'id');
    }
}
