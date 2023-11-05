<?php

namespace App\Models\customer;

use App\Models\data\DataCity;
use App\Models\UsersCustomers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsersCustomersAddress extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = "users_customers_addresses";
    protected $primaryKey = 'id';
    protected $fillable = [

    ];


    public function city(): BelongsTo
    {
        return $this->belongsTo(DataCity::class, 'city_id');
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo( UsersCustomers::class,'customer_id');
    }

}
