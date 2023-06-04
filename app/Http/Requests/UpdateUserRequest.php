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
            'nama_lengkap_user' => [
                'required',
            ],
            'no_telp_user' => [
                'required',
            ],
        ];
        return $rules;

        // $rules = [
        //     'nama_lengkap_user' => [
        //         'required',
        //     ],
        //     'tanggal_lahir_user' => [
        //         'required',
        //         'date'
        //     ],
        //     'no_telp_user' => [
        //         'required',
        //     ],
        //     'alamat_user' => [
        //         'required',
        //     ],
        //     'provinsi_user' => [
        //         'required',
        //     ],
        //     'kota_user' => [
        //         'required',
        //     ],
        //     'kecamatan_user' => [
        //         'required',
        //     ],
        //     'kode_pos_user' => [
        //         'required',
        //     ],
        // ];
        // return $rules;
    }
}
