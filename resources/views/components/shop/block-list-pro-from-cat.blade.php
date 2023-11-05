<div class="product">
    <a href="{{route('Shop_ProductView',[$category->id,$product->slug])}}">
        <div class="product_img">
            <img src="{{getPhotoPath($product->photo_thum_1,'categorie')}}" alt="product_img3">
        </div>
    </a>
    <div class="product_info">
        <h6 class="product_title"><a href="{{route('Shop_ProductView',[$category->id,$product->slug])}}">{{$product->name}}</a></h6>
        <x-shop.print-product-price :product="$product"/>
        <livewire:cart-add-button :product="$product">

        @if($agent->isMobile() == false)
            <div class="pr_desc">
                <p>{{$product->des}}</p>
            </div>
        @endif
    </div>
</div>
