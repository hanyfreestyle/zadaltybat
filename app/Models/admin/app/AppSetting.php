<?php

namespace App\Models\admin\app;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    use HasFactory;
    protected $table = "app_settings";
    protected $fillable = [
        'status','baseUrl','mobilePrefix','prefix','logo','SideLogo', 'AppName', 'ColorDark', 'ColorLight',
        'AppBarIconColor', 'BackGroundColor',
        'SplashColor', 'PreloadingColor','StatueBArColor', 'AppBarColor', 'AppBarColorText', 'sideMenuText', 'sideMenuColor',
        'mainScreenScale', 'sideMenuAngle','sideMenuStyle', 'AppTheme',
        'facebook', 'twitter', 'youtube', 'instagram', 'linkedin',
        'whatsAppMessage','whatsAppNumber','whatsapp_key',
        'whatsAppKey', 'telegram_key', 'telegram_group', 'telegram_phone',
    ];





}
