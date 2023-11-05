<?php

namespace App\Http\Requests\admin\shop;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=> "required|min:4|max:50",
            'company_name'=> "required|min:4|max:50",
            'city_id'=> "required",

            'phone'=> "required|numeric|min_digits:11|max_digits:11|unique:users_customers",
            'email'=> "nullable|email|unique:users_customers",

            'whatsapp'=> "nullable|numeric|min_digits:11",
            'land_phone'=> "nullable|numeric|min_digits:7",

            'recipient_name'=> "required|min:4|max:50",
            'phone_address'=> "required|numeric|min_digits:11|max_digits:11",
            'phone_option'=> "nullable|numeric|min_digits:11",
            'address'=> "required|min:4",

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
