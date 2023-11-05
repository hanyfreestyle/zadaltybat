<?php

namespace App\Models\data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataCity extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = "data_cities";
    protected $fillable = ['id'];
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];


}
