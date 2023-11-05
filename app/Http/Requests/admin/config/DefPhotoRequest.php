<?php

namespace App\Http\Requests\admin\config;

use Illuminate\Foundation\Http\FormRequest;

class DefPhotoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $id = $this->route('id');

        if($id == '0'){
            $rules =[
               'cat_id'=> "required|alpha_dash:ascii|min:4|max:50|unique:config_def_photos",
               'filter_id'=> "required",
               'image' => 'required|mimes:jpeg,jpg,png,gif,webp|max:10000',
            ];
        }else{
            $rules =[
               'cat_id'=> "required|alpha_dash:ascii|min:4|max:50|unique:config_def_photos,cat_id,$id",
               'filter_id'=> "required_with:image",
               'image' => 'mimes:jpeg,jpg,png,gif,webp|max:10000',
            ];
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'filter_id.required_with' => 'برجاء تحديد الفلتر',
        ];
    }

}
