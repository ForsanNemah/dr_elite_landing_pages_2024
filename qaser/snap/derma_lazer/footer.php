 

<footer  class="st-site-footer st-sticky-footer st-dynamic-bg" data-src="assets/img/footer-bg.png">


    <div class="st-main-footer" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="st-footer-widget">
              <div class="st-text-field">

              <div class="st-hero-btn">
              <a href="#appointment" class="st-btn st-style1 st-color1 st-smooth-move  mybutton ">حجز موعد</a>
            </div>


            <br>
            
                





                <?php


if ($handle = opendir('logo')) {


    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

 

  
  //echo "$entry\n";
  echo "
  
  
  
  <img   src='logo/$entry' class='st-footer-logo' alt='Responsive image'   >
  

  
  ";
  
  
  break;
 

 
           
        }
    }

    closedir($handle);
}




?>
















                <div class="st-height-b25 st-height-lg-b25"></div>
                <div class="st-footer-text">
                  
<?php

echo $footer_info;
?>
                
                
                </div>

                <div class="st-height-b25 st-height-lg-b25"></div>

              

                <!--
  <ul class="st-social-btn st-style1 st-mp0">
                  <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                </ul>
-->
              </div>
            </div>
          </div><!-- .col -->
          <div class="col-lg-3" >
            <div class="st-footer-widget" hidden>
              <h2 class="st-footer-widget-title">Useful Links</h2>
              <ul class="st-footer-widget-nav st-mp0">
                <li><a href="#"><i class="fas fa-chevron-right"></i>FAQs</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i>Blog</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i>Weekly timetable</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i>Terms & Conditions</a></li>
              </ul>
            </div>
          </div><!-- .col -->
          <div class="col-lg-3">
            <div class="st-footer-widget" hidden>
              <h2 class="st-footer-widget-title">Departments</h2>
              <ul class="st-footer-widget-nav st-mp0">
                <li><a href="#"><i class="fas fa-chevron-right"></i>Rehabilitation</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i>Laboratory Analysis</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i>Face Lift Surgery</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i>Liposuction</a></li>
              </ul>
            </div>
          </div><!-- .col -->
          <div class="col-lg-3" hidden>
            <div class="st-footer-widget">
              <h2 class="st-footer-widget-title">تواصل معنا </h2>
              <ul class="st-footer-contact-list st-mp0">
                <li><span class="st-footer-contact-title">العنوان:</span> 

<?php echo $address;?>


                </li>
                <li><span class="st-footer-contact-title">الايميل:</span>
                
                
                <?php echo $email;?>
            
            
            </li>
                <li><span class="st-footer-contact-title"> هاتف  :</span> 
                
                
                <?php echo $phn0;?>  
                
            
            </li>


            </li>
                <li><span class="st-footer-contact-title">جوال  :</span> 
                
                
                <?php echo $phn;?>  
                
            
            </li>



              </ul>
            </div>
          </div><!-- .col -->
        </div>
      </div>
    </div>







    <div class="st-copyright-wrap">
      <div class="container">
        <div class="st-copyright-in">
          <div class="st-left-copyright">

            <div class="st-copyright-text" hidden>
                
           
        <a href="https://wmc-ksa.com/">
        Copyright 2024. Design by Window Marketing Company
        </a>
        
        </div>


          </div>
          <div class="st-right-copyright">
            <div id="st-backtotop"><i class="fas fa-angle-up"></i></div>
          </div>
        </div>
      </div>
    </div>




    
  </footer>


  <style>


.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 15px;
    margin-left: 15px;
    margin-tob: 15px;
    margin-buttom: 15px;
}

  </style>