<!-- Internet Connection Status-->
<div class="container">
    <div class="internet-connection-status" id="internetStatus"></div>

</div>
<!-- Footer Nav-->
<div class="footer-nav-area" id="footerNav">
    <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
            <ul class="h-100 d-flex align-items-center justify-content-between pl-0 padding-0">
                <li class="active"><a href="dashboard"><i class="lni lni-home"></i>Home</a></li>
                <li><a href="offer"><i class="lni lni-offer"></i>Offers</a></li>
                <li><a href="passbook"><i class="lni lni-mastercard"></i>Passbook</a></li>
                <li><a href="{{ url('account-information') }}"><i class="lni lni-postcard"></i>ID's</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- All JavaScript Files-->
<script src="assets1/js/jquery.min.js"></script>
<script src="assets1/js/bootstrap.bundle.min.js"></script>
<script src="assets1/js/waypoints.min.js"></script>
<script src="assets1/js/jquery.easing.min.js"></script>
<script src="assets1/js/owl.carousel.min.js"></script>
<script src="assets1/js/jquery.counterup.min.js"></script>
<script src="assets1/js/jquery.countdown.min.js"></script>
<script src="assets1/js/default/jquery.passwordstrength.js"></script>
<script src="assets1/js/wow.min.js"></script>
<script src="assets1/js/jarallax.min.js"></script>
<script src="assets1/js/jarallax-video.min.js"></script>
<script src="assets1/js/default/dark-mode-switch.js"></script>
<script src="assets1/js/default/no-internet.js"></script>
<script src="assets1/js/default/active.js"></script>
<script src="assets1/js/pwa.js"></script>
<script src="assets/js/theme.js"></script>
<script>
    $(document).ready(function() {
        $(".flip").click(function() {
            $(".panel").slideToggle("slow");
        });
    });
</script>

</body>

</html>
