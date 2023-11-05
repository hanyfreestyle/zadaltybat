@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')
    <div class="section">
        <div class="container">

            <div class="section">
                <div class="container py-4">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="text-center order_complete">
                                <i class="fas fa-check-circle"></i>
                                <div class="heading_s1">
                                    <h3>{!!__('web/cart.completed_h1') !!}</h3>
                                </div>
                                <p>
                                    {!! nl2br(__('web/cart.completed_text')) !!}
                                </p>

                            </div>

                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <a href="{{route('Shop_HomePage')}}" class="btn btn-fill-out">
                                        <i class="fa fa-home"></i>
                                        {{__('web/cart.completed_but')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
