<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralTipRequest extends FormRequest{

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
            'title.required' => 'نام محصول اجباری میباشد',
            'category_id.required' => 'انتخاب مجموعه اجباری میباشد',
        ];
    }
}
