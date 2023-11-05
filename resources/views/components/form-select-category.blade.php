<div class="{{$colrow}}">
    <div class="form-group">
        <label class="def_form_label col-form-label font-weight-light">
            {{$label}}
            @if($requiredSpan)
                <span class="required_Span">*</span>
            @endif
        </label>

        <select class="form-control select2 custom-select is-invalid " id="{{$name}}" name="{{$name}}" style="width: 100%;" >
            @if($forcategory == 'true')
                <option value="0"  @if ( $sendvalue == '0' or $sendvalue == null ) selected @endif >{{__('admin/def.main_category_form')}}</option>
            @else
                <option value=""> {{ $label }}</option>
            @endif

            @foreach ($sendArr as  $category)
                <option value="{{ $category->id }}" @if ($category->id == $sendvalue) selected @endif>{{ $category->$printValName }}</option>
                @if (count($category->children) > 0)
                    @include('admin.form_loop.subcategories', ['subcategories' => $category->children, 'parent' => $category->name])
                @endif
            @endforeach
       </select>
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ \App\Helpers\AdminHelper::error($message,$name,$label) }}</strong>
        </span>
        @enderror
    </div>

</div>
