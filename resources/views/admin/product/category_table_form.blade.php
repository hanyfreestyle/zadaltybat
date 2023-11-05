@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>
    <x-html-section>
        <div class="row mb-2">
            <div class="col-9">
                <h1 class="def_h1">{{ $Category->name }}</h1>
            </div>
            <div class="col-3 text-left">
                <x-action-button  url="{{route($PrefixRoute.'.Table_list', $Category->id)}}" type="back" />
            </div>
        </div>
    </x-html-section>
    <x-html-section>
        <x-ui-card :page-data="$pageData" title="{{$CategoryTable->attributeName->name}}" >
            <form  class="mainForm" action="{{route($PrefixRoute.'.Table_update',intval($CategoryTable->id))}}" method="post" >
                @csrf
                <input type="hidden" name="category_id" value="{{ $Category->id }}">
                <input type="hidden" name="attribute_id" value="{{ $CategoryTable->attribute_id }}">
                <div class="row">
                    @foreach ( config('app.lang_file') as $key=>$lang )
                        <div class="col-lg-6 {{getColDir($key)}}">
                            <x-trans-text-area
                                label="{{ __('admin/form.des_'.$key)}} ({{ ($key) }})"
                                name="{{ $key }}[des]"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.des"
                                value="{{ old($key.'.des',$CategoryTable->translateOrNew($key)->des) }}"
                            />
                        </div>
                    @endforeach
                </div>

                <div class="container-fluid">
                    <x-form-submit text="{{$pageData['ViewType']}}" />
                </div>
            </form>
        </x-ui-card>
    </x-html-section>
@endsection

@push('JsCode')
@endpush

