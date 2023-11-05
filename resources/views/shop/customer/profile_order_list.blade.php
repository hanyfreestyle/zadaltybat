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
                <div class="col-lg-3">
                    @if($agent->isDesktop() or $agent->isTablet())
                        @include('shop.customer.profile_menu')
                    @else
                        @include('shop.customer.profile_menu_mobile')
                    @endif
                </div>
                <div class="col-lg-9">
                    <div class="tab-content dashboard_content">
                        <div class="card profileCard">
                            <div class="card-header border_top">
                                <h3>
                                    <i class="fas fa-shopping-cart"></i> {{__('web/customers.Profile_OrdersList')}}
                                </h3>
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-12">
                                    @if(count($orders) > 0 )
                                        <div class="table-responsive shop_cart_table">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th class="product-price">{{__('web/orders.title_num')}}</th>
                                                    <th class="product-quantity">{{__('web/orders.title_date')}}</th>
                                                    <th class="product-subtotal">{{__('web/orders.title_status')}}</th>
                                                    <th class="product-subtotal">{{__('web/orders.title_total')}}</th>
                                                    <th class="product-remove">{{__('web/orders.title_view')}}</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($orders as $order)
                                                    <tr class="tr_orders">
                                                        <td class="product-price" data-title="{{__('web/orders.title_num')}}">
                                                            {{ $order->id+1000 }}#
                                                        </td>
                                                        <td class="product-price" data-title="{{__('web/orders.title_date')}}">
                                                            {{ $order->getFormatteDate() }}
                                                        </td>
                                                        <td class="product-subtotal" data-title="{{__('web/orders.title_status')}}">
                                                            {!! \App\Helpers\AdminHelper::getOrderStatus($order->status,'but') !!}
                                                        </td>

                                                        <td class="product-subtotal" data-title="{{__('web/orders.title_total')}}">
                                                            {{ $order->total }}  {{__('web/cart.EGP')}}
                                                        </td>
                                                        <td class="product-remove last_td" data-title="{{__('web/orders.title_view')}}">
                                                            <a href="{{route('Profile_OrderView', $order->uuid)}}"><i class="fas fa-search"></i></a></td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <div class="row mt-3">
                                            <div class="col-lg-12">
                                                <div class="alert alert-warning alert-dismissible">
                                                    لا توجد طلبات متوفرة حتى الان
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

