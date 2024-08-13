<?php

namespace App\Http\Requests\Pejabat;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nama' => [
                'required',
            ],
            // 'description'=> [
            //     'required',
            //     ''
            //     ],
            'image' => [
                'required',
                'image',
                'max:2048',
                'mimes:jpeg,bmp,png,gif,svg,jpg',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul harus diisi',
            // 'description.required' => 'Deksripsi harus diisi',
            'image.required' => 'File harus diisi',
            'image.image' => 'Foto harus berupa gambar',
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
            $this->redirect = route('dashboard.pejabat.create');
        }

        parent::failedValidation($validator);
    }
}
