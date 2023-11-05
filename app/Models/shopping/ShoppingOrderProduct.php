<?php

namespace App\Models\shopping;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingOrderProduct extends Model
{
    use HasFactory;

    protected $table = "shopping_order_products";
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function CartPriceToAdd()
    {
        if(intval($this->price) > 0 and intval($this->sale_price) != 0
            and intval($this->sale_price) <  intval($this->price) ){
            return $this->sale_price ;
        }else{
            return $this->price ;
        }
    }

}
