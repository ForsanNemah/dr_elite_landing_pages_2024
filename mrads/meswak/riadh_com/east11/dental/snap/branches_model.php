<?php


echo '



<select name="location" id="location_of_the_model" class="form-control mt-4" dir="rtl" required>
  <option value="" disabled selected>اختر موقعك</option>
 
 
 



 



';
$filename = 'branches.txt';

// Open the file for reading
$file = fopen($filename, 'r');

// Check if the file was opened successfully
if ($file) {
    // Read each line of the file
    while (($line = fgets($file)) !== false) {
        // Process the line
        //echo $line;


        echo ' <option value="'.$line.'"   >'.$line.'</option>';
    }

    // Close the file
    fclose($file);
} else {
    // Handle the case when the file couldn't be opened
    echo "Failed to open the file.";
}



echo '



 
 
 
 
 



</select>



';

?>


<script>


//alert("www");

$(document).ready(function() {
  // Select the select element
  var $select = $("#location_of_the_model");

  // Attach a change event handler to the select element
  $select.on("change", function() {
    // Code to be executed when the selected option changes
    var selectedValue = $(this).val();
    //alert("Selected option: " + selectedValue);




    if(selectedValue.trim()=="اخرى"){

        alert("ok");

        var myModal = new bootstrap.Modal(document.getElementById('locations_model'));
      myModal.show();

    }
    else{
        //alert("not ok");

    }
  });
});




</script>