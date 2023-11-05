<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersCustomersRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'phone'=> "required|numeric|min_digits:9|max_digits:9|exists:users_customers",
            'password'=> "required|min:8",
        ];
    }

    public function messages()
    {
        return [
            'phone.exists' => __('web/customers.login_err_exists') ,
            'phone.min_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
            'phone.max_digits' => "برجاء اضافة رقم الهاتف بصورة صحيحه ",
        ];
    }

}
