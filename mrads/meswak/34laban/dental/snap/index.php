<!DOCTYPE html>
<html dir="rtl" lang="ar"">

<?php


include "head.php";
include "info.php";

?>

<body>





<body>











  <div>

    <div class="text-center image-container"  >
      <img src="images/vi.webp" alt="Book Image Mobile" class="img-fluid mobile-image">
      <img src="images/vi2.webp" alt="Book Image Desktop" class="img-fluid desktop-image">
      <a href="#myform">

      <button class="btn btn-primary centered-button  btn-booking rounded-pill pulsate">احجز الان</button>

      </a>
     
    </div>

  </div>







  <?php

 



 


 

$rootDir = $_SERVER['DOCUMENT_ROOT'];
include $rootDir."/royal_batch.php";
$rootDir = $_SERVER['DOCUMENT_ROOT'];
include $rootDir."/royal_batch.php";
include "form.php";



?>



<div>


<?php

include "w_app_form.php";



?>


</div>


<?php


if($w_app_button==1){
  include "w_app.php";

}




?>




<br>
<br>
  <div class="text-center">

 


 


<?php

if($before_after==1){

  echo '
  
  
  
  
  <a href="#cases_section">

  <button class="btn btn-primary    btn-booking rounded-pill pulsate"> 

شوف حالات قبل وبعد 

</button>
  </a>
  
  
  
  
  
  ';

}


?>






  



</div>









 










<?php

if($services==1){

  echo '
  
  
  
  
  <div class="text-center  mt-4">

  <h1>
 
 
 خدماتنا 
 
  </h1>
 
 </div
 
 
 
 
 

 
 
 
 
 
  
  
  
  
  
  ';

  include "services.php";

}


?>















<?php

if($services2==1){

  echo '
  
  
  
  
  <div class="text-center  mt-4">

  <h1>
 
 
 خدماتنا 
 
  </h1>
 
 </div
 
 
  
  ';

  include "services2.php";

}


?>




















<?php

if($derma_services==1){

  echo '
  
  
  
  
  <div class="text-center  mt-4">

  <h1>
 
 
 خدماتنا 
 
  </h1>
 
 </div
 
 
  
  ';

  include "derma_services.php";

}


?>

















<?php

if($services_images==1){

  echo '
  
  
  
  
  <div class="text-center  mt-4">

  <h1>
 
 
 خدماتنا 
 
  </h1>
 
 </div
 
 
  
  ';

  include "services_images.php";

}


?>








































<br>
<br>
  <div class="text-center">



<a href="#myform">
<button class="btn btn-primary    btn-booking rounded-pill pulsate"> 
احجز الان

  </button>

</a>


</div>





 

<?php


if($process==1){

  include "process.php";

}




?>












<?php

if($before_after==1){

include "before_after.php";

}

?>













<?php

if($faq==1){

include "faq.php";
}


?>








<?php



if($footer==1){
  
  include "footer.php";
}




?>






















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>