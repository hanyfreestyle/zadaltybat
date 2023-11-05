<div class="top-header d-none d-md-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
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
            <div class="col-lg-6 col-md-6">
                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                    <div class="header_topbar_info">
                            <div class="download_wrap">

                                <ul class="icon_list text-center top_banner_social_icons">
                                    @if($WebConfig->facebook)
                                        <li><a href="{{$WebConfig->facebook}}" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                                    @endif

                                    @if($WebConfig->twitter)
                                        <li><a href="{{$WebConfig->twitter}}" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                                    @endif

                                    @if($WebConfig->youtube)
                                        <li><a href="{{$WebConfig->youtube}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    @endif

                                        @if($WebConfig->instagram)
                                            <li><a href="{{$WebConfig->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        @endif

                                        @if($WebConfig->linkedin)
                                            <li><a href="{{$WebConfig->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                        @endif
                                </ul>

                           </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
