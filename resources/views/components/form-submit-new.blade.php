<div class="row mt-3">
    <div class="col-12">
        <button
            type="{{$type}}"
            name="{{$name}}"
            class="btn {{$size}} {{$buttonBackGround}} {{$dir}}"
        >
            {{$text}}</button>



        @if($pageData['ViewType']  == 'Add' and $addNew == true )
            <button
                type="{{$type}}"
                name="AddNewSet"
                value="1"
                class="btn mr-3 ml-3 {{$size}} {{$buttonBackGround}} {{$dir}}"
            >
                {{ __('admin/form.button_add_anther') }}</button>
        @endif

    </div>
</div>
