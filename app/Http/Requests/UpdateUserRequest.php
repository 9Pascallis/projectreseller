<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'no_telp' => [
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
