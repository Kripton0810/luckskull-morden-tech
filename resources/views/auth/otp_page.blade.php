<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Finest betting portal for the wild punter in you">
    <meta name="keywords" content="betting site, punter, punt, go punt, bet exchange id">
    <meta name="author" content="GoPunt">
    <link rel="icon" href="assets/images/favicon.png">
    <title>OTP Login</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=1.2.17">

    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300&display=swap"
        rel="stylesheet">
    <!-- Stylesheet
========================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/main-style.css" />
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader preloader-dark">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->

    <div id="main-wrapper" class="oxyy-login-register bg-dark">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-12 shadow-lg  align-items-center rounded-3 rounded-start-0 bg-dark pd-15">
                    <div class="container my-auto py-5 ">
                        <div class="row user-space">
                            <div class="col-sm-12 col-lg-10 mx-auto">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <a href="userlogin.php">
                                            <li class="breadcrumb-item active page-heading" aria-current="page"><i
                                                    class="fa fa-arrow-circle-o-left yellow-text"
                                                    aria-hidden="true"></i>&nbsp;&nbsp;ENTER
                                                VERIFICATION CODE</li>
                                        </a>
                                    </ol>
                                </nav>
                                @if (session('status') == 'verification-link-sent')
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                    </div>
                                @endif
                                <p class="text-center"><img class="img-fluid" src="assets/images/verification.png"
                                        alt="verification"></p>
                                <p class="text-white-50 text-center mb-4">Please enter the OTP (one time password) to
                                    verify your account. A Code has been sent to <span
                                        class="text-light"> @php
                                    echo "+91-".Session::get('phone');
                                     @endphp</span></p>
                                <form id="otp-screen" class="form-dark" action="{{ route('varify') }}" method="GET">
                                    @csrf
                                    <label class="form-label text-light mb-3">Enter 4 digit code</label>
                                    <div class="row g-3">
                                        <div class="col">
                                            <input type="text" name="fil1" class="form-control text-center text-6 py-2"
                                                maxlength="1" required autocomplete="off">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="fil2" class="form-control text-center text-6 py-2"
                                                maxlength="1" required= autocomplete="off">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control text-center text-6 py-2"
                                                maxlength="1" name="fil3" required= autocomplete="off">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control text-center text-6 py-2"
                                                maxlength="1" name="fil4" required="" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="d-grid my-4">
                                        <button  class="btn btn-warning padding-10" type="submit">Verify</button>
                                    </div>
                                </form>
                                <p class="text-2 text-center text-light mb-0">Didn't get the code? <a href="#"
                                        class="yellow-text">Resend
                                        it</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Login Form End -->
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>