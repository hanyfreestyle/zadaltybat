<?php

namespace App\Http\Requests\admin\shop;

use Illuminate\Foundation\Http\FormRequest;

class OrderConfirmPendingRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'invoice_number'=> "required|numeric|min_digits:6",
        ];
    }
}
