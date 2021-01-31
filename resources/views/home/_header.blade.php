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
                        <li class="menu-has-children" ><a href="{{route('home')}}">Profile</a>
                            <img src="{{asset('assets')}}/img/elements/user2.png" width="30"></li>
                        @auth
                            <p align="right"><strong class="text-uppercase">{{Auth::user()->name}}</strong></p>
                        @endauth
                        @guest
                            <li class="menu-has-children"><a href="/login" class="sf-with-ul">Login</a>/<a href="/register" class="sf-with-ul">Join</a>
                                <ul style="display: none;">
                                    <li><a href="{{route('myprofile')}}">My Account</a></li>
                                    <li><a href="#">my whishlist</a></li>
                                    <li><a href="#">compare</a></li>
                                    <li><a href="#">checkout</a></li>
                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
</header>
