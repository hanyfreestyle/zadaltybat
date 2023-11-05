<x-website.footer-news-letter type="shop"/>

<footer class="bg_gray webSiteFooter">
    <div class="footer_top small_pt pb_20 UpdateFoote_P">
        <div class="container">
            <div class="row accordion accordion_style1" id="accordion"  >


                @if($agent->isMobile() and $agent->isTablet() == false)



                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <x-website.footer-col-row title="{{ __('web/footer.menu_main') }}" prefix="Three" >
                            <ul class="widget_links">
                                <li><a class="" href="{{ route('Shop_HomePage') }}">{{__('web/menu.home')}} </a></li>
                                <li><a class="" href="{{ route('Page_ContactUs') }}">{{  __('web/menu.contatc_us')}}</a></li>
                            </ul>
                        </x-website.footer-col-row>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <x-website.footer-col-row title="{{__('web/footer.menu_Categories')}}" prefix="Four" >
                            <ul class="widget_links">
                                @foreach($ShopMenuCategory as $MainCategory)
                                    <li><a href="{{route('Shop_CategoryView',$MainCategory->slug)}}">{{$MainCategory->name}}</a></li>
                                @endforeach
                            </ul>
                            <p class="footer_about_more">
                                <a href="{{route('Shop_MainCategory')}}">{{__('web/def.View_All')}}</a>
                            </p>
                        </x-website.footer-col-row>
                    </div>
                @endif


            </div>
        </div>
    </div>

    <x-website.footer-icons/>

    <div class="bottom_footer border-top-tran bottom_footer_mobile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <p class="mb-lg-0 text-center">{!! GetCopyRight('2010',$WebConfig->name ) !!}</p>
                </div>
                <div class="col-lg-4 order-lg-first">
                    <div class="widget mb-lg-0">
                        <ul class="social_icons  social_icons_footer text-center text-lg-start">
                            @if($WebConfig->facebook)
                                <li><a href="{{$WebConfig->facebook}}" target="_blank" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            @endif
                            @if($WebConfig->twitter)
                                <li><a href="{{$WebConfig->twitter}}"  target="_blank" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            @endif

                            @if($WebConfig->youtube)
                                <li><a href="{{$WebConfig->youtube}}"  target="_blank" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            @endif

                            @if($WebConfig->instagram)
                                <li><a href="{{$WebConfig->instagram}}" target="_blank" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                            @endif

                            @if($WebConfig->linkedin)
                                <li><a href="{{$WebConfig->linkedin}}" target="_blank" class="sc_linkedin"><i class="ion-social-linkedin"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="footer_payment text-center text-lg-end">
                        Powered By <a href="">Freestyle4u.com</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<div class="etman_sticky_navbar fixed d-xl-none">
    <div class="sticky-info">
        <a href="{{ route('Shop_HomePage') }}" class="sticky_a @if($SinglePageView['SelMenu'] == 'HomePage' ) active_footer @endif">
            <i class="fas fa-home"></i>
            {{ __('web/menu.footer_home') }}
        </a>
    </div>
    <div class="sticky-info">
        <a href="{{ route('Shop_Recently') }}" class="sticky_a @if($SinglePageView['SelMenu'] == 'Shop_Recently' ) active_footer @endif">

            <i class="fas fa-gift"></i>
            {{ __('web/menu.footer_offer') }}
        </a>
    </div>

    <div class="sticky-info">
        @if(Auth::guard('customer')->check())
            <a href="{{route('Customer_Profile')}}" class="sticky_a @if($SinglePageView['SelMenu'] == 'CustomerProfile' ) active_footer @endif">
                <i class="fas fa-user"></i>{{__('web/menu.footer_account')}}</a>
        @else
            <a href="{{route('Customer_login')}}" class="sticky_a @if($SinglePageView['SelMenu'] == 'CustomerProfile' ) active_footer @endif">
                <i class="fas fa-user-lock"></i>{{__('web/menu.footer_account')}}</a>
        @endif
    </div>
    <div class="sticky-info">
        <a href="{{ route('Shop_CartView') }}" class="sticky_a @if($SinglePageView['SelMenu'] == 'Shop_CartView' ) active_footer @endif ">
            <i class="fas fa-shopping-cart"></i>
            {{ __('web/menu.footer_cart') }}
        </a>
    </div>
</div>

