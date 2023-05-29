<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JenisProduk;
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


    public function destroy($id)
    {
        $jenis_produk = JenisProduk::find($id);
        $jenis_produk->delete();
        return redirect('/indexjenisproduk')->with('destroy', 'Data Berhasil dihapus!');
    }
    
}