<div class="section pt-0 pt-lg-0 MainCategoryList">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="def_h2">{{__('web/def.products')}}</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if($agent->isMobile())
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="product_header">
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                        <a href="javascript:void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row shop_container shop_container_50  mt-lg-3">
                    @foreach($Category->CatProduct as $Product )
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <x-website.block-product-card :product="$Product"/>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
