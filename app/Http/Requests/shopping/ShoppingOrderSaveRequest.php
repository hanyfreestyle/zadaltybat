<?php

namespace App\Http\Requests\shopping;

use Illuminate\Foundation\Http\FormRequest;

class ShoppingOrderSaveRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'address_id'=> 'required',
            'notes'=> 'nullable|max:300'
        ];
    }
}
