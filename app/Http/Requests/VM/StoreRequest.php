<?php

namespace App\Http\Requests\VM;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            
        ];
    }

    public function messages(): array
    {
        return [
            
            
            'image.mimes' => 'Foto harus berupa jpeg, bmp, png, gif, svg , jpg',
            'image.max' => 'Foto tidak boleh lebih dari 2MB',
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
            $this->redirect = route('dashboard.so.create');
        }

        parent::failedValidation($validator);
    }
}
