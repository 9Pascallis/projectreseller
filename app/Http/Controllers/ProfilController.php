<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class ProfilController extends Controller
{

    public function show()
    {
        $user = auth()->user();
        return view('/reseller/profil/indexprofil', compact('user'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view ('/reseller/profil/editprofil', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect('reseller-profil')->with('update', 'Data Berhasil diupdate!');
    }


}
