<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiseaseCategoryRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'title' => 'required',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'عنوان محصول اجباری میباشد',
        ];
    }
}
