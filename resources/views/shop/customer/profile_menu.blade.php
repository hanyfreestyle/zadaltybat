<div class="dashboard_menu">
    <ul class="nav nav-tabs flex-column" role="tablist">
        <li class="nav-item">
            <a href="{{route('Customer_Profile')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'profile' ) active @endif">
                <i class="fas fa-id-card"></i> {{__('web/customers.Profile_AccountDetails')}}
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('Profile_OrdersList')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'OrdersList' ) active @endif">
                <i class="fas fa-shopping-cart"></i> {{__('web/customers.Profile_OrdersList')}}
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('Profile_Address')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'Address' ) active @endif">
                <i class="fas fa-map-signs"></i> {{__('web/customers.Profile_Address')}}
            </a>
        </li>
        <li class="nav-item">
             <a href="{{route('Profile_ChangePassword')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'ChangePassword' ) active @endif">
                <i class="fas fa-key"></i> {{__('web/customers.Profile_ChangePassword')}}
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('Customer_logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  >
                <i class="fas fa-unlock-alt"></i> {{__('web/customers.Profile_logout')}}
            </a>
        </li>
        <form id="logout-form" action="{{ route('Customer_logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </ul>
</div>
