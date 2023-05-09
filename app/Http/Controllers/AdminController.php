<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $data = Admin::all();
        return view ('/admin/admin/indexadmin', compact('data'));
    }


    public function create()
    {
        return view ('/admin/admin/tambahadmin');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap_admin' => 'required',
            'email_admin' => 'required',
            'no_telp_admin' => 'required|min:11|max:13',
            'password_admin' => 'required',
        ]);
        Admin::create($validatedData);
        return redirect('/indexadmin')->with('create', 'Data Berhasil ditambah!');

    }


    public function edit($id)
    {
        $data = Admin::find($id);
        return view ('/admin/admin/editadmin', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = Admin::find($id);
        $data->update($request->all());
        return redirect('/indexadmin')->with('update', 'Data Berhasil diupdate!');
    }


    public function destroy($id)
    {
        $data = Admin::find($id);
        $data->delete();
        return redirect('/indexadmin')->with('destroy', 'Data Berhasil dihapus!');
    }
}
