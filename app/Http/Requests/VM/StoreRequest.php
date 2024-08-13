<?php

namespace App\Http\Requests\VM;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            // 'description'=> [
            //     'required',
            // ],
        ];
    }

    public function messages(): array
    {
        return [
            // 'description.required' => 'Deksripsi harus diisi',
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
            alert()->html('Gagal', $errors, 'error');
            $this->redirect = route('dashboard.vm.index');
        }

        parent::failedValidation($validator);
    }
}
