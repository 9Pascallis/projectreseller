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
            'nama_lengkap_user' => [
                'required',
            ],
            'tanggal_lahir_user' => [
                'required',
                'date'
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
            'alamat_user' => [
                'required',
            ],
            'provinsi_user' => [
                'required',
            ],
            'kota_user' => [
                'required',
            ],
            'kecamatan_user' => [
                'required',
            ],
            'kode_pos_user' => [
                'required',
            ],
        ];
        return $rules;
    }
}
