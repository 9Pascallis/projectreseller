<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $table = 'user';
    protected $guarded = ['id'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'id_user', 'id');
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id_user', 'id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role', 'id');
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
