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

                <div class="col-lg-7" >
                    <x-ui-card title="" :add-form-error="false" >
                        <div class="row">

                        <x-form-input label="{{ __('admin/appConfig.ColorDark') }}" name="ColorDark" :requiredSpan="true" colrow="col-lg-4"
                                      value="{{old('ColorDark',$setting->ColorDark)}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/appConfig.ColorLight') }}" name="ColorLight" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('ColorLight',$setting->ColorLight)}}" inputclass="dir_en"/>



                        <x-form-input label="{{ __('admin/appConfig.AppBarIconColor') }}" name="AppBarIconColor" :requiredSpan="true" colrow="col-lg-4"
                                      value="{{old('AppBarIconColor',$setting->AppBarIconColor)}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/appConfig.BackGroundColor') }}" name="BackGroundColor" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('BackGroundColor',$setting->BackGroundColor)}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/appConfig.SplashColor') }}" name="SplashColor" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('SplashColor',$setting->SplashColor)}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/appConfig.PreloadingColor') }}" name="PreloadingColor" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('PreloadingColor',$setting->PreloadingColor)}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/appConfig.StatueBArColor') }}" name="StatueBArColor" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('StatueBArColor',$setting->StatueBArColor)}}" inputclass="dir_en"/>


                            <x-form-input label="{{ __('admin/appConfig.AppBarColor') }}" name="AppBarColor" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('AppBarColor',$setting->AppBarColor)}}" inputclass="dir_en"/>


                            <x-form-input label="{{ __('admin/appConfig.AppBarColorText') }}" name="AppBarColorText" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('AppBarColorText',$setting->AppBarColorText)}}" inputclass="dir_en"/>


                            <x-form-input label="{{ __('admin/appConfig.sideMenuText') }}" name="sideMenuText" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('sideMenuText',$setting->sideMenuText)}}" inputclass="dir_en"/>


                            <x-form-input label="{{ __('admin/appConfig.sideMenuColor') }}" name="sideMenuColor" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('sideMenuColor',$setting->sideMenuColor)}}" inputclass="dir_en"/>



                            <x-form-input label="{{ __('admin/appConfig.mainScreenScale') }}" name="mainScreenScale" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('mainScreenScale',$setting->mainScreenScale)}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/appConfig.sideMenuAngle') }}" name="sideMenuAngle" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('sideMenuAngle',$setting->sideMenuAngle)}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/appConfig.sideMenuStyle') }}" name="sideMenuStyle" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('sideMenuStyle',$setting->sideMenuStyle)}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/appConfig.AppTheme') }}" name="AppTheme" :requiredSpan="true" colrow="col-lg-4"
                                          value="{{old('AppTheme',$setting->AppTheme)}}" inputclass="dir_en"/>

                        </div>

                    </x-ui-card>
                </div>





                <div class="col-lg-12">
                    <x-ui-card title="{{ __('admin/config/admin.config_social_media')}}" :add-form-error="false">
                        <div class="row">

                            <x-form-input label="Facebook" name="facebook" :requiredSpan="true" colrow="col-lg-6"
                                          value="{{old('facebook',$setting->facebook)}}" inputclass="dir_en"/>

                            <x-form-input label="Youtube" name="youtube" :requiredSpan="true" colrow="col-lg-6"
                                          value="{{old('youtube',$setting->youtube)}}" inputclass="dir_en"/>

                            <x-form-input label="Twitter" name="twitter" :requiredSpan="true" colrow="col-lg-6"
                                          value="{{old('twitter',$setting->twitter)}}" inputclass="dir_en"/>

                            <x-form-input label="Instagram" name="instagram" :requiredSpan="true" colrow="col-lg-6"
                                          value="{{old('instagram',$setting->instagram)}}" inputclass="dir_en"/>

                            <x-form-input label="LinkedIn" name="linkedin" :requiredSpan="true" colrow="col-lg-6"
                                          value="{{old('linkedin',$setting->linkedin)}}" inputclass="dir_en"/>

                        </div>
                    </x-ui-card>
                </div>



                <div class="col-lg-6">
                    <x-ui-card title="WhatsApp" :add-form-error="false">
                        <div class="row">

                            <x-form-input label="{{ __('admin/appConfig.whatsAppNumber') }}" name="whatsAppNumber" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('whatsAppNumber',$setting->whatsAppNumber)}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/appConfig.whatsAppMessage') }}" name="whatsAppMessage" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('whatsAppMessage',$setting->whatsAppMessage)}}" inputclass="dir_ar"/>

                            <x-form-input label="{{ __('admin/appConfig.whatsAppKey') }}" name="whatsAppKey" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('whatsAppKey',$setting->whatsAppKey)}}" inputclass="dir_en"/>


                        </div>
                    </x-ui-card>
                </div>


                <div class="col-lg-6">
                    <x-ui-card title="Telegram" :add-form-error="false">
                        <div class="row">

                            <x-form-input label="Telegram Key" name="telegram_key" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('telegram_key',$setting->telegram_key)}}" inputclass="dir_en"/>

                            <x-form-input label="Telegram Group" name="telegram_group" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('telegram_group',$setting->telegram_group)}}" inputclass="dir_en"/>

                            <x-form-input label="Telegram Phone" name="telegram_phone" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('telegram_phone',$setting->telegram_phone)}}" inputclass="dir_en"/>



                        </div>
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
