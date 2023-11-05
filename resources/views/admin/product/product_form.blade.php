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
                    <x-action-button url="{{route($PrefixRoute.'.Table_list',$Product->id)}}" type="data_table"/>
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
                    <x-form-select-arr  label="{{__('admin/shop.pro_addshop')}}" name="pro_shop" colrow="col-lg-3"
                                        sendvalue="{{old('pro_shop',$Product->pro_shop)}}" select-type="selActive"/>

                    <x-form-select-arr  label="{{__('admin/shop.pro_addweb')}}" name="pro_web" colrow="col-lg-3"
                                        sendvalue="{{old('pro_web',$Product->pro_web)}}" select-type="selActive"/>
                </div>


                <div class="row">
                    @foreach ( config('app.lang_file') as $key=>$lang )
                        <div class="col-lg-6 {{getColDir($key)}}">
                            <x-trans-input
                                label="{{__('admin/def.form_name_'.$key)}} ({{ $key}})"
                                name="{{ $key }}[name]"
                                inputid="name_{{ $key }}"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.name"
                                value="{!! old($key.'.name',$Product->translateOrNew($key)->name) !!}"
                            />

                            <x-trans-text-area
                                label="{{ __('admin/form.des_'.$key)}} ({{ ($key) }})"
                                name="{{ $key }}[des]"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.des"
                                newstyle="big_text"
                                value="{!! old($key.'.des',$Product->translateOrNew($key)->des) !!}"
                            />
                        </div>
                    @endforeach
                </div>

                <x-meta-tage-filde :old-data="$Product" :placeholder="false" :page-data="$pageData" />

                <hr>

                <div class="row">
                    <x-form-check-active :row="$Product" name="is_active" page-view="{{$pageData['ViewType']}}"/>
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
