<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PersRequest extends FormRequest
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
            'nrp' => [Rule::when($this->isMethod('patch'), '', 'required'), 'string'],
            'nama' => [Rule::when($this->isMethod('patch'), '', 'required'), 'string'],
            'tmp_lahir' => [Rule::when($this->isMethod('patch'), '', 'required'), 'string'],
            'tgl_lahir' => [Rule::when($this->isMethod('patch'), '', 'required'), 'date'],
            'alamat' => [Rule::when($this->isMethod('patch'), '', 'required'), 'string'],
            'foto' => [Rule::when($this->isMethod('patch'), '', 'nullable'), 'image'],
            'title_id' => [Rule::when($this->isMethod('patch'), '', 'required'), 'string'],
            'status_id' => [Rule::when($this->isMethod('patch'), '', 'required'), 'string'],
            'organization_id' => [Rule::when($this->isMethod('patch'), '', 'required'), 'string'],
        ];
    }
}
