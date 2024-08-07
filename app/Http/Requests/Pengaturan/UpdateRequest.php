<?php

namespace App\Http\Requests\Pengaturan;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'website_logo' => [
                'nullable',
                'image',
                'max:2048',
                'mimes:jpeg,bmp,png,gif,svg,jpg',
            ],
            'website_name' => [
                'required',
                'max:255',
            ],
            'website_maps' => [
                'required',
                'max:255',
            ],
            'website_motto' => [
                'required',
                'max:255',
            ],
            'website_phone' => [
                'required',
                'max:255',
            ],
            'website_address' => [
                'required',
                'max:255',
            ],
            'website_email' => [
                'required',
                'max:255',
                'email',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'website_logo.image' => 'Logo website harus berupa gambar',
            'website_logo.mimes' => 'Logo website harus berupa jpeg, bmp, png, gif, svg , jpg',
            'website_logo.max' => 'Logo website tidak boleh lebih dari 2MB',
            'website_name.required' => 'Nama website harus diisi.',
            'website_name.max' => 'Nama website maksimal 255 karakter.',
            'website_maps.required' => 'maps website harus diisi.',
            'website_maps.max' => 'maps website maksimal 255 karakter.',
            'website_motto.required' => 'Deskripsi website harus diisi.',
            'website_motto.max' => 'Deskripsi website maksimal 255 karakter.',
            'website_phone.required' => 'Nomor telepon website harus diisi.',
            'website_phone.max' => 'Nomor telepon website maksimal 255 karakter.',
            'website_address.required' => 'Alamat website harus diisi.',
            'website_address.max' => 'Alamat website maksimal 255 karakter.',
            'website_email.required' => 'Email website harus diisi.',
            'website_email.max' => 'Email website maksimal 255 karakter.',
            'website_email.email' => 'Email website tidak valid.',
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
            $this->redirect = route('dashboard.pengaturan.index');
        }
        
        parent::failedValidation($validator);
    }
}
