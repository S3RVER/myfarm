<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralTipRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            // 'username' => 'required',
        ];
    }

    public function messages(){
        return [
            // 'username.required' => 'نام کاربری اجباری میباشد',
        ];
    }
}
