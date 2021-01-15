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
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> Elements</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <div class="button-group-area mt-40">
        <a href="#" class="genric-btn default circle arrow">Default<span class="lnr lnr-arrow-right"></span></a>
        <a href="#" class="genric-btn primary circle arrow">Primary<span class="lnr lnr-arrow-right"></span></a>
        <a href="#" class="genric-btn success circle arrow">Success<span class="lnr lnr-arrow-right"></span></a>
        <a href="#" class="genric-btn info circle arrow">Info<span class="lnr lnr-arrow-right"></span></a>
        <a href="#" class="genric-btn warning circle arrow">Warning<span class="lnr lnr-arrow-right"></span></a>
        <a href="#" class="genric-btn danger circle arrow">Danger<span class="lnr lnr-arrow-right"></span></a>
    </div>
@endsection
