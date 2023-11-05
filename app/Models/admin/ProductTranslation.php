<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "product_translations";
    protected $fillable = ['name'];

}
