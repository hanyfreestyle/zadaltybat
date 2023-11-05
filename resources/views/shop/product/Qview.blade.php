
<div class="ajax_quick_view">
    <div class="row ProductViewPage" >

        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
            @if($Product->more_photos_count > 0 )
                <div class="product-image">
                    <div class="product_img_box">
                        @foreach($Product->more_photos as $photo)
                            @if($loop->index == 0)
                                <img id="product_img" src='{{getPhotoPath($photo->photo_thum_1)}}' data-zoom-image="{{getPhotoPath($photo->photo_thum_1)}}" alt="product_img1" />
                            @endif
                        @endforeach
                    </div>
                    <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                        @foreach($Product->more_photos as $photo)
                            <div class="item">
                                <a href="#" class="product_gallery_item  @if($loop->index == 0) active @endif" data-image="{{getPhotoPath($photo->photo_thum_1)}}" data-zoom-image="{{getPhotoPath($photo->photo_thum_1)}}">
                                    <img src="{{getPhotoPath($photo->photo_thum_1)}}" alt="product_small_img1" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="product_img_box">
                    <img id="product_img" src='{{getPhotoPath($Product->photo)}}' data-zoom-image="{{getPhotoPath($Product->photo)}}" alt="product_img1" />
                </div>
            @endif

        </div>

        <div class="col-lg-6 col-md-6">
            <div class="pr_detail">
                <div class="product_description">
                    <h2 class="product_title def_h2" style="line-height: 40px!important;">{{$Product->name}}</h2>

                    @if(intval($Product->g_title) > 0 )
                        <div class="product_price">
                            <span class="price">{{number_format(intval($Product->g_title))}} {{__('web/cart.EGP')}}</span>
                            <del>{{intval($Product->g_title)+10}} {{__('web/cart.EGP')}}</del>
                            <div class="on_sale">
                                <span>2%</span>
                            </div>
                        </div>
                    @else
                        @php
                            $thisprice = rand(100,500);
                            $newprice = $thisprice + 60 ;

                            $avr =intval( (60 /  $newprice) * 100) ;

                        @endphp
                        <div class="product_price">
                            <span class="price">{{ $thisprice }}{{__('web/cart.EGP')}}</span>
                            <del>{{ $newprice }}{{__('web/cart.EGP')}}</del>
                            <div class="on_sale">
                                <span>{{$avr}}% {{__('web/cart.off')}}</span>
                            </div>
                        </div>
                    @endif



                    {{--                    <div class="rating_wrap">--}}
                    {{--                        <div class="rating">--}}
                    {{--                            <div class="product_rate" style="width:80%"></div>--}}
                    {{--                        </div>--}}
                    {{--                        <span class="rating_num">(21)</span>--}}
                    {{--                    </div>--}}




                    @if($Product->des)
                        <div class="pr_desc">
                            <p>{!! nl2br($Product->des) !!}</p>
                        </div>
                    @endif

                    <div class="clearfix"></div>

                    {{--                    <div class="product_sort_info">--}}
                    {{--                        <ul>--}}
                    {{--                            <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty</li>--}}
                    {{--                            <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>--}}
                    {{--                            <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="pr_switch_wrap">--}}
                    {{--                        <span class="switch_lable">Color</span>--}}
                    {{--                        <div class="product_color_switch">--}}
                    {{--                            <span class="active" data-color="#87554B"></span>--}}
                    {{--                            <span data-color="#333333"></span>--}}
                    {{--                            <span data-color="#DA323F"></span>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="pr_switch_wrap">--}}
                    {{--                        <span class="switch_lable">Size</span>--}}
                    {{--                        <div class="product_size_switch">--}}
                    {{--                            <span>xs</span>--}}
                    {{--                            <span>s</span>--}}
                    {{--                            <span>m</span>--}}
                    {{--                            <span>l</span>--}}
                    {{--                            <span>xl</span>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                </div>
                <hr />
                <div class="cart_extra">
                    <div class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" class="minus">
                            <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                            <input type="button" value="+" class="plus">
                        </div>
                    </div>

                    <div class="cart_btn">
                        <button class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i> {{__('web/cart.Add To Cart')}}</button>
                    </div>


                </div>
                <hr />
                <ul class="product-meta">
                    <li> {{__('web/def.lable_SKU')}} <a href="#">  <span>5041315101040</span> </a></li>
                    <li> {{__('web/def.lable_Category')}}<a href="{{ route('Page_WebCategoryView',$Product->categoryName->slug)}}"><span> {{$Product->categoryName->name}}</span></a></li>
                </ul>


            </div>
        </div>








    </div>
</div>


<script src="{{ defWebAssets('js/scripts.js') }}"></script>
<script>
    $(function() {
        AddReadMore("250","عرض المزيد","عرض اقل");
    });
</script>
