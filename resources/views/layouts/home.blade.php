<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets') }}/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="aylin">
    <!-- Meta Description -->
    <meta name="description" content="@yield('description')">
    <!-- Meta Keyword -->
    <meta name="keywords" content="@yield('keywords')">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/linearicons.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css">
@yield('css')
    @yield('headerjs')


</head>
<body>
@include('home._header')
<div class="container main-menu">
    <div class="row align-items-center justify-content-between d-flex">
        <a href="index.html"><img src="{{ asset('assets') }}/img/logo.png" alt="" title="" /></a>
        <nav id="nav-menu-container">
            @include('home._category')
            @include('home._menu')


        </nav>
    </div>
</div>


@section('content')
    icerik
@show



@include('home._footer')

@yield('footerjs')

</body>
</html>
