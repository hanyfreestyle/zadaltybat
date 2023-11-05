@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb'],$trees) }}
    </x-website.breadcrumb>
@endsection

@section('content')
    <div class="section CategoryViewPage pt-lg-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 set_border">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="product_title">{{$Category->name}}</h1>
                        </div>
                    </div>


                    @if($Category->children_count > 0)
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="row Shop_CategoryList">
                                    @foreach($Category->children as $SubCategory)
                                        <div class="col-lg-4 col-md-4 col-6  Shop_CategoryI">
                                            <div class="product">
                                                <a href="{{route('Shop_CategoryView',$SubCategory->slug)}}">
                                                    <div class="product_img">
                                                        <img src="{{getPhotoPath($SubCategory->photo_thum_1,'categorie')}}" alt="product_img1">
                                                    </div>
                                                </a>
                                            </div>
                                            <h2 class="cat_name crop_text_1"><a href="{{route('Shop_CategoryView',$SubCategory->slug)}}">{{$SubCategory->name}}
                                                    @if(count($SubCategory->recursive_product_shop) > 0 )
                                                        <span> ({{ count($SubCategory->recursive_product_shop) }}) </span>
                                                    @endif</a></h2>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif



                    @if($Category->products_count > 0)
                        @if($Category->children_count > 0 )
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="def_h2">{{__('web/def.products')}}</h2>
                                    <hr>
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-12">
                                <x-website.block-list-grid/>
                                <div class="row shop_container shop_container_50  mt-lg-3">
                                    @foreach($Category->products as $Product )
                                        <div class="col-lg-4 col-md-4 col-6">
                                            <x-shop.block-product :product="$Product" :category="$Product->categories->first()"/>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
                @include('shop.product.category_view_sidebar')
            </div>
        </div>
    </div>
@endsection


@section('AddScript')

@endsection

