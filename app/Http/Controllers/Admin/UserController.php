<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{

    public function index()
    {
        $user = User::all();
        return view ('/admin/user/indexuser', compact('user'));
    }


    public function indexadmin()
    {
        $user = User::all();
        return view ('/admin/user/indexadmin', compact('user'));
    }


    public function create()
    {
        return view ('/admin/user/tambahuser');
    }

    
    public function createadmin()
    {
        return view ('/admin/user/tambahadmin');
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


    public function edit($id)
    {
        $user = User::find($id);
        return view ('/admin/user/edituser', compact('user'));
    }

    public function editadmin($id)
    {
        $user = User::find($id);
        return view ('/admin/user/editadmin', compact('user'));
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

}
