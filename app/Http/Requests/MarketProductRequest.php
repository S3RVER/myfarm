<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarketProductRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'title' => 'required',
            'category_id' => 'required',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'عنوان اجباری میباشد',
            'category_id.required' => 'دسته بندی اجباری میباشد',
        ];
    }
}
