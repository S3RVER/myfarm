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
        ];
    }

    public function messages(){
        return [
             'title.required' => 'نام کاربری اجباری میباشد',
        ];
    }
}