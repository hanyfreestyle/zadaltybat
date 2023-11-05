<div class="section">
    <div wire:loading>
        <div class="preloader_cart">
            <div class="lds-ellipsis">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div class="container">


        @if(count($CartList) > 0 )
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive shop_cart_table">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">{{__('web/cart.t_Product')}}</th>
                                <th class="product-price">{{__('web/cart.t_Price')}}</th>
                                <th class="product-quantity">{{__('web/cart.t_Quantity')}}</th>
                                <th class="product-subtotal">{{__('web/cart.t_Total')}}</th>
                                <th class="product-remove"></th>
                                @if($PageErr != 0)
                                    <th class="product-remove"> </th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($CartList) >0 )
                                @foreach($CartList as $ProductCart)

                                    <tr class="@if($ProductCart->options->price_err == 1 or $ProductCart->options->qty_err ) error_in_product @endif">
                                        <td class="product-thumbnail"><a href="#"><img src="{{getPhotoPath($ProductCart->model->photo_thum_1 ,"blog")}}" alt="product1"></a></td>
                                        <td class="product-name" data-title="{{__('web/cart.t_Product')}}">
                                            <a href="#">{{$ProductCart->name}}</a></td>

                                        @if($ProductCart->options->qty_err == 1 and $ProductCart->options->qty_left == null)
                                            <td colspan="3">
                                                <div class="btn btn-dark rounded-0">
                                                   {{__('web/orders.err_sold_out')}}
                                                </div>
                                            </td>

                                        @else
                                            <td class="product-price" data-title="{{__('web/cart.t_Price')}}">{{$ProductCart->price}} {{__('web/cart.EGP')}}</td>
                                            <td class="product-quantity" data-title="{{__('web/cart.t_Quantity')}}">
                                                <div class="quantity">


                                                    @if( $ProductCart->qty < $ProductCart->model->qty_left and $ProductCart->qty < $ProductCart->model->qty_max )
                                                        <div class="increaseProduct">
                                                            <form wire:submit.prevent="increaseProduct({{$ProductCart->id}})" method="post">
                                                                <button type="submit" class="btn btn-sm btn-fill-out">+</button>
                                                            </form>
                                                        </div>
                                                    @else
                                                        <div class="increaseProduct">
                                                            <button wire:click="update({{$ProductCart->id}})" type="button" class="btn btn-sm btn-fill-out-dark">+</button>
                                                        </div>
                                                    @endif

                                                    <input type="text" name="quantity" readonly value="{{$ProductCart->qty}}" title="Qty" class="qty" size="4">

                                                    <div class="increaseProduct">
                                                        <form wire:submit.prevent="decreaseProduct({{$ProductCart->id}})" method="post">
                                                            <button type="submit" class="btn btn-sm btn-fill-out">-</button>
                                                        </form>
                                                    </div>


                                                </div>
                                                @if (session()->has('message_'.$ProductCart->id))
                                                    <div class="no_more_qty">
                                                        {{ session('message_'.$ProductCart->id) }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="product-subtotal" data-title="{{__('web/cart.t_Total')}}">{{ $ProductCart->price *  $ProductCart->qty }} {{__('web/cart.EGP')}}</td>
                                        @endif

                                        <td class="product-remove" data-title="">
                                            <form  wire:submit.prevent="removeFromCart({{$ProductCart->id}})" method="post">
                                                <div class="add_toCart_wrap">
                                                    <button type="submit" class="btn btn-sm btn-fill-out"> <i class="ti-close"></i>{{__('web/cart.t_Remove')}}</button>
                                                </div>
                                            </form>
                                        </td>

                                        @if($PageErr != 0)
                                            <td class="product-remove" data-title="">

                                                @if($ProductCart->options->price_err == 1)
                                                    <form  wire:submit.prevent="updateProductPrice({{$ProductCart->id}})" method="post">
                                                        <div class="add_toCart_wrap">
                                                            <button type="submit" class="btn btn-sm btn-fill-out">{{__('web/orders.err_price_but')}}</button>
                                                        </div>
                                                    </form>
                                                @endif

                                                @if($ProductCart->options->qty_err == 1 and $ProductCart->options->qty_left != null)
                                                    <form  wire:submit.prevent="updateProductQTY({{$ProductCart->id}})" method="post">
                                                        <div class="add_toCart_wrap">
                                                            <button type="submit" class="btn btn-sm btn-fill-out">{{__('web/orders.err_qty_but')}}</button>
                                                        </div>
                                                    </form>
                                                @endif

                                            </td>
                                        @endif

                                    </tr>
                                @endforeach
                            @endif



                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="medium_divider"></div>
                    <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                    <div class="medium_divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="border p-3 p-md-4">
                        <div class="heading_s1 mb-3">
                            <h6>{{__('web/cart.cart_veiw_Totals')}}</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.Subtotal')}}</td>
                                    <td class="cart_total_amount">{{$subtotal}} {{__('web/cart.EGP')}}</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.cart_view_Shipping')}}</td>
                                    <td class="cart_total_amount">{{__('web/cart.cart_view_Shipping_free')}}</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.cart_veiw_Total')}}</td>
                                    <td class="cart_total_amount"><strong>{{$subtotal}} {{__('web/cart.EGP')}}</strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="row">
                            <div class="col-md-12 text-left Confirm_Order">
                                @if(Auth::guard('customer')->check())
                                    @if($PageErr == 0)
                                        <span>
                                    <a href="{{route('Shop_CartConfirm')}}" class="btn btn-fill-out float-right ml-5 mb-2 mt-2 mt-lg-3">
                                        <i class="fas fa-shopping-cart"></i> {{__('web/cart.Confirm_Order')}}
                                    </a>
                                         </span>

                                    @else
                                        <div class="alert alert-danger text-center">
                                           {!! (__('web/cart.err_update_need')) !!}
                                        </div>
                                    @endif


                                    {{--                                    <span>--}}
                                    {{--                                    <a href="https://api.whatsapp.com/send?phone=201208256945&text={!! $Mass !!}" class="btn btn-whatsapp ml-5 mt-lg-3 mt-2">--}}
                                    {{--                                        <i class="fab fa-whatsapp"></i> {{__('web/cart.Confirm_Order_whatsapp')}}--}}
                                    {{--                                    </a>--}}
                                    {{--                                         </span>--}}
                                @else
                                    <span>
                                        <a href="{{route('Customer_login','cart')}}" class="btn btn-fill-out ml-5 mb-2 mt-2 mt-lg-3">
                                            <i class="fas fa-lock"></i> {{__('web/cart.confirm_order_but_login')}}
                                        </a>
                                    </span>

                                    <span>
                                         <a href="{{route('Customer_Register')}}" class="btn btn-dark ml-5 mt-lg-3 mt-2">
                                            <i class="fas fa-user-check"></i> {{__('web/cart.confirm_order_but_register')}}
                                        </a>
                                    </span>

                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mb-lg-5">
                <div class="col-md-12">
                </div>
            </div>
        @else
            <div class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="text-center order_complete">
                                <i class="fas fa-check-circle"></i>
                                <div class="heading_s1">
                                    <h3>{!! __('web/cart.empty_h1') !!}</h3>
                                </div>
                                <p>
                                    {!! nl2br(__('web/cart.empty_p')) !!}
                                </p>
                                <a href="{{route('Shop_Recently')}}" class="btn btn-fill-out">{{__('web/cart.empty_but')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>


