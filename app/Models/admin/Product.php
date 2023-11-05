<?php

namespace App\Models\admin;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;

    public $translatedAttributes = ['name','slug','des','g_title','g_des'];
    protected $fillable = ['category_id','photo','photo_thum_1','is_active'];
    protected $table = "products";
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'product_id';

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDef(Builder $query): Builder
    {
        return $query->with('translations')
            ->with('categories')
            ->withCount('more_photos');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # categories
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # more_photos
    public function more_photos(): HasMany
    {
        return $this->hasMany(ProductPhoto::class,'product_id','id');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CartPriceToAdd
    public function CartPriceToAdd()
    {
        if(intval($this->price) > 0 and intval($this->sale_price) != 0
            and intval($this->sale_price) <  intval($this->price) ){
            return $this->sale_price ;
        }else{
            return $this->price ;
        }
    }







/*

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #  Web_Shop_Def_Query
    public function scopeWeb_Shop_Def_Query(Builder $query): Builder
    {
        return $query
            ->where('pro_shop',true)
            ->where('is_active',true)
            ->where('is_archived',false)
            ->with('translations');

    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #  ProductWithCategory
    public function product_with_category()
    {
        return $this->belongsToMany(Category::class,'product_category','product_id','category_id')
            ->where('is_active',true)
            ->where('cat_shop',true);

    }
    public function ProductWithCategory()
    {
        return $this->belongsToMany(Category::class,'product_category','product_id','category_id');
    }







#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #  Web_Shop_Def_Query
    public function scopeWebsite_Shop_Def_Query(Builder $query): Builder
    {
        return $query
            ->where('pro_web',true)
            ->where('pro_web_data',true)
            ->where('is_active',true)
            ->where('is_archived',false)
            ->with('translations');

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #  website_product_with_category
    public function website_product_with_category()
    {
        return $this->belongsToMany(Category::class,'product_category','product_id','category_id')
            ->where('is_active',true)
            ->where('cat_web',true);

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     table_data
    public function table_data(): HasMany
    {
        return $this->hasMany(ProductTable::class , 'product_id', 'id' );
    }

    public function print_price()
    {
       return number_format($this->price).' <span class="currency">'.__('web/cart.EGP').'</span>' ;
    }

    public function discount_price()
    {
        if(intval($this->price) > 0 and intval($this->sale_price) <  intval($this->price) ){
            return  '<del>'.number_format($this->sale_price).' <span class="currency">'.__('web/cart.EGP').'</span></del>' ;
        }
    }


*/

}
