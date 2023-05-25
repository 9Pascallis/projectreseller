<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ukuran;
use Illuminate\Http\Request;
use App\Http\Requests\UkuranRequest;

class UkuranController extends Controller
{
    public function index()
    {
        $ukuran = Ukuran::all();
        return view ('admin/ukuran/indexukuran', compact('ukuran'));
    }

    public function create()
    {
        return view ('admin/ukuran/tambahukuran');
    }

    public function store(ukuranRequest $request)
    {
        $ukuran = $request->validated();
        Ukuran::create($ukuran);
        return redirect('/indexukuran')->with('create', 'Data Berhasil ditambah!');
    }

    public function destroy($id)
    {
        $ukuran = Ukuran::find($id);
        $ukuran->delete();
        return redirect('/indexukuran')->with('destroy', 'Data Berhasil dihapus!');
    }
}
