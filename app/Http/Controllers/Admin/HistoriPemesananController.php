<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\Produk;
use App\Models\ItemProduk;
use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use App\Models\JenisProduk;
use App\Models\User;
use App\Models\Pembayaran;
use App\Models\Stok;

class HistoriPemesananController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $jenis_produk = JenisProduk::all();
        $pemesanan = Pemesanan::join('alamat_pengiriman', 'pemesanan.id', '=', 'alamat_pengiriman.id_pemesanan')
            ->join('metode_pengiriman', 'pemesanan.id', '=', 'metode_pengiriman.id_pemesanan')
            ->select(
                'pemesanan.*', 
                'alamat_pengiriman.nama_lengkap', 
                'alamat_pengiriman.nomor_hp', 
                'alamat_pengiriman.alamat', 
                'alamat_pengiriman.provinsi', 
                'alamat_pengiriman.kota', 
                'alamat_pengiriman.kecamatan', 
                'alamat_pengiriman.kode_pos', 
                'metode_pengiriman.nama_jasa_kurir',
                'metode_pengiriman.nama_jenis_layanan',
                'metode_pengiriman.no_resi',
            )
            ->where('status',1)
            ->get();
                // dd($pemesanan);
        // cek validasi apakah pemesanan kosong
        if ($pemesanan->isEmpty()) {
            return view('/admin/histori/historipemesanan')->with(compact('jenis_produk', 'pemesanan'));
            // return redirect()->back();
        } else {
            $detail_pemesanan = DetailPemesanan::whereIn('id_pemesanan', $pemesanan->pluck('id'))->get();
            return view('/admin/histori/historipemesanan')->with(compact('jenis_produk', 'pemesanan', 'detail_pemesanan'));
        }
    }

    public function edit($id)
    {
        $pemesanan = Pemesanan::find($id)
        ->join('alamat_pengiriman', 'pemesanan.id', '=', 'alamat_pengiriman.id_pemesanan')
        ->join('metode_pengiriman', 'pemesanan.id', '=', 'metode_pengiriman.id_pemesanan')
        ->select(
            'pemesanan.*', 
            'alamat_pengiriman.nama_lengkap', 
            'alamat_pengiriman.nomor_hp', 
            'alamat_pengiriman.alamat', 
            'alamat_pengiriman.provinsi', 
            'alamat_pengiriman.kota', 
            'alamat_pengiriman.kecamatan', 
            'alamat_pengiriman.kode_pos', 
            'metode_pengiriman.nama_jasa_kurir',
            'metode_pengiriman.nama_jenis_layanan',
            'metode_pengiriman.no_resi',
        )
        ->where('pemesanan.id', $id)
        ->first();
        $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)->get();
        // dd($pemesanan);
        return view ('/admin/histori/konfirmasipembayaran', compact('pemesanan', 'detail_pemesanan'));
    }

    public function update(Request $request, $id)
{
    $pemesanan = Pemesanan::find($id);
    $pemesanan->status = 2;
    $pemesanan->update();

    $pembayaran = new Pembayaran;
    $pembayaran->id_pemesanan = $pemesanan->id;
    $tanggal_pembayaran= Carbon::now();
    $pembayaran->tanggal_pembayaran = $tanggal_pembayaran;
    $pembayaran->save();

    $detail_pemesanan = DetailPemesanan::where('id_pemesanan', $pemesanan->id)
        ->join('item_produk', 'detail_pemesanan.id_item_produk', '=', 'item_produk.id')
        ->leftJoin('stok', 'item_produk.id', '=', 'stok.id_item_produk')
        ->select('detail_pemesanan.*', 'item_produk.foto_item_produk', 'stok.jumlah_stok')
        ->get();

    foreach ($detail_pemesanan as $detail) {
        $stok = Stok::where('id_item_produk', $detail->id_item_produk)->first();
        if ($stok) {
            if ($stok->jumlah_stok >= $detail->kuantitas) {
                $stok->jumlah_stok -= $detail->kuantitas;
                $stok->update();
            } else {
                // Handle jika stok tidak mencukupi
                // Misalnya dengan memberikan pesan error atau mengubah status pemesanan menjadi gagal
            }
        }
    }

    return redirect('indexhistoripembayaran')->with('create', 'Berhasil di konfirmasi!');;
}
 
}
