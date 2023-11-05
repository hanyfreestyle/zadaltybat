<div class="cart_box dropdown-menu dropdown-menu-right">
    @if(count($CartList) >0 )
        <ul class="cart_list">
            @foreach($CartList as $ProductCart)

                @if($loop->index < 3)
                    <li>
                        <form wire:submit.prevent="removeFromCart({{$ProductCart->id}})" method="post">
                            <button type="submit" class="item_remove item_remove_but"><i class="ion-close"></i></button>
                        </form>
                        <a href="#">
                            @if($showimg)
                                <img class="cart_item_list_img"  src="{{getPhotoPath($ProductCart->model->photo_thum_1,"blog")}}" alt="cart_thumb1">
                            @endif
                            <span class="cart_item_name">{{$ProductCart->name}}</span>
                        </a>
                        <span class="cart_quantity forcDir"> {{$ProductCart->qty}} x <span class="cart_amount"></span> {{$ProductCart->price}}</span>
                    </li>
                @endif


            @endforeach
        </ul>
        <div class="cart_footer">
            <p class="cart_total"><strong>{{__('web/cart.Subtotal')}}</strong>
                <span class="cart_price"> <span class="price_symbole"></span></span>{{$subtotal}}</p>
            <p class="cart_buttons">
                <a href="{{route('Shop_CartEmpty')}}" class="btn btn-fill-line rounded-0 view-cart">{{__('web/cart.empty_cart')}}</a>
                <a href="{{route('Shop_CartView')}}" class="btn btn-fill-out rounded-0 checkout">{{__('web/cart.View_Cart')}}</a>
            </p>
        </div>
    @else
        <div class="cart_footer">
            <p class="text-center empty_cart" >
                <strong class="">السلة فارغة</strong>
            </p>
        </div>
    @endif

</div>

<script>
    document.addEventListener('livewire:load', () => {
        setInterval(function(){ window.livewire.emit('cart-menu-product-list.blade'); }, 1800000);
    });
</script>


