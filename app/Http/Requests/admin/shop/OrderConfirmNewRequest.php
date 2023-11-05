<?php

namespace App\Http\Requests\admin\shop;

use Illuminate\Foundation\Http\FormRequest;

class OrderConfirmNewRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {

        return [
            'order_status'=> 'required',
            'notes'=> 'required_if:order_status,==,2',
        ];

    }


    public function messages()
    {
        return [
            'notes.required_if' => "برجاء تحديد سبب الرفض",

        ];
    }


}
