<div class="form-container" id="myform">
  <div class="row justify-content-center custom_row_margin">
    <div class="col-lg-6">
      <div class="card mt-5">
        <div class="card-body form_bg" >
          <h2 class="card-title text-center mb-4" style="color: white;">
          <?php
          echo $form1_des;
          ?>
<br>

<?php
          echo $form1_des2;
          ?>



          </h2>
          <form method="post" action="post_to_google_sheet.php" onsubmit="form1_action()">




          <input type="text" class="form-control" name="source" value="<?php echo $ad_source ?>"  hidden>

          <input type="text" class="form-control" name="is_w_app" value="0"  hidden>





        












            <div class="mb-3">
              
              <input type="text" class="form-control" name="name" placeholder="عنوان المهمة" required>
            </div>




            <div class="mb-3">
              


            <textarea class="form-control"  name="des" rows="4" cols="50" placeholder=" وصف المهمة" >وصف المهمة 
</textarea>
 
 
            </div>




            













            <div class="mb-3">
              
              <input type="text" class="form-control" name="files_url" placeholder="رابط ملفات المهمة (اختياري)"  >
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























            <div class="mb-3">


<select name="task_sender_name"    class="form-select">


<?php
$filename = 'services2.txt'; // Specify the path to your text file

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


















            <div class="mb-3">


<select name="emp_name"    class="form-select">


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


            <img  class="img-fluid" id="loading_gif" src="images/loading.gif" alt="Italian Trulli"  width="50" height="50" >


              <button id="form1_button" type="submit" class="btn btn-primary btn-form rounded-pill">ارسال </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>








<div class="container mt-4"  >
  <div class="row justify-content-center">
    <div class="col-lg-8 text-center">
      <h1>
    
    
<a href="https://docs.google.com/spreadsheets/d/1baOcKOGTbtva72Uc7QznWK3ka5Xiw5h6viGW4Drftb4/edit?usp=sharing">فتح شيت المهام </a>
    
    
    
    </h1>
      <div class="accordion"  >
        <!-- Accordion items go here -->
      </div>
    </div>
  </div>
</div>


































<script>


$('#loading_gif').hide();


function form1_action() {
  //alert("The form was submitted");
  
 
  document.getElementById("form1_button").disabled = true;
 

  //$('#form1_button').hide();
  //$('#loading_gif').show();
 
  //alert("wwe");
  document.getElementById('form1_button').innerText = 'يرجى الإنتظار سيتم تحويلك الان';








  var event_phn=document.getElementById('phn_form1').value
 

  snaptr('track','SIGN_UP', {
  
    'user_phone_number': sha256("966"+event_phn)          
});











ttq.identify({
 
	"phone_number":sha256("966"+event_phn)  // string. The phone number of the customer if available. It must be hashed with SHA-256 on the client side.
 
});


ttq.track('CompleteRegistration', {});





//alert("submited"+event_phn);





}
</script>