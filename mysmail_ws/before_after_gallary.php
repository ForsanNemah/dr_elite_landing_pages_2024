
    
    <section id="offers_gallery">
      <div class="st-height-b120 st-height-lg-b80"></div>
      <div class="container">



        <div class="st-section-heading st-style1"  >
          <h2 class="st-section-heading-title"> 
            
            
          
     حالات قبل وبعد
        
        
        
        </h2>
          <div class="st-seperator" hidden>
            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <div class="st-seperator-center"><img src="assets/img/icons/4.png" alt="icon"></div>
            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <div class="st-section-heading-subtitle" hidden>
 
          اقوى العروض مع خدمة تستحق الثقة 
          
          </div>

        </div>



        
        <div class="st-height-b40 st-height-lg-b40"></div>
      </div>
      <div class="container">
        <div class="st-portfolio-wrapper">
          <div class="text-center st-isotop-filter st-style1">
            <ul class="st-mp0">
              <li class="active"><a href="#" data-filter="*">كل الحالات </a></li>
              <li hidden><a href="#" data-filter=".derma"> الجلدية</a></li>
              <li hidden><a href="#" data-filter=".tagmeel">التجميل</a></li>
              <li><a href="#" data-filter=".dental">الاسنان </a></li>

              <!--
              <li><a href="#" data-filter=".urology">Urology</a></li>
              <li><a href="#" data-filter=".pulmonary">Pulmonary</a></li>
              <li><a href="#" data-filter=".traumatology">Traumatology</a></li>

-->
            </ul>
          </div>
          <div class="st-isotop st-style1 st-port-col-3 st-has-gutter st-lightgallery">
            <div class="st-grid-sizer"></div>




            <?php
$folderPath = "after_before_images/dental"; // Replace with the actual path to your folder

try {
    $files = scandir($folderPath);

    foreach ($files as $file) {
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {

            //echo $file . "<br>";

            echo '
            
            
            <div class="st-isotop-item dental ">
            <a href="after_before_images/dental/'.$file.'" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
              <div class="st-project-img st-zoom-in"><img src="after_before_images/dental/'.$file.'" alt="project1"></div>
              <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
            </a>
          </div>

      
            
            
            
            ';
        }
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>




          

<?php
$folderPath = "after_before_images/derma"; // Replace with the actual path to your folder

try {
    $files = scandir($folderPath);

    foreach ($files as $file) {
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
           // echo $file . "<br>";

            echo '
            
            
            <div class="st-isotop-item derma ">
            <a href="after_before_images/derma/'.$file.'" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
              <div class="st-project-img st-zoom-in"><img src="after_before_images/derma/'.$file.'" alt="project1"></div>
              <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
            </a>
          </div>

      
            
            
            
            ';
        }
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>





<?php
$folderPath = "after_before_images/tagmeel"; // Replace with the actual path to your folder

try {
    $files = scandir($folderPath);

    foreach ($files as $file) {
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
            //echo $file . "<br>";

            echo '
            
            
            <div class="st-isotop-item tagmeel ">
            <a href="after_before_images/tagmeel/'.$file.'" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
              <div class="st-project-img st-zoom-in"><img src="after_before_images/tagmeel/'.$file.'" alt="project1"></div>
              <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
            </a>
          </div>

      
            
            
            
            ';
        }
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
 



 
           

           

       
 

         
          </div><!-- .isotop -->
        </div>
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
    </section>