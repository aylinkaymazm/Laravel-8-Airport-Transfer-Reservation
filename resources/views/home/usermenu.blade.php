@auth()
    <div class="widget-wrap">
        <div class="col-lg-3 sidebar-widgets">
            <div class="single-sidebar-widget post-category-widget">
                <h4 class="category-title">USER MENU</h4>
                <ul class="cat-list">
                    <li><a href="{{route('myprofile')}}" class="d-flex justify-content-between">Profile</a></li>
                    <li><a href="{{route('user_transfers')}}" class="d-flex justify-content-between">Transfer</a></li>
                    <li><a href="{{route('logout')}}"class="d-flex justify-content-between">LOGOUT</a></li>
                    @php
                    $userRoles = Auth::user()->roles->pluck('name');
                    @endphp
                    @if(!$userRoles->contains('admin'))
                        <li><a href="{{route('admin_home')}}" class="d-flex justify-content-between" target="_blank">Admin Panel</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif
