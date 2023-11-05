@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>

    @if($pageData['ViewType'] == 'Edit')
        <x-html-section>
            <div class="row mb-3">
                <div class="col-9">
                    <h1 class="def_h1">{{ $Product->name }}</h1>
                </div>
                <div class="col-3 text-left">
                    <x-action-button url="{{route($PrefixRoute.'.More_Photos',$Product->id)}}" type="morePhoto"/>
                </div>
            </div>
        </x-html-section>
    @endif

    <x-html-section>
        <x-ui-card :page-data="$pageData">
            <x-mass.confirm-massage />

            <form  class="mainForm" action="{{route($PrefixRoute.'.update',intval($Product->id))}}" method="post"  enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <x-form-select-multiple name="categories" label="{{__('admin/def.Category')}}">
                        @foreach($Categories as $Category )
                            <option  value="{{$Category->id}}"
                                {{ (in_array($Category->id,$selCat)) ? 'selected' : ''}}
                                {{ (collect(old('categories'))->contains($Category->id)) ? 'selected':'' }}
                            >{{$Category->name}}</option>
                        @endforeach
                    </x-form-select-multiple>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <x-basic-name-with-slug :row-data="$Product" :page-data="$pageData" col="col-lg-12" />
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <x-form-input
                                label="الوحدة"
                                :required-span="false"
                                colrow="col-lg-4"
                                name="unit"
                                value="{{old('unit',$Product->unit)}}"
                            />

                            <x-form-input
                                label="اقصى كمية للطلب"
                                :required-span="false"
                                colrow="col-lg-4"
                                name="qty_max"
                                value="{{old('qty_max',$Product->qty_max)}}"
                            />

                            <x-form-input
                                label="الكمية المتاحة"
                                :required-span="false"
                                colrow="col-lg-4"
                                name="qty_left"
                                value="{{old('qty_left',$Product->qty_left)}}"
                            />
                        </div>

                        <div class="row">


                            <x-form-input
                                label="السعر"
                                :required-span="false"
                                colrow="col-lg-6"
                                name="price"
                                value="{{old('price',$Product->price)}}"
                            />

                            <x-form-input
                                label="السعر فى حالة الخصم"
                                :required-span="false"
                                colrow="col-lg-6"
                                name="sale_price"
                                value="{{old('sale_price',$Product->sale_price)}}"
                            />




                        </div>




                    </div>


                </div>


                <hr>

                <div class="row">
                    <x-form-check-active :row="$Product" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                    <x-form-check-active :row="$Product" name="is_archived" :defstatus="false" lable="{{__('admin/def.status_archived')}}"  page-view="{{$pageData['ViewType']}}"/>
                </div>

                <hr>

                <x-form-upload-file view-type="{{$pageData['ViewType']}}" :row-data="$Product"
                                    :multiple="false"
                                    thisfilterid="{{ \App\Helpers\AdminHelper::arrIsset($modelSettings,$controllerName.'_filterid',0) }}"
                                    :emptyphotourl="$PrefixRoute.'.emptyPhoto'"  />

                <div class="container-fluid">
                    <x-form-submit-new  :page-data="$pageData" />
                </div>
            </form>
        </x-ui-card>

    </x-html-section>

@endsection


@push('JsCode')
    <x-google-seo-script/>
    <x-slug-name-script :pagetype="$pageData['ViewType']" />
@endpush
