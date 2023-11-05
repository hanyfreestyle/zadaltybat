@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />

    <x-html-section-with-card>
        <div class="col-lg-12 pt-3">
            <div class="alert alert-dark alert-dismissible">
                {{ __('admin/menu.shop_orders') }}
            </div>
            <x-def-settings modelname="Orders" :filterid="false"  >

            </x-def-settings>

        </div>
    </x-html-section-with-card>

@endsection
