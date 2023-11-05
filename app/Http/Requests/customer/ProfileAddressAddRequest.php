<?php

namespace App\Http\Requests\customer;

use Illuminate\Foundation\Http\FormRequest;

class ProfileAddressAddRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'recipient_name'=> "required|min:4|max:50",
            'city_id'=> "required",
            'phone'=> "required|numeric|min_digits:11|max_digits:11",
            'phone_option'=> "numeric|min_digits:7|max_digits:11|nullable",
            'address'=> "required|min:15|max:250",
        ];

    }

    public function messages()
    {
        return [

            'phone_option.min_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
            'phone_option.max_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
        ];
    }

}
