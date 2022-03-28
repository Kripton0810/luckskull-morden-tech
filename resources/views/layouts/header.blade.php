<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <!-- Title-->
    <title>Luckskull</title>
    <!-- Stylesheet-->
    <link rel="stylesheet" href="assets1/css/style.css">
    <link rel="stylesheet" href="assets1/css/animate.css">
    <link rel="stylesheet" href="assets/css/payment.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets1/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets1/css/default/lineicons.min.css">
    <!-- Web App Manifest-->

    <link rel="icon" href="assets/images/logo.png">
    <link rel="manifest" href="assets1/manifest.json">
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300&display=swap"
        rel="stylesheet">

</head>
<!-- Preloader-->


<!-- Header Area-->
<div class="header-area" id="headerArea">
    <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="suha-navbar-toggler d-flex flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span>
        </div>
        <!-- Search Form-->
        <div class="top-search-form">
            <span>
                <i class="fa fa-university fa-header-icon"></i>
                <i class="lni lni-alarm lni-tada-effect fa-header-icon"></i>
            </span>
        </div>
        <!-- Navbar Toggler-->
    </div>
</div>
<!-- Sidenav Black Overlay-->
<div class="sidenav-black-overlay"></div>
<!-- Side Nav Wrapper-->
<div class="suha-sidenav-wrapper" id="sidenavWrapper">
    <!-- Sidenav Profile-->
    <div class="sidenav-profile">
        <div class="user-profile"><img src="assets/images/logo.png" alt=""></div>
        <div class="user-info">
            <h6 class="user-name mb-0">
                @php
                    echo '+91-' . Session::get('phone');
                @endphp
            </h6>
            {{-- <p class="available-balance">Wallet Balance <span>$<span class="counter">523.98</span></span></p> --}}
        </div>
    </div>
    <!-- Sidenav Nav-->
    <ul class="sidenav-nav pl-0">
        <li><a href="{{ url('my-profile') }}"><i class="lni lni-user"></i>My Profile</a></li>
        <li><a href="{{ url('withdraw') }}"><i class="lni lni-money-location"></i>Withdraw Details</a></li>
        <li><a href="{{ url('account-information') }}"><i class="lni lni-users"></i>Create ID</a></li>
        <li><a href="{{ url('refer-and-earn') }}"><i class="lni lni-revenue"></i>Refer & Earn</a></li>
        <li><a href="{{ url('terms') }}"><i class="lni lni-pencil"></i>Terms</a></li>
        <li><a href="#"><i class="lni lni-empty-file"></i>Notification</a></li>
        <li><a href="#"><i class="lni lni-help"></i>Help</a></li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <li><a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"><i
                        class="lni lni-power-switch"></i>Logout</a></li>
        </form>

    </ul>
    <!-- Go Back Button-->
    <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
</div>

<body>
