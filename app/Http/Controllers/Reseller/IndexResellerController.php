<?php

namespace App\Http\Controllers\Reseller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JenisProduk;

class IndexResellerController extends Controller
{

    public function index()
    {
        $jenis_produk = JenisProduk::all();
        return view ('reseller/index', compact('jenis_produk'));
    }
    
}
