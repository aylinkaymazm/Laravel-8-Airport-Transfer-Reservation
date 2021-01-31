@extends('layouts.home')

@section('title','References - ' . $setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)


@section('content')


    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        References
                    </h1>
                    <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>
                        <span class="lnr lnr-arrow-right"></span>  <a href="{{route('references')}}"> References</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-middle">

                    {!!  $setting->references !!}

                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->

@endsection
