@extends('layouts.home')

@section('title',$setting->title)
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
                        <h1>Rezervasion Steps</h1>
                        <div class="bs-wizard">

                            <div class="col-sm-2 bs-wizard-step active">
                                <div class="text-center bs-wizard-stepnum">Araç Seçimi</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a>
                            </div>

                            <div class="col-sm-2 bs-wizard-step disabled">
                                <div class="text-center bs-wizard-stepnum">Üye Girişi / Yeni Üyelik</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a>
                            </div>

                            <div class="col-sm-2 bs-wizard-step disabled">
                                <div class="text-center bs-wizard-stepnum">Transfer Detayları</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a>
                            </div>

                            <div class="col-sm-2 bs-wizard-step disabled">
                                <div class="text-center bs-wizard-stepnum">Ödeme Bilgileri</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="confirmation_transfer.html" class="bs-wizard-dot"></a>
                            </div>


                            <div class="col-sm-2 bs-wizard-step disabled">
                                <div class="text-center bs-wizard-stepnum">Onay!</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="confirmation_transfer.html" class="bs-wizard-dot"></a>
                            </div>

                        </div>
                    </h1>

                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

@endsection
