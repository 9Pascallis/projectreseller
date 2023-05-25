<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WarnaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'nama_warna' => [
                'required',
                'unique:warna',
            ],
        ];
        return $rules;
    }
}
