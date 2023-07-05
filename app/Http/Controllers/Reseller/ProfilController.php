<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\JenisProduk;
use App\Models\User;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Http\Requests\UpdateUserRequest;

class ProfilController extends Controller
{    

    public function index()
    {
        $provinces = Province::all();
        $jenis_produk = JenisProduk::all();
        $user = auth()->user();

        $selectedProvinceId = $user->id_provinsi;
        $selectedRegencyId = $user->id_kabupaten;
        $selectedDistrictId = $user->id_kecamatan;
        $regencies = Regency::where('province_id', $selectedProvinceId)->get();
        $districts = District::where('regency_id', $selectedRegencyId)->get();

        $selectedProvince = Province::find($selectedProvinceId);
        $selectedRegency = Regency::find($selectedRegencyId);
        $selectedDistrict = District::find($selectedDistrictId);

        $selectedProvinceName = $selectedProvince ? $selectedProvince->name : '';
        $selectedRegencyName = $selectedRegency ? $selectedRegency->name : '';
        $selectedDistrictName = $selectedDistrict ? $selectedDistrict->name : '';

        return view('/reseller/profil/indexprofil', compact('user', 'jenis_produk', 'provinces', 'regencies', 'districts', 'selectedProvinceId', 'selectedRegencyId', 'selectedDistrictId', 'selectedProvinceName', 'selectedRegencyName', 'selectedDistrictName'));
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

    public function edit($id)
    {
        $provinces = Province::all();
        $user = User::find($id);

        $selectedProvinceId = $user->id_provinsi;
        $selectedRegencyId = $user->id_kabupaten;
        $selectedDistrictId = $user->id_kecamatan;
        $regencies = Regency::where('province_id', $selectedProvinceId)->get();
        $districts = District::where('regency_id', $selectedRegencyId)->get();

        return view ('/reseller/profil/editprofil', compact('user', 'provinces', 'regencies', 'districts', 'selectedProvinceId', 'selectedRegencyId', 'selectedDistrictId'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect('/profil')->with('update', 'Data Berhasil diupdate!');
    }

}
