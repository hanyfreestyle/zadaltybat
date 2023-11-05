<div class="{{$colrow}}">
    <div class="form-group">
        <label class="def_form_label col-form-label font-weight-light">
            {{$label}}
            @if($requiredSpan)
                <span class="required_Span">*</span>
            @endif
        </label>
        <select class="select2 is-invalid" multiple="multiple" name="{{$name}}[]" data-placeholder="" style="width: 100%;">
            {{$slot}}
        </select>
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ \App\Helpers\AdminHelper::error($message,$name,$label) }}</strong>
        </span>
        @enderror
    </div>

</div>





