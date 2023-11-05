<div class="row">
    <input value="{{env('MIN_G_T')}}" id="minT"  type="hidden" >
    <input value="{{env('MAX_G_T')}}" id="maxT"  type="hidden" >
    <input value="{{env('MIN_G_D')}}" id="minD"  type="hidden" >
    <input value="{{env('MAX_G_D')}}" id="maxD"  type="hidden" >

    @foreach ( config('app.lang_file') as $key=>$lang )
        <div class="col-lg-6 {{getColDir($key)}}">


            <x-trans-input :placeholder="$placeholder"
                label="{{__('admin/form.meta_g_title_'.$key)}} ({{ ($key) }})"
                name="{{ $key }}[g_title]"
                dir="{{ $key }}"
                reqname="{{ $key }}.g_title"
                googlespan="true"
                inputid="g_title_{{ $key }}"
                value="{!! old($key.'.g_title',$oldData->translateOrNew($key)->g_title) !!}"
            />
            <x-trans-text-area :placeholder="$placeholder"
                label="{{__('admin/form.meta_g_des_'.$key)}} ({{ ($key) }})"
                name="{{ $key }}[g_des]"
                dir="{{ $key }}"
                reqname="{{ $key }}.g_des"
                googlespan="true"
                inputid="g_des_{{ $key }}"
                value="{!! old($key.'.g_des',$oldData->translateOrNew($key)->g_des) !!}"
            />


            @if($slug == true)
                @if($pageData['ViewType'] == 'Add' )
                    <x-trans-input
                        :placeholder="$placeholder"
                        label="Slug ({{ ($key) }})"
                        inputid="slug_{{ $key }}"
                        name="{{ $key }}[slug]"
                        dir="{{ $key }}"
                        reqname="{{ $key }}.slug"
                        value="{{old($key.'.slug',$oldData->translateOrNew($key)->slug)}}"
                        :reqspan="true"
                    />
                @elseif($pageData['ViewType'] == 'Edit' and  auth()->user()->can($PrefixRole."_edit_slug"))
                    <x-trans-input
                        :placeholder="$placeholder"
                        label="Slug ({{ ($key) }})"
                        inputid="slug_{{ $key }}"
                        name="{{ $key }}[slug]"
                        dir="{{ $key }}"
                        reqname="{{ $key }}.slug"
                        value="{{old($key.'.slug',$oldData->translateOrNew($key)->slug)}}"
                        :reqspan="true"
                    />
                @else
                    <input type="hidden" name="{{ $key }}[slug]" value="{{$oldData->translateOrNew($key)->slug}}">
                @endif

            @endif

            @if($bodyH1 == true)
                <x-trans-input
                    :placeholder="$placeholder"
                    label="{{__('admin/form.meta_bodyH1_'.$key)}} ({{ ($key) }})"
                    name="{{ $key }}[body_h1]"
                    dir="{{ $key }}"
                    reqname="{{ $key }}.body_h1"
                    value="{{old($key.'.body_h1',$oldData->translateOrNew($key)->body_h1)}}"
                    :reqspan="false"
                />
            @endif


            @if($breadcrumb == true)
                <x-trans-input
                    :placeholder="$placeholder"
                    label="{{__('admin/form.meta_breadcrumb_'.$key)}} ({{ ($key) }})"
                    name="{{ $key }}[breadcrumb]"
                    dir="{{ $key }}"
                    reqname="{{ $key }}.breadcrumb"
                    value="{{old($key.'.breadcrumb',$oldData->translateOrNew($key)->breadcrumb)}}"
                    :reqspan="false"
                />
            @endif


        </div>
    @endforeach
</div>
