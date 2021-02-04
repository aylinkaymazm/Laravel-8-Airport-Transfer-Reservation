{{--
<section class="banner-area relative" id="home">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url({{ Storage::url($slider->first()->image) }})">
                        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 803px;">
                            <h3>{{ $slider->first()->title }}</h3>
                            --}}
{{--                    <a href="{{ route('product', ['id'=>$slider->first()->id, 'slug'=>$slider->first()->slug]) }}">--}}{{--

                            --}}
{{--                        <button class="btn btn-dark">Go to Content</button>--}}{{--

                            --}}
{{--                    </a>--}}{{--

                        </div>
                    </div>
                    @foreach($slider->skip(1) as $rs)
                        <div class="carousel-item" style="background-image: url({{ Storage::url($rs->image) }})">
                            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px;">
                                <h1 class="text-uppercase">
                                    {{$rs->title}}
                                </h1>
                                --}}
{{--  buttonlar

                            deneme1    <a href="{{ route('product', ['id'=>$slider->first()->id, 'slug'=>$slider->first()->slug]) }}" class="primary-btn text-uppercase">
                                    <button>Call for transfer</button></a>

                                   deneme 2
                                 <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="primary-btn text-uppercase">Call for transfer</a>--}}{{--


                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

--}}
{{--
<div class="aylin-slider">
    {% for rs in slider %}

    <div class="slide ">
        <a href="/cars/{{ rs.id }}"> <img src="{{ asset('uploads/images/') }}{{ rs.image }}" alt=""></a>
    </div>

    {% endfor %}
<!--
    <div class="slide">
        <img src="{{ asset('assets/img/limousine.png') }}" alt="">
    </div>
    <div class="slide">
        <img src="{{ asset('assets/img/minibus.png') }}" alt="">
    </div>
    <div class="slide">
        <img src="{{ asset('assets/img/suv.png') }}" alt="">
    </div>
    <div class="slide">
        <img src="{{ asset('assets/img/van.png') }}" alt="">
    </div>
    <div class="slide">
        <img src="{{ asset('assets/img/economy.png') }}" alt="">
    </div>
    !-->
</div>
--}}


