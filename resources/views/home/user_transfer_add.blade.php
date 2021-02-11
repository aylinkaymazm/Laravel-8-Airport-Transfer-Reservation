@extends('layouts.home')

@section('title','Transfer Products')

@section('content')

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Transfer
                    </h1>
                    <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>
                        <span class="lnr lnr-arrow-right"></span>Transfer</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <div class="home-about-area section-gap">
        <div class="container">
            <div class="col-lg-3 sidebar-widgets">
                @include('home.usermenu')
            </div>
            <!-- Start home-about Area -->
            <div class="col-lg-9">
                <h3 class="mb-30">Transfer </h3>
                <form action="{{ route('user_transfer_add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="md-9">
                        <input type="text" placeholder="Name" value="{{Auth::user()->name}}"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required="" class="single-input">
                    </div>

                    <div class="md-9">
                        <input type="text" placeholder="Email" value="{{Auth::user()->email}}"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="" class="single-input">
                    </div>
                    <div class="md-9">
                     <select class="form-control" id="select" name="product_id">
                         @foreach ( $datalist as $rs )
                             <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                         @endforeach
                             $datalist = Category::with('children')->get();
                     </select>
                     </div>
                    <div class="input-group-icon mt-6">
                        <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                        <div class="form-select">
                            <select id="select" name="from_destination" class="form-control">
                                <option value="Airport">--From Destination</option>
                                <option value="Airport">Sabiha Gökçen Airport</option>
                                <option value="Airport">Atatürk Airport</option>
                                <option value="address">D100 Bakırköy Marina Girişi</option>
                                <option value="address">Ortaköy ,Yıldız Parkı Çıkışı </option>
                                <option value="address">Koşuyolu Acıbadem</option>
                                <option value="address">Beşiktaş Deniz Kuvvetleri Müzesi</option>
                                <option value="address">Beyoğlu Taksim Parkı Çıkışı </option>
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
                        <input type="text" name="airline" placeholder="Airline" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Airline'" required="" class="single-input-primary">
                    </div>
                    <div class="mt-9">
                        <input type="number" name="flight_number" placeholder="Flight Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Flight Number'" required="" class="single-input-accent">
                    </div>
                    <div class="mt-9">
                        <input type="text" name="flight_arrived_date" placeholder="Flight Arrived Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Flight Arrived Date'" required="" class="single-input-secondary">
                    </div>
                    <div class="mt-9">
                        <input type="text" name="flight_arrived_time" placeholder="Flight Arrived Time" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Flight Arrived Time'" required="" class="single-input-secondary">
                    </div>
                    <div class="mt-9">
                        <input type="text" name="pick_up_time" placeholder="Pick Up Time" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pick Up Time'" required="" class="single-input-secondary">
                    </div>

                    <div class="form-group">
                        <button id="add-button" type="submit"class="btn btn-default btn-lg btn-block text-center text-uppercase">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>

@endsection
