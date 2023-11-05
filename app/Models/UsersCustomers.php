<?php

namespace App\Models;

use App\Models\customer\UsersCustomersAddress;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UsersCustomers extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    protected $guarded = "customer";

    protected $table = "users_customers";
    protected $primaryKey = 'id';


//    public function setPasswordAttribute($password)
//    {
//        $this->attributes['password'] = bcrypt($password);
//    }

//    public function setPasswordAttribute($value)
//    {
//        if( \Hash::needsRehash($value) ) {
//            $value = \Hash::make($value);
//        }
//        $this->attributes['password'] = $value;
//    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
      ///  'roles_name' => 'array',
    ];



    public function addresses(): HasMany
    {
        return $this->hasMany(UsersCustomersAddress::class,'customer_id')
            ->with('city')
            ->orderBy('is_default','desc');
    }

    public function scopeDef(Builder $query): Builder
    {
        return $query->where('status',1)->where('is_active',1);
    }
}
