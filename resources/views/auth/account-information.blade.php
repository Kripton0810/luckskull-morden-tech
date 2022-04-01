@include('layouts/header')
<style>
    #tsum-tabs label {
        padding: 6px 16px;
        width: 49%;
        margin-top: 11px;
    }

    #tsum-tabs section {
        padding: 0px 0 0;
    }

</style>
<div class="page-content-wrapper">
    <div class="container plr-0">
        <div class="full-page full-height">
            <div class="col-md-12 col-lg-12 text-center">
                <div class="col-md-12 col-lg-12">
                    <div id="tsum-tabs">
                        <main>
                            <input id="tab1" type="radio" name="tabs">
                            <label for="tab1">
                                My ID's
                            </label>

                            <input id="tab2" type="radio" name="tabs" checked>
                            <label for="tab2">
                                Create ID
                            </label>

                            <section id="content1">
                                <div class="col-md-12 col-lg-12 text-center section-padding-30">
                                    <img src="assets1/img/svg/no-id-img.svg" class="images-width"><br>
                                    <p>You don't have any ID yet.</p>
                                </div>
                            </section>
                            <section id="content2">
                                <div class="row">
                                    <div class="notification-area pt-3 pb-2">
                                        <div class="list-group">
                                            <div class="col-lg-12 col-md-12">
                                                {{-- <div class="panel">
                                                    <div class="col-lg-12 col-md-12">
                                                        <span> <img src="assets1/img/svg/active-football.svg"
                                                                style="height:13px"></span>
                                                        <span> <img src="assets1/img/svg/active-casino.svg"
                                                                style="height:13px"></span>
                                                        <span> <img src="assets1/img/svg/active-cricket.svg"
                                                                style="height:13px"></span>
                                                        <span> <img src="assets1/img/svg/active-tennis.svg"
                                                                style="height:13px"></span>
                                                        <span> <img src="assets1/img/svg/active-horse_racing.svg"
                                                                style="height:13px"></span>
                                                        <span> <img src="assets1/img/svg/active-politics.svg"
                                                                style="height:13px"></span>


                                                    </div>
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="card user-data-card bg-black">
                                                            <div class="card-body">
                                                                <div
                                                                    class="single-profile-data d-flex align-items-center justify-content-between">
                                                                    <div class="title d-flex align-items-center">
                                                                        <span>Demo ID</span>
                                                                    </div>
                                                                    <div class="data-content"><i
                                                                            class="lni lni-link"></i></div>
                                                                </div>
                                                                <hr>
                                                                <div
                                                                    class="single-profile-data d-flex align-items-center justify-content-between">
                                                                    <div class="title d-flex align-items-center">
                                                                        <span>Demo Id</span>
                                                                    </div>
                                                                    <div class="data-content">Octopusonline5</div>
                                                                </div>
                                                                <div
                                                                    class="single-profile-data d-flex align-items-center justify-content-between">
                                                                    <div class="title d-flex align-items-center">
                                                                        <span>Demo
                                                                            Password</span>
                                                                    </div>
                                                                    <div class="data-content">Demo1234</div>
                                                                </div>
                                                            </div>
                                                            <div class="card user-data-card bg-black">
                                                                <div class="card-body">
                                                                    <div
                                                                        class="single-profile-data d-flex align-items-center justify-content-between">
                                                                        <div class="title d-flex align-items-center">
                                                                            <span>Min
                                                                                Bet</span>
                                                                        </div>
                                                                        <div class="data-content"><i
                                                                                class="lni lni-coin"></i></div>
                                                                    </div>
                                                                    <hr>
                                                                    <div
                                                                        class="single-profile-data d-flex align-items-center justify-content-between">
                                                                        <div class="title d-flex align-items-center">
                                                                            <img src="assets1/img/svg/bet-cricket.svg"
                                                                                style="height:13px">
                                                                            <span>Cricket</span>
                                                                        </div>
                                                                        <div class="data-content">100</div>
                                                                    </div>

                                                                    <div
                                                                        class="single-profile-data d-flex align-items-center justify-content-between">
                                                                        <div class="title d-flex align-items-center">
                                                                            <img src="assets1/img/svg/bet-football.svg"
                                                                                style="height:13px">
                                                                            <span>Football</span>
                                                                        </div>
                                                                        <div class="data-content">100</div>
                                                                    </div>

                                                                    <div
                                                                        class="single-profile-data d-flex align-items-center justify-content-between">
                                                                        <div class="title d-flex align-items-center">
                                                                            <img src="assets1/img/svg/bet-tennis.svg"
                                                                                style="height:13px"><span>Tennis</span>
                                                                        </div>
                                                                        <div class="data-content">100</div>
                                                                    </div>

                                                                    <div
                                                                        class="single-profile-data d-flex align-items-center justify-content-between">
                                                                        <div class="title d-flex align-items-center">
                                                                            <img src="assets1/img/svg/bet-horse_racing.svg"
                                                                                style="height:13px">
                                                                            <span>Horse Racing</span>
                                                                        </div>
                                                                        <div class="data-content">100</div>
                                                                    </div>

                                                                    <div
                                                                        class="single-profile-data d-flex align-items-center justify-content-between">
                                                                        <div class="title d-flex align-items-center">
                                                                            <img src="assets1/img/svg/bet-politics.svg"
                                                                                style="height:13px">
                                                                            <span>Politics</span>
                                                                        </div>
                                                                        <div class="data-content">100</div>
                                                                    </div>

                                                                    <div
                                                                        class="single-profile-data d-flex align-items-center justify-content-between">
                                                                        <div class="title d-flex align-items-center">
                                                                            <img src="assets1/img/svg/bet-cards.svg"
                                                                                style="height:13px">
                                                                            <span>Cards</span>
                                                                        </div>
                                                                        <div class="data-content">100</div>
                                                                    </div>

                                                                    <div
                                                                        class="single-profile-data d-flex align-items-center justify-content-between">
                                                                        <div class="title d-flex align-items-center">
                                                                            <img src="assets1/img/svg/bet-casino.svg"
                                                                                style="height:13px">
                                                                            <span>Live Casino</span>
                                                                        </div>
                                                                        <div class="data-content">100</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}


                                                @foreach ($content as $data)
                                                    <div class="list-group-item d-flex align-items-center" href="#">
                                                        <div class="col-lg-8 d-flex">
                                                            <span class="noti-icon">
                                                                <img src="{{ $data['image'] }}" alt=""
                                                                    class="ids-images">
                                                            </span>
                                                            <div class="noti-info">
                                                                <h6 class="mb-0">{{ $data['name'] }}</h6>
                                                                <span>{{ $data['url'] }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4" align="right">
                                                            <a href="id-maker?id={{ $data['id'] }}" type="button"
                                                                class="btn btn-secondary btn-sm btn-orange">Create
                                                                ID</a>
                                                        </div>
                                                    </div>
                                                @endforeach



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </main>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('layouts/footer')
