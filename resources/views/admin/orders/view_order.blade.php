@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"  />

    <x-html-section>
        <section class="content mb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="invoice p-3 mb-3">
                            <div class="row">
                                <div class="col-12">
                                    <h4>#{{$order->id+1000}}
                                        <small class="float-right">{{$order->orderDate()}}</small>
                                    </h4>
                                </div>
                            </div>

                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <h2>{{__('admin/order.inv_cust_info')}}</h2>
                                    <p>{{$order->customer->name}}</p>
                                    <p>{{$order->customer->company_name}}</p>
                                    <p>{{$order->customer->phone}}</p>
                                    <p>{{$order->customer->whatsapp}}</p>


                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <h2>{{__('admin/order.inv_address_info')}}</h2>
                                    <p>{{$order->address->recipient_name }}</p>
                                    <p>{{$order->address->city }}</p>
                                    <p>{{$order->address->phone }}</p>
                                    <p>{{$order->address->phone_option }}</p>
                                    <p>{!! nl2br($order->address->address) !!}</p>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <h2>{{__('admin/order.inv_cust_notes')}}</h2>
                                    <p>{!! $order->address->notes !!}</p>

                                </div>



                            </div>

                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>{{__('admin/order.title_qty')}}</th>
                                            <th>SKU</th>
                                            <th>{{__('admin/order.title_pro_name')}}</th>
                                            <th>{{__('admin/order.title_pro_price')}}</th>
                                            <th>{{__('admin/order.title_total')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order->products as $product)
                                            <tr>
                                                <td>{{$product->qty}}</td>
                                                <td>{{$product->sku}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{ number_format($product->CartPriceToAdd()) }}</td>
                                                <td>{{ number_format($product->CartPriceToAdd() * $product->qty) }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th>{{__('web/orders.title_total')}}</th>
                                                <td class="total_invoice">{{ number_format($order->total) }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            {{--                            <div class="row no-print">--}}
                            {{--                                <div class="col-12">--}}
                            {{--                                    <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>--}}
                            {{--                                    <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit--}}
                            {{--                                        Payment--}}
                            {{--                                    </button>--}}
                            {{--                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">--}}
                            {{--                                        <i class="fas fa-download"></i> Generate PDF--}}
                            {{--                                    </button>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>

                    </div>

                    @can('ShopOrders_edit')
                        <div class="col-lg-4">
                            @if($order->status == 1)
                                @include('admin.orders.form_confrim_new')
                            @elseif($order->status == 2)
                                @include('admin.orders.form_confrim_pending')
                            @elseif($order->status == 3)
                                <div class="callout callout-success reject_mass">
                                    <h5><i class="fas fa-info"></i> تم تسليم الطلب</h5>
                                    <hr>
                                    <h5>رقم الفاتورة : {{ $order->invoice_number }}</h5>
                                    <hr>
                                    @foreach($order->orderlog as $log)
                                        <p>{{$log->add_date}}</p>
                                        <p>{{$log->user->name}}</p>
                                        <p>{{$log->notes}}</p>
                                        <hr>
                                    @endforeach
                                </div>

                            @elseif($order->status == 4)
                                <div class="callout callout-danger reject_mass">
                                    <h5><i class="fas fa-info"></i> تم رفض الطلب </h5>
                                    @foreach($order->orderlog as $log)
                                        <p>{{$log->add_date}}</p>
                                        <p>{{$log->user->name}}</p>
                                        <p>{{$log->notes}}</p>
                                    @endforeach
                                </div>
                            @endif




                        </div>
                    @endcan
                </div>
            </div>
        </section>

    </x-html-section>


    <x-html-section>


        <section class="content mb-5">


        </section>

    </x-html-section>

@endsection

@push('JsCode')

@endpush
