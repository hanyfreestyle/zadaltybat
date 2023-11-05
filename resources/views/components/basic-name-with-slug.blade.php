@foreach ( config('app.shop_lang') as $key=>$lang )
    <div class="{{$col}} {{getColDir($key)}}">
        <x-trans-input
            label="{{__('admin/def.form_name_'.$key)}} "
            name="{{ $key }}[name]"
            inputid="name_{{ $key }}"
            dir="{{ $key }}"
            reqname="{{ $key }}.name"
            value="{{old($key.'.name',$rowData->translateOrNew($key)->name)}}"
        />

        <x-trans-text-area
            label="{{ __('admin/form.des_'.$key)}} "
            name="{{ $key }}[des]"
            dir="{{ $key }}"
            :reqspan="false"
            reqname="{{ $key }}.des"
            value="{!! old($key.'.des',$rowData->translateOrNew($key)->des) !!}"
        />

        @if($pageData['ViewType'] == 'Add' )
            <x-trans-input
                label="Slug "
                inputid="slug_{{ $key }}"
                name="{{ $key }}[slug]"
                dir="{{ $key }}"
                reqname="{{ $key }}.slug"
                value="{{old($key.'.slug',$rowData->translateOrNew($key)->slug)}}"
                :reqspan="true"
            />
        @elseif($pageData['ViewType'] == 'Edit' and  auth()->user()->can($PrefixRole."_edit_slug"))
            <x-trans-input
                label="Slug "
                inputid="slug_{{ $key }}"
                name="{{ $key }}[slug]"
                dir="{{ $key }}"
                reqname="{{ $key }}.slug"
                value="{{old($key.'.slug',$rowData->translateOrNew($key)->slug)}}"
                :reqspan="true"
            />
        @else
            <input type="hidden" name="{{ $key }}[slug]" value="{{$rowData->translateOrNew($key)->slug}}">
        @endif


    </div>
@endforeach

