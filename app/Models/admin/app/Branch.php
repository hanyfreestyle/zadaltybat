<?php

namespace App\Models\admin\app;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    public $timestamps = false;
    protected $table = "branches";
    public $translatedAttributes = ['title','address','work_hours'];
    protected $fillable = ['id','is_active','postion'];
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'branch_id';


}
