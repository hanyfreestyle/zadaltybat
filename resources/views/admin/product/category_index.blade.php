@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>


    <x-html-section>
            <div class="row mb-3">
                <div class="col-12 text-left">
                    <x-action-button url="{{route('webPro.category.AddCatToWeb')}}"  bg="p"  print-lable="{{__('admin/shop.cat_addweb')}}"  icon="fas fa-plus-square"  />
                    <x-action-button url="{{route('webPro.category.CatSort',0)}}"  type="sort"  />
                </div>
            </div>
    </x-html-section>


    <x-html-section>
        <ol class="breadcrumb breadcrumb_menutree">
            <li class="breadcrumb-item"><a href="{{route($PrefixRoute.'.index_Main')}}">{{__('admin/def.main_category')}}</a></li>
            @if($pageData['SubView'])
                @foreach($trees as $tree)
                    <li class="breadcrumb-item"><a href="{{route($PrefixRoute.'.SubCategory',$tree->id)}}">{{ $tree->name }}</a></li>
                @endforeach
            @endif
        </ol>
    </x-html-section>

    <x-html-section>
        <x-ui-card  :page-data="$pageData" >
            <x-mass.confirm-massage/>

            @if(count($Categories)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            <th class="TD_20"></th>
                            <th>{{__('admin/def.form_name_ar')}}</th>
                            <th>{{__('admin/def.form_name_en')}}</th>

                            <th class="tbutaction TD_50"></th>
                            <th class="tbutaction TD_50"></th>

                            @can($PrefixRole.'_edit')
                                <th class="tbutaction TD_50"></th>
                                <th class="tbutaction TD_50"></th>
                            @endcan
                            @can($PrefixRole.'_delete')
                                <th class="tbutaction TD_50"></th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Categories as $Category)
                            <tr>
                                <td>{{$Category->id}}</td>
                                <td class="tc">{!!  \App\Helpers\AdminHelper::printTableImage($Category,'photo_thum_1') !!} </td>
                                <td>{!! \App\Helpers\AdminHelper::print_count_name('ar',$Category,$PrefixRoute.".SubCategory") !!}</td>
                                <td>{!!  \App\Helpers\AdminHelper::print_count_name('en',$Category,$PrefixRoute.".SubCategory") !!}</td>
                                <td class="tc" >{!! is_active($Category->is_active) !!}</td>
                                @can($PrefixRole.'_edit')
                                    <td class="tc">
                                        @if($Category->admin_children_web_count > 0)
                                            <x-action-button url="{{route('webPro.category.CatSort',$Category->id)}}" :tip="true"  type="sort"    />
                                        @endif
                                    </td>
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.Table_list',$Category->id)}}" count="{{$Category->table_data_count}}"  print-lable="{{__('admin/def.table_info')}}"  icon="fas fa-info-circle" :tip="true" /></td>
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.edit',$Category->id)}}" type="edit" :tip="true" /></td>
                                @endcan

                                @can($PrefixRole.'_delete')
                                    @if($Category->children_count == 0)
                                        <td class=""><x-action-button url="#" id="{{route($PrefixRoute.'.destroy',$Category->id)}}" type="deleteSweet" :tip="true" /></td>
                                    @else
                                        <td class=""><x-action-button url="#" id="sometext" type="deleteSweet_err" :tip="true" /></td>
                                    @endif
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
                {{ $Categories->links() }}
            @endif
        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-err/>
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
