<?php

namespace App\Http\Requests\admin;

use App\Helpers\AdminHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PageRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    protected function prepareForValidation()
    {
        $data = $this->toArray();
        foreach(config('app.lang_file') as $key=>$lang){
            data_set($data, $key.'.slug',  AdminHelper::Url_Slug($data[$key]['slug']) );
        }
        $this->merge($data);
    }

    public function rules(Request $request): array
    {

        foreach(config('app.lang_file') as $key=>$lang){
            $request->merge([$key.'.slug' => AdminHelper::Url_Slug($request[$key]['slug'])]);
        }

        $id = $this->route('id');

        if($id == '0'){
            $rules =['cat_id'=> "required|alpha_dash:ascii|min:4|max:50|unique:pages"];
        }else{
            $rules =['cat_id'=> "required|alpha_dash:ascii|min:4|max:50|unique:pages,cat_id,$id" ];
        }

        foreach(config('app.lang_file') as $key=>$lang){
            $rules[$key.".name"] =   'required';
            $rules[$key.".g_title"] =   'required';
            $rules[$key.".g_des"] =   'required';
            if($id == '0'){
                $rules[$key.".slug"] = 'required|unique:page_translations,slug';
            }else{
                $rules[$key.".slug"] = "required|unique:page_translations,slug,$id,page_id,locale,$key";
            }
        }
        return $rules;
    }

}
