<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Warna;
use Illuminate\Http\Request;
use App\Http\Requests\WarnaRequest;
class WarnaController extends Controller
{
    public function index()
    {
        $warna = Warna::all();
        return view ('admin/warna/indexwarna', compact('warna'));
    }

    public function create()
    {
        return view ('admin/warna/tambahwarna');
    }

    public function store(WarnaRequest $request)
    {
        $warna = $request->validated();
        Warna::create($warna);
        return redirect('/indexwarna')->with('create', 'Data Berhasil ditambah!');
    }

    public function destroy($id)
    {
        $warna = Warna::find($id);
        $warna->delete();
        return redirect('/indexwarna')->with('destroy', 'Data Berhasil dihapus!');
    }
}
