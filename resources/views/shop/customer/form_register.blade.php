@extends('shop.layouts.app')

@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection

@section('content')

    <div class="login_register_wrap section">
        <div class="container py-5">
            <div class="row justify-content-center">

                <div class="col-lg-4 d-none d-lg-block">
                    <img src="{{getDefPhotoPath($DefPhotoList,'form_sign_up')}}" alt="about_img"/>
                </div>

                <div class="col-lg-7 offset-md-1">
                    <div class="login_wrap border_top">
                        <div class="padding_eight_all bg-white">

                            @if(Session::has('err'))
                                <div class="col-lg-12">
                                    <div class="alert alert-danger alert-dismissible">
                                        {!! nl2br(__('web/customers.reg_form_err')) !!}
                                    </div>
                                </div>
                            @endif

                            <form method="post" action="{{route('Customer_Create')}}">
                                @csrf

                                <div class="form-group mb-3">
                                    <x-form-input label="{{ __('web/customers.reg_form_name') }}" name="name" :requiredSpan="true"
                                                  colrow="col-lg-12" value="{{old('name')}}"   inputclass="dir_en"/>
                                </div>
                                <div class=" row form-group mb-3">
                                    <x-form-input label="{{__('web/customers.reg_form_phone')}}" name="phone" :requiredSpan="true" colrow="col-lg-6"
                                                  value="{{old('phone')}}" inputclass="dir_en"/>

                                    <x-form-input label="{{__('admin/config/roles.users_fr_email')}}" name="email" :requiredSpan="false" colrow="col-lg-6"
                                                  value="{{old('email')}}" inputclass="dir_en"/>

                                </div>

                                <div class="row form-group mb-3">
                                    <x-form-input label="{{__('admin/form.password')}}" name="password" :requiredSpan="true" colrow="col-lg-6"
                                                  value="{{old('password')}}"  type="password"  :password-edit="false" inputclass="dir_en"/>

                                    <x-form-input label="{{__('web/customers.reg_form_confirm_pass')}}" name="password_confirmation" :requiredSpan="true" colrow="col-lg-6"
                                                  value="{{old('password_confirmation')}}"  type="password"  :password-edit="false" inputclass="dir_en"/>
                                </div>

{{--                                <div class="login_footer form-group mb-3">--}}
{{--                                    <div class="chek-form">--}}
{{--                                        <div class="custome-checkbox">--}}
{{--                                            <input class="form-check-input" type="checkbox" name="reg_terms" @if(old('reg_terms') == 1) checked @endif id="exampleCheckbox2" value="1">--}}
{{--                                            <label class="form-check-label" for="exampleCheckbox2"><span>{{__('web/customers.reg_terms')}}</span></label>--}}
{{--                                        </div>--}}
{{--                                        @if($errors->has('reg_terms'))--}}
{{--                                            <span class="span_form_error">{{ $errors->first('reg_terms') }}</span>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="form-group mb-3 mt-4">
                                    <button type="submit" class="btn btn-fill-out btn-block" name="register">{{__('web/customers.reg_but')}}</button>
                                </div>

                            </form>

                            <div class="form-note text-center">
                                <a href="{{ route('Customer_login') }}">{{__('web/customers.reg_Log_in')}}</a>
                                {{__('web/customers.reg_Already')}}
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

