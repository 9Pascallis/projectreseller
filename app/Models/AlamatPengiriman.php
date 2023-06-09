<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatPengiriman extends Model
{
    use HasFactory;
    protected $table = 'alamat_pengiriman';
    protected $guarded = ['id'];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id');
    }
}