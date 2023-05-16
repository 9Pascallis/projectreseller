<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    
    public function index()
    {
        $admin = Admin::all();
        return view ('/admin/admin/indexadmin', compact('admin'));
    }


    public function create()
    {
        return view ('/admin/admin/tambahadmin');
    }


    public function store(AdminRequest $request)
    {
        $admin = $request->validated();
        Admin::create($admin);
        return redirect('/indexadmin')->with('create', 'Data Berhasil ditambah!');
    }


    public function edit($id)
    {
        $admin = Admin::find($id);
        return view ('/admin/admin/editadmin', compact('admin'));
    }


    public function update(AdminRequest $request, $id)
    {
        $admin = Admin::find($id);
        $admin->update($request->all());
        return redirect('/indexadmin')->with('update', 'Data Berhasil diupdate!');
    }


    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/indexadmin')->with('destroy', 'Data Berhasil dihapus!');
    }
}
