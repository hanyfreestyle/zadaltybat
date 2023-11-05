<?php
namespace App\Models\admin\config;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements TranslatableContract
{

    use Translatable;
    public $translatedAttributes = ['name','g_title','g_des','closed_mass','offer'];
    protected $fillable = [
        'facebook','twitter','youtube','instagram','linkedin','def_url','google_api','web_status',
        'phone_num','whatsapp_num','phone_text','whatsapp_text',
        'apple','android','windows','telegram_key','telegram_group','telegram_phone',
        'whatsapp_key','whatsapp_send_to','notes'
    ];
    protected $table = "config_settings";
    protected $primaryKey = 'id';
    public $timestamps = false ;


}
