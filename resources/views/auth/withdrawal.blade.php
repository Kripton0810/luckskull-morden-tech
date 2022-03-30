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
            <div class="col-md-12 col-lg-12">
                <div id="tsum-tabs">
                    <main>
                        <input id="tab1" type="radio" name="tabs">
                        <label for="tab1">
                            Added Account
                        </label>

                        <input id="tab2" type="radio" name="tabs" checked>
                        <label for="tab2">
                            Withdrawal Details
                        </label>

                        <section id="content1">
                            <!-- <div class="col-md-12 col-lg-12 text-center section-padding-30">
                                <img src="assets1/img/svg/no-id-img.svg" class="images-width"><br>
                                <p>You don't have any Account Now.</p>
                            </div> -->
                            <div class="row">
                                <div class="notification-area pt-3 pb-2">
                                    <div class="list-group">
                                        <div class="col-md-12 col-lg-12 text-center">
                                            <div class="card user-info-card">
                                                <div class="card-body p-4 items-center">
                                                    <div class="user-info">
                                                        <h5 class="mb-0 text-white">Shivee</h5>
                                                        <img src="assets/images/India.png" style="height:20px">&nbsp;
                                                        <span class="text-white">+91-7992281821</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 m-top-10">
                                            <div class="list-group-item d-flex align-items-center flip bankcard">
                                                <div class="col-lg-8 d-flex space-between">
                                                    <span class="">
                                                        <img src="assets/images/bank.png" alt="" class="ids-images">
                                                    </span>
                                                    <div class="noti-info">
                                                        <h6 class="m-top-10">Bank Details</h6>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" align="right">
                                                    <a href="#" class="btn btn-secondary btn-sm btn-orange"><i
                                                            class="fa fa-eye" aria-hid--den="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="card user-data-card bg-black">
                                                        <div class="card-body">
                                                            <div
                                                                class="list-group-item d-flex align-items-center bankcard">
                                                                <div class="col-lg-8 d-flex space-between">
                                                                    <span class="">
                                                                        <img src="https://api.gopunt.com/uploads/bank/Andhra_Bank.png" alt=""
                                                                            class="ids-images">
                                                                    </span>
                                                                    <div class="noti-info">
                                                                        <h6 class="m-top-10">Andhra Bank</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4" align="right">
                                                                    <a href="#"
                                                                        class="btn btn-secondary btn-sm btn-orange" data-toggle="modal" data-target="#Addbankdetail">Edit</a>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div
                                                                class="single-profile-data align-items-center justify-content-between">
                                                                <button class="btn btn-secondary btn-sm btn-orange"  data-toggle="modal" data-target="#bankdetail">Add New</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="content2">
                            <div class="col-md-12 col-lg-12 text-center">
                                <div class="row">
                                    <div class="notification-area pt-3 pb-2">
                                        <div class="list-group">
                                            <div class="col-lg-12 col-md-12">
                                                <a class="list-group-item d-flex align-items-center flip">
                                                    <div class="col-lg-8 d-flex space-between">
                                                        <span>
                                                            <img src="https://api.gopunt.com/uploads/accounts/accImg-1621400719659.png"
                                                                alt="" class="pay-images">
                                                        </span>
                                                        <div class="noti-info">
                                                            <h6 class="mb-0">Bank Transfer</h6><span>Adding Bank Details
                                                                is
                                                                mandatory for
                                                                processing withdrawals, click to add.</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4" align="right">
                                                        <button class="btn btn-secondary btn-sm btn-orange"
                                                            data-toggle="modal" data-target="#bankdetail">Add
                                                            New</button>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>


                                        <a class="list-group-item d-flex align-items-center">
                                            <div class="col-lg-8 d-flex">
                                                <span class="">
                                                    <img src="assets/images/payment/paytm.png" alt=""
                                                        class="pay-images">
                                                </span>
                                                <div class="noti-info">
                                                    <h6 class="m-top-10">Paytm Wallet</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-4" align="right">
                                                <button class="btn btn-secondary btn-sm btn-orange" data-toggle="modal"
                                                    data-target="#paytmwallet">Add New</button>
                                            </div>
                                        </a>

                                        <a class="list-group-item d-flex align-items-center">
                                            <div class="col-lg-8 d-flex">
                                                <span class="">
                                                    <img src="assets/images/payment/google_pay.png" alt=""
                                                        class="pay-images">
                                                </span>
                                                <div class="noti-info">
                                                    <h6 class="m-top-10">Google Pay</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-4" align="right">
                                                <button class="btn btn-secondary btn-sm btn-orange" data-toggle="modal"
                                                    data-target="#googlepay">Add New</button>
                                            </div>
                                        </a>

                                        <a class="list-group-item d-flex align-items-center">
                                            <div class="col-lg-8 d-flex">
                                                <span class="">
                                                    <img src="assets/images/payment/phone_pe.png" alt=""
                                                        class="pay-images">
                                                </span>
                                                <div class="noti-info">
                                                    <h6 class="m-top-10">PhonePe</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-4" align="right">
                                                <button class="btn btn-secondary btn-sm btn-orange" data-toggle="modal"
                                                    data-target="#phonepe">Add New</button>
                                            </div>
                                        </a>

                                        <a class="list-group-item d-flex align-items-center">
                                            <div class="col-lg-8 d-flex">
                                                <span class="">
                                                    <img src="assets/images/payment/paytm_upi.png" alt=""
                                                        class="pay-images">
                                                </span>
                                                <div class="noti-info">
                                                    <h6 class="m-top-10">Paytm UPI</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-4" align="right">
                                                <button class="btn btn-secondary btn-sm btn-orange" data-toggle="modal"
                                                    data-target="#upino">Add New</button>
                                            </div>
                                        </a>


                                        <a class="list-group-item d-flex align-items-center">
                                            <div class="col-lg-8 d-flex">
                                                <span class="">
                                                    <img src="assets/images/payment/upi.png" alt="" class="pay-images">
                                                </span>
                                                <div class="noti-info">
                                                    <h6 class="m-top-10">UPI</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-4" align="right">
                                                <button class="btn btn-secondary btn-sm btn-orange" data-toggle="modal"
                                                    data-target="#upi">Add New</button>
                                            </div>
                                        </a>
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

