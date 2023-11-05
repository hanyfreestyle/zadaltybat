@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection

@section('content')

    <div class="section background_bg" data-img-src="{{getDefPhotoPath($DefPhotoList,'offer-1')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-9">
                    <div class="furniture_banner">
                        <h3 class="single_bn_title">عرض خاص</h3>
                        <h4 class="single_bn_title1 text_default">خصم 40% </h4>
                        <div class="countdown_time countdown_style3 mb-4" data-time="2023/10/30 12:30:15"></div>
                        <a href="#" class="btn btn-fill-out">اطلب العرض الان</a>
                        <div class="newsletter_form2 mt-5 pb-lg-4">

                        </div>
                        <div class="newsletter_form2 mt-5 pb-lg-4">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section pt-5 pb-5">
        <div class="container pb-lg-5">

            <div class="row">

                @foreach($BestDeals as $product)
                    <div class="col-lg-6 mb-lg-5 mb-5">
                        <div class="item">
                            <div class="deal_wrap">
                                <div class="product_img text-center">
                                    <a href="#">
                                        <img  class="BestDeal_img"  src="{{getPhotoPath($product->photo)}}" alt="el_img1">
                                    </a>
                                </div>
                                <div class="deal_content">
                                    <div class="product_info best_deal_div">
                                        <h5 class="product_title crop_text_1"><a href="#" class="">{{$product->name}}</a></h5>
                                        <x-shop.print-product-price :product="$product" :show-avr="true"/>
                                    </div>

                                    @php
                                        $ProCount = rand(50,100);
                                        $Sale = rand(20,50) ;
                                        $Available = $ProCount -$Sale ;

                                        $avr =intval(( $Sale /  $ProCount) * 100) ;
                                    @endphp
                                    <div class="deal_progress">
                                        <span class="stock-sold">{{__('web/cart.offer_Already_Sold')}}: <strong>{{$Sale}}</strong></span>
                                        <span class="stock-available">{{__('web/cart.offer_Available')}}: <strong>{{$Available}}</strong></span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="{{$avr}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$avr}}%"> 46% </div>
                                        </div>
                                    </div>
                                    <div class="countdown_time countdown_style4 mb-4" data-time="2023/10/15 12:30:15"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

