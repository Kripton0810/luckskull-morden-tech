@include('layouts/header')
<div class="page-content-wrapper">
    <div class="container">
        <div class="full-page full-height">
            <nav aria-label="breadcrumb m-top-20">
                <ol class="breadcrumb">
                    <a href="dashboard">
                        <li class="breadcrumb-item active page-heading" aria-current="page">
                            <i class="fa fa-arrow-circle-o-left yellow-text" aria-hidden="true"></i>
                        </li>
                    </a>
                </ol>
            </nav>
            <!-- Profile Wrapper-->
            <div class="profile-wrapper-area text-center py-3">
                <!-- User Information-->
                <div class="card user-info-card">
                    <div class="card-body p-4 items-center">
                        <div class="user-profile mr-3"><img src="assets/images/user-profile-icon.png" alt=""
                                style="    height: 112px;"></div>
                        <div class="user-info">
                            <h5 class="mb-0 text-white">{{ $name }}</h5>
                            <img src="assets/images/India.png" style="height:20px">&nbsp; <span
                                class="text-white">+91-{{ $phone }}</span>
                        </div>
                        <div class="m-top-10">
                            <a href="payment-success.php" type="button" class="btn btn-warning ">Change Password</a>
                            <p class="text-light m-top-10">Member since {{ $created }}</p>
                        </div>
                    </div>
                </div>
                <div class="product-catagories-wrapper py-3">
                    <div class="container padding-0">
                        <div class="product-catagory-wrap">
                            <div class="row g-3">
                                <!-- Single Catagory Card-->
                                <div class="col-6">
                                    <div class="card catagory-card">
                                        <div class="card-body"><a href="catagory.html"><i
                                                    class="lni lni-star"></i><span>Rewards Earned</span></a></div>
                                    </div>
                                </div>
                                <!-- Single Catagory Card-->
                                <div class="col-6">
                                    <div class="card catagory-card">
                                        <div class="card-body"><a href="catagory.html"><i
                                                    class="lni lni-user"></i><span>Users Referred 0</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts/footer-payment')
