<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditCateRequest extends FormRequest
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
            'name' => [
                Rule::unique('vp_categories', 'cate_name')->ignore($this->segment(4), 'cate_id'),
            ],
        ];
    }
    public function  messages(){
        return [
            'name.unique' => 'Ten danh muc da bi trung!'
        ];
    }
}
