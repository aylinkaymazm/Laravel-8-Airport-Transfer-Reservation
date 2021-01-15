@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp


<header id="header">
    <div class="header-top">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <a href="{{route('home')}}"><img src="{{ asset('assets') }}/img/logo.png" alt="" title="" /></a>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="{{route('home')}}">Home</a></li>
                        <li class="menu-active"><a href="{{route('home')}}">About</a></li>
                        <li class="menu-active"><a href="{{route('home')}}">References</a></li>
                        <li class="menu-active"><a href="{{route('home')}}">Contact</a></li>
                        <li class="menu-active"><a href="{{route('home')}}">Profile</a>
                            <img src="{{asset('assets')}}/img/elements/user2.png" width="30"></li>
                        @auth
                            <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                <strong class="text-uppercase">{{Auth::user()->name}}</strong>
                            </div>
                        @endauth
                        @guest
                            <a href="/login">Login</a>/<a href="/register">Join</a>
                        @endguest

                        <ul class="custom-menu">
                            <li><a href="#"><i class="fa fa-user"></i>My Account</a></li>
                            <li><a href="#">my whishlist</a></li>
                            <li><a href="#">compare</a></li>
                            <li><a href="#">checkout</a></li>
                            <li><a href="#">login</a></li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-user-plus"></i> </a>Logout </li>
                        </ul>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </div>
</header>
