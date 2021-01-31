@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp


<header id="header">
    <div class="header-top">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">

                <a href="{{route('home')}}"><img src="{{ asset('assets') }}/img/logo.png"/></a>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="{{route('home')}}">Home</a></li>
                        <li class="menu-active"><a href="{{route('aboutus')}}">About US</a></li>
                        <li class="menu-active"><a href="{{route('references')}}">References</a></li>
                        <li class="menu-active"><a href="{{route('contact')}}">Contact</a></li>
                        <li class="hidden-sm hidden-xs el-shopping-cart">
                            <a href="/sepetim"><i class="fa fa-shopping-cart"><br></i>     Rezervasyon</a>
                        </li>
                        <li class="menu-has-children" ><a href="" class="sf-with-ul">Profile</a>
                        @auth
                            <p><strong class="text-uppercase">{{Auth::user()->name}}</strong></p>
                        @endauth
                        @guest
                                <a href="/login" class="sf-with-ul">Login</a>/<a href="/register" class="sf-with-ul">Join</a>
                                <ul style="display: none;">
                                    <li><a href="{{route('myprofile')}}">My Account</a></li>
                                    <li><a href="#">my whishlist</a></li>
                                    <li><a href="#">compare</a></li>
                                    <li><a href="#">checkout</a></li>
                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                </ul>

                        @endguest
                        </li>
                    </ul>

                </nav><!-- #nav-menu-container -->
            </div>

        </div>
    </div>
</header>
