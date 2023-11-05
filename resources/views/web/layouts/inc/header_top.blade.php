<div class="top-header d-none d-md-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="header_topbar_info">
                        @if($WebConfig->download_app)
                            <div class="download_wrap">
                                <span class="me-3">{{__('web/header.Download_App')}}</span>
                                <ul class="icon_list text-center text-lg-start">
                                    @if($WebConfig->apple != '#')
                                        <li><a href="{{$WebConfig->apple}}" target="_blank"><i class="fab fa-apple"></i></a></li>
                                    @endif

                                    @if($WebConfig->android  != '#')
                                        <li><a href="{{$WebConfig->android}}" target="_blank"><i class="fab fa-android"></i></a></li>
                                    @endif

                                    @if($WebConfig->windows != '#')
                                        <li><a href="{{$WebConfig->windows}}" target="_blank"><i class="fab fa-windows"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <a class=" lang_text " href="{{ LaravelLocalization::getLocalizedURL(webChangeLocale(),$SinglePageView['slug'], [], true) }}">
                        <span class="lang_icon"> <img src="{{ defWebAssets('img/'.webChangeLocale().'.png') }}" alt=""></span>
                        {{webChangeLocaletext()}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


