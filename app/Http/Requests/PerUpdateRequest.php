<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'nrp' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'status_id'  => 'required|integer|exists:status,id',
            'title_id'  => 'required|integer|exists:titles,id',
        ];
    }
}
