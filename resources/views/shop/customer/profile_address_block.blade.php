<div class="card mb-3 mb-lg-0">
    <div class="card-header">
        <h3 class="address_h3">
            {{$address->name}}
            @if($page_type == 'profile')
                @if($address->is_default == true)
                    <span>{{__('web/user_address.fr_is_default')}}</span>
                @else
                    <form action="{{route('Profile_Address_UpdateDefault',$address->uuid)}}" method="post">
                        @csrf
                        <button class="btn btn_not badge-secondary" type="submit">
                            {{__('web/user_address.fr_is_default_set')}}
                        </button>
                    </form>
                @endif
            @endif
        </h3>
    </div>

    <div class="card-body">

        <p class="Addinfo">
            <span>{{__('web/user_address.fr_recipient_name')}} :</span>
            {{$address->recipient_name}}
        </p>

        <p class="Addinfo">
            <span>{{ __('web/customers.Profile_form_city') }} :</span>
            {{$address->city->name}}
        </p>

        <p class="Addinfo">
            <span>{{ __('web/user_address.fr_phone') }} :</span>
            {{$address->phone}}
        </p>

        @if($address->phone_option)
            <p class="Addinfo">
                <span>{{ __('web/user_address.fr_phone_option') }} :</span>
                {{$address->phone_option}}
            </p>
        @endif

        <p class="Addinfo print_address">
            <span>{{__('web/user_address.fr_address')}} :</span>
            <br>
            {!! nl2br($address->address) !!}
        </p>

        @if($page_type == 'profile')
            <p class="card_but">
                <a href="{{route('Profile_Address_Edit',$address->uuid)}}"
                   class="btn btn-sm btn-dark">{{__('admin/form.button_edit')}}</a>
            </p>
        @endif

    </div>
</div>
