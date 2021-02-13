@extends('layouts.home')

@section('title','Transfer Rezervasion')


@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Select Transfer Detail
                    </h1>
                    <p class="text-white link-nav"><a href="{{route('home')}}">Home </a><span class="lnr lnr-arrow-right"></span>Select Transfer Detail</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <div class="home-about-area section-gap">
        <div class="container">
            <!-- Start Showing  Area -->
            <div class="col-lg-12">
                <div class="col-md-12">
                    <div class="table-responsive table-responsive-data2">
                        @foreach($datalist as $rs)
                            <tr>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{ Storage::url($rs->image)}}" alt="">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>
                                Car Details
                                <th>
                                <td>{{ $rs->title}}</td>
                                <br>
                                Description
                                <br>
                                <td>{{ $rs->description}}</td>
                                <br>
                                KEYWORDS
                                <br>
                                <td>{{ $rs->keywords}}</td>
                                <br>
                                {{ $rs->quantity}}</td>
                                <br>
                                TAX PAYMENT
                                <br>
                                <td>{{ $rs->tax}}</td>
                                <br>
                                DETAIL
                                <br>
                                <td>{!!  $rs->detail!!}}</td>
                            </tr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection
