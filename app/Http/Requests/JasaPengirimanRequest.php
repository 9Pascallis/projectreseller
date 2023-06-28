<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JasaPengirimanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'nama_jasa_pengiriman' => [
                'required',
                'unique:jasa_pengiriman',
            ],
        ];
        return $rules;
    }
}
