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
            <div class="row align-items-center">
                <div class="col-lg-6 sidebar-widgets">
                    <div class="card-body">
                        @include('home.usermenu')
                    </div>
                </div>
                <!-- Start home-about Area -->
                <div class="col-lg-6 col-md-6">
                    <h3 class="mb-30">Transfer Billing</h3>
                    <form action="{{ route('user_transfer_create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="md-7">
                            <input type="text" name="" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required="" class="single-input">
                        </div>

                        <div class="input-group-icon mt-6">
                            <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select">
                                <select style="display: none;">
                                    <option value="1">To Destination</option>
                                    <option value="1">Dhaka</option>
                                    <option value="1">Dilli</option>
                                    <option value="1">Newyork</option>
                                    <option value="1">Islamabad</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">City</span><ul class="list"><li data-value="1" class="option selected">From Destination</li><li data-value="1" class="option">Dhaka</li><li data-value="1" class="option">Dilli</li><li data-value="1" class="option">Newyork</li><li data-value="1" class="option">Islamabad</li></ul></div>
                            </div>
                        </div>
                        <div class="input-group-icon mt-7">
                            <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select">
                                <select style="display: none;">
                                    <option value="1">From Destination</option>
                                    <option value="1">Dhaka</option>
                                    <option value="1">Dilli</option>
                                    <option value="1">Newyork</option>
                                    <option value="1">Islamabad</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">City</span><ul class="list"><li data-value="1" class="option selected">To Destination</li><li data-value="1" class="option">Dhaka</li><li data-value="1" class="option">Dilli</li><li data-value="1" class="option">Newyork</li><li data-value="1" class="option">Islamabad</li></ul></div>
                            </div>
                        </div>
                        <div class="input-group-icon mt-7">
                            <div class="form-group">
                                <div class="input-group dates-wrap">
                                    <input id="datepicker2" class="dates form-control hasDatepicker" placeholder="Date &amp; time" type="text">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-7">
                            <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
                        </div>
                        <div class="mt-7">
                            <input type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required="" class="single-input-primary">
                        </div>
                        <div class="mt-7">
                            <input type="text" name="first_name" placeholder="Accent color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required="" class="single-input-accent">
                        </div>
                        <div class="mt-7">
                            <input type="text" name="first_name" placeholder="Secondary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required="" class="single-input-secondary">
                        </div>
                    </form>
                </div>

                <div class="section-top-border">
                    <h3 class="mb-80">Transfer</h3>
                    <div class="progress-table-wrap">
                        <div class="progress-table">
                            <div class="table-head">
                                <div class="visit">Transfer</div>
                                <div class="visit">Price</div>
                                <div class="visit">To Destination</div>
                                <div class="visit">From Destination</div>
                                <div class="visit">Date</div>
                                <div class="visit">Time</div>
                                <div class="visit">Person Number</div>
                                <div class="visit">Note</div>
                                <div class="visit">Status</div>
                            </div>
                            <div class="table-row">
                                <div class="visit">Transfer</div>
                                <div class="visit">{{$total}}</div>
                                <div class="visit">ToDestination</div>
                                <div class="visit">FromDestination</div>
                                <div class="visit">Date</div>
                                <div class="visit">Time</div>
                                <div class="visit">Person Number</div>
                                <div class="visit">Note</div>
                                <div class="visit">Status</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End home-about Area -->

    <!-- full Title -->


    <div class="blog-main">
        <div class="container">
            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-8">
                    <form action="{{ route('user_transfer_create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label mb-1">Title</label>
                            <input name="title" type="text" class="form-control" value="" data-val="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Type</label>
                            <select name="type" id="select" class="form-control">
                                <option value="Menu">Menu</option>
                                <option value="Announcement">Announcement</option>
                                <option value="News">News</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Keywords</label>
                            <input name="keywords" type="text" class="form-control" value="" data-val="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Description</label>
                            <input name="description" type="text" class="form-control" value="" data-val="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Detail</label>
                            <textarea name="detail" id="detail"></textarea>
                            <script>
                                CKEDITOR.replace( 'detail' );
                            </script>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Image</label>
                            <input name="image" type="file" class="form-control" value="" data-val="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Slug</label>
                            <input name="slug" type="text" class="form-control" value="" data-val="true">
                        </div>
                        <div>
                            <button id="add-button" type="submit" class="btn btn-primary">
                                <i class="fa fa-plus-square"></i>&nbsp;
                                <span>Add a new Content</span>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- Sidebar Widgets Column -->
                <!-- Side Widget -->


            </div>
        </div>
    </div>
    <!-- /.container -->
    </div>




@endsection
