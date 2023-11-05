@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>
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
                </div>


                <div class="row">
                    <x-basic-name-with-slug :row-data="$Category" :page-data="$pageData" />
                </div>

                <hr class="pb-3">


                <div class="row">
                    <x-form-check-active :row="$Category" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-6">

                        <x-form-upload-file view-type="{{$pageData['ViewType']}}" :row-data="$Category"
                                            :multiple="false"
                                            :req="false"
                                            thisfilterid="{{ \App\Helpers\AdminHelper::arrIsset($modelSettings,$controllerName.'_filterid',0) }}"
                                            :emptyphotourl="$PrefixRoute.'.emptyPhoto'"  />
                    </div>

                    <div class="col-lg-6">
                        <x-form-upload-file view-type="{{$pageData['ViewType']}}" :row-data="$Category"
                                            :multiple="false"
                                            label="Icon"
                                            :req="false"
                                            fild-name="icon"
                                            file-name="icon"
                                            :add-filter-list="false"
                                            :emptyphotourl="$PrefixRoute.'.emptyIcon'"  />
                    </div>
                </div>

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
