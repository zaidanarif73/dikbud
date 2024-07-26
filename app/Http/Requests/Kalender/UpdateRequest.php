<?php

namespace App\Http\Requests\Kalender;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;


class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => [
                'required',
            ],
             'start' => [
                'required',
                'date_format:Y-m-d',
            ],
            'end' => [
                'required',
                'date_format:Y-m-d',
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
            $this->redirect = route('dashboard.kalender.create');
        }

        parent::failedValidation($validator);
    }
}
