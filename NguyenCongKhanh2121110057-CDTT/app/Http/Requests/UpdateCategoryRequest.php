<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
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
            'name'=>'required|unique:nck_category|',
            //first là: required, nếu required lỗi thì unique là first
            'metakey'=>'required',
            'metadesc'=>'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' =>'Tên danh mục bắt buộc không được để trống',
            'name.unique' =>'Tên danh mục đã tồn tại',
            'name.min' =>'Tên danh mục ít nhất 2 ký tự',
            //first là: required, nếu required lỗi thì unique là first
            'metakey.required' =>'Từ khóa không được để trống',
            'metadesc.required' =>'Mô tả không được để trống',
        ];
    }
}
