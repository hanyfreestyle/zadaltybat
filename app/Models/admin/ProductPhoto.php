<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPhoto extends Model
{
    use HasFactory;

    public function productName(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id', 'id');
    }
}
