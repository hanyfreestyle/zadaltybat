<?php

namespace App\Models\shopping;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShoppingOrderLog extends Model
{
    use HasFactory;

    protected $table = "shopping_order_logs";
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
