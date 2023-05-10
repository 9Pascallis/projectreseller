<?php

namespace App\Models;

use App\Models\JenisProduk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $guarded = ['id'];

    public function jenis_produk()
    {
        return $this->belongsTo(JenisProduk::class, 'id_jenis_produk', 'id');
    }

}
