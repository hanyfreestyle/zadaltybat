<?php

namespace App\Http\Requests\admin\app;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $rules = [
            'lat'=> 'required|numeric',
            'long'=> 'required|numeric',
            'phone'=> 'required',
            'direction'=> 'nullable|url',

        ];

        foreach(config('app.shop_lang') as $key=>$lang){
            $rules[$key.".title"] =   'required';
            $rules[$key.".address"] =   'required';

            $rules[$key.".work_hours"] =   'required';
        }

        return $rules;
    }
}
