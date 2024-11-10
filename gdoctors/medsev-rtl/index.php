<!DOCTYPE html>
<html lang="ar" dir="rtl">
  









<?php include 'header.php'; ?>














    <body>

        <!-- Preloader -->
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
        
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-9 col-lg-9">
                        <div class="header-top-item">
                            <div class="header-top-left">
                                <ul>
                                    <li>
                                        <a href="tel:+<?php echo $phone1; ?>">
                                            <i class="icofont-ui-call"></i>



                                         اتصال :<?php echo $phone1; ?>


                                         

                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:<?php echo $email; ?>">
                                            <i class="icofont-ui-message"></i>
                                            <?php echo $email; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-location-pin"></i>
                                        السعودية -الخبر
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-sm-3 col-lg-3">
    <div class="header-top-item">
        <div class="header-top-right">
            <ul>
                <li>
                    <a hidden href="https://www.facebook.com/login/" target="_blank">
                        <i class="icofont-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/gulf_doctors" target="_blank">
                        <i class="icofont-instagram"></i>
                    </a>
                </li>
                <li>
                    <a hidden href="https://x.com/login" target="_blank">
                        <i class="icofont-x"></i> <!-- 'icofont-x' for X (Twitter) icon -->
                    </a>
                </li>
                <li>
                    <a href="https://www.tiktok.com/@gulf_doctors" target="_blank">
                        <i class="icofont-tiktok"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.snapchat.com/add/gulf_doctors?invite_id=CWzeXKqd&locale=en_SA%40calendar%3Dgregorian&share_id=WJrojDpkRT6FTiybzsgNmg&sid=e5c879793be5402dbd8636621636767b" target="_blank">
                        <i class="icofont-snapchat"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


                    


                </div>
            </div>
        </div>
        <!-- End Header Top -->
        
        <!-- Start Navbar Area -->

        <?php include "nav.php" ?>
        <!-- End Navbar Area -->

        <!-- Home Slider -->

        <?php include "slider.php" ?>

        
        <!-- End Home Slider -->

        <!-- Counter -->

        <?php include "counter.php" ?>
        
        <!-- End Counter -->

        <!-- About -->

        <?php include "about.php" ?>

        
        <!-- End About -->

        <!-- Services -->

<?php include 'services.php'; ?>
<?php include 'form_with_working_hours.php'; ?>

        <!-- End Services -->
        <?php include "experince.php" ?>
        <!-- Expertise -->

        

        
        <!-- End Expertise -->

        <!-- Video -->


        <!-- End Video -->

        <!-- Doctors -->

        <!-- End Doctors -->

        <!-- Blog -->

        <?php //include 'footer.php'; ?>
        <!-- End Blog -->

        <!-- Footer -->
    

            <!-- Newsletter -->

            
            <!-- End Newsletter -->


            <?php include 'map.php'; ?>   
<?php include 'footer.php'; ?>


        <!-- Essential JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Slider Slider JS -->
        <script src="assets/js/slick.min.js"></script>
        <!-- Magnific Popup -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Form Ajaxchimp JS -->
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact-form-script.js"></script>
        <!-- Odometer JS -->
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/jquery.appear.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
  AOS.init();
</script>


    </body>
</html>