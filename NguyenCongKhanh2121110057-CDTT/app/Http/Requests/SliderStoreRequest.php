<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'=>['required','unique:nck_slider'],
            'image'=>['required'],
            'link'=>['required'],
            'position'=>['required']


        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'Tên slider không được để trống',
            'name.unique'=>'Tên slider đã tồn tại',
            'image.required'=>'Ảnh này không được để trống',

            'link.required'=>'Link này không được để trống',
            'position.required'=>'position này không được để trống'


        ];
    }
}
