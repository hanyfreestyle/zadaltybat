@php
if($agent->isMobile() == true and $agent->isTablet() == false){
$stopLoop = 80;
}else{
$stopLoop = 8;
}
@endphp
<div class="categories_wrap">
    <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent" aria-expanded="false" class="categories_btn">
        <i class="linearicons-menu"></i><span> {{__('web/menu.All_Categories')}} </span>
    </button>

    <div id="navCatContent"
         class="@if($SinglePageView['banner_id']  and $SinglePageView['banner_count'] > 0) nav_cat @endif navbar collapse">
        <ul>
            @foreach($ShopMenuCategory as $MainCategory)
                @if($loop->index < $stopLoop )
                    @if($MainCategory->web_shop_children_count <= 0 )
                        <li><a class="dropdown-item nav-link nav_item main_nav" href="{{route('Shop_CategoryView',$MainCategory->slug)}}">
                                <span class="cat_icon_span"><img class="cat_icon" width="30" src="{{getPhotoPath($MainCategory->icon ,"faq-icon")}}"></span>
                                <span>{{$MainCategory->name}}</span></a></li>
                    @else
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-item nav-link dropdown-toggler main_nav" href="{{route('Shop_CategoryView',$MainCategory->slug)}}" data-bs-toggle="dropdown">
                                <span class="cat_icon_span"><img class="cat_icon" width="30" src="{{getPhotoPath($MainCategory->icon ,"faq-icon")}}"></span>
                                <span>{{$MainCategory->name}}</span></a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-12">

                                        <ul class="d-lg-flex">

                                            <li class="mega-menu-col col-lg-4 mega_h ">
                                                <ul>
                                                    @foreach($MainCategory->web_shop_children  as $SubCategory)
                                                        @if($loop->index < 7 )
                                                            <li class="dropdown-header Product_name"><a href="{{route('Shop_CategoryView',$SubCategory->slug)}}">{{$SubCategory->name}}</a></li>
                                                        @endif
                                                    @endforeach
                                                    @if($MainCategory->web_shop_children_count > 6 )
                                                        <li class="dropdown-header view_all"> <a href="{{route('Shop_CategoryView',$MainCategory->slug)}}">{{__('web/def.View_All')}}</a></li>
                                                    @endif
                                                </ul>
                                            </li>

                                            <li class="mega-menu-col col-lg-4 mega_h d-none d-md-block">
                                                <ul>
                                                    <li class="dropdown-header sub_catName">{{__('web/menu.recently_arrived')}}</li>
                                                    @foreach($MainCategory->recursive_product_shop  as $product)
                                                        @if($loop->index <7)
                                                            <li class="dropdown-header Product_name"><a href="#">{{$product->name}}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>

                                            <li class="mega-menu-col col-lg-4 mega_h d-none d-md-block">
                                                <ul>
                                                    <li class="dropdown-header sub_catName">{{__('web/menu.best_seller')}}</li>
                                                    @foreach($MainCategory->recursive_product_shop  as $product)
                                                        @if($loop->index < 7 )
                                                            <li class="dropdown-header Product_name"><a href="#">{{$product->name}}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                @endif
            @endforeach

            <li>
                <ul class="more_slide_open">
                    @if(count($ShopMenuCategory) > $stopLoop )
                        @foreach($ShopMenuCategory as $MainCategory)
                            @if($loop->index > $stopLoop)
                                <li><a class="dropdown-item nav-link nav_item" href="{{route('Shop_CategoryView',$MainCategory->slug)}}">
                                        <span class="cat_icon_span"><img class="cat_icon" width="30" src="{{getPhotoPath($MainCategory->icon ,"faq-icon")}}"></span>
                                        <span>{{$MainCategory->name}}</span></a></li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </li>
        </ul>
        @if(count($ShopMenuCategory) > $stopLoop)
            <div class="more_categories">{{__('web/menu.More_Categories')}}</div>
        @endif

    </div>
</div>
