@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />
    <x-html-section>
        <div class="row mb-2">
            <div class="col-9">
                <h1 class="def_h1">{{ $address->customer->name }}</h1>
            </div>
            <div class="col-3 text-left">
                <x-action-button  url="{{route($PrefixRoute.'.edit', $address->customer->id)}}" type="back" />
            </div>
        </div>
    </x-html-section>




    <x-html-section>

            <div class="card p-4">
                <form  class="mainForm" action="{{route($PrefixRoute.'.AddressUpdate',$address->id)}}" method="post" >
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <x-form-input
                                label="{{ __('web/customers.reg_form_name') }}"
                                name="name"
                                :requiredSpan="true"
                                colrow="col-lg-12"
                                value="{{old('name',$address->name)}}"
                                inputclass="dir_ar"/>
                        </div>


                        <div class="form-group col-md-7 mb-3">
                            <x-form-input
                                label="{{ __('web/user_address.fr_recipient_name') }}"
                                name="recipient_name"
                                :requiredSpan="true"
                                colrow="col-lg-12"
                                value="{{old('recipient_name',$address->recipient_name)}}"
                                inputclass="dir_ar"/>
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


                    </div>

                    <div class="container-fluid">
                        <x-form-submit text="Edit" />
                    </div>
                </form>
            </div>

    </x-html-section>

@endsection

@push('JsCode')

@endpush

