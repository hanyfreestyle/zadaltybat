<?php

namespace App\Models\shopping;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingOrderAddress extends Model
{
    use HasFactory;

    protected $table = "shopping_order_addresses";
    protected $primaryKey = 'id';
    public $timestamps = false;







}
