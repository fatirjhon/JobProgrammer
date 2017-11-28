<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataUsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->datauser;
        return [
            'fullname' => 'required|max:255',
            'notelp' => 'required|min:10|max:14|regex:/(08)[0-9]{9}/',
            'placebirth' => 'required|max:255',
            'address' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
        'fullname.required' => 'Nama harus diisi',
        'notelp.required' => 'Nomor telepon harus diisi',
        'placebirth.required' => 'Tempat lahir harus diisi',
        'address.required' => 'Alamat harus diisi'
        ];
    }
}