<!-- Add Bank Modal -->
<div class="modal fade" id="bankdetail" tabindex="-1" role="dialog" aria-labelledby="bankdetailTitle"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #252425;">
                <h5 class="modal-title text-light" id="exampleModalLongTitle">Add Your Bank Account<br>
                    <p class="text-light fw-100">Adding Bank Details is mandatory for processing withdrawals.</p>
                </h5><br>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="form-group">
                        <label class="label-m text-light">Bank Name*</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Account Number*</label>
                        <input type="text" class="form-control" placeholder="Enter Account Number">
                    </div>
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">IFSC*</label>
                        <input type="text" class="form-control" placeholder="Enter IFSC Code">
                    </div>

                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Account Holder Name*</label>
                        <input type="text" class="form-control" placeholder="Enter Holder Name">
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #252425;">
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
            <br>
        </div>
    </div>
</div>

<!-- Add Add New Paytm Wallet Number -->
<div class="modal fade" id="paytmwallet" tabindex="-1" role="dialog" aria-labelledby="paytmwalletTitle"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #252425;">
                <h5 class="modal-title text-light" id="exampleModalLongTitle">Add New Paytm Wallet Number
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="withdrawpaytm">
                    @csrf
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Name*</label>
                        <input type="text" class="form-control" placeholder="" name="name">
                    </div>
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Paytm Number*</label>
                        <input type="text" class="form-control" placeholder="" name="id">
                    </div>
                    <div class="modal-footer" style="border-top: 1px solid #252425;">
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
            <br>
        </div>
    </div>
