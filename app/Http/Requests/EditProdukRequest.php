<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProdukRequest extends FormRequest
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
            'deskripsi_produk' => [
                'required',
            ],
            'harga_produk' => [
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
