@extends('admin.layouts.app')

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-ui-card :page-data="$pageData">
        <x-mass.confirm-massage />
        <form action="{{route('config.defPhoto.storeUpdate',intval($rowData->id))}}" method="post" enctype="multipart/form-data">
            @csrf

            @if(config('app.development'))
                <x-form-input label="# CatId" name="cat_id" :requiredSpan="true" colrow="col-lg-3"
                              value="{{old('cat_id',$rowData->cat_id)}}" inputclass="dir_en"/>
            @else
                <input type="hidden" value="{{$rowData->cat_id}}" name="cat_id">
               <h1> {{$rowData->cat_id}}</h1>
            @endif


            <hr>
            <x-form-upload-file view-type="{{$pageData['ViewType']}}" fild-name="photo" :row-data="$rowData" :multiple="false" />

            <div class="container-fluid mb-5 mt-2">
                <x-form-submit text="{{$pageData['ViewType']}}" />
            </div>
        </form>
    </x-ui-card>
@endsection
