@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />

    <form class="mainForm" action="{{route('admin.webConfigUpdate')}}" method="post">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4" >
                    <x-ui-card title="حالة الموقع" :add-form-error="false" >
                        <div class="form-group">
                            <label for="inputEmail3" class="col-lg-4 col-form-label">{{ __('admin/config/admin.config_web_status') }}</label>
                            <div class="col-lg-8">
                                <input type="checkbox" name="web_status" @if($setting->web_status == '1') checked @endif data-bootstrap-switch data-off-color="danger" data-on-color="success">
                            </div>
                        </div>

                        <x-form-input label="{{ __('admin/config/admin.config_phone') }}" name="phone_num" :requiredSpan="true" colrow="col-lg-12"
                                      value="{{old('phone_num',$setting->phone_num)}}" inputclass="dir_en"/>

                        <x-form-input label="{{ __('admin/config/admin.config_phone') }} Text" name="phone_text" :requiredSpan="true" colrow="col-lg-12"
                                      value="{{old('phone_text',$setting->phone_text)}}" inputclass="dir_en"/>


                        <x-form-input label="{{ __('admin/config/admin.config_whatsapp') }}" name="whatsapp_num" :requiredSpan="true" colrow="col-lg-12"
                                      value="{{old('whatsapp_num',$setting->whatsapp_num)}}" inputclass="dir_en"/>

                        <x-form-input label="{{ __('admin/config/admin.config_whatsapp') }} Text" name="whatsapp_text" :requiredSpan="true" colrow="col-lg-12"
                                      value="{{old('whatsapp_text',$setting->whatsapp_text)}}" inputclass="dir_en"/>

                    </x-ui-card>
                </div>
                <div class="col-lg-8">
                    <x-ui-card title="الاعدادات العامة" :add-form-error="false"  >

                        <div class="row">
                            @foreach ( config('app.lang_file') as $key=>$lang )
                                <div class="col-lg-6 {{getColDir($key)}}">

                                    <x-trans-input
                                        label="{{__('admin/config/admin.config_website_name_'.$key)}} ({{ $key}})"
                                        name="{{ $key }}[name]"
                                        dir="{{ $key }}"
                                        reqname="{{ $key }}.name"
                                        value="{{old($key.'.name', $setting->translate($key)->name)}}"
                                    />

                                    <x-trans-input
                                        label="{{__('admin/form.meta_g_title_'.$key)}} ({{ $key}})"
                                        name="{{ $key }}[g_title]"
                                        dir="{{ $key }}"
                                        reqname="{{ $key }}.g_title"
                                        value="{{old($key.'.g_title', $setting->translate($key)->g_title)}}"
                                    />

                                    <x-trans-text-area
                                        label="{{__('admin/form.meta_g_des_'.$key)}} ({{ $key}})"
                                        name="{{ $key }}[g_des]"
                                        dir="{{ $key }}"
                                        reqname="{{ $key }}.g_des"
                                        value="{{old($key.'.g_des', $setting->translate($key)->g_des)}}"
                                    />

                                    <x-trans-text-area
                                        label="{{__('admin/config/admin.config_closed_mass_'.$key)}} ({{ $key}})"
                                        name="{{ $key }}[closed_mass]"
                                        dir="{{ $key }}"
                                        reqname="{{ $key }}.closed_mass"
                                        value="{{old($key.'.closed_mass', $setting->translate($key)->closed_mass)}}"
                                    />

                                </div>
                            @endforeach
                        </div>

                    </x-ui-card>
                </div>

                <div class="col-lg-6">
                    <x-ui-card title="{{__('admin/config/settings.web_top_header')}}" :add-form-error="false">
                        <div class="row">
                            <x-form-select-arr  label="{{ __('admin/config/settings.web_top_header_offer') }}" name="top_offer" colrow="col-lg-6"
                                                sendvalue="{{old('top_offer',$setting->top_offer)}}" select-type="selActive"/>

                            @foreach ( config('app.lang_file') as $key=>$lang )
                                <div class="col-lg-12 {{getColDir($key)}}">

                                    <x-trans-input
                                        label="{{__('admin/config/settings.web_top_header_offer_text')}} ({{ $key}})"
                                        name="{{ $key }}[offer]"
                                        dir="{{ $key }}"
                                        reqname="{{ $key }}.offer"
                                        value="{{old($key.'.offer', $setting->translate($key)->offer)}}"
                                    />
                               </div>
                            @endforeach


                            <x-form-select-arr  label="{{ __('admin/config/settings.web_top_header_Download') }}" name="download_app" colrow="col-lg-6"
                                                sendvalue="{{old('download_app',$setting->download_app)}}" select-type="selActive"/>

                            <x-form-input label="Apple" name="apple" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('apple',$setting->apple)}}" inputclass="dir_en"/>

                            <x-form-input label="Android" name="android" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('android',$setting->android)}}" inputclass="dir_en"/>

                            <x-form-input label="Windows" name="windows" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('windows',$setting->windows)}}" inputclass="dir_en"/>

                        </div>
                    </x-ui-card>
                </div>
                <div class="col-lg-6">
                    <x-ui-card title="{{ __('admin/config/admin.config_social_media')}}" :add-form-error="false">
                        <div class="row">

                            <x-form-input label="Facebook" name="facebook" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('facebook',$setting->facebook)}}" inputclass="dir_en"/>

                            <x-form-input label="Youtube" name="youtube" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('youtube',$setting->youtube)}}" inputclass="dir_en"/>

                            <x-form-input label="Twitter" name="twitter" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('twitter',$setting->twitter)}}" inputclass="dir_en"/>

                            <x-form-input label="Instagram" name="instagram" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('instagram',$setting->instagram)}}" inputclass="dir_en"/>

                            <x-form-input label="LinkedIn" name="linkedin" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('linkedin',$setting->linkedin)}}" inputclass="dir_en"/>

                            <x-form-input label="Web Site Url" name="def_url" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('def_url',$setting->def_url)}}" inputclass="dir_en"/>

                            <x-form-input label="Google Api" name="google_api" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('google_api',$setting->google_api)}}" inputclass="dir_en"/>

                        </div>
                    </x-ui-card>
                </div>
                <hr>

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

                <div class="col-lg-6">
                    <x-ui-card title="Telegram" :add-form-error="false">
                        <div class="row">

                            <x-form-input label="Whatsapp Key" name="whatsapp_key" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('whatsapp_key',$setting->whatsapp_key)}}" inputclass="dir_en"/>

                            <x-form-input label="Send To" name="whatsapp_send_to" :requiredSpan="true" colrow="col-lg-12"
                                          value="{{old('whatsapp_send_to',$setting->whatsapp_send_to)}}" inputclass="dir_en"/>

                        </div>
                    </x-ui-card>
                </div>

                <div class="col-lg-12">
                    <x-ui-card title="Notes" :add-form-error="false">
                        <div class="row">
                            <x-form-textarea
                                label="Notes"
                                name="notes"
                                topclass="col-lg-12 dir_en"

                                value="{{old('notes', $setting->notes)}}"
                            />

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
