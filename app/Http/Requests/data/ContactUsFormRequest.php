<?php

namespace App\Http\Requests\data;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=> "required|min:4|max:50",
            'contact_us_email'=> "required|email",
            'phone'=> "required|numeric|min_digits:11",
            'subject'=> "required|min:4|max:50",
            'message'=> "required|min:15|max:250",
        ];
    }
}
