<?php

namespace App\Http\Requests\Informasi;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;


class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => [
                'required',
            ],
            // 'file_path' => [
            //     'required',
            // ],
            // 'file_link' => [
            //     'required',
            // ],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul harus diisi',
            // 'file_path.required' => 'File harus diisi',
            // 'file_link.required' => 'Link harus diisi',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function failedValidation(Validator $validator)
    {
        if (! $this->wantsJson()) {
            $errors = implode('<br>', $validator->errors()->all());
            alert()->html('Gagal',$errors,'error');
            $this->redirect = route('dashboard.informasi.create');
        }

        parent::failedValidation($validator);
    }
}
