<div class="form-group">
    @if($placeholder == false)
        <label class="def_form_label col-form-label label_{{$dir}} font-weight-light">{{$label}}
            @if($reqspan)
                <span class="required_Span">*</span>
            @endif
        </label>
    @endif
    <input type="text" id="{{$inputid}}" class="form-control dir_{{$dir}} @error($reqname) is-invalid is_invalid_{{$dir}} @enderror"
           name="{{$name}}"
           placeholder="{{$placeholderPrint}}"
           value="{{$value}}">

        @if($googlespan)
            <div id="{{$inputid}}MSG" class="_hide GoolgeTipDiv">
                <div>
                    {{__('google_seo.letter_count')}}
                    <span class="_large _bold" id="Count_{{$inputid}}"></span>
                    <span class="_large _bold"> / {{env('MAX_G_T')}} </span>
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
