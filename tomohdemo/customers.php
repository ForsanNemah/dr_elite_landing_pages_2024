
<section class="pt-120 pb-120 our_clients bg-main">
      <div class="process_heading w-100 text-center" data-aos="fade-down">
        <span class="fs-ten fw-semibold p2-color mb-2 text-center"
          >
          
          بعض من عملائنا الاعزاء 
          
          </span
        >
        <h2 class="fs-two fw-semibold p8-color mb-3 mb-lg-6">شركاء النجاح </h2>
        <p class="fs-ten p4-color">
        قائمة ببعض العملاء الذين  تشرفنا بالعمل نعهم 
        </p>
      </div>
      <div class="mt-8 mt-md-15" data-aos="zoom-out-up">
        <div class="swiper clients_slider">
          <div class="swiper-wrapper d-flex align-items-center">


          










            <?php
$folderPath = 'customers'; // Replace 'path/to/folder' with the actual path to your folder

$files = scandir($folderPath); // Get all files and directories from the folder

$imageFiles = array();

foreach ($files as $file) {
    $filePath = $folderPath . '/' . $file;
    
    // Check if the file is a regular file and ends with a known image extension
    if (is_file($filePath) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
        $imageFiles[] = $file;
    }
}

// Output the image file names
foreach ($imageFiles as $image) {
    //echo $filePath . "<br>";


    echo '

    
     
       
       <div class="swiper-slide">
              <div
                class="px-4 px-md-8 py-5 py-md-10 bg13-color d-flex align-items-center justify-content-center"
              >
                <img src="customers/'.$image.'" alt="logo" />
              </div>
            </div>



       
    
    
    
    
    ';

/*
    echo '
    
    
    
 
    
    
    
    ';
*/



}
?>


















           
           
            
           
           
          
          
           
          </div>
        </div>
      </div>
    </section>