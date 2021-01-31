@extends('layouts.home')

@section('title', 'User Profile')


@section('content')

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Blank Page
                    </h1>
                    <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>
                        <a href="elements.html"> Elements</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <div class="col-lg-2">
        @include('home.usermenu')
    </div>
    <div class="col-md-10">
        @include('profile.show')
    </div>


@endsection
