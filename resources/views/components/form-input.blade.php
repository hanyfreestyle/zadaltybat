<div class="form-group {{$colrow}} {{($horizontalLabel) ? 'row' : '' }} {{$topclass}}">
    @if ($label != '')
        <div class="{{($horizontalLabel) ? 'col-sm-6' : '' }}">
            <label class="def_form_label col-form-label label_{{$dir}} font-weight-light {{($horizontalLabel) ? 'font-weight-normal' : '' }}" for="{{$id}}">{{$label}}
                @if($requiredSpan)
                    <span class="required_Span">*</span>
                @endif
            </label>
        </div>
    @endif
    <div class="{{($horizontalLabel) ? 'col-sm-6' : '' }}">
        <input type="{{$type}}" class="{{$inputclass}} form-control @error($name) is-invalid @enderror"
               id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder}}"
               @if(!is_null($step))
               step="{{$step}}"
               @endif
               @if(!is_null($max))
               max="{{$max}}"
               @endif
               @if(!is_null($maxlength))
               maxlength="{{$maxlength}}"
               @endif
               @if(!is_null($pattern))
               pattern="{{$pattern}}"
               @endif
               value="{{$value}}"
               {{($required) ? 'required' : '' }}
               {{($disabled) ? 'disabled' : '' }}
               dir="auto"
               @if($type == 'password' and $passwordEdit == true)
               autocomplete="off" readonly onfocus="this.removeAttribute('readonly');"
               @endif
        >
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ \App\Helpers\AdminHelper::error($message,$name,$label) }}</strong>
        </span>
        @enderror

    </div>
</div>


