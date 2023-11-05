<div class="product_row">
    <div class="img_div">
        <a href="{{route('Shop_ProductView',[$category->id,$product->slug])}}">
            <img src="{{getPhotoPath($product->photo_thum_1,'categorie')}}" alt="product_img3">
        </a>
    </div>
    <div class="pro_info">
        <h2 class="title crop_text_1 "><a href="{{route('Shop_ProductView',[$category->id,$product->slug])}}">{{$product->name}}</a></h2>

        @if(intval($product->price) > 0 and intval($product->qty_left) > 0 )
            <x-shop.print-product-price :product="$product"/>
            <livewire:cart-add-button :product="$product"/>
        @else

            <div class="add_toCart_wrap">
                <span type="submit" class="btn btn-sm btn-dark">
                    {{__('web/cart.out_off_stok') }}
                </span>
            </div>

        @endif
    </div>
</div>
