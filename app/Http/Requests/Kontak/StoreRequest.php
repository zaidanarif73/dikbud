<?php

namespace App\Http\Requests\Kontak;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
            ],
            // 'description'=> [
            //     'required',
            //     ''
            //     ],
            'image' => [
                'image',
                'max:5048',
                'mimes:jpeg,bmp,png,gif,svg,jpg',
            ],
            'email' => [
                'email',
                'required',
            ],
            'subject' => [
                'required',
                'max:100',
            ],
            'message' => [
                'required',
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama harus diisi',
            // 'description.required' => 'Deksripsi harus diisi',
            'email.required' => 'Email harus diisi',
            'image.mimes' => 'Foto harus berupa jpeg, bmp, png, gif, svg , jpg',
            'image.max' => 'Foto tidak boleh lebih dari 5MB',
            'subject.required' => 'Subject harus diisi',
            'subject.max' => 'Subject tidak lebih dari 100 karakter',
            'message.required' => 'Pesan harus diisi',
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
            $this->redirect = route('home.home.index');
        }

        parent::failedValidation($validator);
    }
}
