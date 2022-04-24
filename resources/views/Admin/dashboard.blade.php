<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title> Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href=" {{ asset('assets2/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets2/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets2/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets2/images/logo.png') }}" alt="" height="17">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-light.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="19">
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboards</span>
                            </a>

                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="fas fa-id-card    "></i>
                                <span key="t-dashboards">Request ID</span>
                            </a>

                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="fas fa-piggy-bank    "></i>
                                <span key="t-dashboards">Withdraw Request</span>
                            </a>

                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                <span key="t-dashboards">Make Notification</span>
                            </a>

                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span key="t-dashboards">User info</span>
                            </a>

                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="fa fa-id-badge" aria-hidden="true"></i>
                                <span key="t-dashboards">Create Website</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <div class="main-content">

        </div>
    </div>
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- crypto dash init js -->
    <script src="assets/js/pages/crypto-dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>
