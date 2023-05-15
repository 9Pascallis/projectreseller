<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;
use App\Http\Requests\JenisProdukRequest;
class JenisProdukController extends Controller
{

    public function index()
    {
        $jenis_produk = JenisProduk::all();
        return view ('admin/jenisproduk/indexjenisproduk', compact('jenis_produk'));
    }


    public function create()
    {
        return view ('admin/jenisproduk/tambahjenisproduk');
    }


    public function store(JenisProdukRequest $request)
    {

        $jenis_produk = $request->validated();
        JenisProduk::create($jenis_produk);
        return redirect('/indexjenisproduk')->with('create', 'Data Berhasil ditambah!');

    }

    
    public function edit($id)
    {
        $jenis_produk = JenisProduk::find($id);
        return view ('/admin/jenisproduk/editjenisproduk', compact('jenis_produk'));
    }


    public function update(JenisProdukRequest $request, $id)
    {
        $jenis_produk = JenisProduk::find($id);
        $jenis_produk->update($request->all());
        return redirect('/indexjenisproduk')->with('update', 'Data Berhasil diupdate!');
    }


    public function destroy($id)
    {
        $jenis_produk = JenisProduk::find($id);
        $jenis_produk->delete();
        return redirect('/indexjenisproduk')->with('destroy', 'Data Berhasil dihapus!');
    }
}