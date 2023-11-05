@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')
    <div class="section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="def_h1 def_border " >{{$PageMeta->body_h1}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @foreach($branches as  $branch)
                        <div class="row mt-3 mb-3">
                            <div class="col-lg-6 mb-3">
                                <div id="map_{{$branch->id}}" class="contact_map_1" data-zoom="18" data-latitude="{{$branch->lat}}" data-longitude="{{$branch->long}}"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact_page">
                                    <h2>{{ $branch->title }}</h2>
                                    <ul class="contact_info">
                                        <li><i class="ti-location-pin"></i><p class="footer_address">{!! nl2br( $branch->address) !!}</p></li>
                                        <li><i class="ti-mobile"></i><p class="forcDir footer_phone">{!! nl2br( $branch->phone) !!}</p></li>
                                        <li><i class=" far fa-clock"></i><p class="footer_address"><strong>{{__('web/address.ad1_hours')}}</strong><br>{!! nl2br( $branch->work_hours) !!}</p></li>
                                    </ul>
                                    @if($agent->isMobile() and $branch->direction != null )
                                        <div class="text-center mt-3"><a target="_blank" href="{{$branch->direction}}" class="btn btn-border-fill"> <i class="fas fa-map-marker-alt"></i>{{__('web/address.Get_Direction')}}</a></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>



            </div>
        </div>
    </div>
    <div class="section bg_gray">
        <div class="container">
            <div class="row">
                @if(false == $agent->isMobile())
                <div class="col-lg-4">
                    <div class="conatct_img">
                        <img src="{{getDefPhotoPath($DefPhotoList,'contact-from')}}" class="rounded"  alt="about_img"/>
                    </div>
                </div>
                @endif
                <div class="col-lg-8 contactform">



{{--                    <p class="leads"> {!! __('web/contact_form.des') !!}</p>--}}
                    <div class="row">
{{--                        <h2 class="def_h2">{{__('web/contact_form.title')}}</h2>--}}
                        <form method="post" action="{{route('Page_ContactSend')}}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-input
                                        name="name"
                                        label="{{__('web/contact_form.name')}}"
                                        value="{{old('name')}}"
                                    />
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-input
                                        name="contact_us_email"
                                        label="{{__('web/contact_form.email')}}"
                                        value="{{old('email')}}"
                                    />
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <x-form-input
                                        name="phone"
                                        label="{{__('web/contact_form.Phone')}}"
                                        value="{{old('phone')}}"
                                    />
                                </div>


                                <div class="form-group col-md-6 mb-3">
                                    <x-form-input
                                        name="subject"
                                        label="{{__('web/contact_form.subject')}}"
                                        value="{{old('subject')}}"
                                    />


                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <x-form-textarea
                                        label="{{__('web/contact_form.Message')}}"
                                        name="message"
                                        value="{{old('message')}}"
                                    />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" title="{{__('web/contact_form.Submit')}}" class="btn btn-fill-out" name="submit" value="Submit">{{__('web/contact_form.Submit')}}</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


@section('googleMaps')
{{--    <script src="https://maps.googleapis.com/maps/api/js?key={{$WebConfig->google_api}}&amp;callback=initMap"></script>--}}
    <script src="https://maps.googleapis.com/maps/api/js?key={{$WebConfig->google_api}}"></script>
    <script>

        @foreach($branches as  $branch)
        if ($("#map_{{$branch->id}}").length > 0){
            google.maps.event.addDomListener(window, 'load', init);
        }
        var map_selector = $('#map_{{$branch->id}}');
        @endforeach

        // if ($("#sub_map").length > 0){
        //     google.maps.event.addDomListener(window, 'load', init);
        // }
        // var map_selector_sub = $('#sub_map');

        function init() {

            @foreach($branches as  $branch)
            var mapOptions = {
                zoom: map_selector.data("zoom"),
                mapTypeControl: false,
                center: new google.maps.LatLng(map_selector.data("latitude"), map_selector.data("longitude")), // New York
            };
            var mapElement = document.getElementById('map_{{$branch->id}}');
            var map_{{$branch->id}} = new google.maps.Map(mapElement, mapOptions);
            var marker;
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(map_selector.data("latitude"), map_selector.data("longitude")),
                map: map_{{$branch->id}},
                animation: google.maps.Animation.DROP
            });
            @endforeach
            // var mapOptions = {
            //     zoom: map_selector_sub.data("zoom"),
            //     mapTypeControl: false,
            //     center: new google.maps.LatLng(map_selector_sub.data("latitude"), map_selector_sub.data("longitude")), // New York
            // };
            // var mapElement = document.getElementById('sub_map');
            // var map2 = new google.maps.Map(mapElement, mapOptions);
            // var marker = new google.maps.Marker({
            //     position: new google.maps.LatLng(map_selector_sub.data("latitude"), map_selector_sub.data("longitude")),
            //     map: map2,
            //     icon: map_selector_sub.data("icon"),
            //
            //     title: map_selector_sub.data("title"),
            // });


        }

    </script>
@endsection
