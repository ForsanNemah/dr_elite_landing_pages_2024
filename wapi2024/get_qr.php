















<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="refresh" content="6">

  <?php
   

   include "env.php";
  ?>


  <title>Centered Image</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <img class="responsive" src="<?php 










if (isset($_GET['id'])) {






    $userInfo= getUserById($_GET['id']);

    if ($userInfo !== null) {
    $user_name= $userInfo['name'];
    $token= $userInfo['token'];
    $sheet_url= $userInfo['sheet_url'];
    $profile_id= $userInfo['profile_id'];
     
    
    
        
$profileId = $profile_id;
$authToken = $token;

$result = getWappiQRCode($profileId, $authToken);
if ($result['httpCode'] == 200) {
    //echo $result['response'];


    $json = json_decode($result['response'], true);
$qrCode = $json['qrCode'];


echo  $qrCode ;
     
    
    } else {


        header("Location:done.php");


        echo "User not found.";
    }
    




















  
} else {
   //echo "invalid link ";
}












//echo  "<br>";

/*
echo '


<img src="'.$qrCode.'" alt="My Image">




';
        
    */    
        
        ?>
        
        
        
        
        
        
        
        
        
        
        
        " class="img-fluid" alt="Centered Image">
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>












<?php





/*
// Extract the base64-encoded data from the qrCode string
$base64Data = substr($qrCode, strpos($qrCode, ",") + 1);
 
echo $base64Data;


header('Content-Type: image/png');
echo base64_decode($base64Data);
*/



} else {
    echo 'Error: ' . $result['httpCode'];
}




function getWappiQRCode($profileId, $authToken) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://wappi.pro/api/sync/qr/get?profile_id=' . $profileId,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: ' . $authToken
        ),
    ));

    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);

    return array(
        'response' => $response,
        'httpCode' => $httpCode
    );
}












?>