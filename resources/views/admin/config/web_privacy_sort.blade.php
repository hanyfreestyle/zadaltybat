@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <div class="row mb-3">
            <div class="col-12 text-left">
                <x-action-button  url="{{route('config.webPrivacy.index')}}"  type="back" />
            </div>
        </div>
    </x-html-section>



    <x-html-section>

        <div class="row mt-3">
            @if(count($WebPrivacy)>0)
                <div class="row col-lg-12 hanySort">
                    @foreach($WebPrivacy as $row)
                        <div class="col-lg-12"  data-index="{{$row->id}}" data-position="{{$row->postion}}" >
                            <p class="ListItem-12">{{$row->h1}}</p>
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
    <x-sort-ajax-code url="{{ route('config.webPrivacy.SaveSort') }}"/>

@endpush

