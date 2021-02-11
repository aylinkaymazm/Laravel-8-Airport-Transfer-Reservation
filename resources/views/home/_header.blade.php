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

                    <li class="menu-active"><a href="" class="sf-with-ul">Categories</a>
                        <select class="form-control" id="select" name="product_id">
                            @foreach ( $datalist as $rs )
                                <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                            @endforeach
                        </select>
                    </li>

                    <li class="hidden-sm hidden-xs el-shopping-cart">
                        <a href="{{ route('user_transfers') }}"><i class="fa fa-shopping-cart"><br></i>     Rezervasyon</a>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
    <div>
        <li class="dropdown"
        @auth
            <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                <a href="#"><strong class="text-uppercase">{{Auth::user()->name}}
                        {{Auth::user()->roles->pluck('name')}}</strong></a>
                <li class="nav-item"><a href="{{route('myprofile')}}" class="nav-link"  title="Login">My Account</a></li>
                <li class="nav-item"><a href="{{route('logout')}}" class="nav-link"  title="Logout">LogOut</a></li>
                </li>
            </div>
        @endauth
        @guest
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link"  title="Login">LOGİN</a></li>
            <li class="nav-item"><a href="{{route('register')}}" class="nav-link"  title="Register">Sign In</a></li>
        @endguest
    </div>

</header>
