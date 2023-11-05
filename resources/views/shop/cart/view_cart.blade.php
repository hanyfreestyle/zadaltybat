@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')
    <livewire:cart-full-view :showimg="true"/>

@endsection

