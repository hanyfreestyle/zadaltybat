<form class="mainForm pb-0" action="{{route('config.model.update')}}" method="post">
    @csrf
    <input type="hidden" value="{{$modelname}}" name="model_id">
    <div class="row">

        <x-form-input label="{{__('admin/config/settings.set_perpage')}}" name="{{$modelname}}_perpage" :requiredSpan="true" colrow="col-lg-3" dir="ar"
                      value="{{old($modelname.'_perpage',\App\Helpers\AdminHelper::arrIsset($modelSettings,$modelname.'_perpage',10))}}" inputclass="dir_ar" />

        @if($datatable)
            <x-form-select-arr  label="{{__('admin/config/settings.set_dataTable')}}" name="{{$modelname}}_datatable" colrow="col-lg-3"
                                sendvalue="{{old($modelname.'_datatable',\App\Helpers\AdminHelper::arrIsset($modelSettings,$modelname.'_datatable',1))}}" select-type="selActive"/>
        @else
            <input type="hidden" value="0" name="{{$modelname}}_datatable">
        @endif


        @if($editor)
            <x-form-select-arr  label="{{ __('admin/config/settings.set_editor') }}" name="{{$modelname}}_editor" colrow="col-lg-3"
                                sendvalue="{{old($modelname.'_editor',\App\Helpers\AdminHelper::arrIsset($modelSettings,$modelname.'_editor',0))}}" select-type="selActive"/>
        @else
            <input type="hidden" value="0" name="{{$modelname}}_editor">
        @endif




        @php
            if($orderbyPostion == false){
                    unset($OrderByArr[5]);
            }

            if($orderbyDate == false){
                  unset($OrderByArr[6]);
                  unset($OrderByArr[7]);
            }
        @endphp
        @if($orderby)
            <x-form-select-arr  label="{{__('admin/config/settings.set_orderBy')}}" name="{{$modelname}}_orderby" colrow="col-lg-3" :send-arr="$OrderByArr"
                                sendvalue="{{old($modelname.'_orderby',\App\Helpers\AdminHelper::arrIsset($modelSettings,$modelname.'_orderby',0))}}" select-type="normal"/>
        @else
            <input type="hidden" value="{{$orderbyDef}}" name="{{$modelname}}_orderby">
        @endif

        @if($filterid)
            <x-form-select-arr  label="{{__('admin/def.form_selectFilterLable')}}" name="{{$modelname}}_filterid" colrow="col-lg-3"
                                sendvalue="{{old($modelname.'_filterid',\App\Helpers\AdminHelper::arrIsset($modelSettings,$modelname.'_filterid',0))}}" :send-arr="$filterTypes"/>
        @endif

        @if($morePhotoFilterid)
            <x-form-select-arr  label="{{__('admin/def.form_selectFilterMorePhoto')}}" name="{{$modelname}}_morephoto_filterid" colrow="col-lg-3"
                                sendvalue="{{old($modelname.'_morephoto_filterid',\App\Helpers\AdminHelper::arrIsset($modelSettings,$modelname.'_morephoto_filterid',0))}}" :send-arr="$filterTypes"/>
        @endif


{{--        @if($icon)--}}
{{--            <x-form-select-arr  label="Icon" name="{{$modelname}}_icon_filterid" colrow="col-lg-3"--}}
{{--                                sendvalue="{{old($modelname.'_icon_filterid',\App\Helpers\AdminHelper::arrIsset($modelSettings,$modelname.'_icon_filterid',0))}}" :send-arr="$filterTypes"/>--}}
{{--        @endif--}}



        {{$slot}}
    </div>
    <div class="container-fluid"><x-form-submit text="Edit" /></div>
</form>