</div>


<!-- Add New Google Pay Number -->
<div class="modal fade" id="googlepay" tabindex="-1" role="dialog" aria-labelledby="googlepay" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #252425;">
                <h5 class="modal-title text-light" id="exampleModalLongTitle">Add New Google Pay Number
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="withdrawgooglepay">
                    @csrf
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Name*</label>
                        <input type="text" class="form-control" placeholder="" name="name">
                    </div>
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Google Pay Number*</label>
                        <input type="text" class="form-control" placeholder="" name="id">
                    </div>
                    <div class="modal-footer text-center" style="border-top: 1px solid #252425;">
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>

            <br>
        </div>
    </div>
</div>

<!-- Add New phone Pay Number -->
<div class="modal fade" id="phonepe" tabindex="-1" role="dialog" aria-labelledby="phonepe" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #252425;">
                <h5 class="modal-title text-light" id="exampleModalLongTitle">Add New Google Pay Number
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="withdrawphonepe">
                    @csrf
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Name*</label>
                        <input type="text" class="form-control" placeholder="" name="name">
                    </div>
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Phone Pe Number*</label>
                        <input type="text" class="form-control" placeholder="" name="id">
                    </div>
                    <div class="modal-footer text-center" style="border-top: 1px solid #252425;">
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
            <br>
        </div>
    </div>
</div>

<!-- Add New UPI Number -->
<div class="modal fade" id="upino" tabindex="-1" role="dialog" aria-labelledby="upino" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #252425;">
                <h5 class="modal-title text-light" id="exampleModalLongTitle">Add New Paytm UPI Number
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="withdrawpaytmupi">
                    @csrf
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Name*</label>
                        <input type="text" class="form-control" placeholder="" name="name">
                    </div>
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Paytm UPI Number*</label>
                        <input type="text" class="form-control" placeholder="" name="id">
                    </div>
                    <div class="modal-footer text-center" style="border-top: 1px solid #252425;">
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
            <br>
        </div>
    </div>
</div>

<!-- Add New UPI Number -->
<div class="modal fade" id="upi" tabindex="-1" role="dialog" aria-labelledby="upi" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #252425;">
                <h5 class="modal-title text-light" id="exampleModalLongTitle">Add New UPI Id
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="withdrawupi">
                    @csrf
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Name*</label>
                        <input type="text" class="form-control" placeholder="" name="name">
                    </div>
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">UPI Id*</label>
                        <input type="text" class="form-control" placeholder="" name="id">
                    </div>
                    <div class="modal-footer text-center" style="border-top: 1px solid #252425;">
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
            <br>
        </div>
    </div>
</div>
















<!-- Add Bank Modal -->
<div class="modal fade" id="Addbankdetail" tabindex="-1" role="dialog" aria-labelledby="bankdetailTitle"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #252425;">
                <h5 class="modal-title text-light" id="exampleModalLongTitle">Edit Your Bank Account<br>
                    <p class="text-light fw-100">Editing Bank Details is mandatory for processing withdrawals.</p>
                </h5><br>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="form-group">
                        <label class="label-m text-light">Bank Name*</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Account Number*</label>
                        <input type="text" class="form-control" readonly placeholder="7765 6654 6666 8888">
                    </div>
                    <div class="form-group m-top-10">
                        <label class="label-m text-light">IFSC*</label>
                        <input type="text" class="form-control" placeholder="ABGJ7678686">
                    </div>

                    <div class="form-group m-top-10">
                        <label class="label-m text-light">Account Holder Name*</label>
                        <input type="text" class="form-control" placeholder="Shivee Raj">
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center" style="border-top: 1px solid #252425;">
                <button type="submit" class="btn btn-warning">Submit</button>
                <button type="button" class="btn btn-warning">Cancel</button>

            </div>
            <br>
        </div>
    </div>
</div>

@include('layouts/footer-payment')