@include('layouts/header')
<div class="page-content-wrapper">
    <div class="container plr-0">
        <div class="full-page full-height">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="margin-bottom: 0rem;">
                    <a>
                        <li class="breadcrumb-item active page-heading" aria-current="page">
                            <i class="fa fa-google-wallet	left yellow-text" aria-hidden="true"></i>&nbsp;&nbsp;Choose
                            Your Payment Method
                        </li>
                    </a>
                </ol>
            </nav>
            <p class="text-light">Make payment of {{ $amount }}/- and upload screenshot.</p>
            <div class="col-md-12 col-lg-12">
                <div id="tsum-tabs">
                    <main>
                        <form action="/payment-io-page" method="post" enctype="multipart/form-data">
                            @csrf
                            <input id="tab1" type="radio" name="tabs" checked value="paytm">
                            <label for="tab1">
                                <img src="assets1/img/payment/paytm.png" alt="" class="pay-images">
                                <span>Paytm</span>
                            </label>

                            <input id="tab2" type="radio" name="tabs" value="google_pay">
                            <label for="tab2">
                                <img src="assets1/img/payment/google_pay.png" alt="" class="pay-images">
                                <span>Google Pay</span>
                            </label>

                            <input id="tab3" type="radio" name="tabs" value="phone_pay">
                            <label for="tab3">
                                <img src="assets1/img/payment/phone_pe.png" alt="" class="pay-images">
                                <span>Phone Pe</span>
                            </label>

                            <input id="tab4" type="radio" name="tabs" value="bank_transfer">
                            <label for="tab4">
                                <i class="fa fa-bank pay-images"></i>

                                <span>Bank Transfer</span>
                            </label>

                            <section id="content1">
                                <div class="pay-card">
                                    <div class="card-body">
                                        <h6 class="text-light">Make your payment on the details below.</h6>
                                        <br>
                                        <div class="devider"></div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>Display Name
                                                </span></div>
                                            <div class="data-content">Hemantha UR</div>
                                        </div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>Mobile No
                                                </span></div>
                                            <div class="data-content">9901926972</div>
                                        </div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>UPI
                                                </span></div>
                                            <div class="data-content">luckyman007@ybl</div>
                                        </div>
                                    </div>
                                </div>


                            </section>

                            <section id="content2">
                                <div class="pay-card">
                                    <div class="card-body">
                                        <h6 class="text-light">Make your payment on the details below.</h6>
                                        <br>
                                        <div class="devider"></div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>Display Name
                                                </span></div>
                                            <div class="data-content">Hemantha UR</div>
                                        </div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>Mobile No
                                                </span></div>
                                            <div class="data-content">9901926972</div>
                                        </div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>UPI
                                                </span></div>
                                            <div class="data-content">luckyman007@ybl</div>
                                        </div>
                                    </div>
                                </div>


                            </section>

                            <section id="content3">
                                <div class="pay-card">
                                    <div class="card-body">
                                        <h6 class="text-light">Make your payment on the details below.</h6>
                                        <br>
                                        <div class="devider"></div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>Display Name
                                                </span></div>
                                            <div class="data-content">Hemantha UR</div>
                                        </div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>Mobile No
                                                </span></div>
                                            <div class="data-content">9901926972</div>
                                        </div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>UPI
                                                </span></div>
                                            <div class="data-content">luckyman007@ybl</div>
                                        </div>
                                    </div>
                                </div>


                            </section>

                            <section id="content4">
                                <div class="pay-card">
                                    <div class="card-body">
                                        <h6 class="text-light">Make your payment on the details below.</h6>
                                        <br>
                                        <div class="devider"></div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>Display Name
                                                </span></div>
                                            <div class="data-content">Hemantha UR</div>
                                        </div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>Mobile No
                                                </span></div>
                                            <div class="data-content">9901926972</div>
                                        </div>
                                        <div
                                            class="single-profile-data d-flex align-items-center justify-content-between">
                                            <div class="title d-flex align-items-center text-light"><span>UPI
                                                </span></div>
                                            <div class="data-content">luckyman007@ybl</div>
                                        </div>
                                    </div>
                                </div>

                            </section>
                            <div class="col-md-12 col-lg-12 text-center m-top-10">
                                <label class="filelabel" style="width:100%">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>

                                    <span class="title text-light">
                                        Click here to upload payment screenshot.
                                    </span>
                                    <input class="FileUpload1" id="FileInput" name="booking_attachment"
                                        type="file" />
                                </label>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="m-top-10">
                                    <button type="button" class="btn btn-warning ">Add Another</button>
                                    <button type="submit" class="btn btn-warning ">Submit</button>
                                </div>
                            </div>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts/footer-payment')
