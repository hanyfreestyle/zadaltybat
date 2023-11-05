<?php

namespace App\Http\Requests\admin\app;

use Illuminate\Foundation\Http\FormRequest;

class OpeningHoursRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            //
        ];
    }
}
