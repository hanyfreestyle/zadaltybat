@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />

    <form class="mainForm" action="{{route('App.AppSetting.AppSettingUpdate')}}" method="post">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5" >
                    <x-ui-card title="{{__('admin/menu.app_config')}}" :add-form-error="false" >
                        <div class="form-group">
                            <label for="inputEmail3" class="col-lg-4 col-form-label">{{__('admin/appConfig.status')}}</label>
                            <div class="col-lg-8">
                                <input type="checkbox" name="status" @if($setting->status == '1') checked @endif data-bootstrap-switch data-off-color="danger" data-on-color="success">
                            </div>
                        </div>


                        <x-form-input label="{{ __('admin/appConfig.AppName') }}" name="AppName" :requiredSpan="true" colrow="col-lg-12"
                                      value="{{old('AppName',$setting->AppName)}}" inputclass="dir_ar"/>

                        <x-form-input label="{{ __('admin/appConfig.baseUrl') }}" name="baseUrl" :requiredSpan="true" colrow="col-lg-12"
                                      value="{{old('baseUrl',$setting->baseUrl)}}" inputclass="dir_en"/>

                        <x-form-input label="{{ __('admin/appConfig.mobilePrefix') }}" name="mobilePrefix" :requiredSpan="true" colrow="col-lg-12"
                                      value="{{old('mobilePrefix',$setting->mobilePrefix)}}" inputclass="dir_en"/>

                        <x-form-input label="{{ __('admin/appConfig.prefix') }}" name="prefix" :requiredSpan="true" colrow="col-lg-12"
                                      value="{{old('prefix',$setting->prefix)}}" inputclass="dir_en"/>

                    </x-ui-card>
                </div>

            </div>
        </div>
        <div class="container-fluid">
            <x-form-submit text="Edit" />
        </div>
    </form>
    <br>
    <br>


@endsection
