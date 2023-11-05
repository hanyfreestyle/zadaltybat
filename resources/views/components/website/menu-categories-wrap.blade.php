

<div class="categories_wrap">
    <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent" aria-expanded="false" class="categories_btn">
        <i class="linearicons-menu"></i><span> {{__('web/menu.All_Categories')}} </span>
    </button>


    @if(isset($SinglePageView['CatId'])  and count($PagesList[$SinglePageView['CatId']]->PageBanner) > 0)
        <div id="navCatContent" class="nav_cat navbar collapse">
            @else
                <div id="navCatContent" class="navbar collapse">
                    @endif



        <ul>

            @foreach($MenuCategory as $MainCategory)
                @if($MainCategory->children_count <= 0 )
                    <li><a class="dropdown-item nav-link nav_item" href="#"><i class="flaticon-printer"></i> <span>{{$MainCategory->name}}</span></a></li>
                @else
                    <li class="dropdown dropdown-mega-menu">
                        <a class="dropdown-item nav-link dropdown-toggler" href="#" data-bs-toggle="dropdown"><i class="flaticon-tv"></i> <span>{{$MainCategory->name}}</span></a>
                        <div class="dropdown-menu">
                            <ul class="mega-menu d-lg-flex">
                                <li class="mega-menu-col col-lg-7">

                                    @if($MainCategory->children_count > 0 )
                                        <ul class="d-lg-flex">

                                            @foreach($MainCategory->children  as $SubCategory)
                                                @if($loop->index < 2)
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li class="dropdown-header">{{$SubCategory->name}}</li>
                                                            @if(count($SubCategory->CatProduct) > 0 )
                                                                @foreach($SubCategory->CatProduct as $Product)

                                                                    <li><a class="dropdown-item nav-link nav_item" href="#">{{$Product->name}}</a></li>
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
                                        <img src="{{getPhotoPath($MainCategory->photo,"blog")}}" class="rounded" alt="menu_banner1">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            @endforeach
            <li><a class="dropdown-item nav-link nav_item" href="#"><i class="flaticon-jacket"></i> <span>{{__('web/menu.New_Category')}} </span></a></li>
            <li><a class="dropdown-item nav-link nav_item" href="#"><i class="flaticon-jacket"></i> <span>{{__('web/menu.New_Category')}} </span></a></li>
            <li><a class="dropdown-item nav-link nav_item" href="#"><i class="flaticon-jacket"></i> <span>{{__('web/menu.New_Category')}} </span></a></li>
            <li><a class="dropdown-item nav-link nav_item" href="#"><i class="flaticon-jacket"></i> <span>{{__('web/menu.New_Category')}} </span></a></li>
            <li>
                <ul class="more_slide_open">
                    <li><a class="dropdown-item nav-link nav_item" href="#"><i class="flaticon-pijamas"></i> <span>{{__('web/menu.New_Category')}}</span></a></li>
                    <li><a class="dropdown-item nav-link nav_item" href="#"><i class="flaticon-scarf"></i> <span>{{__('web/menu.New_Category')}}</span></a></li>
                    <li><a class="dropdown-item nav-link nav_item" href="#"><i class="flaticon-vintage"></i> <span>{{__('web/menu.New_Category')}}</span></a></li>
                    <li><a class="dropdown-item nav-link nav_item" href="#"><i class="flaticon-pregnant"></i> <span>{{__('web/menu.New_Category')}}</span></a></li>
                </ul>
            </li>
        </ul>
        <div class="more_categories">{{__('web/menu.More_Categories')}}</div>
    </div>
</div>
