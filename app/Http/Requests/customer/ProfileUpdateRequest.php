<?php

namespace App\Http\Requests\customer;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = Auth::guard('customer')->user()->id;



        return [
            'name'=> "required|min:4|max:50",
            'email'=> "required|email|unique:users_customers,email,$id",
            'whatsapp'=> "nullable|numeric|min_digits:11",
            'land_phone'=> "nullable|numeric|min_digits:7",
            'city_id'=> "required",
        ];

    }

    public function messages()
    {
        return [
            'email.unique' => "البريد الالكترونى مسجل من قبل ",
            'phone.min_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
            'phone.max_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
        ];
    }

}
