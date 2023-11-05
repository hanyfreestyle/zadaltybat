<?php

namespace App\Models\admin\config;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebPrivacy extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['h1','h2','des','lists'];
    protected $fillable = ['id','name','postion','postion'];
    protected $table = "config_web_privacies";
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'privacy_id';


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDefquery(Builder $query): Builder
    {
        return $query->with('translations');
    }
}
