
<div class="section_x small_pt MainCategory_Home_Slider pt-3">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="client_logo carousel_slider owl-carousel owl-theme nav_style20" data-dots="false" data-nav="true" data-margin="10" data-loop="true" data-autoplay="false" data-responsive='{"0":{"items": "3"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "6"}}'>
                        <a href="{{route('Customer_Profile')}}">
                            <div class="item">
                                <div class="profile_mobile_icon">
                                    <i class="fas fa-id-card"></i>
                                </div>
                                <h3 class="profile_mobile_h3 text-center mt-1"> {{__('web/customers.Profile_AccountDetails')}}</h3>
                            </div>
                        </a>


                    <a href="{{route('Profile_OrdersList')}}">
                        <div class="item">
                            <div class="profile_mobile_icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h3 class="profile_mobile_h3 text-center mt-1">  {{__('web/customers.Profile_OrdersList')}}</h3>
                        </div>
                    </a>


                    <a href="{{route('Profile_Address')}}">
                        <div class="item">
                            <div class="profile_mobile_icon">
                                <i class="fas fa-map-signs"></i>
                            </div>
                            <h3 class="profile_mobile_h3 text-center mt-1">{{__('web/customers.Profile_Address')}}</h3>
                        </div>
                    </a>

                    <a href="{{route('Profile_ChangePassword')}}">
                        <div class="item">
                            <div class="profile_mobile_icon">
                                <i class="fas fa-key"></i>
                            </div>
                            <h3 class="profile_mobile_h3 text-center mt-1">{{__('web/customers.Profile_ChangePassword')}}</h3>
                        </div>
                    </a>

                    <a href="{{ route('Customer_logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form_profile').submit();" >
                        <div class="item">
                            <div class="profile_mobile_icon">
                                <i class="fas fa-unlock-alt"></i>
                            </div>
                            <h3 class="profile_mobile_h3 text-center mt-1">{{__('web/customers.Profile_logout')}}</h3>
                        </div>

                        <form id="logout-form_profile" action="{{ route('Customer_logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
