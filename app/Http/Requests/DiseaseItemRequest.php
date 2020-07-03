<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiseaseItemRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'image',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'عنوان دسته بندی اجباری میباشد',
            'category_id.required' => 'انتخاب مجموعه اجباری میباشد',
            'image.image' => 'فایل انتخابی باید عکس باشد',
        ];
    }
}
