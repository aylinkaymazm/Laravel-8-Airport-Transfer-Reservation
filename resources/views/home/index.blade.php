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

                {{--                AREA OF TRANSFER INFORMATION----}}
                <div class="col-lg-4  col-md-6 header-right">
                    <h4 class="pb-30">Book Your Transfer Online!</h4>
                    <form action="{{ route('user_transfer_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('home.message')
                        <div class="from-group">
                            <input class="form-control txt-field" type="text" name="name" placeholder="name">
                            <input class="form-control txt-field" type="email" name="email"   placeholder="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
                            <div class="md-9">
                                <select class="form-control" id="select" name="category_id">
                                    @foreach ( $datalist as $rs )
                                        <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="input-group-icon mt-6">
                                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                <div class="form-select">
                                    <select id="select" name="from_destination" class="form-control">
                                        <option value="Airport">--From Destination</option>
                                        <option value="Sabiha Gökçen Airport">Sabiha Gökçen Airport</option>
                                        <option value="Atatürk Airport">Atatürk Airport</option>
                                        <option value="D100 Bakırköy Marina Girişi">D100 Bakırköy Marina Girişi</option>
                                        <option value="Ortaköy ,Yıldız Parkı Çıkışı ">Ortaköy ,Yıldız Parkı Çıkışı </option>
                                        <option value="Koşuyolu Acıbadem">Koşuyolu Acıbadem</option>
                                        <option value="Beşiktaş Deniz Kuvvetleri Müzesi">Beşiktaş Deniz Kuvvetleri Müzesi</option>
                                        <option value="Beyoğlu Taksim Parkı Çıkışı">Beyoğlu Taksim Parkı Çıkışı </option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group-icon mt-6">
                                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                <div class="form-select" >
                                    <select id="select" name="to_destination" class="form-control">
                                        <option value="address">--To Destination</option>
                                        <option value="address">Sabiha Gökçen Airport</option>
                                        <option value="address">Atatürk Airport</option>
                                        <option value="address">D100 Bakırköy Marina Girişi</option>
                                        <option value="address">Ortaköy ,Yıldız Parkı Çıkışı </option>
                                        <option value="address">Koşuyolu Acıbadem</option>
                                        <option value="address">Beşiktaş Deniz Kuvvetleri Müzesi</option>
                                        <option value="address">Beyoğlu Taksim Parkı Çıkışı </option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-9">
                                <input type="text" name="airline" placeholder="Airline" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Airline'" required="" class="form-control txt-field">
                            </div>
                            <div class="mt-9">
                                <input type="number" name="flight_number" placeholder="Flight Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Flight Number'" required="" class="form-control txt-field">
                            </div>
                            <div class="mt-9">
                                <input type="text" name="flight_arrived_date" placeholder="Flight Arrived Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Flight Arrived Date'" required="" class="form-control txt-field">
                            </div>
                            <div class="mt-9">
                                <input type="text" name="flight_arrived_time" placeholder="Flight Arrived Time" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Flight Arrived Time'" required="" class="form-control txt-field">
                            </div>
                            <div class="mt-9">
                                <input type="text" name="pick_up_time" placeholder="Pick Up Time" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pick Up Time'" required="" class="form-control txt-field">
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
                        <p>Our fleets consists of vehicles for the needs of our passengers.</p>
                    </div>
                    <div class="col-lg-4 single-gallery">
                        <a href="{{route('product',['id'=> $rs->id])}}" class="img-gal"><img class="img-fluid" src="{{Storage::url($rs->image)}}" alt=""></a>
                        <p>Our fleets consists of vehicles for the needs of our passengers.</p>
                    </div>
                    <div class="col-lg-4 single-gallery">
                        <a href="{{route('product',['id'=> $rs->id])}}" class="img-gal"><img class="img-fluid" src="{{Storage::url($rs->image)}}" alt=""></a>
                        <p>Our fleets consists of vehicles for the needs of our passengers.</p>
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
    <!-- End latest-blog Area -->
@endsection
