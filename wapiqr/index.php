<!DOCTYPE html>
<html>
<head>


<?php

$server_port=$_GET['port'];

//echo $server_port;

?>
  <title>QR Code Generator</title>
  <style>
    #qr-code {
      display: none; /* Hide the QR code initially */
    }
  </style>




<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>   




<link href="https://fonts.cdnfonts.com/css/tajawal" rel="stylesheet">
                


</head>
<body>


<div class="container text-center" style="margin-top: 20px;">


<h1>امسح الكود لتفعيل   </h1>
<h3> خدمة واتساب شات بوت</h3>
<h3>الربط البرمجي مع واتساب</h3>


<br>
  <img id="qr-image" src="" alt="QR Code" width="264" height="264">
</div>



  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    // Function to generate QR code from a string
    function generateQRCode(text) {
      var qrCodeImage = document.getElementById('qr-image');
      qrCodeImage.src = 'https://api.qrserver.com/v1/create-qr-code/?size=128x128&data=' + encodeURIComponent(text);

      var qrCodeDiv = document.getElementById('qr-code');
       
    }

    // Function to fetch the response string from the URL and generate QR code
    function fetchResponseAndGenerateQRCode() {

      var connection_url="mycurl.php";

     

      //alert(connection_url);

      $.get(connection_url, function(response) {



      





        try {



          //alert("res"+response);


if(response=="1")

{
  alert("تواصل معنا وتساب 966568430828");
  
}
else{

  generateQRCode(response);

}
 
}
catch(err) {

  alert(err.message);
 

}











       
      });
    }

    // Initial fetch and generate
    fetchResponseAndGenerateQRCode();

    // Periodically fetch and generate QR code every 5 minutes
    setInterval(fetchResponseAndGenerateQRCode, 8* 1000); // 5 minutes
  </script>



<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
</body>
</html>


<style>

body{

  font-family: 'Tajawal', sans-serif;
                                                
}

</style>