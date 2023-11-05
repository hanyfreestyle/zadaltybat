<?php

namespace App\Models\admin\app;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "branch_translations";
    protected $fillable = ['title','address','phone','whatsapp','work_hours','lat','long'];

}
