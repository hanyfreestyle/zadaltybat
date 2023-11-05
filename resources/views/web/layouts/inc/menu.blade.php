
<div class="bottom_header light_skin main_menu_uppercase bg_dark  @if($SinglePageView['banner_id']  and $SinglePageView['banner_count'] > 0) mb-4 @endif">
    <div class="container">
        <div class="row">


            <div class="col-md-6 col-sm-6 col-6  d-lg-none ">
                <ul class="navbar-nav ShopNowMobile">
                    @if(env('ETMAN_SHOP'))
                        <li><a href="{{ route('Shop_HomePage') }}" class="nav-link"><i class="linearicons-cart"></i> {{__('web/menu.Shop_Now') }}</a></li>
                    @endif

                </ul>
            </div>

            <div class="col-lg-12 col-6 ">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSidetoggle" aria-expanded="false">
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                        <ul class="navbar-nav web_site_navbar_nav">
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'HomePage' ) setActive @endif" href="{{ route('Page_HomePage') }}"> <i class="fas fa-home"></i> {{__('web/menu.home')}} </a></li>
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'MainCategory' ) setActive @endif" href="{{ route('Page_MainCategory') }}"> <i class="fas fa-align-justify"></i>  {{__('web/def.Main_Categories')}} </a></li>
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'AboutUs' ) setActive @endif" href="{{ route('Page_AboutUs') }}"><i class="fas fa-pen-nib"></i> {{ __('web/menu.About_Us') }}</a></li>
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'OurClient' ) setActive @endif" href="{{ route('Page_OurClient') }}"><i class="fas fas fa-users"></i> {{ __('web/menu.Our_Client') }}</a></li>
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'LatestNews' ) setActive @endif" href="{{ route('Page_LatestNews') }}"><i class="fas fa-rss"></i> {{ __('web/menu.Latest_News')}}</a></li>
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'FaqList' ) setActive @endif" href="{{ route('Page_FaqList') }}"><i class="fas fa-question"></i> {{ __('web/menu.Faq') }}</a></li>

                            @if(env('ETMAN_SHOP'))
                                <li><a class="nav-link nav_item " href="{{ route('Shop_HomePage') }}"> <i class="fas fa-shopping-cart"></i> {{__('web/menu.Shop_Now') }}</a></li>
                            @endif
{{--                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'Careers' ) setActive @endif" href="{{ route('Page_Careers') }}"> <i class="fas fa-briefcase"></i> {{ __('web/menu.Careers')}}</a></li>--}}
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'ContactUs' ) setActive @endif" href="{{ route('Page_ContactUs') }}"><i class="fas fa-headset"></i> {{ __('web/menu.contatc_us')}}</a></li>


                            <div class="call_us d-lg-none">
                                <i class="linearicons-phone-wave"></i>
                                <span class="header_phone_number">{{$WebConfig->phone_text}}</span>
                            </div>


                            <div class="menu_social_icons  text-center  d-lg-none  ">
                                @if($WebConfig->facebook)
                                    <a href="{{$WebConfig->facebook}}" target="_blank" class="sc_facebook"><i class="ion-social-facebook"></i></a>
                                @endif
                                @if($WebConfig->twitter)
                                    <a href="{{$WebConfig->twitter}}"  target="_blank" class="sc_twitter"><i class="ion-social-twitter"></i></a>
                                @endif

                                @if($WebConfig->youtube)
                                    <a href="{{$WebConfig->youtube}}"  target="_blank" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a>
                                @endif

                                @if($WebConfig->instagram)
                                    <a href="{{$WebConfig->instagram}}" target="_blank" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a>
                                @endif

                                @if($WebConfig->linkedin)
                                    <a href="{{$WebConfig->linkedin}}" target="_blank" class="sc_linkedin"><i class="ion-social-linkedin"></i></a>
                                @endif





                            </div>


                        </ul>




                    </div>

                    <ul class="navbar-nav attr-nav align-items-center d-md-noneX  ">
                        <li><a href="{{ LaravelLocalization::getLocalizedURL(webChangeLocale(), null, [], true) }}" class="nav-link changeLangMobile">
                                <span> <img src="{{ defWebAssets('img/'.webChangeLocale().'.png') }}" alt=""></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
