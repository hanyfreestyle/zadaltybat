<div class="banner_section  slide_medium shop_banner_slider staggered-animation-wrap">
    <div class="container">
        <div class="row">
            @if($agent->isDesktop() == true or $agent->isTablet() == true)
                <div class="col-lg-3 col-12 order-2 sub_banner  d-none d-lg-block">
                    <div class="row">
                        <div class="col-lg-12 col-6">
                            <img class="rounded" src=" {{getDefPhotoPath($DefPhotoList,'banner_1')}}" alt="logo" />
                        </div>

                        <div class="col-lg-12 col-6 mt-lg-3">
                            <img class="rounded" src=" {{getDefPhotoPath($DefPhotoList,'direction')}}" alt="whatsapp" />
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-lg-9">
                <div id="carouselExampleControls" class="carousel slide light_arrow" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        @foreach( $SinglePageView['banner_list'] as $banner)
                            <div class="carousel-item @if($loop->index == 0) active @endif background_bg" data-img-src="{{getPhotoPath($banner->photo,"blog")}}">
                                <div class="banner_slide_content banner_content_inner">
                                    <div class="col-lg-7 col-10">
                                        <div class="banner_content3 overflow-hidden stop_view">
                                            <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Get up to 50% off Today Only!</h5>
                                            <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Dual Camera 20MP</h2>
                                            <h4 class="staggered-animation mb-4 product-price" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">$45.00</span><del>$55.25</del></h4>
                                            <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <ol class="carousel-indicators indicators_style1">
                        @foreach( $SinglePageView['banner_list'] as $banner)
                            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="{{$loop->index}}"
                                class="@if($loop->index == 0) active @endif"></li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
