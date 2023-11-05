@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection

@section('content')

    <div class="section small_pt small_pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_tab_header">
                        <div class="heading_s2">
                            <h2>{{__('web/menu.week_offer')}}</h2>
                        </div>
                        <div class="deal_timer">
                            <div class="countdown_time countdown_style1" data-time="2023/10/15 13:22:15"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row shop_container shop_container_50  mt-lg-3">
                @foreach($BestDeals as $Product )
                    <div class="col-lg-3 col-md-3 col-6">
                        <x-shop.block-product :product="$Product" :category="$Product->categories->first()"/>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection


@section('AddScript')

@endsection

