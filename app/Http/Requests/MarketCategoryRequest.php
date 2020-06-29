<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarketCategoryRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'title' => 'required',
            'image' => 'image',
        ];
    }

    public function messages(){
        return [
             'title.required' => 'عنوان دسته بندی اجباری میباشد',
            'image.image' => 'فایل انتخابی شما باید عکس باشد'
        ];
    }
}
