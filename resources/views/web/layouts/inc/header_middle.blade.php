<div class="middle-header dark_skin">
    <div class="container">
        <div class="nav_block">
            <a class="navbar-brand" href="{{route('Page_HomePage')}}">
                <img class="logo_dark header_logo" src=" {{getDefPhotoPath($DefPhotoList,'dark-logo')}}" alt="logo" />
            </a>
            @if(env('ETMAN_SHOP'))
                <div class="d-none d-md-block">
                    <a href="{{route('Shop_HomePage')}}">
                        <img class="rounded shop_banner" src="{{getDefPhotoPath($DefPhotoList,'shop_banner')}}" alt="shop" />
                    </a>
                </div>
            @endif
            <div class="contact_phone order-md-last forcDir">
                <i class="linearicons-phone-wave"></i>
                <span class="header_phone_number">{{$WebConfig->phone_text}}</span>
            </div>

        </div>
    </div>
</div>
