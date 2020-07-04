<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitrusComputationalRecommendationsRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'tree_age' => 'required',
            'organic_material' => 'required',
        ];
    }

    public function messages(){
        return [
            'tree_age.required' => 'سن درخت اجباری میباشد',
            'organic_material.required' => 'مواد آلی اجباری میباشد',
        ];
    }
}
