<div class="sidebar">
    <div class="widget">
{{--        <h5 class="widget_title">{{__('web/def.Main_Categories')}}</h5>--}}
        <ul class="widget_archive">
            @foreach($MenuCategory as $MainCategory)
                <li class="main_cat">
                    <a href="{{route('Page_WebCategoryView',$MainCategory->slug)}}"><span class="archive_year">{{$MainCategory->name}}</span>
                        <span class="archive_num">({{$MainCategory->website_children_count}})</span>
                    </a>
                </li>
                @if($MainCategory->website_children_count > 0)
                    @foreach($MainCategory->website_children as $SubCategory)
                        <li class="sub_cat">
                            <a href="{{route('Page_WebCategoryView',$SubCategory->slug)}}">
                                <span class="archive_yearX">{{$SubCategory->name}}</span>

                            </a>
                        </li>
                    @endforeach
                @endif
            @endforeach
        </ul>
    </div>
</div>
