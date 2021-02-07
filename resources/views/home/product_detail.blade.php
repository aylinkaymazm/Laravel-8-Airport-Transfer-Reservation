@extends('layouts.home')

@section('title',$data->title)
@section('description'){{ $data->description }}@endsection
@section('keywords',$data->keywords)


@section('content')

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Select Your Car For Your Transfer
                    </h1>
                    <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>
                        <span class="lnr lnr-arrow-right"></span>  <a> Elements</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->


    <!-- Start image-gallery Area -->
    <section class="image-gallery-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>Select Your Transfering Service</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row">
                @foreach($cars as $rs)
                    <div class="row">
                        <div class="col-lg-4 single-gallery">
                            <a href="{{route('product',['id'=> $rs->id])}}" class="img-gal"><img class="img-fluid" src="{{Storage::url($rs->image)}}" alt=""></a>
                        </div>
                        <div class="col-lg-4 single-gallery">
                            <a href="{{route('product',['id'=> $rs->id])}}" class="img-gal"><img class="img-fluid" src="{{Storage::url($rs->image)}}" alt=""></a>
                        </div>
                        <div class="col-lg-4 single-gallery">
                            <a href="{{route('product',['id'=> $rs->id])}}" class="img-gal"><img class="img-fluid" src="{{Storage::url($rs->image)}}" alt=""></a>
                        </div>
                    </div><a href="{{route('addtotransfer',['id'=> $rs->id])}}" class="text-uppercase primary-btn" href="#">Select Car</a>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End image-gallery Area -->

@endsection
