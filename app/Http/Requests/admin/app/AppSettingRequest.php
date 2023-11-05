<?php

namespace App\Http\Requests\admin\app;

use Illuminate\Foundation\Http\FormRequest;

class AppSettingRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {

        return [
           'AppName'=> 'required',
           'baseUrl'=> 'required|url',
           'mobilePrefix'=> 'nullable',
           'prefix'=> 'nullable',

           'ColorDark'=> 'required|integer',
           'ColorLight'=> 'required|integer',
           'AppBarIconColor'=> 'required|integer',
           'BackGroundColor'=> 'required|integer',
           'SplashColor'=> 'required|integer',
           'PreloadingColor'=> 'required|integer',
           'StatueBArColor'=> 'required|integer',
           'AppBarColor'=> 'required|integer',
           'AppBarColorText'=> 'required|integer',
           'sideMenuText'=> 'required|integer',
           'sideMenuColor'=> 'required|integer',
           'mainScreenScale'=> 'required',
           'sideMenuAngle'=> 'required',
           'sideMenuStyle'=> 'required',
           'AppTheme'=> 'required',

           'facebook'=> 'nullable|url',
           'twitter'=> 'nullable|url',
           'youtube'=> 'nullable|url',
           'instagram'=> 'nullable|url',
           'linkedin'=> 'nullable|url',


            'whatsAppNumber'=> 'nullable|numeric',
            'whatsAppMessage'=> 'nullable',
            'whatsAppKey'=> 'nullable',

            'telegram_key'=> 'nullable',
            'telegram_group'=> 'nullable',
            'telegram_phone'=> 'nullable',

        ];
    }
}
