<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
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
            'title' => 'required | unique:categories,title',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Bạn chưa nhập tên danh mục',
            'title.unique' => 'Tên danh mục đã tồn tại'
        ];
    }
}
