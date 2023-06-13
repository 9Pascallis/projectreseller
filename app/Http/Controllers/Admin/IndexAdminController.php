<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Pemesanan;
use App\Models\ItemProduk;

class IndexAdminController extends Controller
{

    public function index()
    {

        $totalHargaPemesanan = Pemesanan::where('status', 2)->sum('total_harga_pemesanan');

        $totalUser1 = User::where('id_role', 1)->get();
        $totalUser1 = $totalUser1->count();

        $totalUser2 = User::where('id_role', 2)->get();
        $totalUser2 = $totalUser2->count();

        $totalPemesanan = Pemesanan::whereIn('status', [1, 2])->get();
        $totalPemesanan = $totalPemesanan->count();

        $totalPemesanan1 = Pemesanan::where('status', 1)->get();
        $totalPemesanan1 = $totalPemesanan1->count();

        $totalPemesanan2 = Pemesanan::where('status', 2)->get();
        $totalPemesanan2 = $totalPemesanan2->count();

        $item_produk = ItemProduk::leftJoin('stok', 'item_produk.id', '=', 'stok.id_item_produk')
        ->where('stok.jumlah_stok', '<', 10)
        ->select('item_produk.*','stok.jumlah_stok')
        ->get();
                // dd($item_produk);

        return view('admin/index', compact('item_produk','totalHargaPemesanan','totalUser1', 'totalUser2', 'totalPemesanan', 'totalPemesanan1', 'totalPemesanan2' ));

    }
    
}
