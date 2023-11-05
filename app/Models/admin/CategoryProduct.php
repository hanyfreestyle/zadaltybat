<?php

namespace App\Models\admin;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategoryProduct extends Model
{
    use HasFactory;
    protected $table = "category_product";
    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'product_id'
    ];

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #      category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #      product
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
