@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <x-ui-card :page-data="$pageData">
            <x-mass.confirm-massage />

            <form  class="mainForm" action="{{route($PrefixRoute.'.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-7">

                        <div class="row">
                            <x-form-input label="{{__('admin/customer.name') }}" name="name" :requiredSpan="true"
                                          colrow="col-lg-12" value="{{old('name')}}"   inputclass="dir_ar"/>

                            <x-form-input label="{{__('admin/customer.company_name') }}" name="company_name" :requiredSpan="true"
                                          colrow="col-lg-7" value="{{old('company_name')}}"   inputclass="dir_ar"/>

                            <x-form-select-arr
                                name="city_id"
                                label="{{__('admin/customer.city')}}"
                                :sendvalue="old('city_id')"
                                :required-span="true"
                                colrow="col-lg-5 "
                                :send-arr="$cities"
                            />

                        </div>

                        <div class="row form-group mb-3">
                            <x-form-input label="{{__('web/customers.reg_form_phone')}}" name="phone" :requiredSpan="true" colrow="col-lg-6"
                                          value="{{old('phone')}}" inputclass="dir_en"/>

                            <x-form-input label="{{__('admin/config/roles.users_fr_email')}}" name="email" :requiredSpan="false" colrow="col-lg-6"
                                          value="{{old('email')}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/customer.whatsapp') }}" name="whatsapp" :requiredSpan="false" colrow="col-lg-6"
                                          value="{{old('whatsapp')}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/customer.land_phone') }}" name="land_phone" :requiredSpan="false" colrow="col-lg-6"
                                          value="{{old('land_phone')}}" inputclass="dir_en"/>
                        </div>




                    </div>

                    <div class="col-lg-5">

                        <div class="form-group">
                            <x-form-input
                                label="{{ __('web/user_address.fr_recipient_name') }}"
                                name="recipient_name"
                                :requiredSpan="true"
                                colrow="col-lg-12"
                                value="{{old('recipient_name')}}"
                                inputclass="dir_ar"/>
                        </div>


                        <div class="form-group">
                            <x-form-input
                                label="{{ __('web/customers.reg_form_phone') }}"
                                name="phone_address"
                                :requiredSpan="true"
                                colrow="col-lg-6"
                                value="{{old('phone_address')}}"
                                inputclass="dir_en"/>

                            <x-form-input
                                label="{{ __('web/user_address.fr_phone_option') }}"
                                name="phone_option"
                                :requiredSpan="false"
                                colrow="col-lg-6"
                                value="{{old('phone_option')}}"
                                inputclass="dir_en"/>
                        </div>



                        <div class="form-group">
                            <x-form-textarea
                                label="{{__('web/user_address.fr_address')}}"
                                :requiredSpan="true"
                                name="address"
                                topclass="col-lg-12"
                                value="{{old('address')}}"/>
                        </div>

                    </div>

                </div>
                <hr class="pb-3">
                <div class="container-fluid">
                    <x-form-submit-new  :page-data="$pageData" />
                </div>
            </form>
        </x-ui-card>

    </x-html-section>

@endsection


@push('JsCode')
    <script type="text/javascript">
        var input1 = document.getElementById('phone');
        var input2 = document.getElementById('phone_address');

        input1.addEventListener('change', function() {
            input2.value = input1.value;
        });

        var input3 = document.getElementById('name');
        var input4 = document.getElementById('recipient_name');

        input3.addEventListener('change', function() {
            input4.value = input3.value;
        });
    </script>
@endpush
