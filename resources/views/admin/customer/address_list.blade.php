@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />
    <x-html-section>
        <div class="row mb-2">
            <div class="col-9">
                <h1 class="def_h1">{{ $customer->name }}</h1>
            </div>
            <div class="col-3 text-left">
                <x-action-button  url="{{route($PrefixRoute.'.edit', $customer->id)}}" type="back" />
            </div>
        </div>
    </x-html-section>

    <x-html-section>
        <div class="card pb-3">
            @if(count($customer_address)>0)
                <div class="card-body">
                    <table class="table table-hover" >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            <th class="TD_200">{{__('admin/form.title_ar')}}</th>
                            <th class="TD_200">{{__('web/user_address.fr_recipient_name')}}</th>
                            <th class="TD_200">{{__('web/user_address.fr_phone')}}</th>
                            <th class="TD_200">{{__('web/user_address.fr_phone_option')}}</th>
                            <th class="TD_150">{{ __('web/customers.Profile_form_city') }}</th>
                            <th class="TD_350">{{__('web/user_address.fr_address') }}</th>

                            @can($PrefixRole.'_edit')
                                <th class="tbutaction"></th>
                            @endcan
                            @can($PrefixRole.'_delete')
                                <th class="tbutaction"></th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customer_address as $address)
                            <tr>
                                <td>{{$address->id}}</td>
                                <td>{{$address->name}}</td>
                                <td>{{$address->recipient_name}}</td>
                                <td>{{$address->phone}}</td>
                                <td>{{$address->phone}}</td>
                                <td>{{$address->city->name}}</td>

                                <td>{!! nl2br($address->address) !!}</td>


                                @can($PrefixRole.'_edit')
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.AddressEdit',$address->id)}}" type="edit" :tip="true" /></td>
                                @endcan
                                @can($PrefixRole.'_delete')
                                    <td class="tc"><x-action-button url="#" id="{{route($PrefixRoute.'.AddressDelete',$address->id)}}" :tip="true" type="deleteSweet"/></td>
                                @endcan
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="col-lg-12 pr-4 pl-4">
                    <x-alert-massage type="nodata" />
                </div>
            @endif
        </div>
    </x-html-section>


    <x-html-section>
        @if(count($customer_address) < 4)
            <div class="card p-4">
                <form  class="mainForm" action="{{route($PrefixRoute.'.AddressStore',$customer->id)}}" method="post" >
                    @csrf
                    <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                    <div class="row">
                        <div class="form-group col-md-7 mb-3">
                            <x-form-input
                                label="{{ __('web/user_address.fr_recipient_name') }}"
                                name="recipient_name"
                                :requiredSpan="true"
                                colrow="col-lg-12"
                                value="{{old('recipient_name',$customer->name)}}"
                                inputclass="dir_ar"/>
                        </div>
                        <div class="form-group col-md-5 mb-3">
                            <x-form-select-arr-web
                                label="{{ __('web/customers.Profile_form_city') }}"
                                name="city_id" colrow="col-lg-12"
                                :send-arr="$cities"
                                :sendvalue="old('city_id',$customer->city_id)" select-type="normal"
                            />
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <x-form-input
                                label="{{ __('web/customers.reg_form_phone') }}"
                                name="phone"
                                :requiredSpan="true"
                                colrow="col-lg-12"
                                value="{{old('phone',$customer->phone)}}"
                                inputclass="dir_en"/>
                        </div>
                        <div class="form-group  col-md-6 mb-3">
                            <x-form-input
                                label="{{ __('web/user_address.fr_phone_option') }}"
                                name="phone_option"
                                :requiredSpan="false"
                                colrow="col-lg-12"
                                value="{{old('phone_option')}}"
                                inputclass="dir_en"/>
                        </div>
                        <div class="form-group  col-md-12 mb-3">
                            <x-form-textarea
                                label="{{__('web/user_address.fr_address')}}"
                                :requiredSpan="true"
                                name="address"
                                value="{{old('address')}}"
                            />
                        </div>
                    </div>

                    <div class="container-fluid">
                        <x-form-submit text="Add" />
                    </div>
                </form>
            </div>
        @endif
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-js-no-form/>
@endpush

