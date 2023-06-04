<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlamatRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'alamat' => [
                'required',
            ],
            'provinsi' => [
                'required',
            ],
            'kota' => [
                'required',
            ],
            'kecamatan' => [
                'required',
            ],
            'kode_pos' => [
                'required',
            ],
        ];
        return $rules;
    }
}
