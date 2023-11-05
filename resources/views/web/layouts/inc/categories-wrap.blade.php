<div class="categories_wrap">
    <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent" aria-expanded="false" class="categories_btn">
        <i class="linearicons-menu"></i><span> {{__('web/menu.All_Categories')}} </span>
    </button>

    <div id="navCatContent"
         class="@if($SinglePageView['banner_id']  and $SinglePageView['banner_count'] > 0) nav_cat @endif navbar collapse">
        <ul>
            @foreach($MenuCategory as $MainCategory)
                @if($loop->index < 9)
                    @if($MainCategory->children_count <= 0 )
                        <li><a class="dropdown-item nav-link nav_item" href="{{route('Page_WebCategoryView',$MainCategory->slug)}}">
                                <span class="cat_icon_span"><img class="cat_icon" width="30" src="{{getPhotoPath($MainCategory->icon ,"faq-icon")}}"></span>
                                <span>{{$MainCategory->name}}</span></a></li>
                    @else
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-item nav-link dropdown-toggler" href="{{route('Page_WebCategoryView',$MainCategory->slug)}}" data-bs-toggle="dropdown">
                                <span class="cat_icon_span"><img class="cat_icon" width="30" src="{{getPhotoPath($MainCategory->icon ,"faq-icon")}}"></span>
                                <span>{{$MainCategory->name}}</span></a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-7">
                                        @if($MainCategory->children_count > 0 )
                                            <ul class="d-lg-flex">
                                                @foreach($MainCategory->children  as $SubCategory)
                                                    @if($loop->index < 2)
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header sub_catName"><a href="{{route('Page_WebCategoryView',$SubCategory->slug)}}">{{$SubCategory->name}}</a></li>
                                                                @if(count($SubCategory->CatProduct) > 0 )
                                                                    @foreach($SubCategory->CatProduct as $Product)
                                                                        <li class="Product_name"><a class="dropdown-item nav-link nav_item" href="{{route('Page_WebProductView',$Product->slug)}}">{{$Product->name}}</a></li>
                                                                    @endforeach
                                                                @endif
                                                            </ul>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                    <li class="mega-menu-col col-lg-5 d-none d-md-block">
                                        <div class="header-banner2">
                                            <a href="{{route('Page_WebCategoryView',$MainCategory->slug)}}"> <img  class="img_cat" src="{{getPhotoPath($MainCategory->photo,"blog")}}" class="rounded" alt="menu_banner1"></a>
                                            <div class="readMore_but">
                                            <a href="{{route('Page_WebCategoryView',$MainCategory->slug)}}">{{__('web/def.Load_More')}}</a>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                @endif
            @endforeach

            <li>
                <ul class="more_slide_open">
                    @if(count($MenuCategory) > 9)
                        @foreach($MenuCategory as $MainCategory)
                            @if($loop->index > 9)
                                <li><a class="dropdown-item nav-link nav_item" href="{{route('Page_WebCategoryView',$MainCategory->slug)}}">
                                        <span class="cat_icon_span"><img class="cat_icon" width="30" src="{{getPhotoPath($MainCategory->icon ,"faq-icon")}}"></span>
                                        <span>{{$MainCategory->name}}</span></a></li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </li>
        </ul>
        @if(count($MenuCategory) > 9)
            <div class="more_categories">{{__('web/menu.More_Categories')}}</div>
        @endif

    </div>
</div>

