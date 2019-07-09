<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address' => 'required|max:255',
            'content' => 'required|max:400'
        ];
    }

    public function messages()
    {
        return [

            'name.required' => "{{ __('Vui lòng điền họ tên.') }}",
            'email.required' => "{{ __('Vui lòng điền địa chỉ Email.') }}",
            'email.email' => "{{ __('Vui lòng điền đúng định dạng đỉa chỉ Email.') }}",
            'phone.required' => "{{ __('Vui lòng điền số điện thoại.') }}",
            'phone.regex' => "{{ __('Vui lòng điền đúng định dạng số.') }}",
            'phone.min' => "{{ __('Số điện thoại không nhỏ hơn 10 ký tự.') }}",
            'address.required' => "{{ __('Vui lòng điền địa chỉ.') }}",
            'content.required' => "{{ __('Vui lòng không để trống nội dung.') }}",
            'content.max' => "{{ __('Nội dung không quá 400 từ.') }}",
        ];
    }
}
