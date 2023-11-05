@extends('shop.layouts.app')

@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection

@section('content')
    <div class="section pt-lg-5 ">
        <div class="container pb-lg-5">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    @include('shop.customer.profile_menu')
                </div>
                <div class="col-lg-9">


                    <div class="tab-content dashboard_content">
                        <div class="card profileCard">
                            <div class="card-header border_top">
                                <h3><i class="fas fa-map-signs"></i> {{__('web/user_address.edit_new')}}</h3>
                            </div>
                        </div>

                        <form action="{{route('Profile_Address_Update',$address->uuid)}}" method="post">
                            <div class="row my-3">

                                @csrf

                                <div class="form-group col-md-6 mb-3">
                                    <x-form-input
                                        label="{{ __('web/customers.reg_form_name') }}"
                                        name="name"
                                        :requiredSpan="true"
                                        colrow="col-lg-12"
                                        value="{{old('name',$address->name)}}"
                                        inputclass="dir_en"/>
                                </div>


                                <div class="form-group col-md-7 mb-3">
                                    <x-form-input
                                        label="{{ __('web/user_address.fr_recipient_name') }}"
                                        name="recipient_name"
                                        :requiredSpan="true"
                                        colrow="col-lg-12"
                                        value="{{old('recipient_name',$address->recipient_name)}}"
                                        inputclass="dir_en"/>
                                </div>
                                <div class="form-group col-md-5 mb-3">
                                    <x-form-select-arr-web
                                        label="{{ __('web/customers.Profile_form_city') }}"
                                        name="city_id" colrow="col-lg-12"
                                        :send-arr="$cities"
                                        :sendvalue="old('city_id',$address->city_id)" select-type="normal"
                                    />
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-input
                                        label="{{ __('web/customers.reg_form_phone') }}"
                                        name="phone"
                                        :requiredSpan="true"
                                        colrow="col-lg-12"
                                        value="{{old('phone',$address->phone)}}"
                                        inputclass="dir_en"/>
                                </div>
                                <div class="form-group  col-md-6 mb-3">
                                    <x-form-input
                                        label="{{ __('web/user_address.fr_phone_option') }}"
                                        name="phone_option"
                                        :requiredSpan="false"
                                        colrow="col-lg-12"
                                        value="{{old('phone_option',$address->phone_option)}}"
                                        inputclass="dir_en"/>
                                </div>
                                <div class="form-group  col-md-12 mb-3">
                                    <x-form-textarea
                                        label="{{__('web/user_address.fr_address')}}"
                                        :requiredSpan="true"
                                        name="address"
                                        value="{{old('address',$address->address)}}"
                                    />
                                </div>
                                <div class="col-md-12 card_but">
                                    <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">
                                        {{__('admin/form.button_edit')}}
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

