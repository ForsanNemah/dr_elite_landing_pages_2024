 
  <div class="container" dir="rtl">
    <h2>خدماتنا </h2>
    <div class="row">






    <?php
$folderPath = 'image_services/';

// Read all files and directories from the folder
$files = scandir($folderPath);

// Filter out directories and retrieve only image files
$imageFiles = array_filter($files, function ($file) use ($folderPath) {
    // Exclude directories and hidden files
    return is_file($folderPath . $file) && !is_dir($folderPath . $file) && !in_array($file, ['.', '..']);
});

// Display the image file names
foreach ($imageFiles as $image) {
    //echo $image . "<br>";


    echo '
    
    
    
    <div class="col-md-4 mb-4">
    <div class="card">
      <img src="image_services/'.$image.'" class="card-img-top" alt="Service 1">
      
    </div>
  </div>
    
    
    
    
    
    ';




}
?>














    
 


     

    </div>
  </div>

  