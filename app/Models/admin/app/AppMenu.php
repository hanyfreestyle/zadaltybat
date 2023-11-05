<?php

namespace App\Models\admin\app;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppMenu extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $table = "app_menus";
    public $translatedAttributes = ['url','label','icon','title'];
    protected $fillable = ['id','type'];
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'menu_id';
}
