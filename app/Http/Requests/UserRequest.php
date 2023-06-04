<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'id_role' => [
            ],
            'nama_lengkap_user' => [
                'required',
            ],
            'email' => [
                'required',
                'unique:user',
            ],
            'no_telp_user' => [
                'required',
            ],
            'password' => [
                'required',
            ],
        ];
        return $rules;
    }
}
