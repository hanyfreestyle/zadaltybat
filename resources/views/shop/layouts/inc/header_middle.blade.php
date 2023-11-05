<div class="middle-header dark_skin">
    <div class="container">
        <div class="nav_block">
            <a class="navbar-brand" href="{{route('Shop_HomePage')}}">
                <img class="logo_dark header_logo" src="{{getDefPhotoPath($DefPhotoList,'dark-logo')}}" alt="logo" />
            </a>
            <div class="contact_phone order-md-last forcDir">
                <i class="linearicons-phone-wave"></i>
                <span class="header_phone_number">{{$WebConfig->phone_text}}</span>
            </div>

            @if($PageView['top_search_view'])
                <div class="product_search_form">
                    <form>
                        <div class="input-group">
                            @if($PageView['top_search_view_cat'])
                                <div class="input-group-prepend">
                                    <div class="custom_select">
                                        <select class="first_null not_chosen">
                                            <option value="">{{__('web/def.All_Category')}}</option>
                                            <option value="Dresses">Dresses</option>
                                            <option value="Shirt-Tops">Shirt &amp; Tops</option>
                                            <option value="T-Shirt">T-Shirt</option>
                                            <option value="Pents">Pents</option>
                                            <option value="Jeans">Jeans</option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            <input class="form-control" placeholder="{{__('web/header.Search_Product')}}" type="text">
                            <button type="submit" class="search_btn"><i class="linearicons-magnifier"></i></button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
