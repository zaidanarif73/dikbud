<?php

namespace App\Http\Requests\menu;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'max:16',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Menu harus diisi',
            'title.max' => 'Menu tidak lebih dari 16 karakter',
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
            $this->redirect = route('dashboard.menu.create');
        }

        parent::failedValidation($validator);
    }
}
