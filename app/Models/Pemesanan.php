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

    public function alamat_pengiriman()
    {
        return $this->hasMany(AlamatPengiriman::class, 'id_pemesanan', 'id');
    }

    public function metode_pengiriman()
    {
        return $this->hasMany(MetodePengiriman::class, 'id_pemesanan', 'id');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_pemesanan', 'id');
    }

}
