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

