@extends('admin.layouts.app')

@section('content')

    <x-html-section>
        <x-breadcrumb-def :pageData="$pageData"/>
        <x-mass.confirm-massage />
    </x-html-section>

    <x-html-section>
        <form class="mainForm" action="{{ $pageData['route'] }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$menu->id}}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" >
                        <x-ui-card title="{{ $pageData['cardTitle'] }}" :add-form-error="false" >
                            @foreach ( config('app.shop_lang') as $key=>$lang )
                                <div class="row">
                                    <div class="col-lg-6 {{getColDir($key)}}">
                                        <x-trans-input
                                            label="{{ __('admin/appMenu.label') }} "
                                            name="{{ $key }}[label]"
                                            inputid="label_{{ $key }}"
                                            dir="{{ $key }}"
                                            reqname="{{ $key }}.label"
                                            value="{{old($key.'.label',$menu->translateOrNew($key)->label)}}"
                                        />
                                    </div>

                                    <div class="col-lg-6 {{getColDir($key)}}">
                                        <x-trans-input
                                            label="{{ __('admin/appMenu.icon') }} "
                                            name="{{ $key }}[icon]"
                                            inputid="icon_{{ $key }}"
                                            dir="{{ $key }}"
                                            reqname="{{ $key }}.icon"
                                            value="{{old($key.'.icon',$menu->translateOrNew($key)->icon)}}"
                                        />
                                    </div>
                                </div>

                                <div class="col-lg-12 {{getColDir($key)}}">
                                    <x-trans-input
                                        label="{{ __('admin/appMenu.url') }} "
                                        name="{{ $key }}[url]"
                                        inputid="url_{{ $key }}"
                                        dir="{{ $key }}"
                                        reqname="{{ $key }}.url"
                                        value="{{old($key.'.url',$menu->translateOrNew($key)->url)}}"
                                    />
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <x-form-check-active :row="$menu" name="title" page-view="{{$pageData['ViewType']}}"/>
                                    </div>
                                </div>


                            @endforeach



                        </x-ui-card>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <x-form-submit text="Edit" />
            </div>


        </form>

    </x-html-section>

@endsection
