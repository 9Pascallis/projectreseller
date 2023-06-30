<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JasaPengiriman extends Model
{
    use HasFactory;

    protected $table = 'jasa_pengiriman';
    protected $guarded = ['id'];

    public function pengiriman()
    {
        return $this->hasMany(Pengiriman::class, 'id_jasa_pengiriman', 'id');
    }
}
