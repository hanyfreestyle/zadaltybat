<div class="product">
    <a href="{{route('Page_WebProductView',[$category->id,$product->slug])}}">
        <div class="product_img">
            <img src="{{getPhotoPath($product->photo,'categorie')}}" alt="product_img1">
        </div>
    </a>
    <div class="product_info">
        <h6 class="product_title"><a href="{{route('Page_WebProductView',[$category->id,$product->slug])}}">{{$product->name}}</a></h6>

        <div class="pr_desc">
            <p> {{$product->g_des}}</p>
            <div class="list_product_action_box mt-1">
                <a class="btn btn-danger btn-sm" href="{{route('Page_WebProductView',[$category->id,$product->slug])}}">{{__('web/def.View_Details')}}</a>
            </div>
        </div>

    </div>
</div>
