<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('<i class="fa fa-home"></i>', route('Shop_HomePage'));
});

Breadcrumbs::for('AboutUs', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.About_Us'), route('Page_AboutUs'));
});




Breadcrumbs::for('ContactUs', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.contatc_us'), route('Page_ContactUs'));
});

Breadcrumbs::for('TermsConditions', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.Terms'), route('Page_TermsConditions'));
});

Breadcrumbs::for('FaqList', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.Faq'), route('Page_FaqList'));
});

Breadcrumbs::for('FaqCatView', function (BreadcrumbTrail $trail, $FaqCategory) {
    $trail->parent('FaqList');
    $trail->push($FaqCategory->name, route('Page_FaqCatView', $FaqCategory->slug));
});



Breadcrumbs::for('LatestNews', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.Latest_News'), route('Page_FaqList'));
});

Breadcrumbs::for('LatestNewsView', function (BreadcrumbTrail $trail, $Post) {
    $trail->parent('LatestNews');
    $trail->push(\Illuminate\Support\Str::limit($Post->name,35), route('Page_FaqCatView', $Post->slug));
});



Breadcrumbs::for('MainCategory', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/def.Main_Categories'), route('Page_MainCategory'));
});

Breadcrumbs::for('WebCategoryView', function (BreadcrumbTrail $trail, $trees) {
    $trail->parent('MainCategory');
    foreach($trees as $tree){
        $trail->push($tree->name, route('Page_WebCategoryView', $tree->slug));
    }
});

Breadcrumbs::for('WebProductView', function (BreadcrumbTrail $trail, $trees,$Product,$Category) {


    $trail->parent('MainCategory');
    foreach($trees as $tree){

        $trail->push($tree->name, route('Page_WebCategoryView', $tree->slug));
    }
    $trail->push($Product->name, route('Page_WebProductView', [$Category->id,$Product->slug]));
});



Breadcrumbs::for('Shop_home', function (BreadcrumbTrail $trail) {
    $trail->push('<i class="fa fa-home"></i>', route('Shop_HomePage'));
});


Breadcrumbs::for('Shop_MainCategory', function (BreadcrumbTrail $trail) {
    $trail->parent('Shop_home');
    $trail->push(__('web/def.Main_Categories'), route('Shop_MainCategory'));
});

Breadcrumbs::for('Shop_CategoryView', function (BreadcrumbTrail $trail, $trees) {
    $trail->parent('Shop_MainCategory');
    foreach($trees as $tree){
        $trail->push($tree->name, route('Shop_CategoryView', $tree->slug));
    }
});

Breadcrumbs::for('Shop_ProductView', function (BreadcrumbTrail $trail, $trees,$Product) {
    $trail->parent('Shop_MainCategory');
    foreach($trees as $tree){
        $trail->push($tree->name, route('Shop_CategoryView', $tree->slug));
    }
    $trail->push($Product->name, "#");
});


Breadcrumbs::for('Shop_FaqList', function (BreadcrumbTrail $trail) {
    $trail->parent('Shop_home');
    $trail->push(__('web/menu.Faq'), route('Shop_FaqList'));
});

Breadcrumbs::for('Shop_FaqCatView', function (BreadcrumbTrail $trail, $FaqCategory) {
    $trail->parent('Shop_FaqList');
    $trail->push($FaqCategory->name, route('Shop_FaqCatView', $FaqCategory->slug));
});


Breadcrumbs::for('Shop_Recently', function (BreadcrumbTrail $trail) {
    $trail->parent('Shop_home');
    $trail->push(__('web/menu.recently_arrived'), route('Shop_Recently'));
});

Breadcrumbs::for('Shop_BestDeals', function (BreadcrumbTrail $trail) {
    $trail->parent('Shop_home');
    $trail->push(__('web/menu.client_offer'), route('Shop_BestDeals'));
});

Breadcrumbs::for('Shop_WeekOffers', function (BreadcrumbTrail $trail) {
    $trail->parent('Shop_home');
    $trail->push(__('web/menu.week_offer'), route('Shop_WeekOffers'));
});

Breadcrumbs::for('Shop_Cart', function (BreadcrumbTrail $trail) {
    $trail->parent('Shop_home');
    $trail->push(__('web/cart.cart_breadcrumbs'), route('Shop_CartView'));
});


Breadcrumbs::for('Customer_Login', function (BreadcrumbTrail $trail) {
    $trail->parent('Shop_home');
    $trail->push(__('web/customers.login_breadcrumb'), route('Customer_login'));
});

Breadcrumbs::for('Customer_Register', function (BreadcrumbTrail $trail) {
    $trail->parent('Shop_home');
    $trail->push(__('web/customers.reg_breadcrumb'), route('Customer_Register'));
});

Breadcrumbs::for('Customer_Profile', function (BreadcrumbTrail $trail) {
    $trail->parent('Shop_home');
    $trail->push( __('web/customers.profile_breadcrumb'), route('Customer_Profile'));
});

Breadcrumbs::for('Address', function (BreadcrumbTrail $trail) {
    $trail->parent('Customer_Profile');
    $trail->push( __('web/customers.Profile_Address') , route('Customer_Profile'));
});

Breadcrumbs::for('ChangePassword', function (BreadcrumbTrail $trail) {
    $trail->parent('Customer_Profile');
    $trail->push( __('web/customers.Profile_ChangePassword') , route('Customer_Profile'));
});

Breadcrumbs::for('OrdersList', function (BreadcrumbTrail $trail) {
    $trail->parent('Customer_Profile');
    $trail->push( __('web/customers.Profile_OrdersList') , route('Customer_Profile'));
});









