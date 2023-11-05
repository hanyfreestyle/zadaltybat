<div class="tab-content dashboard_content">
    <div class="card profileCard">
        <div class="card-header border_top">
            <h3><i class="fas fa-map-signs"></i> {{__('web/user_address.add_new')}}</h3>
        </div>
    </div>

    <form action="{{route('Profile_Address_Save')}}" method="post">
        <div class="row my-3">
            @csrf
            <input type="hidden" name="page_type" value="{{$pageType}}">

            <div class="form-group col-md-7 mb-3">
                <x-form-input
                    label="{{ __('web/user_address.fr_recipient_name') }}"
                    name="recipient_name"
                    :requiredSpan="true"
                    colrow="col-lg-12"
                    value="{{old('recipient_name',$UserProfile->name)}}"
                    inputclass="dir_en"/>
            </div>
            <div class="form-group col-md-5 mb-3">
                <x-form-select-arr-web
                    label="{{ __('web/customers.Profile_form_city') }}"
                    name="city_id" colrow="col-lg-12"
                    :send-arr="$cities"
                    :sendvalue="old('city_id',$UserProfile->city_id)" select-type="normal"
                />
            </div>
            <div class="form-group col-md-6 mb-3">
                <x-form-input
                    label="{{ __('web/customers.reg_form_phone') }}"
                    name="phone"
                    :requiredSpan="true"
                    colrow="col-lg-12"
                    value="{{old('phone',$UserProfile->phone)}}"
                    inputclass="dir_en"/>
            </div>
            <div class="form-group  col-md-6 mb-3">
                <x-form-input
                    label="{{ __('web/user_address.fr_phone_option') }}"
                    name="phone_option"
                    :requiredSpan="false"
                    colrow="col-lg-12"
                    value="{{old('phone_option')}}"
                    inputclass="dir_en"/>
            </div>
            <div class="form-group  col-md-12 mb-3">
                <x-form-textarea
                    label="{{__('web/user_address.fr_address')}}"
                    :requiredSpan="true"
                    name="address"
                    value="{{old('address')}}"
                />
            </div>
            <div class="col-md-12 card_but">
                <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">
                    {{__('web/def.but_add')}}
                </button>
            </div>

        </div>
    </form>

</div>

