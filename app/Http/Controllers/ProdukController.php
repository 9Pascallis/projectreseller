<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view ('admin/produk/indexproduk', compact('data'));
    }


    public function create()
    {
        return view ('admin/produk/tambahproduk');
    }


    public function store(Request $request)
    {

        // $validatedData = $request->validate([
        //     'nama_produk' => 'required',
        //     'deskripsi_produk' => 'required',
        //     'harga_sebelum_diskon_produk' => 'required',
        //     'harga_setelah_diskon_produk' => 'required',
        //     'total_stok_produk' => 'required',
        //     'foto_utama_produk' => 'required|mimes:jpg,jpeg,png'

        // ]);

        // $file_name = $request->foto_utama_produk->getClientOriginalName();
        // $image = $request->foto_utama_produk->storeAs('thumbnail', $file_name);

        // Produk::create($validatedData);
        // return redirect('/indexproduk')->with('create', 'Data Berhasil ditambah!');

        $data = Produk::create($request->all());
        if($request->hasFile('foto_utama_produk')){
            $request->file('foto_utama_produk')->move('fotoutamaproduk/', $request->file('foto_utama_produk')->getClientOriginalName());
            $data->foto_utama_produk = $request->file('foto_utama_produk')->getClientOriginalName();
            $data->save();
        }
        return redirect('/indexproduk')->with('create', 'Data Berhasil ditambah!');
    }


    public function edit($id)
    {
        $data = Produk::find($id);
        return view ('/admin/produk/editproduk', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = Produk::find($id);
        $data->update($request->all());
        return redirect('/indexproduk')->with('update', 'Data Berhasil diupdate!');
    }


    public function destroy($id)
    {
        $data = Produk::find($id);
        $data->delete();
        return redirect('/indexproduk')->with('destroy', 'Data Berhasil dihapus!');
    }
}