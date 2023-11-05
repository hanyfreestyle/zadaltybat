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
                <div class="col-lg-3">
                    @if($agent->isDesktop() or $agent->isTablet())
                        @include('shop.customer.profile_menu')
                    @else
                        @include('shop.customer.profile_menu_mobile')
                    @endif
                </div>
                <div class="col-lg-9">
                    <div class="tab-content dashboard_content">
                        <div class="card profileCard">
                            <div class="card-header border_top">
                                <h3>
                                    <i class="fas fa-map-signs"></i> {{__('web/customers.Profile_Address')}}
                                </h3>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <x-mass.confirm-massage/>
                        </div>
                        <div class="row">

                            @if($customer->addresses_count > 0)
                                @foreach($customer->addresses as $address)


                                    <div class="col-lg-6 mt-3 mb-3">
                                        @include('shop.customer.profile_address_block',['page_type'=> 'profile'])

{{--                                        <div class="card mb-3 mb-lg-0">--}}
{{--                                            <div class="card-header">--}}
{{--                                                <h3 class="address_h3">--}}
{{--                                                    {{$address->name}}--}}

{{--                                                    @if($address->is_default == true)--}}
{{--                                                        <span>{{__('web/user_address.fr_is_default')}}</span>--}}
{{--                                                    @else--}}
{{--                                                        <form action="{{route('Profile_Address_UpdateDefault',$address->uuid)}}" method="post">--}}
{{--                                                            @csrf--}}
{{--                                                            <button class="btn btn_not badge-secondary" type="submit">--}}
{{--                                                                {{__('web/user_address.fr_is_default_set')}}--}}
{{--                                                            </button>--}}
{{--                                                        </form>--}}
{{--                                                    @endif--}}


{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                            <div class="card-body">--}}

{{--                                                <p class="Addinfo">--}}
{{--                                                    <span>{{__('web/user_address.fr_recipient_name')}} :</span>--}}
{{--                                                    {{$address->recipient_name}}--}}
{{--                                                </p>--}}

{{--                                                <p class="Addinfo">--}}
{{--                                                    <span>{{ __('web/customers.Profile_form_city') }} :</span>--}}
{{--                                                    {{$address->city->name}}--}}
{{--                                                </p>--}}

{{--                                                <p class="Addinfo">--}}
{{--                                                    <span>{{ __('web/user_address.fr_phone') }} :</span>--}}
{{--                                                    {{$address->phone}}--}}
{{--                                                </p>--}}

{{--                                                <p class="Addinfo">--}}
{{--                                                    <span>{{ __('web/user_address.fr_phone_option') }} :</span>--}}
{{--                                                    {{$address->phone_option}}--}}
{{--                                                </p>--}}

{{--                                                <p class="Addinfo print_address">--}}
{{--                                                    {!! nl2br($address->address) !!}--}}
{{--                                                </p>--}}
{{--                                                <p class="card_but">--}}
{{--                                                    <a href="{{route('Profile_Address_Edit',$address->uuid)}}"--}}
{{--                                                       class="btn btn-sm btn-dark">{{__('admin/form.button_edit')}}</a>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                @endforeach

                            @else
                                <div class="col-lg-12 mt-3 mb-3">
                                    <div class="alert alert-warning alert-dismissible">
                                        {{__('web/user_address.no_data')}}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <hr>
                    @if($customer->addresses_count < 4)

                        <div class="row">
                            <div class="col-12 card_but">
                                <a href="{{route('Profile_Address_Add')}}" class="btn btn-dark rounded-0" >{{__('web/user_address.add_new')}}</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

