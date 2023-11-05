@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection

@section('content')
    <div class="section CategoryViewPage pt-lg-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 set_border">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="product_title">{{ __('web/menu.recently_arrived') }}</h1>
                        </div>
                    </div>

                    <x-website.block-list-grid/>

                    <div class="row shop_container shop_container_50 listX mt-3">
                        @foreach($Recently as $Product )
                            <div class="col-lg-4 col-md-4 col-6">
                                <x-shop.block-product :product="$Product" :category="$Product->categories->first()"/>
                            </div>
                        @endforeach
                    </div>

                </div>

                @include('shop.product.category_view_sidebar')

            </div>
        </div>
    </div>
@endsection




