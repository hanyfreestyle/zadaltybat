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
                <div class="col-lg-9 ">

                    @if($customer->addresses_count < 4)
                        <div class="tab-content dashboard_content">
                            @include('shop.customer.profile_address_form_inc',['pageType' => 'orders'])
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

