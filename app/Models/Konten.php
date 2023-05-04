<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;
    protected $fillable = ['foto_konten', 'tanggal_mulai_konten', 'tanggal_selesai_konten'];
}
