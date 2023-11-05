
<div class="bottom_header light_skin main_menu_uppercase bg_dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSidetoggle" aria-expanded="false">
                        <span class="linearicons-menu"></span>

                    </button>
                    <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                        <ul class="navbar-nav web_site_navbar_nav">
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'HomePage' ) setActive @endif" href="{{ route('Shop_HomePage') }}"> <i class="fas fa-home"></i> {{__('web/menu.home')}} </a></li>
                            @foreach($ShopMenuCategory as $category)
                                <li>
                                    <a class="nav-link nav_item @if($SinglePageView['SelMenu'] == $category->slug ) setActive @endif" href="{{ route('Shop_CategoryView',$category->slug) }}">
                                        <i class="fas fa-utensils"></i> {{$category->name}}
                                    </a>
                                </li>
                                <li>

                                </li>
                            @endforeach




                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'ContactUs' ) setActive @endif" href="{{ route('Page_ContactUs') }}"><i class="fas fa-headset"></i> {{ __('web/menu.contatc_us')}}</a></li>

                            @if($agent->isMobile() == true and $agent->isTablet() == false)
                                @if(Auth::guard('customer')->check() == false)

                                    <div class="mobileCart">
                                        <a href="{{route('Shop_CartView')}}">
                                            <i class="linearicons-cart"></i>
                                            <span class="">سلة المشتريات</span>
                                        </a>
                                    </div>

                                    <div class="call_us">
                                        <i class="linearicons-phone-wave"></i>
                                        <span class="header_phone_number">{{$WebConfig->phone_text}}</span>
                                    </div>
                                    <div class="menu_social_icons  text-center  ">
                                        @if($WebConfig->facebook)
                                            <a href="{{$WebConfig->facebook}}" target="_blank" class="sc_facebook"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                        @if($WebConfig->twitter)
                                            <a href="{{$WebConfig->twitter}}"  target="_blank" class="sc_twitter"><i class="fab fa-twitter"></i></a>
                                        @endif

                                        @if($WebConfig->youtube)
                                            <a href="{{$WebConfig->youtube}}"  target="_blank" class="sc_youtube"><i class="fab fa-youtube"></i></a>
                                        @endif

                                        @if($WebConfig->instagram)
                                            <a href="{{$WebConfig->instagram}}" target="_blank" class="sc_instagram"><i class="fab fa-instagram"></i></a>
                                        @endif

                                        @if($WebConfig->linkedin)
                                            <a href="{{$WebConfig->linkedin}}" target="_blank" class="sc_linkedin"><i class="fab fa-linkedin-in"></i></a>
                                        @endif





                                    </div>
                                @else




                                    <li class="nav-item">
                                        <a href="{{route('Customer_Profile')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'profile' ) setActive @endif">
                                            <i class="fas fa-id-card"></i> {{__('web/customers.Profile_AccountDetails')}}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('Profile_OrdersList')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'OrdersList' ) setActive @endif">
                                            <i class="fas fa-shopping-cart"></i> {{__('web/customers.Profile_OrdersList')}}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('Profile_Address')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'Address' ) setActive @endif">
                                            <i class="fas fa-map-signs"></i> {{__('web/customers.Profile_Address')}}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('Profile_ChangePassword')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'ChangePassword' ) setActive @endif">
                                            <i class="fas fa-key"></i> {{__('web/customers.Profile_ChangePassword')}}
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('Customer_logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  >
                                            <i class="fas fa-unlock-alt"></i> {{__('web/customers.Profile_logout')}}
                                        </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('Customer_logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                                    <div class="mobileCart">
                                        <a href="{{route('Shop_CartView')}}">
                                            <i class="linearicons-cart"></i>
                                            <span class="">سلة المشتريات</span>

                                        </a>
                                    </div>

                                @endif




                            @endif

                        </ul>







                    </div>

                    <ul class="navbar-nav attr-nav align-items-center">

                        @if(Auth::guard('customer')->check())
                            <li><a href="{{route('Customer_Profile')}}" class="nav-link"><i class="linearicons-user"></i></a></li>
                        @else
                            <li><a href="{{route('Customer_login')}}" class="nav-link"><i class="linearicons-user"></i></a></li>
                        @endif


                        <li class="dropdown cart_dropdown">
                            <a href="{{route('Shop_CartView')}}" class="nav-link"><i class="linearicons-cart"></i>@livewire('cart-counter')</a>
                        </li>

                    </ul>
                    @if($PageView['top_search_view'])
                        <div class="pr_search_icon">
                            <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                        </div>
                    @endif
                </nav>
            </div>
        </div>
    </div>
</div>
