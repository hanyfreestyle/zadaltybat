<?php

namespace App\Models\admin\config;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebPrivacyTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "config_web_privacy_translations";
    protected $fillable = ['h1','h2','des','lists'];


}
