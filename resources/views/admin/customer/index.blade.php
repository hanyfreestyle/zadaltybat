@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <x-ui-card  :page-data="$pageData" >
            <x-mass.confirm-massage/>

            @if(count($customers)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            <th class="TD_100">{{ __('admin/customer.name') }}</th>
                            <th class="TD_100">{{ __('admin/customer.company_name') }}</th>
                            <th class="TD_100">{{ __('admin/customer.phone') }}</th>
                            <th class="TD_100">{{ __('admin/customer.whatsapp') }}</th>
                            <th class="TD_100">{{ __('admin/customer.city')  }}</th>

                            @if($pageData['ViewType'] == 'deleteList')
                                <th class="tbutaction TD_100">{{ __('admin/page.del_date') }}</th>
                                <th class="tbutaction TD_100"></th>
                                <th class="tbutaction TD_100"></th>
                            @else
                                <th class="tbutaction TD_50"></th>
                                @can($PrefixRole.'_edit')
                                    <th class="tbutaction TD_50"></th>
                                    <th class="tbutaction TD_50"></th>
                                    <th class="tbutaction TD_50"></th>
                                @endcan
                                @can($PrefixRole.'_delete')
                                    <th class="tbutaction TD_50"></th>
                                @endcan
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($customers as $customer)
                            <tr>
                                <td>{{$customer->id+1000}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->company_name}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->whatsapp}}</td>
                                <td>{{$customer->city->name ?? ''}}</td>

                                @if($pageData['ViewType'] == 'deleteList')
                                    <td>{{$customer->deleted_at}}</td>
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.restore',$customer->id)}}" type="restor" /></td>
                                    <td class="tc"><x-action-button url="#" id="{{route($PrefixRoute.'.force',$customer->id)}}" type="deleteSweet"/></td>
                                @else
                                    <td class="tc" >{!! is_active($customer->is_active) !!}</td>
                                    @can($PrefixRole.'_edit')
                                        <td class="tc"><x-action-button url="{{route($PrefixRoute.'.Password',$customer->id)}}" print-lable="Password" bg="dark"  :tip="true" icon="fas fa-lock" /></td>
                                        <td class="tc"><x-action-button url="{{route($PrefixRoute.'.Address',$customer->id)}}" print-lable="العناوين"  :tip="true" icon="fas fa-map-marker-alt" /></td>
                                        <td class="tc"><x-action-button url="{{route($PrefixRoute.'.edit',$customer->id)}}" type="edit" :tip="true" /></td>
                                    @endcan

                                    @can($PrefixRole.'_delete')
                                        <td class="tc"><x-action-button url="#" id="{{route($PrefixRoute.'.destroy',$customer->id)}}" type="deleteSweet" :tip="true" /></td>
                                    @endcan
                                @endif

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
                {{ $customers->links() }}
            @endif
        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-err/>
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
