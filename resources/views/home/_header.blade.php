@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp


<header id="header" xmlns="http://www.w3.org/1999/html">
    <div class="top-bar">
        <div class="container">
            <div class="col-lg-12">
                <div class="contact-details">
                    <li>{{ $setting->address }}     {{ $setting->phone }}</li>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">

            <a href="{{route('home')}}"><img src="{{ asset('assets') }}/img/logo2.png" style="height: 50px;"/></a>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{route('home')}}">Home</a></li>
                    <li class="menu-active"><a href="{{route('aboutus')}}">About US</a></li>
                    <li class="menu-active"><a href="{{route('references')}}">References</a></li>
                    <li class="menu-active"><a href="{{route('contact')}}">Contact</a></li>

                    <li class="menu-has-children"><a href="" class="sf-with-ul">Service</a>
                        <ul style="display: none;">
                            <li><a href="blog-home.html">Transfer Zones</a></li>
                            <li><a href="blog-single.html">Airport Tranfers</a></li>
                            <li><a href="blog-single.html">Transfer Vehicles</a></li>
                            <li><a href="blog-single.html">Corporate Sales</a></li>
                            <li class="menu-has-children"><a href="" class="sf-with-ul">International Flights Transfer</a>
                                <ul style="display: none;">
                                    <li><a href="#">John F. Kennedy Airport</a></li>
                                    <li><a href="#">Barcelona Airport</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-children"><a href="" class="sf-with-ul">Domestic Flights Transfer</a>
                                <ul style="display: none;">
                                    <li><a href="#">Atatürk Airport</a></li>
                                    <li><a href="#">Sabiha Gökçen Airport</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="hidden-sm hidden-xs el-shopping-cart">
                        <a href="{{ route('user_transfer_store') }}"><i class="fa fa-shopping-cart"><br></i>     Rezervasyon</a>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
    <div>
        <li class="dropdown"
        @auth
            <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                <a href="#"><strong class="text-uppercase">{{Auth::user()->name}}</strong></a>
            </div>
            <li class="nav-item"><a href="{{route('myprofile')}}" class="nav-link"  title="Login">My Account</a></li>
            <li class="nav-item"><a href="{{route('logout')}}" class="nav-link"  title="Logout">LogOut</a></li>
            </li>
        @endauth
        @guest
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link"  title="Login">LOGİN</a></li>
            <li class="nav-item"><a href="{{route('register')}}" class="nav-link"  title="Register">Sign In</a></li>
        @endguest
    </div>

    </div>
</header>
