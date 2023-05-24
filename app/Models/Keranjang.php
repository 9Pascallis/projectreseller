<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    protected $guarded = ['id'];

    //One to Many (user-keranjang)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    //Many to one (detailkeranjang-keranjang)
    public function detail_keranjang()
    {
        return $this->hasMany(DetailKeranjang::class, 'id_keranjang', 'id');
    }
}
