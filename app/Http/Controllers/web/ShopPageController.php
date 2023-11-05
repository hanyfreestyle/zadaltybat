<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\WebMainController;
use App\Http\Requests\data\ContactUsFormRequest;
use App\Models\admin\app\Branch;
use App\Models\admin\app\OpeningHours;
use App\Models\admin\Category;
use App\Models\admin\Product;
use App\Models\data\ContactUsForm;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;


class ShopPageController extends WebMainController
{
    public $SinglePageView ;
    public function __construct(

    )
    {
        parent::__construct();

        $stopCash = 0 ;
        $ShopMenuCategory = self::getShopMenuCategory($stopCash);
        View::share('ShopMenuCategory', $ShopMenuCategory);

        $SinglePageView = [
            'SelMenu' => '',
            'profileMenu' => '',
            'slug' => null,
            'banner_id' => null,
            'breadcrumb' => 'home',
        ];

        $this->SinglePageView = $SinglePageView ;



    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    HomePage
    public function Shop_HomePage()
    {

        $PageMeta = parent::getMeatByCatId('Shop_HomePage');
        parent::printSeoMeta($PageMeta);
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'HomePage' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;

        $MainCategoryPro  = Category::def()->root()
            ->with('recursive_product_shop')
            ->limit(4)
            ->get();
        if(isset($_GET['mobile'])){
            Session::put('mobileview',$_GET['mobile']);
        }
        return view('shop.index',compact('SinglePageView','MainCategoryPro'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Recently
    public function Recently ()
    {

        $PageMeta = parent::getMeatByCatId('Shop_Recently');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Shop_Recently' ;
        $SinglePageView['breadcrumb'] = "Shop_Recently" ;

        $Recently=Product::def()
            ->with('categories')
            ->whereHas('categories',function($query){
                $query->where('category_id',2);
            })->orderby('id','desc')->get();

        return view('shop.product.recently_arrived',compact('SinglePageView','PageMeta','Recently'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    BestDeals
    public function WeekOffers()
    {
        $PageMeta = parent::getMeatByCatId('Shop_WeekOffers');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Shop_WeekOffers' ;
        $SinglePageView['breadcrumb'] = "Shop_WeekOffers" ;

        $BestDeals=Product::def()
            ->with('categories')
            ->limit(12)
            ->get();

        return view('shop.product.week',compact('SinglePageView','BestDeals'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    MainCategory
    public function MainCategory ()
    {
        $PageMeta = parent::getMeatByCatId('MainCategory');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "Shop_MainCategory" ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;

        $MainCategoryProduct  = Category::def()->root()
            ->with('recursive_product_shop')
            ->orderBy('postion')
            ->get();

        return view('shop.product.category_main',compact('SinglePageView','PageMeta','MainCategoryProduct'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ShopCategoryView
    public function ShopCategoryView ($slug)
    {
        $slug = \AdminHelper::Url_Slug($slug);



//        $products = CategoryProduct::with(['product' => function ($q) {
//            $q->where('is_active', 1);
//        }]);
//
//        if($id > 0){
//            $products = $products->where('category_id', $id)->get();
//        }else{
//            $products = $products->get();
//        }

        $Category  = Category::def()
            ->whereTranslation('slug', $slug)
            ->withCount('children')
            ->with('children')
            ->withCount('products')
            ->with('products')
            ->firstOrFail();

        $PageMeta = $Category ;
        parent::printSeoMeta($PageMeta);

       /// dd(Route::current());
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = $Category->slug ;
        $SinglePageView['breadcrumb'] = "Shop_CategoryView" ;
        $trees = Category::find($Category->id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;

        return view('shop.product.category_view',compact('SinglePageView','PageMeta','Category','trees'));

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ShopProductView
    public function ShopProductView ($catid,$slug){

        $slug = \AdminHelper::Url_Slug($slug);
        $catid = intval($catid);

        $Category  = Category::def()
            ->where('id',$catid)
            ->withCount('children')
            ->with('children')
            ->withCount('products')
            ->with('products')
            ->firstOrFail();

        $Product  = Product::def()
            ->whereHas('categories',function($query) use ($catid){
                $query->where('category_id',$catid);
            })
            ->whereTranslation('slug', $slug)
            ->withCount('categories')
            ->with('categories')
            ->withCount('more_photos')
            ->with('more_photos')
            ->firstOrFail();


//        $ReletedProducts = Product::Web_Shop_Def_Query()
//            ->where('id','!=',$Product->id)
//            ->whereHas('product_with_category',function($query) use ($catid){
//                $query->where('category_id',$catid);
//            })
//            ->inRandomOrder()
//            ->limit(8)
//            ->get();

        $ReletedProducts = [];
        $PageMeta = $Product ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;
        $SinglePageView['breadcrumb'] = "Shop_ProductView" ;
        $SinglePageView['slug'] = 'product/'.$Product->slug;

        $trees = $Category->ancestorsAndSelf()->orderBy('depth','asc')->get() ;


        return view('shop.product.product_view',
            compact('SinglePageView','PageMeta','Product','trees','ReletedProducts','Category'));

    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    ContactUs
    public function ContactUs ()
    {
        $PageMeta = parent::getMeatByCatId('ContactUs');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'ContactUs' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "ContactUs" ;


        $branches = Branch::query()
            ->where('is_active',true)
            ->orderBy('postion')
            ->get();

        return view('web.page_contact_us',compact('SinglePageView','PageMeta','branches'));
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    ContactUsThanks
    public function ContactUsThanks ()
    {
        $PageMeta = parent::getMeatByCatId('ContactUs');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'ContactUs' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "ContactUs" ;


        return view('web.page_contact_us_confirm',compact('SinglePageView','PageMeta'));
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ContactSend
    public function ContactSend(ContactUsFormRequest $request)
    {
        $saveContactUs = new ContactUsForm();
        $saveContactUs->name = $request->input('name');
        $saveContactUs->email = $request->input('contact_us_email');
        $saveContactUs->phone = $request->input('phone');
        $saveContactUs->subject = $request->input('subject');
        $saveContactUs->message = $request->input('message');
        $saveContactUs->save();
        return redirect()->route('Page_ContactUsThanks');
    }


}


