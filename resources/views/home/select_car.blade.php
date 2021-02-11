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

            <div id="ctl00_cntCenter_rptSonuc_ctl01_pnlCarList">
                <div id="search-card">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-5">
                            <img id="ctl00_cntCenter_rptSonuc_ctl01_imgVc" class="img-fluid" src="/images/3.png">
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-7">
                            <h4 id="search-card-title">
                                Minibüs(3-6)</h4>
                            <p id="search-card-subtitle">
                                Mercedes Vito Vb.
                            </p>
                            <ul id="search-card-specials">
                                <li><i class="fas fa-user-circle"></i>
                                    6 Kişi</li>
                                <li><i class="fas fa-briefcase"></i>
                                    5 Bagaj</li>
                                <li style="color: #1275fc"><i class="far fa-check-circle"></i>Ücretsiz Havaalanı Karşılama</li>
                                <li style="color: #1ca810"><i class="fas fa-check"></i>24 saat öncesine kadar ücretsiz iptal</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <ul>
                                <li class="search-card-total text-center">
                                    200,00 <small>TL</small></li>
                                <li class="search-card-included text-center">
                                </li>
                                <li class="search-card-included-desc">
                                </li>
                                <li>
                                    <input type="submit" name="ctl00$cntCenter$rptSonuc$ctl01$btnRez" value="SEÇİN" id="ctl00_cntCenter_rptSonuc_ctl01_btnRez" class="btn btn-primary btn-block">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End banner Area -->

@endsection
