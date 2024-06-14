<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required | unique:users,email',
            'password' => 'required:users,password',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email đăng nhập không đúng',
            'password.required' => 'Sai password',
        ];
    }
}
