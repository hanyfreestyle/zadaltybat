@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>


    <x-html-section>
        @if($pageData['ViewType'] == 'Edit')
            <div class="row mb-3">
                <div class="col-9">
                    <h1 class="def_h1">{{ $Category->name }}</h1>
                </div>
                <div class="col-3 text-left">
                    <x-action-button url="{{route($PrefixRoute.'.Table_list',$Category->id)}}"  bg="p"  print-lable="{{__('admin/def.table_info')}}"  icon="fas fa-info-circle"  />
                </div>
            </div>
        @endif
    </x-html-section>

    <x-html-section>
        <x-ui-card :page-data="$pageData">
            <x-mass.confirm-massage />

            <form  class="mainForm" action="{{route($PrefixRoute.'.update',intval($Category->id))}}" method="post"  enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <x-form-select-category
                        name="parent_id"
                        label="{{__('admin/def.form_Categories')}}"
                        :sendvalue="old('parent_id',$Category->parent_id)"
                        :required-span="false"
                        print-val-name="name"
                        colrow="col-lg-6 "
                        :send-arr="$Categories"
                    />

                    <x-form-select-arr  label="{{__('admin/shop.cat_addshop')}}" name="cat_shop" colrow="col-lg-3"
                                        sendvalue="{{old('cat_shop',$Category->cat_shop)}}" select-type="selActive"/>

                    <x-form-select-arr  label="{{__('admin/shop.cat_addweb')}}" name="cat_web" colrow="col-lg-3"
                                        sendvalue="{{old('cat_web',$Category->cat_web)}}" select-type="selActive"/>
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
                                value="{{old($key.'.name',$Category->translateOrNew($key)->name)}}"
                            />

                            <x-trans-text-area
                                label="{{ __('admin/form.des_'.$key)}} ({{ ($key) }})"
                                name="{{ $key }}[des]"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.des"
                                newstyle="big_text"
                                value="{!! old($key.'.des',$Category->translateOrNew($key)->des) !!}"
                            />
                        </div>
                    @endforeach
                </div>

                <x-meta-tage-filde :old-data="$Category" :placeholder="false" :page-data="$pageData" />

                <hr>

                <div class="row">
                    <x-form-check-active :row="$Category" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-6">

                        <x-form-upload-file view-type="{{$pageData['ViewType']}}" :row-data="$Category"
                                            :multiple="false"

                                            thisfilterid="{{ \App\Helpers\AdminHelper::arrIsset($modelSettings,$controllerName.'_filterid',0) }}"
                                            :emptyphotourl="$PrefixRoute.'.emptyPhoto'"  />
                    </div>

                    <div class="col-lg-6">
                    <x-form-upload-file view-type="{{$pageData['ViewType']}}" :row-data="$Category"
                                        :multiple="false"
                                        label="Icon"
                                        fild-name="icon"
                                        file-name="icon"
                                        :add-filter-list="false"
                                        :emptyphotourl="$PrefixRoute.'.emptyIcon'"  />
                    </div>
                </div>







                <div class="container-fluid">
                    <x-form-submit text="{{$pageData['ViewType']}}" />
                </div>
            </form>
        </x-ui-card>

    </x-html-section>

@endsection


@push('JsCode')
<x-google-seo-script/>
<x-slug-name-script :pagetype="$pageData['ViewType']" />
@endpush
