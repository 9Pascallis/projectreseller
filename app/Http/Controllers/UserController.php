<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view ('/admin/user/indexuser', compact('user'));
    }

    public function create()
    {
        return view ('/admin/user/tambahuser');
    }

    public function store(UserRequest $request)
    {
        $user = $request->validated();
        User::create($user);
        return redirect('/indexuser')->with('create', 'Data Berhasil ditambah!');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view ('/admin/user/detailuser', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view ('/admin/user/edituser', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect('reseller-profil')->with('update', 'Data Berhasil diupdate!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/indexuser')->with('destroy', 'Data Berhasil dihapus!');
    }
}
