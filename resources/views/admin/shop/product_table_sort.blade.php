@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <div class="row mb-3">
            <div class="col-9">
                <h1 class="def_h1">{{ $Product->name }}</h1>
            </div>
            <div class="col-3 text-left">
                <x-action-button  url="{{route($PrefixRoute.'.Table_list', $Product->id)}}" type="back" />
            </div>
        </div>
    </x-html-section>

    <x-html-section>

        <div class="row mt-3">
            @if(count($ProductTable)>0)
                <div class="row col-lg-12 hanySort">
                    @foreach($ProductTable as $row)
                        <div class="col-lg-12"  data-index="{{$row->id}}" data-position="{{$row->postion}}" >
                            <p class="ListItem-12">{{$row->attributeName->name}}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="col-lg-12">
                    <x-alert-massage type="nodata" />
                </div>
            @endif
        </div>
    </x-html-section>

@endsection


@push('JsCode')
    <script src="{{defAdminAssets('plugins/bootstrap/js/jquery-ui.min.js')}}"></script>
    <x-sort-ajax-code url="{{ route($PrefixRoute.'.TableSortSave') }}"/>
@endpush
