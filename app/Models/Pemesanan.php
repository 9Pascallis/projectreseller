<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $guarded = ['id'];

    //One to Many (user-pemesanan)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    //Many to one (detailpemesanan-pemesanan)
    public function detail_pemesanan()
    {
        return $this->hasMany(DetailPemesanan::class, 'id_pemesanan', 'id');
    }
}
