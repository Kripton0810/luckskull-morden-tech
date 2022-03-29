@include('layouts/header');
<div class="page-content-wrapper">
    <div class="container plr-0">
        <!-- Hero Slides-->
        @csrf
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide-->
            <div class="single-hero-slide" style="background-image: url('assets1/img/bg-img/1.jpg')">
                <div class="slide-content h-100 d-flex align-items-center">
                    <div class="container">
                        <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                            data-wow-duration="1000ms">Amazon Echo</h4>
                        <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                            data-wow-duration="1000ms">n3rd Generation, Charcoal</p>
                        <a class="btn btn-primary btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms"
                            data-wow-duration="1000ms">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide-->
            <div class="single-hero-slide" style="background-image: url('assets1/img/bg-img/2.jpg')">
                <div class="slide-content h-100 d-flex align-items-center">
                    <div class="container">
                        <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                            data-wow-duration="1000ms">Light
                            Candle</h4>
                        <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                            data-wow-duration="1000ms">
                            Now only $22
                        </p><a class="btn btn-success btn-sm" href="#" data-animation="fadeInUp" data-delay="500ms"
                            data-wow-duration="1000ms">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide-->
            <div class="single-hero-slide" style="background-image: url('assets1/img/bg-img/3.jpg')">
                <div class="slide-content h-100 d-flex align-items-center">
                    <div class="container">
                        <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                            data-wow-duration="1000ms">Best
                            Furniture</h4>
                        <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                            data-wow-duration="1000ms">3
                            years
                            warranty</p><a class="btn btn-danger btn-sm" href="#" data-animation="fadeInUp"
                            data-delay="800ms" data-wow-duration="1000ms">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-page">
            <div class="col-lg-12 col-md-12">
                <a href="account-information" type="button" class="btn btn-secondary btn-sec"><i
                        class="lni lni-circle-plus"></i>&nbsp;&nbsp;&nbsp;Create</a>
            </div>
            <div class="col-lg-12 col-md-12">
                <img src="assets1/img/bg-img/bg-img.png">
            </div>
            <div class="col-lg-12 col-md-12 m-top-10">
                <p class="yellow-text text-center">Tips & Announcements</p>
                <p class="text-center">Existing users of Exch666.com and Fairexch9.com can login using
                    Skyexch666.com!
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-4 col-md-4 mt-20 text-center">
                    <a href="https://wa.me/+17655400106" target="_blank" type="button"
                        class="btn btn-secondary btn-sec"><i class="lni lni-whatsapp"></i>&nbsp;&nbsp;&nbsp;WhatsApp
                        Support</a>
                </div>
                <div class="col-lg-4 col-md-4"></div>
            </div>
        </div>
    </div>

</div>
@include('layouts/footer')
