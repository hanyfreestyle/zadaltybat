<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\WebMainController;
use App\Http\Requests\data\ContactUsFormRequest;
use App\Http\Requests\data\NewsLetterRequest;

use App\Models\admin\Category;
use App\Models\admin\config\WebPrivacy;
use App\Models\admin\Product;
use App\Models\data\ContactUsForm;
use Illuminate\Support\Facades\View;


class WebPageController extends WebMainController
{
    public $SinglePageView ;
    public function __construct(

    )
    {
        parent::__construct();
        $stopCash =0;
        $ShopMenuCategory = self::getShopMenuCategory($stopCash);
        View::share('ShopMenuCategory', $ShopMenuCategory);

        $SinglePageView = [
            'SelMenu' => '',
            'slug' => null,
            'banner_id' => null,
            'breadcrumb' => 'home',
        ];

        $this->SinglePageView = $SinglePageView ;
    }




#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    TermsConditions
    public function TermsConditions ()
    {

        $PageMeta = parent::getMeatByCatId('TermsConditions');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "TermsConditions" ;


        $Terms = WebPrivacy::where('is_active',true)
            ->with('translation')
            ->orderBy('postion','asc')
            ->get();

        return view('web.page_term_conditions',compact('SinglePageView','PageMeta','Terms'));
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
        $SinglePageView['breadcrumb'] = "MainCategory" ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;

        return view('web.web_product.category_main',compact('SinglePageView','PageMeta'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     WebCategoryView
    public function WebCategoryView ($slug)
    {
        $slug = \AdminHelper::Url_Slug($slug);

        $Category  = Category::WebSite_Def_Query()
            ->whereTranslation('slug', $slug)
            ->withCount('website_children')
            ->with('website_children')
            ->withCount('category_with_product_website')
            ->with('category_with_product_website')
            ->withCount('table_data')
            ->with('table_data')
            ->with('translation')
            ->firstOrFail();

        if ($Category->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('Page_WebCategoryView', $Category->translate()->slug);
        }


        $PageMeta = $Category ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;
        $SinglePageView['breadcrumb'] = "WebCategoryView" ;
        $SinglePageView['slug'] = 'category/'.$Category->translate(webChangeLocale())->slug;

        $trees = Category::find($Category->id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;

        return view('web.web_product.category_view',compact('SinglePageView','PageMeta','Category','trees'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     WebProductView
    public function WebProductView($catid,$slug){
        $catid = intval($catid);
        $slug = \AdminHelper::Url_Slug($slug);

        $Category = Category::WebSite_Def_Query()
            ->where('id',$catid)
            ->firstOrFail();

        $Product  = Product::Website_Shop_Def_Query()
            ->whereTranslation('slug', $slug)
            ->whereHas('product_with_category',function($query) use ($catid){
                $query->where('category_id',$catid);
            })
            ->with('website_product_with_category')
            ->with('table_data')
            ->withCount('table_data')
            ->firstOrFail();



        $PageMeta = $Product ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;
        $SinglePageView['breadcrumb'] = "WebProductView" ;
        $SinglePageView['slug'] = 'product/'.$catid.'/'.$Product->translate(webChangeLocale())->slug;

//        $trees = Category::find($catid)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;
        $trees = $Category->ancestorsAndSelf()->orderBy('depth','asc')->get() ;

        $ReletedProducts=Product::Website_Shop_Def_Query()
            ->where('id','!=',$Product->id)
            ->whereHas('website_product_with_category',function($query) use ($catid){
            $query->where('category_id',$catid);
        })->limit(8)->get();

        return view('web.web_product.product_view',compact('SinglePageView','PageMeta','Product','trees','ReletedProducts','Category'));
    }





}
