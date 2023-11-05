@extends('admin.layouts.app')

@section('content')

    <x-html-section>
        <div class="row py-3"></div>
    </x-html-section>

    @can('ShopOrders_view')
        <x-html-section>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <x-dashboard-orders
                        title="{{__('admin/order.status_1')}}"
                        :orders="$newOrder"
                        :url="route('ShopOrders.New.index')"
                    />
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <x-dashboard-orders
                        title="{{__('admin/order.status_2')}}"
                        :orders="$pendingOrder"
                        :url="route('ShopOrders.Pending.index')"
                    />
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <x-dashboard-orders
                        title="{{__('admin/order.status_3')}}"
                        :orders="$recipientOrder"
                        :url="route('ShopOrders.Recipient.index')"
                    />
                </div>

            </div>

        </x-html-section>
    @endcan





@endsection

@push('JsCode')
{{--    <script src="{{defAdminAssets('plugins/chart.js/Chart.min.js')}}"></script>--}}
{{--    <script src="{{defAdminAssets('js/pages/dashboard3.js')}}"></script>--}}
@endpush
