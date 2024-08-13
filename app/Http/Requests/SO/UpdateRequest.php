<?php

namespace App\Http\Requests\SO;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            // 'title' => [
            //     'required',
            // ],
            // 'description'=> [
            //     'required',
            //     ],
        ];
    }

    public function messages(): array
    {
        return [
            // 'title.required' => 'Judul harus diisi',
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
            alert()->html('Gagal',$errors,'error');
            $this->redirect = route('dashboard.so.index', request()->route()->parameter('id'));
        }

        parent::failedValidation($validator);
    }
}
