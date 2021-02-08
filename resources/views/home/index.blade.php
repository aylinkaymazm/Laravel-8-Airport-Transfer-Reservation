@extends('layouts.home')
@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')


    @include('home._slider')
    <!-- start banner Area -->
    <section id="home">
        <div class="overlay overlay-bg"><video playsinline autoplay muted loop poster="placeholder.jpg" id="bgvideo" width="x" height="y">
                <source src="{{ asset('assets') }}/img//havaalani-transfer-banner.mp4" type="video/mp4"></video></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-6 col-md-6 ">
                    <h6 class="text-white ">Need a ride? Just rezervasion or call</h6>
                    <h1 class="text-uppercase">
                        551 222 22 22
                    </h1>
                    <p class="pt-10 pb-10 text-white">
                        Enjoy a long holiday in the sun in the Bahamas or go hiking in the Alps. Do you want to go to the airport, let us pick you up wherever you are.
                    </p>
                    <a href="#" class="primary-btn text-uppercase">Call for transfer</a>
                </div>

                {{--                AREA OF TRANSFER INFORMATiON----}}
                <div class="col-lg-4  col-md-6 header-right">
                    <h4 class="pb-30">Book Your Transfer Online!</h4>
                    <form action="{{ route('user_transfer_add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <input class="form-control txt-field" type="text" name="name" value="{{Auth::user()->name}}" placeholder="name">
                            <input class="form-control txt-field" type="email" name="email" value="{{Auth::user()->email}}"  placeholder="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select">
                                <select>
                                    <option value="" disabled selected hidden>From Location</option>
                                    <option value="1">Sabiha Gökçen Airport</option>
                                    <option value="1">Atatürk Airport</option>
                                    <option value="1">D100 Bakırköy Marina Girişi</option>
                                    <option value="1">Ortaköy ,Yıldız Parkı </option>
                                    <option value="1">Koşuyolu Acıbadem </option>
                                    <option value="1">Beşiktaş Deniz Kuvvetleri Müzesi</option>
                                    <option value="1">Beyoğlu Taksim Gezi Parkı Çıkışı </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select2">
                                <select>
                                    <option value="" disabled selected hidden>To Location</option>
                                    <option value="1">Sabiha Gökçen Airport</option>
                                    <option value="1">Atatürk Airport</option>
                                    <option value="1">D100 Bakırköy Marina Girişi</option>
                                    <option value="1">Ortaköy ,Yıldız Parkı </option>
                                    <option value="1">Koşuyolu Acıbadem</option>
                                    <option value="1">Beşiktaş Deniz Kuvvetleri Müzesi</option>
                                    <option value="1">Beyoğlu Taksim Parkı Çıkışı </option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group dates-wrap">
                                <input id="date" class="dates form-control"  placeholder="Date" type="text">
                                <div class="input-group-prepend">
                                    <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group dates-wrap">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                                </div>
                                <input name="ctl00$cntCenter$txtPass" value="1" id="ctl00_cntCenter_txtPass" class="form-control" type="number" min="1" max="46">
                            </div>
                        </div>
                        <div class="form-group">
                            <button id="add-button" type="submit"class="btn btn-default btn-lg btn-block text-center text-uppercase">Make reservation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start services Area -->
    <section class="services-area pb-120">
        <div class="container">
            <div class="row section-title">
                <h1>What Services we offer to our clients</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-car"></span>
                    <a href="#"><h4>Service</h4></a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-briefcase"></span>
                    <a href="#"><h4>Pick-ups</h4></a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-bus"></span>
                    <a href="#"><h4>Event And Wedding Transportation</h4></a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End services Area -->

    <!-- Start image-gallery Area -->
    <section class="image-gallery-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>Car Gallery that we like to share</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
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
                </div>
            @endforeach
        </div>
    </section>
    <!-- End image-gallery Area -->

    <!-- Start reviews Area -->
    <section class="reviews-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>Client’s Reviews</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Cody Hines</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Chad Herrera</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Andre Gonzalez</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Jon Banks</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Landon Houston</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Nelle Wade</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End reviews Area -->

    <!-- Start home-calltoaction Area -->
    <section class="home-calltoaction-area relative">
        <div class="container">
            <div class="overlay overlay-bg"></div>
            <div class="row align-items-center section-gap">
                <div class="col-lg-8">
                    <h1>Experience Great Support</h1>
                    <p>
                        <h3>INSURED TRAVEL</h3>
                        Turkey Our company, offering transportation planning and buying what you need with ease on the Internet,
                        offers its guests the privilege to travel insurance.
                        Reservation and driver information is provided to our customers via SMS.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End home-calltoaction Area -->
            </div>
        </div>
    </section>
    <!-- End latest-blog Area -->
@endsection
