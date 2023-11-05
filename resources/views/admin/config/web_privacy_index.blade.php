@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>


    <x-html-section>
        <div class="row mb-3">
            <div class="col-12 text-left">
                <x-action-button  url="{{route('config.webPrivacy.Sort')}}" type="sort" />
            </div>
        </div>
    </x-html-section>

    <x-html-section>

        <x-ui-card :page-data="$pageData" >
            <x-mass.confirm-massage/>

            @if(count($rowData)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>H1</th>
                            <th>H1</th>
                            <th class="tbutaction TD_50"></th>
                            @can('webPrivacy_edit')
                                <th class="tbutaction TD_50"></th>
                            @endcan
                            @can('webPrivacy_delete')
                                <th class="tbutaction TD_50"></th>
                            @endcan

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rowData as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->translate('ar')->h1}}</td>
                                <td>{{$row->translate('en')->h1}}</td>
                                <td class="tc" >{!! is_active($row->is_active) !!}</td>
                                @can('webPrivacy_edit')
                                    <td class="text-center"><x-action-button url="{{route('config.webPrivacy.edit',$row->id)}}" type="edit" :tip="true" /></td>
                                @endcan
                                @can('webPrivacy_delete')
                                    <td class=""><x-action-button url="#" id="{{route('config.webPrivacy.destroy',$row->id)}}" type="deleteSweet" :tip="true" /></td>
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
                {{ $rowData->links() }}
            @endif
        </div>
    </x-html-section>


@endsection

@push('JsCode')
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
