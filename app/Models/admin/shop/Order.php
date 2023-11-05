<?php

namespace App\Models\admin\shop;

use App\Models\shopping\ShoppingOrderAddress;
use App\Models\shopping\ShoppingOrderLog;
use App\Models\shopping\ShoppingOrderProduct;
use App\Models\UsersCustomers;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [''];
    protected $table = "shopping_orders";
    protected $primaryKey = 'id';

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    customer
    public function customer(): BelongsTo
    {
        return $this->belongsTo(UsersCustomers::class,'customer_id');
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(ShoppingOrderAddress::class,'address_id');
    }


//    public function address(): HasOne
//    {
//        return $this->hasOne(ShoppingOrderAddress::class,'address_id');
//    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # products
    public function products(): HasMany
    {
        return $this->hasMany(ShoppingOrderProduct::class,'order_id');
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # orderDate
    public function orderDate(): string
    {
        return Carbon::parse($this->order_date)->locale(app()->getLocale())->translatedFormat('Y-m-d') ;
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     scopeDef
    public function scopeDef(Builder $query): Builder
    {
        return $query->with('customer');
    }


    public function orderlog(): HasMany
    {
        return $this->hasMany(ShoppingOrderLog::class,'order_id')->with('user');
    }
}
