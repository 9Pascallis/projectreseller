<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JenisProduk;
use App\Models\Produk;
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


    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'id_jenis_produk' => 'required|integer',
            'nama_produk' => 'required|unique:produk',
            'deskripsi_produk' => 'required',
            'harga_produk' => 'required',
            'diskon_produk' => 'required',
            'foto_utama_produk' => 'required|image',
            'berat_produk' => 'required',
        ]);

        if ($request->hasFile('foto_utama_produk')) {
            $file = $request->file('foto_utama_produk');
            $file_extension = $file->getClientOriginalName();
            $destination_path = public_path() . '/storage';
            $filename = $file_extension;
            $request->file('foto_utama_produk')->move($destination_path, $filename);
            $validatedData['foto_utama_produk'] = $filename;
        }

        // Mengambil nilai harga_produk dan diskon_produk dari request
        $hargaProduk = $validatedData['harga_produk'];
        $diskonProduk = $validatedData['diskon_produk'];

        // Menghitung harga reseller
        $hargaReseller = $hargaProduk * (100 - $diskonProduk) / 100;

        // Membuat instance model Produk
        $produk = new Produk();

        // Set nilai atribut produk dari request
        $produk->id_jenis_produk = $validatedData['id_jenis_produk'];
        $produk->nama_produk = $validatedData['nama_produk'];
        $produk->deskripsi_produk = $validatedData['deskripsi_produk'];
        $produk->harga_produk = $hargaProduk;
        $produk->diskon_produk = $diskonProduk;
        $produk->harga_reseller = $hargaReseller;
        $produk->foto_utama_produk = $validatedData['foto_utama_produk'];
        $produk->berat_produk = $validatedData['berat_produk'];

        // Menyimpan data produk ke dalam database
        $produk->save();

        // Kembalikan response atau redirect ke halaman yang diinginkan
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


    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        // Validasi input
        $validatedData = $request->validate([
            'deskripsi_produk' => 'required',
            'harga_produk' => 'required',
            'diskon_produk' => 'required',
            'berat_produk' => 'required',
        ]);

        // Mengambil nilai harga_produk dan diskon_produk dari request
        $hargaProduk = $validatedData['harga_produk'];
        $diskonProduk = $validatedData['diskon_produk'];

        // Menghitung harga reseller
        $hargaReseller = $hargaProduk * (100 - $diskonProduk) / 100;

        // Set nilai atribut produk dari request
        $produk->deskripsi_produk = $validatedData['deskripsi_produk'];
        $produk->harga_produk = $hargaProduk;
        $produk->diskon_produk = $diskonProduk;
        $produk->harga_reseller = $hargaReseller;
        $produk->berat_produk = $validatedData['berat_produk'];

        // Mengupdate data produk ke dalam database
        $produk->save();

        // Kembalikan response atau redirect ke halaman yang diinginkan
        return redirect('/indexproduk')->with('update', 'Data Berhasil diupdate!');
    }



    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/indexproduk')->with('destroy', 'Data Berhasil dihapus!');
    }
    
}