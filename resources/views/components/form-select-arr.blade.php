<div class="{{$colrow}}">
    <div class="form-group">
        <label class="def_form_label col-form-label font-weight-light">
            {{$label}}
            @if($requiredSpan)
                <span class="required_Span">*</span>
            @endif
        </label>

        <select class="form-control select2 custom-select is-invalid" id="{{$name}}" name="{{$name}}" style="width: 100%;" >
            <option value="">{{$label}}</option>

            @if($selectType == 'normal')
                @foreach ($sendArr as  $key => $value)
                    <option value="{{ $value['id'] }}" @if ($value['id'] == $sendvalue) selected @endif>{{ $value[$printValName] }}</option>
                @endforeach
            @elseif($selectType == 'selActive')
                <option value="0" @if ($sendvalue == 0 ) selected @endif>{{__('admin/def.status_unactive')}}</option>
                <option value="1" @if ($sendvalue == 1) selected @endif>{{__('admin/def.status_active')}}</option>

            @elseif($selectType == 'order_state')
                <option value="1" @if ($sendvalue == 1 ) selected @endif>قبول الطلب</option>
                <option value="2" @if ($sendvalue == 2) selected @endif>رفض الطلب</option>
            @elseif($selectType == 'file')
                @foreach($sendArr as $file)
                    <option value="{{$file}}" @if ($file == $sendvalue) selected @endif>{{pathinfo($file, PATHINFO_BASENAME)}}</option>
                @endforeach
            @endif



        </select>
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ \App\Helpers\AdminHelper::error($message,$name,$label) }}</strong>
        </span>
        @enderror
    </div>

</div>
