@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />
    <x-html-section>
        <div class="row mb-2">
            <div class="col-9">
                <h1 class="def_h1">{{ $Product->name }}</h1>
            </div>
            <div class="col-3 text-left">
                <x-action-button  url="{{route($PrefixRoute.'.Table_Sort', $Product->id)}}" type="sort" />
                <x-action-button  url="{{route($PrefixRoute.'.edit', $Product->id)}}" type="back" />
            </div>
        </div>
    </x-html-section>

    <x-html-section>
        <div class="card pb-3">
            @if(count($ProductTable)>0)
                <div class="card-body">
                    <table class="table table-hover" >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            <th class="TD_350">{{__('admin/form.title_ar')}}</th>
                            <th class="TD_350">{{__('admin/form.des_ar')}}</th>
                            <th class="TD_350">{{__('admin/form.title_en')}}</th>
                            <th class="TD_350">{{__('admin/form.des_en')}}</th>
                            <th></th>
                            @can($PrefixRole.'_edit')
                                <th class="tbutaction"></th>
                            @endcan
                            @can($PrefixRole.'_delete')
                                <th class="tbutaction"></th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ProductTable as $TableItem)
                            <tr>
                                <td>{{$TableItem->id}}</td>
                                <td>{{optional($TableItem->attributeName->translate('ar'))->name}}</td>
                                <td>{{optional($TableItem->translate('ar'))->des}}</td>
                                <td>{{optional($TableItem->attributeName->translate('en'))->name}}</td>
                                <td>{{optional($TableItem->translate('en'))->des}}</td>
                                <td class="tc" >{!! is_active($TableItem->is_active) !!}</td>
                                @can($PrefixRole.'_edit')
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.Table_edit',$TableItem->id)}}" type="edit" :tip="true" /></td>
                                @endcan
                                @can($PrefixRole.'_delete')
                                    <td class="tc"><x-action-button url="#" id="{{route($PrefixRoute.'.Table_destroy',$TableItem->id)}}" :tip="true" type="deleteSweet"/></td>
                                @endcan
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="col-lg-12 pr-4 pl-4">
                    <x-alert-massage type="nodata" />
                </div>
            @endif
        </div>

        <div class="d-flex justify-content-center">
            @if($ProductTable instanceof \Illuminate\Pagination\AbstractPaginator)
                {{ $ProductTable->links() }}
            @endif
        </div>
    </x-html-section>


    <x-html-section>
        @if(count($AttributeList) > 0)
            <div class="card p-4">
                <form  class="mainForm" action="{{route($PrefixRoute.'.Table_update',0)}}" method="post" >
                    @csrf
                    <x-form-select-arr name="attribute_id" label="{{__('admin/form.title_ar')}}" :sendvalue="old('attribute_id')" :required-span="true" colrow="col-lg-3 " :send-arr="$AttributeList"/>
                    <input type="hidden" name="product_id" value="{{ $Product->id }}">
                    <div class="row">
                        @foreach ( config('app.lang_file') as $key=>$lang )
                            <div class="col-lg-6 {{getColDir($key)}}">

                                <x-trans-text-area
                                    label="{{ __('admin/form.des_'.$key)}} ({{ ($key) }})"
                                    name="{{ $key }}[des]"
                                    dir="{{ $key }}"
                                    reqname="{{ $key }}.des"
                                    value="{{ old($key.'.des') }}"
                                />
                            </div>
                        @endforeach
                    </div>

                    <div class="container-fluid">
                        <x-form-submit text="Add" />
                    </div>
                </form>
            </div>
        @endif
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-js-no-form/>
@endpush

