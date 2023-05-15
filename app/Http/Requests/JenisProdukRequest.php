<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JenisProdukRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'nama_jenis_produk' => [
                'required',
                'unique:jenis_produk',
            ],
        ];
        return $rules;
    }
}
