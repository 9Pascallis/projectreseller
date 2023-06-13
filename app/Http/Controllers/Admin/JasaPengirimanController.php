<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JasaPengiriman;
use App\Http\Requests\JasaPengirimanRequest;

class JasaPengirimanController extends Controller
{

    public function index()
    {
        $jasa_pengiriman = JasaPengiriman::all();
        return view ('admin/jasa_pengiriman/indexjasapengiriman', compact('jasa_pengiriman'));
    }


    public function create()
    {
        return view ('admin/jasa_pengiriman/tambahjasapengiriman');
    }


    public function store(JasaPengirimanRequest $request)
    {
        $jasa_pengiriman = $request->validated();
        JasaPengiriman::create($jasa_pengiriman);
        return redirect('/indexjasapengiriman')->with('create', 'Data Berhasil ditambah!');
    }


    public function destroy($id)
    {
        $jasa_pengiriman = JasaPengiriman::find($id);
        $jasa_pengiriman->delete();
        return redirect('/indexjasapengiriman')->with('destroy', 'Data Berhasil dihapus!');
    }

}
