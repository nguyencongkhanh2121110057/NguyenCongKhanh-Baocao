<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:_product|min:5',
            'metakey' => 'required',
            'metadesc' => 'required',
            'detail' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'pricesale' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Tên danh mục bắt buộc phải nhập',
            'metakey.required' => 'Từ khoá bắt buộc phải nhập',
            'metadesc.required' => 'Mô tả bắt buộc phải nhập',
            'detail.required' => 'Chi tiết bắt buộc phải nhập',
            'qty.required' => 'Số lượng bắt buộc phải nhập',
            'price.required' => 'Giá bắt buộc phải nhập',
            'pricesale.required' => 'Giá khuyến mãi bắt buộc phải nhập',
        ];
    }
}
