<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{

    public function index()
    {
        $user = User::leftJoin('regencies', 'user.id_kabupaten', '=', 'regencies.id')
        ->select('user.*','user.id_kabupaten','regencies.name as nama_kabupaten')
        ->get();
        return view ('/admin/user/indexuser', compact('user'));
    }


    public function indexadmin()
    {
        $user = User::leftJoin('regencies', 'user.id_kabupaten', '=', 'regencies.id')
        ->select('user.*','user.id_kabupaten','regencies.name as nama_kabupaten')
        ->get();
        return view ('/admin/user/indexadmin', compact('user'));
    }


    public function create()
    {
        $provinces = Province::all();
        return view ('/admin/user/tambahuser', compact('provinces'));
    }

    
    public function createadmin()
    {
        $provinces = Province::all();
        return view ('/admin/user/tambahadmin', compact('provinces'));
    }


    public function store(UserRequest $request)
    {
        $user = $request->validated();
        User::create($user);
        return redirect('/indexuser')->with('create', 'Data Berhasil ditambah!');
    }

    public function storeadmin(UserRequest $request)
    {
        $user = $request->validated();
        User::create($user);
        return redirect('/indexadmin')->with('create', 'Data Berhasil ditambah!');
    }

    public function show($id)
    {
        $provinces = Province::all();
        $user = User::find($id);

        $selectedProvinceId = $user->id_provinsi;
        $selectedRegencyId = $user->id_kabupaten;
        $selectedDistrictId = $user->id_kecamatan;
        $regencies = Regency::where('province_id', $selectedProvinceId)->get();
        $districts = District::where('regency_id', $selectedRegencyId)->get();

        return view ('/admin/user/detailuser', compact('user', 'provinces', 'regencies', 'districts', 'selectedProvinceId', 'selectedRegencyId', 'selectedDistrictId'));
    }

    
    public function showadmin($id)
    {
        $provinces = Province::all();
        $user = User::find($id);

        $selectedProvinceId = $user->id_provinsi;
        $selectedRegencyId = $user->id_kabupaten;
        $selectedDistrictId = $user->id_kecamatan;
        $regencies = Regency::where('province_id', $selectedProvinceId)->get();
        $districts = District::where('regency_id', $selectedRegencyId)->get();

        return view ('/admin/user/detailadmin', compact('user', 'provinces', 'regencies', 'districts', 'selectedProvinceId', 'selectedRegencyId', 'selectedDistrictId'));
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

        return view ('/admin/user/edituser', compact('user', 'provinces', 'regencies', 'districts', 'selectedProvinceId', 'selectedRegencyId', 'selectedDistrictId'));
    }


    public function editadmin($id)
    {
        $provinces = Province::all();
        $user = User::find($id);

        $selectedProvinceId = $user->id_provinsi;
        $selectedRegencyId = $user->id_kabupaten;
        $selectedDistrictId = $user->id_kecamatan;
        $regencies = Regency::where('province_id', $selectedProvinceId)->get();
        $districts = District::where('regency_id', $selectedRegencyId)->get();

        return view ('/admin/user/editadmin', compact('user', 'provinces', 'regencies', 'districts', 'selectedProvinceId', 'selectedRegencyId', 'selectedDistrictId'));
    }


    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect('/indexuser')->with('update', 'Data Berhasil diupdate!');
    }

    public function updateadmin(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect('/indexadmin')->with('update', 'Data Berhasil diupdate!');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/indexuser')->with('destroy', 'Data Berhasil dihapus!');
    }

    public function destroyadmin($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/indexadmin')->with('destroy', 'Data Berhasil dihapus!');
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
}
