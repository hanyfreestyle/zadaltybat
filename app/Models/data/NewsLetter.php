<?php

namespace App\Models\data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    use HasFactory;

    protected $table = "news_letters";
    protected $fillable = ['email'];
    protected $primaryKey = 'id';


}
