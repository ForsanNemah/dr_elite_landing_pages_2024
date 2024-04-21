<div class="form-container" id="w_app_form">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card mt-5">
        <div class="card-body" style="background-color: green;">
          <h2 class="card-title text-center mb-4" style="color: white;">
           قم بتعبئة الفورم وسيتم تحويلك الى واتساب مباشرة
          </h2>
          <form>
            <div class="mb-3">
              
              <input type="text" class="form-control" name="name" placeholder="الاسم" required>
            </div>


            <div class="mb-3">
 
              <input type="number" class="form-control" name="phone" placeholder="أدخل  رقم جوالك هنا " required>
            </div>



            <div class="mb-3" hidden>


              <select name="branch"    class="form-select">


  <?php
    $filename = 'branches.txt'; // Specify the path to your text file

    // Check if the file exists
    if (file_exists($filename)) {
        // Read the file into an array, with each line as an element
        $lines = file($filename, FILE_IGNORE_NEW_LINES);

        // Output the HTML select tag
        

        // Iterate over the lines and create an option for each line
        foreach ($lines as $line) {
            echo '<option>' . htmlspecialchars($line) . '</option>';
        }

        // Close the HTML select tag
        
    } else {
        echo 'File not found.';
    }
?>

</select>

            </div>







































            <div class="mb-3" hidden>


<select name="service"    class="form-select">


<?php
$filename = 'services.txt'; // Specify the path to your text file

// Check if the file exists
if (file_exists($filename)) {
// Read the file into an array, with each line as an element
$lines = file($filename, FILE_IGNORE_NEW_LINES);

// Output the HTML select tag


// Iterate over the lines and create an option for each line
foreach ($lines as $line) {
echo '<option>' . htmlspecialchars($line) . '</option>';
}

// Close the HTML select tag

} else {
echo 'File not found.';
}
?>

</select>

</div>




















            





            <div class="text-center">
              <button type="submit" class="btn btn-primary">فتح وتساب</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>