<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'id_jenis_produk' => [
            ],
            'nama_produk' => [
                'required',
                'unique:produk',
            ],
            'deskripsi_produk' => [
                'required',
            ],
            'harga_produk' => [
                'required',
            ],
            'diskon_produk' => [
                'required',
            ],
            'harga_reseller' => [
                'required',
            ],
            'foto_utama_produk' => [
                'file',
                'mimes:png,jpg,jpeg'
            ],

        ];
        return $rules;
    }
}
