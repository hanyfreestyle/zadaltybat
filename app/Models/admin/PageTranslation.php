<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "page_translations";
    protected $fillable = ['slug','g_title','g_title','g_des','body_h1','breadcrumb'];

}
