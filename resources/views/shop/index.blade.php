@extends('shop.layouts.app')

@section('content')

    <div class="section small_pt MainCategory_Home_Slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_tab_header">
                        <div class="heading_s2">
                            <h2 class="def_h2">{{__('web/def.Main_Categories')}}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "6"}}'>
                        @foreach($ShopMenuCategory as $MainCategory)

                            <a href="{{route('Shop_CategoryView',$MainCategory->slug)}}">

                                <div class="item">
                                    <div class="cl_logoX">
                                        <img class="slider_iconX" src="{{ getPhotoPath($MainCategory->photo_thum_1 ,'faq-icon') }}" alt="cl_logo"/>

                                    </div>

                                    <h3 class="def_h4 text-center mt-3">{{$MainCategory->name}}</h3>
                                </div>
                            </a>


                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    @foreach($MainCategoryPro as $MainCategory)

            <div class="section MainCategoryListX pb-lg-5">
                <div class="container">
                    <div class="row">
                        @if($loop->index == 0 or $loop->index == 2 )
                            <div class="col-xl-3 d-none d-xl-block">
                                <div class="sale-banner">
                                    <a class="hover_effect1 HomeImageCat" href="{{route('Shop_CategoryView',$MainCategory->slug)}}">
                                        <img src="{{getPhotoPath($MainCategory->photo)}}" alt="shop_banner_img10">
                                    </a>
                                </div>
                            </div>
                        @endif

                        <div class="col-xl-9 ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="heading_tab_header">
                                        <div class="heading_s2">
                                            <h4>{{$MainCategory->name}}</h4>
                                        </div>
                                        <div class="view_all">
                                            <a href="{{route('Shop_CategoryView',$MainCategory->slug)}}" class="text_default"><i class="linearicons-power"></i> <span>{{__('web/def.View_All')}}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="25" data-responsive='{"0":{"items": "2"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                        @foreach($MainCategory->recursive_product_shop as $product)
                                            <div class="item">
                                                <x-shop.block-product :product="$product" :category="$product->categories->first()"/>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                            @if($loop->index ==1 or $loop->index == 3 )
                                <div class="col-xl-3 d-none d-xl-block">
                                    <div class="sale-banner">
                                        <a class="hover_effect1 HomeImageCat" href="{{route('Shop_CategoryView',$MainCategory->slug)}}">
                                            <img src="{{getPhotoPath($MainCategory->photo)}}" alt="shop_banner_img10">
                                        </a>
                                    </div>
                                </div>
                            @endif


                    </div>
                </div>
            </div>

    @endforeach

    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>


@endsection

