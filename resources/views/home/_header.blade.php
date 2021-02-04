@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp


<header id="header">
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
                            <a href="/sepetim"><i class="fa fa-shopping-cart"><br></i>     Rezervasyon</a>
                        </li>

                        <li class="menu-has-children">
                        @auth
                            <li class="menu-has-children"><a href="" class="sf-with-ul" data-toggle="dropdown" aria-expanded="false"><b> {{ Auth::user()->name }} </b><i class="fas fa-sort-alpha-asc"></i></a>
                                <ul style="display: none;">
                                    <li>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @include('home.usermenu')
                                            </div>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="margin-left: 10px;" class="fas fa-user"></i><b> Login / Join </b><i class="fas fa-sort-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                    <a class="dropdown-item" href="{{ route('login') }}"><i style="margin-right: 20px;" class="fas fa-user-lock"></i><b>Login</b></a>
                                    <a class="dropdown-item" href="{{ route('register') }}"><i style="margin-right: 20px;" class="fas fa-user-plus"></i><b>Register</b></a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </div>
</header>
