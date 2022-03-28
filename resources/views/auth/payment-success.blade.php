@include('layouts/header')
<div class="page-content-wrapper">
    <div class="container plr-0">
        <div class="full-page full-height">
            <div class="col-md-12 col-lg-12 m-top-20 text-center"><br><br>
                <img src="assets1/img/payment/check.png" style="width: 40%;">
                <h5 class="m-top-10 text-light">Your payment succeessfull <span> {{ $amt }} Rs.</span> with
                    <span>{{ $met }}</span>
                </h5>
                <a href="dashboard" type="button" class="btn btn-warning ">Dashboard</a>

            </div>
        </div>
    </div>
</div>
@include('layouts/footer-payment')
