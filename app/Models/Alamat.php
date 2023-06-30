<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $table = 'alamat';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
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
