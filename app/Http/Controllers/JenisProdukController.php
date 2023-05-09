<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;

class JenisProdukController extends Controller
{

    public function index()
    {
        $data = JenisProduk::all();
        return view ('admin/jenisproduk/indexjenisproduk', compact('data'));
    }


    public function create()
    {
        return view ('admin/jenisproduk/tambahjenisproduk');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_jenis_produk' => 'required'
        ]);
        JenisProduk::create($validatedData);
        return redirect('/indexjenisproduk')->with('create', 'Data Berhasil ditambah!');

    }


    public function edit($id)
    {
        $data = JenisProduk::find($id);
        return view ('/admin/jenisproduk/editjenisproduk', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = JenisProduk::find($id);
        $data->update($request->all());
        return redirect('/indexjenisproduk')->with('update', 'Data Berhasil diupdate!');
    }


    public function destroy($id)
    {
        $data = JenisProduk::find($id);
        $data->delete();
        return redirect('/indexjenisproduk')->with('destroy', 'Data Berhasil dihapus!');
    }
}