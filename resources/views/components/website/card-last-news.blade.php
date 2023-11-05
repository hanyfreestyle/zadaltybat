<div class="blog_post blog_style2 box_shadow1 blog_post_card">
    <div class="blog_img">
        <a href="{{route('LatestNews_View',$postData->slug)}}">
            <img src="{{ getPhotoPath($postData->photo_thum_1,"blog") }}" alt="blog_small_img1">
        </a>
    </div>
    <div class="blog_content bg-white">
        <div class="blog_text">
            <h2 class="blog_title crop_text_2"><a href="{{route('LatestNews_View',$postData->slug)}}">{{$postData->name}}</a></h2>
            <ul class="list_none blog_meta">
                <li><i class="far fa-calendar"></i>{{ $postData->getFormatteDate() }}</li>
            </ul>
            <p class="g_des crop_text_3">{{$postData->g_des}}</p>
        </div>
    </div>
</div>
