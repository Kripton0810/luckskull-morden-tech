@include('layouts/header')
<div class="page-content-wrapper">
    <div class="container">
        <div class="full-page full-height">
            <nav aria-label="breadcrumb m-top-20">
                <ol class="breadcrumb">
                    <a href="userlogin.php">
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
                            <a href="payment-success.php" type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#changepassword">Change Password</a>
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










    <!-- Add Bank Modal -->
    <div class="modal" id="changepassword" tabindex="-1" role="dialog" aria-labelledby="changepassword"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 1px solid #252425;">
                    <h5 class="modal-title text-light" id="exampleModalLongTitle">Change Password<br>
                    </h5><br>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        <div class="form-group m-top-10">
                            <label class="label-m text-light">Old Password*</label>
                            <div class="col-md-12">
                                <input id="password-field" type="password" class="form-control" name="password"
                                    value="secret">
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                        <div class="form-group m-top-10">
                        <label class="label-m text-light">New Password*</label>
                            <div class="col-md-12">
                                <input id="password-field" type="password" class="form-control" name="password"
                                    value="secret">
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                        <div class="form-group m-top-10">
                        <label class="label-m text-light">Confirm Password*</label>
                            <div class="col-md-12">
                                <input id="password-field" type="password" class="form-control" name="password"
                                    value="secret">
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                       
                    </form>
                </div>
                <div class="modal-footer text-center" style="border-top: 1px solid #252425;">
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
                <br>
            </div>
        </div>
    </div>
    @include('layouts/footer-payment')