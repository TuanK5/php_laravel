<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'email' => 'required|min:10|unique:vp_users,email|ends_with:@gmail.com',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]+$/',
            ],
        ];
    }
    public function  messages(){
        return [
            'email.unique' => 'Ten tai khoan da bi trung!',
            'email.required' => 'Trường email là bắt buộc.',
        'email.email' => 'Vui lòng nhập địa chỉ email hợp lệ.',
        'email.ends_with' => 'Email phải kết thúc bằng @gmail.com.',
        'password.regex' => 'Mật khẩu phải dài ít nhất 8 ký tự, có ít nhất 1 chữ cái viết hoa, 1 chữ số và 1 ký tự đặt biệt.',
        ];
    }
}
