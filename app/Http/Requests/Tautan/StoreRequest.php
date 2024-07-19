<?php

namespace App\Http\Requests\Tautan;

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
            'url'=> [
                'required',
                ],
            
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul harus diisi',
            
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
            $this->redirect = route('dashboard.tautan.create');
        }

        parent::failedValidation($validator);
    }
}
