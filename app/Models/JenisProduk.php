<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    use HasFactory;

    protected $table = 'jenis_produk';
    protected $guarded = ['id'];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_jenis_produk');
    }
}
