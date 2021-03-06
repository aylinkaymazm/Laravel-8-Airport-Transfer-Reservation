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
                        Transfer Rezervasion
                    </h1>
                    <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>
                        <span class="lnr lnr-arrow-right"></span>Transfer Rezervasion</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <div class="sidebar-widgets">
        @include('home.usermenu')
    </div>
    <div class="home-about-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <!-- Start Showing  Area -->
                <div class="col-lg-12">
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Note</th>
                                <th>Car Selection</th>
                                <th>From Destination</th>
                                <th>To Destination</th>
                                <th>Airline Company</th>
                                <th>Flight Number</th>
                                <th>Flight Arrived Date</th>
                                <th>Flight Arrived Time</th>
                                <th>Pick Up Time</th>
                                <th>STATUS</th>
                                <th style="width: 5px" colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($datalist as $rs)
                                <tr>
                                    <td>{{$rs ->id}}</td>
                                    <td>{{Auth::user()->name}}</td>
                                    <td>{{Auth::user()->email}}</td>
                                    <td>{{ $rs->note }}</td>
                                    <td>
                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}
                                    </td>
                                    <td>{{ $rs->from_destination }}</td>
                                    <td>{{ $rs->to_destination }}</td>
                                    <td>{{ $rs->airline }}</td>
                                    <td>{{ $rs->flight_number }}</td>
                                    <td>{{ $rs->flight_arrived_date }}</td>
                                    <td>{{ $rs->flight_arrived_time }}</td>
                                    <td>{{ $rs->pick_up_time }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{ route('user_transfer_edit', ['id'=>$rs->id]) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="table-data-feature">
                                            <a href="{{route('user_transfer_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure?')">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection
