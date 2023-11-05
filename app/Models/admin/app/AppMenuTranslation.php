<?php

namespace App\Models\admin\app;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppMenuTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "app_menu_translations";
    protected $fillable = ['url','label','icon','title'];


}
