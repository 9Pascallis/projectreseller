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
            'nama_lengkap' => [
                'required',
            ],
            'email' => [
                'required',
                'unique:user',
            ],
            'no_telp' => [
                'required',
            ],
            'password' => [
                'required',
            ],
            'alamat' => [
                'required',
            ],
            'id_provinsi' => [
                'required',
            ],
            'id_kabupaten' => [
                'required',
            ],
            'id_kecamatan' => [
                'required',
            ],
            'kode_pos' => [
                'required',
            ],
        ];
        return $rules;
    }
}
