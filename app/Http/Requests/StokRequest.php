<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StokRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'id_item_produk' => [
            ],
            'jumlah_stok' => [
                'required',
            ],
        ];
        return $rules;
    }
}
