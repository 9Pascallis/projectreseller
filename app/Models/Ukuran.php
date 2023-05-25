<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    use HasFactory;

    protected $table = 'ukuran';
    protected $guarded = ['id'];

    public function item_produk()
    {
        return $this->hasMany(ItemProduk::class, 'id_ukuran', 'id');
    }
}
