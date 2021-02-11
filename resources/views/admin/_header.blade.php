<div class="navbar nav_title" style="border: 0;">
    <a href="{{route('admin_home')}}" class="site_title"><i class="fa fa-paw"></i> <span>Airport Transfer Admin </span></a>
</div>

<div class="clearfix"></div>
<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        @if (Auth::user()->profile_photo_path)
            <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}" height="60" alt="60" class="img-circle profile_img" >
        @endif
    </div>
    <div class="profile_info">
        @auth
        <span>Welcome,</span>
        <a href="" class="d-block">{{Auth::user()->name}}</a>
        @endauth
        @include('home.message')
    </div>
</div>
<!-- /menu profile quick info -->
