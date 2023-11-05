@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <div class="row mb-3">
            <div class="col-12 text-left">
                <x-action-button url="{{route('webPro.Product.AddProToWeb')}}"  bg="p"  print-lable="{{ __('admin/shop.pro_addweb') }}"  icon="fas fa-plus-square"  />
            </div>
        </div>
    </x-html-section>

    <x-html-section>
        <x-ui-card  :page-data="$pageData" >
            <x-mass.confirm-massage/>

            @if(count($Products)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            <th class="TD_20"></th>
                            <th class="TD_150">{{__('admin/def.form_name_ar')}}</th>
                            <th class="TD_150">{{__('admin/def.form_name_en')}}</th>
                            <th class="TD_250">{{__('admin/def.Category')}}</th>

                            <th class="tbutaction TD_50"></th>
                            @can($PrefixRole.'_edit')
                                <th class="tbutaction TD_50"></th>
                                <th class="tbutaction TD_50"></th>
                                <th class="tbutaction TD_50"></th>
                            @endcan
                            @can($PrefixRole.'_delete')
                                <th class="tbutaction TD_50"></th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($Products as $Product)
                            <tr>
                                <td>{{$Product->id}}</td>
                                <td class="tc">{!!  \App\Helpers\AdminHelper::printTableImage($Product,'photo_thum_1') !!} </td>
                                <td>{{ $Product->translate('ar')->name ?? ''}}</td>
                                <td>{{ $Product->translate('en')->name ?? '' }}</td>

                                <td>
                                    @foreach($Product->ProductWithCategory as $Category )
                                        <a href="{{route($PrefixRoute.'.ListCategory',$Category->id)}}">
                                            <span class="cat_table_name">{{$Category->name}}</span>
                                        </a>
                                    @endforeach
                                </td>


                                <td class="tc" >{!! is_active($Product->is_active) !!}</td>
                                @can($PrefixRole.'_edit')
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.Table_list',$Product->id)}}" count="{{$Product->table_data_count}}"  print-lable="{{__('admin/def.table_info')}}"  icon="fas fa-info-circle" :tip="true" /></td>
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.More_Photos',$Product->id)}}"  count="{{$Product->more_photos_count}}" type="morePhoto" :tip="true" /></td>
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.edit',$Product->id)}}" type="edit" :tip="true" /></td>
                                @endcan

                                @can($PrefixRole.'_delete')
                                    <td class=""><x-action-button url="#" id="{{route($PrefixRoute.'.destroy',$Product->id)}}" type="deleteSweet" :tip="true" /></td>
                                @endcan
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
                {{ $Products->links() }}
            @endif
        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-err/>
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
