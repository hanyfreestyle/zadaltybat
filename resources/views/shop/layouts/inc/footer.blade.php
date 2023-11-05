<livewire:new-letter-shop/>

<div class="footer-main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="ft-widget-area">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 d-flex justify-content-center">
                            <img class="res_footer_logo" src="{{getDefPhotoPath($DefPhotoList,'light-logo')}}" >
                        </div>
                        <div class="col-lg-6  col-md-6 d-flex  justify-content-center footer_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer_text">
                                {{__('web/footer.about_text')}}
                            </p>

                        </div>
                    </div>




                    <div class="row">

                        <div class="col-lg-7 col-sm-6 col-12 ">
                            <div class="address-info d-flex ">
                                <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="info-content info_address">
                                    {!! nl2br(__('web/footer.address')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-12 " >
                            <div class="address-info d-flex ">
                                <div class="info-icon"><i class="linearicons-phone-wave"></i></div>
                                <div class="info-content info_phone">
                                    {!! nl2br(__('web/footer.phone')) !!}
                                </div>

                            </div>
                        </div>





                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 d-md-none d-lg-block">
                <div class="ft-fixed-area">
                    <div class="reservation-box">
                        <div class="reservation-wrap">
                            <h3 class="res-title">{{__('web/footer.Open_Hour')}}</h3>
                            <div class="res-date-time">

                                @foreach($OpeningHours as $day)

                                    <div class="date-time-item">
                                        <div class="res-date">
                                            <div class="res-date-item">
                                                <div class="res-date-text"><p>{{$day->name_ar}}</p></div>
                                            </div>
                                        </div>


                                        <div class="res-time">
                                            <div class="res-time-item">
                                                <p>

                                                    {{ \Illuminate\Support\Carbon::parse($day->open_from)->locale(app()->getLocale())->translatedFormat("h:i A") }} -
                                                    {{ \Illuminate\Support\Carbon::parse($day->open_to)->locale(app()->getLocale())->translatedFormat("h:i A") }}

                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<a href="#" class="scrollup" style="display: none;"><i class="fas fa-chevron-up"></i></a>

@include('shop.layouts.inc.footer_mobile')


