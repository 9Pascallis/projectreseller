<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'nama_lengkap_admin' => [
                'required',
            ],
            'email_admin' => [
                'required',
                'unique:admin',
            ],
            'no_telp_admin' => [
                'required',
            ],
            'password_admin' => [
                'required',
            ],
        ];
        return $rules;
    }
}
