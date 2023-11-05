<div class="container conatct_faq">
    <div class="row">
        <div class="col-md-12">
            <div class="heading_tab_header">
                <h2 class="def_h2">{{ $lable }}</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="faq_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="false" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "6"}}'>
                @foreach($faqCategories as $FaqCategory)
                    @if($FaqCategory->photo)
                        <div class="item">
                            <a href="{{route($url,$FaqCategory->slug)}}">
                                <div class="">
                                    <img src="{{getPhotoPath($FaqCategory->photo)}}" alt="cl_logo"/>
                                </div>
                                <h3 class="def_h4 text-center">{{$FaqCategory->name}}</h3>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
