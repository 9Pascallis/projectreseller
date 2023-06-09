<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemProdukRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'id_produk' => [
            ],
            'id_ukuran' => [
            ],
            'id_warna' => [
            ],
            'foto_item_produk' => [
                'file',
                'mimes:png,jpg,jpeg'
            ],
            'jumlah_stok' => [
                'required',
            ],
        ];
        return $rules;
    }
}
