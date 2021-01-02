<div class="navbar nav_title" style="border: 0;">
    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
</div>

<div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{ asset('assets')}}/admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        @auth
        <span>Welcome,</span>
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
        @endauth
    </div>

</div>
<!-- /menu profile quick info -->

<br />
