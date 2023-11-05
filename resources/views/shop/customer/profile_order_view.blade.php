@extends('shop.layouts.app')

@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection

@section('content')
    <div class="section pt-lg-5 ">
        <div class="container pb-lg-5">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    @include('shop.customer.profile_menu')
                </div>
                <div class="col-lg-9 ">
                    <div class="tab-content dashboard_content">
                        <div class="card profileCard">
                            <div class="card-header border_top">
                                <h3>
                                    <i class="fas fa-shopping-cart"></i> {{__('web/cart.cart_veiw_Totals')}}
                                </h3>
                            </div>
                        </div>


                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="order_review">
                                        <div class="table-responsive order_table orderViewInfo">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>{{__('web/cart.review_Product')}}</th>
                                                    <th>السعر</th>
                                                    <th>{{__('web/cart.review_Total')}}</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($order->products as $ProductCart)
                                                    <tr>
                                                        <td>

                                                            <div class="confirm_name">
                                                                <span class="confirm_product_qty">x {{$ProductCart->qty}}</span>
                                                                {{$ProductCart->name}}
                                                            </div>

                                                        </td>
                                                        <td> {{ $ProductCart->CartPriceToAdd() }}</td>
                                                        <td> {{ $ProductCart->CartPriceToAdd() *  $ProductCart->qty }} </td>
                                                    </tr>

                                                @endforeach
                                                </tbody>
                                                <tfoot>

                                                <tr>
                                                    <td class="cart_total_label">{{__('web/cart.Subtotal')}}</td>
                                                    <td class="cart_total_label"></td>
                                                    <td class="cart_total_amount">{{$order->total }} </td>
                                                </tr>
{{--                                                <tr>--}}
{{--                                                    <td class="cart_total_label">{{__('web/cart.cart_view_Shipping')}}</td>--}}
{{--                                                    <td class="cart_total_label"></td>--}}
{{--                                                    <td class="cart_total_amount">{{__('web/cart.cart_view_Shipping_free')}}</td>--}}
{{--                                                </tr>--}}
                                                <tr>
                                                    <td class="cart_total_label">{{__('web/cart.cart_veiw_Total')}}</td>
                                                    <td class="cart_total_label"></td>
                                                    <td class="cart_total_amount"><strong>  {{$order->total}}</strong></td>
                                                </tr>

                                                <tr>
                                                    <td class="cart_total_label">{{__('web/orders.title_num')}}</td>
                                                    <td class="cart_total_label"></td>
                                                    <td class="cart_total_amount"><strong>   {{ $order->id+1000 }}# </strong></td>
                                                </tr>

                                                <tr>
                                                    <td class="cart_total_label">{{__('web/orders.title_date')}}</td>
                                                    <td class="cart_total_label"></td>
                                                    <td class="cart_total_amount"><strong> {{ $order->getFormatteDateOrderView() }} </strong></td>
                                                </tr>

                                                <tr>
                                                    <td >{{__('web/orders.title_status')}}</td>
                                                    <td colspan="2"> {!! \App\Helpers\AdminHelper::getOrderStatus($order->status,'but') !!}</td>
                                                </tr>

                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-12 text-center">
                                    <a href="{{route('Profile_OrdersList')}}" class="btn btn-fill-out">
                                        <i class="fas fa-shopping-cart"></i>
                                        {{__('web/customers.Profile_OrdersList')}}
                                    </a>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

