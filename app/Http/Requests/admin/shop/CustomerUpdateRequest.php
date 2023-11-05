<?php

namespace App\Http\Requests\admin\shop;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
{


    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $id = $this->route('id');

        return [
            'name'=> "required|min:4|max:50",
            'company_name'=> "required|min:4|max:50",
            'city_id'=> "required",
            'email'=> "nullable|email|unique:users_customers,email,$id",
            'whatsapp'=> "nullable|numeric|min_digits:11",
            'land_phone'=> "nullable|numeric|min_digits:7",
        ];

    }

    public function messages()
    {
        return [
            'email.unique' => "البريد الالكترونى مسجل من قبل ",
            'phone.unique' => "رقم الهاتف مسجل من قبل ",
            'phone_option.min_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
            'phone_option.max_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
        ];
    }

}
