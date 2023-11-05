<div class="col-lg-3 d-none d-lg-block d-xl-block">
    <div class="sidebar">
        <div class="widget">
            <h3 class="widget_title def_h3">{{ __('web/def.Main_Categories') }}</h3>
            <ul class="widget_categories">

                @foreach($ShopMenuCategory as $MainCategory)
                    <li><a href="{{route('Shop_CategoryView',$MainCategory->slug)}}">
                            <span class="categories_name">{{$MainCategory->name}}</span>
                            <span class="categories_num"> @if( count($MainCategory->recursive_product_shop) > 0) ({{ count($MainCategory->recursive_product_shop) }}) @endif  </span>
                        </a></li>
                @endforeach
            </ul>
        </div>





    </div>
</div>
