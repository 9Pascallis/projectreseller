<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JenisProduk;
use App\Models\User;
use App\Models\Alamat;
use App\Http\Requests\AlamatRequest;

class ProfilController extends Controller
{    
    public function index()
    {
        $jenis_produk = JenisProduk::all();
        $user = auth()->user();

        $user = User::leftJoin('alamat', 'user.id', '=', 'alamat.id_user')
        ->select('user.*', 'alamat.alamat', 'alamat.provinsi', 'alamat.kota', 'alamat.kecamatan', 'alamat.kode_pos')
        ->where('user.id', $user->id)
        ->get();

        return view('/reseller/profil/indexprofil', compact('user', 'jenis_produk'));
    }


    public function createalamat()
    {
        $jenis_produk = JenisProduk::all();
        $user = auth()->user();

        return view ('/reseller/profil/tambahalamat', compact('user', 'jenis_produk'));
    }


    public function storealamat(AlamatRequest $request)
    {
        $jenis_produk = JenisProduk::all();
        $alamat = $request->validated();
        $user = auth()->user();
        $alamat['id_user'] = $user->id;
        Alamat::create($alamat);

        return redirect('/profil')->with('create', 'Alamat Berhasil di Tambah!')->with(compact('user', 'jenis_produk'));
    }


    public function editalamat($id)
    {
        $jenis_produk = JenisProduk::all();
        $user = auth()->user();

        $user = User::leftJoin('alamat', 'user.id', '=', 'alamat.id_user')
        ->select('user.*', 'alamat.alamat', 'alamat.provinsi', 'alamat.kota', 'alamat.kecamatan', 'alamat.kode_pos')
        ->where('user.id', $user->id)
        ->get();

        return view ('/reseller/profil/editalamat', compact('user', 'jenis_produk'));
    }


    public function updatealamat(AlamatRequest $request)
    {
        $jenis_produk = JenisProduk::all();
        $validatedData = $request->validated();
        $user = auth()->user();
        $alamat = Alamat::where('id_user', $user->id)->first();
        $alamat->update($validatedData);
        
        return redirect('/profil')->with('create', 'Alamat Berhasil di Update!')->with(compact('user', 'jenis_produk'));
    }


}
