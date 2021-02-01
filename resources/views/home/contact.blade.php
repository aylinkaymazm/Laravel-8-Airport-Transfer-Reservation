@extends('layouts.home')

@section('title','Contact Us - ' . $setting->title)
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
                        Contact Us
                    </h1>
                    <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>
                        <span class="lnr lnr-arrow-right"></span>  <a href="{{route('contact')}}"> Contact US</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
                <div class="col-lg-5 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h3 class="aside-title">Contact INFO</h3>
                            <br>
                            {!!  $setting->contact !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <h3>Contact FORM</h3>
                    <br>
                    <div class="alert-msg" id="success" style="text-align: left;">@include('home.message')</div>
                    <form class="form-area contact-form text-right" name="sentMessage" id="contactForm" action="{{route('sendmessage')}}" method="post">
                        @csrf
                        <div class="row">

                            <input class="form-control" id="name" name="name" placeholder="Enter your name and surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name and surname'"  required="" type="text">

                            <input class="form-control" id="phone" name="phone" placeholder="Enter your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Phone Number'"  required="" type="text">

                            <input class="form-control" id="email" name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"  required="" type="email">

                            <textarea class="form-control" id="message" name="message"  placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>

                            <div class="col-lg-6">
                                <button type="submit" class="genric-btn primary" id="sendMessageButton">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-page Area -->

@endsection
