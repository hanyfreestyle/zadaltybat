<?php

namespace App\Http\Requests\admin;

use App\Helpers\AdminHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ShopCategoryRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $data = $this->toArray();
        foreach(config('app.shop_lang') as $key=>$lang){
            data_set($data, $key.'.slug',  AdminHelper::Url_Slug($data[$key]['slug']) );
        }
        $this->merge($data);
    }

    public function rules(Request $request): array
    {

        foreach(config('app.shop_lang') as $key=>$lang){
            $request->merge([$key.'.slug' => AdminHelper::Url_Slug($request[$key]['slug'])]);
        }

        $id = $this->route('id');

        $rules =[
            'parent_id'=> "required",
        ];

        foreach(config('app.shop_lang') as $key=>$lang){
            $rules[$key.".name"] =   'required';
            if($id == '0'){
                $rules[$key.".slug"] = 'required|unique:category_translations,slug';
            }else{
                $rules[$key.".slug"] = "required|unique:category_translations,slug,$id,category_id,locale,$key";
            }
        }

        return $rules;
    }
}
