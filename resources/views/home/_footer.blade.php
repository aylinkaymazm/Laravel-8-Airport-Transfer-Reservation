@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li>{{$setting->company}}</li>
                        <li>{{$setting->address}}</li>
                        <li><strong>Phone:</strong>{{$setting->phone}}</li>
                        <li><strong>Email:</strong>{{$setting->email}}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Features</h6>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Resources</h6>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        @if ($setting->facebook != null) <a href="{{$setting->facebook}}" target="_blank" ><i class="fa fa-facebook"></i></a>@endif
                        @if ($setting->twitter != null) <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>@endif
                            @if ($setting->instagram != null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>@endif
                            @if ($setting->youtube != null) <a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a>@endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class="" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                            <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <p class="mt-80 mx-auto footer-text col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{$setting->company}}
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
    <img class="footer-bottom" src="{{ asset('assets') }}/img/footer-bottom.png" alt="">
</footer>
<!-- End footer Area -->



<script src="{{ asset('assets') }}/js/vendor/jquery-2.2.4.min.js"></script>
<script src="{{ asset('assets') }}/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('assets') }}/js/vendor/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{ asset('assets') }}/js/easing.min.js"></script>
<script src="{{ asset('assets') }}/js/hoverIntent.js"></script>
<script src="{{ asset('assets') }}/js/superfish.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery-ui.js"></script>
<script src="{{ asset('assets') }}/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('assets') }}/js/mail-script.js"></script>
<script src="{{ asset('assets') }}/js/main.js"></script>

