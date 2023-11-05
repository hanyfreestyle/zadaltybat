@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"  />

    <x-html-section>
        <x-ui-card  title="{{$pageData['title']}}">
            <x-mass.confirm-massage/>

            @if(count($orders)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th class="TD_100">{{ __('admin/order.title_num') }}</th>
                            <th class="TD_100">{{ __('admin/order.title_date') }}</th>
                            <th class="TD_100">{{ __('admin/order.title_customer') }}</th>
                            <th class="TD_100">{{__('admin/order.title_total') }}</th>
                            <th class="tbutaction TD_50"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id+1000}}</td>
                                <td>{{$order->orderDate()}}</td>
                                <td>{{$order->customer->name}}</td>
                                <td>{{ number_format($order->total) }}</td>
                                <td class="tc">
                                    <x-action-button url="{{route('ShopOrders.OrderView',$order->uuid)}}" print-lable="التفاصيل" icon="fas fa-search" />
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <x-alert-massage type="nodata" />
            @endif
        </x-ui-card>
        <div class="d-flex justify-content-center">
            @if($viewDataTable == false)
                {{ $orders->links() }}
            @endif
        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-err/>
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
