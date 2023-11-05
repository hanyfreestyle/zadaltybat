<div class="form-group">
    @if($placeholder == false)
        <label class="def_form_label font-weight-light label_{{$dir}} ">{{$label}}
            @if($reqspan)
                <span class="required_Span">*</span>
            @endif
        </label>

    @endif
    <textarea id="{{$inputid}}" class=" form-control dir_{{$dir}} @error($reqname) is-invalid is_invalid_area_{{$dir}} @enderror  {{ $newstyle }}" rows="5"
              name="{{$name}}"
              placeholder="{{$placeholderPrint}}"
    >{{$value}}</textarea>

        @if($googlespan)
            <div id="{{$inputid}}MSG" class="_hide GoolgeTipDiv">
                <div>
                    {{__('google_seo.letter_count')}}
                    <span class="_large _bold" id="Count_{{$inputid}}"></span>
                    <span class="_large _bold"> / {{env('MAX_G_D')}} </span>
                    <span> &nbsp; {{__('google_seo.letter_count_max')}}</span>
                </div>
                @if($googlespan_tip)
                    <div id="{{$inputid}}Tip"></div>
                @endif
            </div>
        @endif

    @if($errors->has($reqname))
        <span class="invalid-feedback" role="alert">
        <strong>{{ str_replace($newreqname, $label, $errors->first($reqname)) }}</strong>
        </span>
    @endif

</div>
