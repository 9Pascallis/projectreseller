<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JenisProduk;
use App\Models\Produk;
use App\Http\Requests\ProdukRequest;

class ProdukController extends Controller
{

    public function index()
    {
        $produk = Produk::all();
        return view ('admin/produk/indexproduk', compact('produk'));
    }


    public function create()
    {
        $jenis_produk = JenisProduk::all();
        return view ('admin/produk/tambahproduk', compact('jenis_produk'));
    }


    public function store(ProdukRequest $request)
    {
        $produk = $request->validated();
        if ($request->hasFile('foto_utama_produk')) {
            $file = $request->file('foto_utama_produk');
            $file_extension = $file->getClientOriginalName();
            $destination_path = public_path() . '/storage';
            $filename = $file_extension;
            $request->file('foto_utama_produk')->move($destination_path, $filename);
            $produk['foto_utama_produk'] = $filename;
        }
        Produk::create($produk);
        return redirect('/indexproduk')->with('create', 'Data Berhasil ditambah!');
    }

    
    public function show($id)
    {
        $jenis_produk = JenisProduk::all();
        $produk = Produk::find($id);
        return view ('/admin/produk/detailproduk', compact('jenis_produk','produk'));
    }


    public function edit($id)
    {
        $jenis_produk = JenisProduk::all();
        $produk = Produk::find($id);
        return view ('/admin/produk/editproduk', compact('jenis_produk','produk'));
    }


    public function update(ProdukRequest $request, $id)
    {
        $produk = Produk::find($id);
        $produk->update($request->all());
        return redirect('/indexproduk')->with('update', 'Data Berhasil diupdate!');
    }


    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/indexproduk')->with('destroy', 'Data Berhasil dihapus!');
    }
    
}