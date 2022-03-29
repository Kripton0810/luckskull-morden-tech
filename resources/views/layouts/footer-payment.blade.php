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
 <script>
     $("#FileInput").on('change', function(e) {
         var labelVal = $(".title").text();
         var oldfileName = $(this).val();
         fileName = e.target.value.split('\\').pop();

         if (oldfileName == fileName) {
             return false;
         }
         var extension = fileName.split('.').pop();

         if ($.inArray(extension, ['jpg', 'jpeg', 'png']) >= 0) {
             $(".filelabel i").removeClass().addClass('fa fa-file-image-o');
             $(".filelabel i, .filelabel .title").css({
                 'color': '#208440'
             });
             $(".filelabel").css({
                 'border': ' 2px solid #208440'
             });
         } else if (extension == 'pdf') {
             $(".filelabel i").removeClass().addClass('fa fa-file-pdf-o');
             $(".filelabel i, .filelabel .title").css({
                 'color': 'red'
             });
             $(".filelabel").css({
                 'border': ' 2px solid red'
             });

         } else if (extension == 'doc' || extension == 'docx') {
             $(".filelabel i").removeClass().addClass('fa fa-file-word-o');
             $(".filelabel i, .filelabel .title").css({
                 'color': '#2388df'
             });
             $(".filelabel").css({
                 'border': ' 2px solid #2388df'
             });
         } else {
             $(".filelabel i").removeClass().addClass('fa fa-file-o');
             $(".filelabel i, .filelabel .title").css({
                 'color': 'black'
             });
             $(".filelabel").css({
                 'border': ' 2px solid black'
             });
         }

         if (fileName) {
             if (fileName.length > 10) {
                 $(".filelabel .title").text(fileName.slice(0, 4) + '...' + extension);
             } else {
                 $(".filelabel .title").text(fileName);
             }
         } else {
             $(".filelabel .title").text(labelVal);
         }
     });
 </script>

 </body>

 </html>
