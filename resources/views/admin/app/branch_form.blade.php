@extends('admin.layouts.app')

@section('content')

    <x-html-section>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1 class="def_breadcrumb_h1 text-lg font-weight-lighter">
                            <a href="{{route('admin.Dashboard')}}"><i class="fa fa-home"></i></a> {{$pageData['TitlePage']}}
                        </h1>
                    </div>

                </div>
            </div>
        </section>
        <x-mass.confirm-massage />
    </x-html-section>

    <x-html-section>
        <form class="mainForm" action="{{ route('App.Branch.update',intval($branch->id)) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{intval($branch->id)}}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" >
                        <x-ui-card title="{{ $pageData['cardTitle'] }}" :add-form-error="false" >
                            @foreach ( config('app.shop_lang') as $key=>$lang )

                                <div class="row">
                                    <div class="col-lg-12 {{getColDir($key)}}">
                                        <x-trans-input
                                            label="{{ __('admin/branch.title') }} "
                                            name="{{ $key }}[title]"
                                            inputid="title_{{ $key }}"
                                            dir="{{ $key }}"
                                            reqname="{{ $key }}.title"
                                            value="{{old($key.'.title',$branch->translateOrNew($key)->title)}}"
                                        />
                                    </div>


                                </div>

                            <div class="row">
                                <div class="col-lg-6 {{getColDir($key)}}">
                                    <x-trans-text-area
                                        label="{{ __('admin/branch.address') }} "
                                        name="{{ $key }}[address]"
                                        inputid="address_{{ $key }}"
                                        dir="{{ $key }}"
                                        reqname="{{ $key }}.address"
                                        value="{{old($key.'.address',$branch->translateOrNew($key)->address)}}"
                                    />
                                </div>



                                <div class="col-lg-6 {{getColDir($key)}}">
                                    <x-trans-text-area
                                        label="{{ __('admin/branch.work_hours') }} "
                                        name="{{ $key }}[work_hours]"
                                        inputid="work_hours_{{ $key }}"
                                        dir="{{ $key }}"
                                        reqname="{{ $key }}.work_hours"
                                        value="{{old($key.'.work_hours',$branch->translateOrNew($key)->work_hours)}}"
                                    />
                                </div>
                            </div>

                            @endforeach
                                <hr>
                                <div class="col-lg-6 {{getColDir($key)}}">
                                    <x-form-textarea
                                        label="{{ __('admin/branch.phone') }} "
                                        name="phone"
                                        dir="en"
                                        value="{{old('phone',$branch->phone)}}"
                                    />
                                </div>
                                <hr>

                                <div class="row">

                                    <x-form-input
                                        label="{{__('admin/branch.whatsapp')}}"
                                        name="whatsapp"
                                        colrow="col-lg-4"
                                        :required-span="false"
                                        value="{{old('whatsapp',$branch->whatsapp)}}"
                                    />


                                    <x-form-input
                                        label="Latitude"
                                        name="lat"
                                        colrow="col-lg-4"
                                        :required-span="true"
                                        value="{{old('lat',$branch->lat)}}"
                                    />
                                    <x-form-input
                                        label="Longitude"
                                        name="long"
                                        colrow="col-lg-4"
                                        :required-span="true"
                                        value="{{old('long',$branch->long)}}"
                                    />
                                </div>


                                <div class="row">
                                    <x-form-input
                                        label="Direction Url"
                                        name="direction"
                                        colrow="col-lg-12"
                                        :required-span="false"
                                        value="{{old('direction',$branch->direction)}}"
                                    />
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <x-form-check-active :row="$branch" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                                    </div>
                                </div>


                        </x-ui-card>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <x-form-submit text="{{$pageData['ViewType']}}" />
            </div>


        </form>

    </x-html-section>

@endsection
