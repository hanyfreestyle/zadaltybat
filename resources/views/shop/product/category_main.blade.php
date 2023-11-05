@extends('shop.layouts.app')
@section('breadcrumb')

    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')
    <div class="section MainCategoryList">
        <div class="container">

            <div class="row mb-3 mb-lg-4 mt-3 pb-1">
                <div class="col-lg-12">
                    <h1 class="def_h1 text-center" >{{$PageMeta->body_h1}}</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row shop_container shop_container_50">
                        @foreach($MainCategoryProduct as $MainCategory)
                            <div class="col-lg-3 col-md-4 col-6 grid_item">
                                <div class="product">
                                    <a href="{{route('Shop_CategoryView',$MainCategory->slug)}}">
                                        <div class="product_img">
                                            <img src="{{getPhotoPath($MainCategory->photo_thum_1,'categorie')}}" alt="product_img1">
                                        </div>
                                    </a>
                                    <div class="product_info">
                                        <h2 class="product_title">
                                            <a href="{{route('Shop_CategoryView',$MainCategory->slug)}}">{{$MainCategory->name}}
                                                @if(count($MainCategory->recursive_product_shop) > 0)
                                                    <span class="">({{count($MainCategory->recursive_product_shop) }})</span>
                                                @endif
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



