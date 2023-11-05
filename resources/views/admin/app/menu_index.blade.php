@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <div class="row mb-3">
            <div class="col-12 text-left">
                <x-action-button url="{{route('App.AppMenuList.create')}}"  type="add" />
                <x-action-button url="{{route('App.AppMenuList.Sort')}}"  type="sort"  />
            </div>
        </div>
    </x-html-section>


    <x-html-section>
        <x-ui-card  :page-data="$pageData" title="{{$pageData['cardTitle']}}" >
            <x-mass.confirm-massage/>
            @if(count($menus)>0)
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            <th class="TD_150">{{__('admin/appMenu.label')}}</th>
                            <th>{{__('admin/appMenu.url')}}</th>
                            <th class="tbutaction TD_50"></th>
                            <th class="tbutaction TD_50"></th>
                            <th class="tbutaction TD_50"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->label}}</td>
                                <td>{{$row->url}}</td>
                                <td class="tc">{!! is_active($row->title) !!}</td>
                                <td class="tc"><x-action-button url="{{route('App.AppMenuList.edit',$row->id)}}" type="edit" :tip="true" /></td>
                                <td class=""><x-action-button url="#" id="{{route('App.AppMenuList.destroy',$row->id)}}" type="deleteSweet" :tip="true" /></td>
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
            {{ $menus->links() }}
        </div>

    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-js-no-form/>
@endpush

