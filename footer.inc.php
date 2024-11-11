 <!--=====================================
        FOOTER START
        =====================================-->
        <footer class="footer mt_180 xs_mt_130" style="background: url(images/footer_bg.jpg);">
            <div class="container" style="padding-top: 40px;">
           
            <div class="row mt_20 xs_mt_10 pb_80 xs_pb_35 md_padding justify-content-between">
                <div class="col-xl-3 col-md-6 col-lg-4">
                    <div class="footer_logo_area">
                        <a class="footer_logo" href="index.html" style="height:150px;">
                            <img src="images/blogo.png" alt="Bonfax" >
                        </a>
                        <p>Sed ut perspiciatis unde omnis iste
                        natus error sit voluptatem accusantium enim ipsam voluptatem quia voluptas.</p>
                        <ul class="d-flex flex-wrap">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-4 col-lg-2">
                    <div class="footer_link">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Our Members</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Services</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-4 col-lg-2 order-md-4">
                    <div class="footer_link">
                        <h4>Important link</h4>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms Conditions</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Cancellation Policy</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-4 order-lg-4">
                    <div class="footer_link">
                        <h4>Contact Us</h4>
                        <p><i class="fas fa-phone-alt"></i> +91 8910367005</p>
                        <p><i class="fas fa-envelope"></i>  info@bmawa.in</p>
                        <p><i class="fas fa-map-marker-alt"></i> Mumbai Chandigarh Faridabad</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_copyright">
                        <p> © 2024 <a href="https://galaxytechup.com/"> BMAWA Beauty and Makeup Artist Welfare Association </a> . All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=====================================
        FOOTER END
        =====================================-->


    <!--=========================
        SCROLL BUTTON START
        ===========================-->
        <div class="scroll_btn">
            <span><i class="fas fa-arrow-alt-up"></i></span>
        </div>
    <!--==========================
        SCROLL BUTTON END
        ===========================-->


        <!--jquery library js-->
        <script src="js/jquery-3.6.0.min.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
        <!--bootstrap js-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!--font-awesome js-->
        <script src="js/Font-Awesome.js"></script>
        <!--venobox js-->
        <script src="js/venobox.min.js"></script>
        <!--slick slider js-->
        <script src="js/slick.min.js"></script>
        <!--cursor pointer js-->
        <script src="js/pointer.js"></script>
        <!--isotop js-->
        <script src="js/isotope.pkgd.min.js"></script>
        <!--counter js-->
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.countup.min.js"></script>
        <!--barfiller js-->
        <script src="js/animated_barfiller.js"></script>
        <!--nice select js-->
        <script src="js/jquery.nice-select.min.js"></script>
        <!--stucky sidebar js-->
        <script src="js/sticky_sidebar.js"></script>
        <!--simply countdown js-->
        <script src="js/simplyCountdown.js"></script>
        <!--wow js-->
        <script src="js/wow.min.js"></script>

        <!-- lucid icon -->
        <!-- Development version -->
        <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

        <!-- Production version -->
        <script src="https://unpkg.com/lucide@latest"></script>

        <script type="text/javascript">
            lucide.createIcons();
        </script>

        <!-- js -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
          document.getElementById('alert-btn').addEventListener('click', function() {
              Swal.fire({
                title: 'Hello, Bootstrap!',
                text: 'This is a SweetAlert2 modal with Bootstrap styling!',
                icon: 'success',
                confirmButtonText: 'OK',
                customClass: {
                  confirmButton: 'btn btn-primary',  
              },
              buttonsStyling: false  
          });
          });
      </script>


      <!-- taoster -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script type="text/javascript">
        toastr.options = {
          "closeButton": true,  
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,  
          "positionClass": "toast-top-right",  
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000", 
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
      };

      <?php if($_GET['status']=='send') { ?>
        toastr.success('Enquiry Send Sucessfully');
      <?php } ?>


  </script>

 

<!--main/custom js-->
<script src="js/main.js"></script>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<!-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script> -->


</body>

</html>