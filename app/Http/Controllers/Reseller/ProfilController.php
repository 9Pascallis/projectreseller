<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JenisProduk;
use App\Models\User;
use App\Http\Requests\UserRequest;

class ProfilController extends Controller
{

    public function show()
    {
        $jenis_produk = JenisProduk::all();
        $user = auth()->user();
        return view('/reseller/profil/indexprofil', compact('user', 'jenis_produk'));
    }


    public function edit()
    {
        $jenis_produk = JenisProduk::all();
        $user = auth()->user();
        return view ('/reseller/profil/editprofil', compact('user', 'jenis_produk'));
    }

}
