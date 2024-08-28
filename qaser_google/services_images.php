<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services Section</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
  <style>
    .service {
      text-align: center;
      border: 1px solid #ccc;
      padding: 20px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <section id="services">
    <div class="container">



      <div class="row">








      <?php
$folderPath = 'images/'; // Replace 'path/to/folder' with the actual path to your folder

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
    ///echo $image . "<br>";


    echo '
    
    
    
    
    <div class="col-md-4">
    <div class="service">
      <img src="images/'. $image.'" alt="Service 3" class="img-fluid">
      <h3> </h3>
      <p contenteditable="true"> </p>
    </div>
  </div>
    
    
    
    
    
    
    
    
    ';




}
?>






























 











      </div>



     


    </div>
  </section>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>