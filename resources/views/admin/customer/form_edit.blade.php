@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>


        <x-html-section>
            @if($pageData['ViewType'] == 'Edit')
                <div class="row mb-3">
                    <div class="col-9">
                        <h1 class="def_h1">{{ $customer->name }}</h1>
                    </div>

                    <div class="col-3 text-left">
                        <x-action-button url="{{route($PrefixRoute.'.Address',$customer->id)}}"  bg="p"  print-lable="العناوين"  icon="fas fa-map-marker-alt"  />
                    </div>
                </div>
            @endif
        </x-html-section>

    <x-html-section>
        <x-ui-card :page-data="$pageData">
            <x-mass.confirm-massage />

            <form  class="mainForm" action="{{route($PrefixRoute.'.update',intval($customer->id))}}" method="post"  enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <x-form-input label="{{__('admin/customer.name') }}" name="name" :requiredSpan="true"
                                          colrow="col-lg-12" value="{{old('name',$customer->name)}}"   inputclass="dir_ar"/>

                            <x-form-input label="{{__('admin/customer.company_name') }}" name="company_name" :requiredSpan="true"
                                          colrow="col-lg-7" value="{{old('company_name',$customer->company_name)}}"   inputclass="dir_ar"/>

                            <x-form-select-arr
                                name="city_id"
                                label="{{__('admin/customer.city')}}"
                                :sendvalue="old('city_id',$customer->city_id)"
                                :required-span="true"
                                colrow="col-lg-5 "
                                :send-arr="$cities"
                            />

                        </div>

                        <div class="row form-group mb-3">
                            <x-form-input label="{{__('web/customers.reg_form_phone')}}" name="phone" :requiredSpan="true" colrow="col-lg-6"
                                          value="{{old('phone',$customer->phone)}}" :disabled="true" inputclass="dir_en"/>

                            <x-form-input label="{{__('admin/config/roles.users_fr_email')}}" name="email" :requiredSpan="false" colrow="col-lg-6"
                                          value="{{old('email',$customer->email)}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/customer.whatsapp') }}" name="whatsapp" :requiredSpan="false" colrow="col-lg-6"
                                          value="{{old('whatsapp',$customer->whatsapp)}}" inputclass="dir_en"/>

                            <x-form-input label="{{ __('admin/customer.land_phone') }}" name="land_phone" :requiredSpan="false" colrow="col-lg-6"
                                          value="{{old('land_phone',$customer->land_phone)}}" inputclass="dir_en"/>
                        </div>
                    </div>
                </div>
                <hr class="pb-3">
                <div class="row">
                    <x-form-check-active :row="$customer" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                </div>

                <hr>

                <div class="container-fluid">
                    <x-form-submit-new  :page-data="$pageData" />
                </div>
            </form>
        </x-ui-card>

    </x-html-section>

@endsection



