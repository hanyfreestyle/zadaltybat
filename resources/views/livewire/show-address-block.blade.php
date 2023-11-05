<div>

    <div wire:loading>
        <div class="preloader_cart">
            <div class="lds-ellipsis">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    @if(count($addresses) == 1)
        <input type="hidden" name="address_id" value="{{$addresses[0]->uuid}}">
        <div class="dashboard_content mb-4">
            @include('shop.customer.profile_address_block',['page_type'=> 'orders','address'=>$addresses[0]])
        </div>
    @else
        <div class="form-group mb-3">
            <div class="custom_select">
                <select wire:change="changeEvent($event.target.value)" class="form-control address_id" name="address_id" >
                    @foreach($addresses as $address)
                        <option value="{{$address->uuid}}" @if($address->is_default) selected @endif >{{$address->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="dashboard_content mb-4" id="address_id">
            @include('shop.customer.profile_address_block',['page_type'=> 'orders','address'=>$printAddress])
        </div>

{{--        @foreach($addresses as $address)--}}
{{--            @if($address->is_default == true)--}}
{{--                <div class="dashboard_content mb-4" id="address_id">--}}
{{--                    @include('shop.customer.profile_address_block',['page_type'=> 'orders','address'=>$address])--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        @endforeach--}}

    @endif
</div>
