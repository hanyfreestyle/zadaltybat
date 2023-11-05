<?php

namespace App\Http\Requests\config;

use Illuminate\Foundation\Http\FormRequest;

class WebPrivacyRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $rules =[
            'name'=> "required",
        ];
        foreach(config('app.lang_file') as $key=>$lang){
            $rules[$key.".h1"] =   'required';
        }
        return $rules;
    }
}

