<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_tab_header">
                    <div class="heading_s2">
                        <h2 class="def_h2">{{__('web/menu.Our_Client')}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'>
                   @foreach($OurClients as $Client)
                       @if($Client->photo)
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="{{getPhotoPath($Client->photo)}}" alt="cl_logo"/>
                                </div>
                            </div>

                       @endif
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
