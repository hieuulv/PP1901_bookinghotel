<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
            //
            'name' => 'required|unique:categories|min:3'
        ];
    }

    public function messages()
    {
        return [

            'name.required' => "{{ __('Tên danh mục bắt buộc nhập.') }}",
            'name.min' => "{{ __('Tên danh mục không nhỏ hơn 3 ký tự.') }}",
            'name.unique' => "{{ __('Tên danh mục đã được tạo từ trước.') }}",
        ];
    }
}
