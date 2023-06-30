<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = 'pengiriman';
    protected $guarded = ['id'];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id');
    }

    public function jasa_pengiriman()
    {
        return $this->belongsTo(JasaPengiriman::class, 'id_jasa_pengiriman', 'id');
    }

    public function provinces()
    {
        return $this->belongsTo(User::class);
    }

    public function regencies()
    {
        return $this->belongsTo(User::class);
    }

    public function districts()
    {
        return $this->belongsTo(User::class);
    }
}
