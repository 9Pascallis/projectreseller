<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\JenisProduk;
use App\Models\User;
use App\Models\Alamat;
use App\Http\Requests\AlamatRequest;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class ProfilController extends Controller
{    
    public function index()
    {
        $jenis_produk = JenisProduk::all();
        $user = auth()->user();

        $user = User::leftJoin('alamat', 'user.id', '=', 'alamat.id_user')
        ->leftJoin('provinces', 'alamat.id_provinsi', '=', 'provinces.id')
        ->leftJoin('regencies', 'alamat.id_kabupaten', '=', 'regencies.id')
        ->leftJoin('districts', 'alamat.id_kecamatan', '=', 'districts.id')
        ->select('user.*', 'alamat.alamat', 'alamat.id_provinsi', 'alamat.id_kabupaten', 'alamat.id_kecamatan', 'alamat.kode_pos', 'provinces.name as nama_provinsi', 'regencies.name as nama_kabupaten', 'districts.name as nama_kecamatan')
        ->where('user.id', $user->id)
        ->get();

        return view('/reseller/profil/indexprofil', compact('user', 'jenis_produk'));
    }

    public function getkabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $kabupatens = Regency::where('province_id', $id_provinsi)->get();
        $option = "";
        foreach ($kabupatens as $kabupaten) {
            $option.= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
        echo $option;
    }

    public function getkecamatan(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;
        $kecamatans = District::where('regency_id', $id_kabupaten)->get();
        $option = "";
        foreach ($kecamatans as $kecamatan) {
            $option.= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }


    public function createalamat()
    {
        $provinces = Province::all();
        $jenis_produk = JenisProduk::all();
        $user = auth()->user();

        return view ('/reseller/profil/tambahalamat', compact('user', 'jenis_produk', 'provinces'));
    }


    public function storealamat(Request $request)
    {
        $provinces = Province::all();
        $jenis_produk = JenisProduk::all();
        // $alamat = $request->validated();
        $user = Auth::user();

        $alamat = new Alamat;
        $alamat->id_user = $user->id; // Ganti $user->id dengan nilai yang sesuai
        $alamat->id_provinsi = $request->id_provinsi; // Ganti $request->id_provinsi dengan nilai yang sesuai
        $alamat->id_kabupaten = $request->id_kabupaten; // Ganti $request->id_kabupaten dengan nilai yang sesuai
        $alamat->id_kecamatan = $request->id_kecamatan; // Ganti $request->id_kecamatan dengan nilai yang sesuai
        $alamat->alamat = $request->alamat; // Ganti $request->alamat dengan nilai yang sesuai
        $alamat->kode_pos = $request->kode_pos; // Ganti $request->kode_pos dengan nilai yang sesuai
        $alamat->save();
        

        // $user = auth()->user();
        // $alamat['id_user'] = $user->id;
        // Alamat::create($alamat);

        return redirect('/profil')->with('create', 'Alamat Berhasil di Tambah!')->with(compact('user', 'jenis_produk', 'provinces'));
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
