<?php

 


// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $profile_id = $_POST['profile_id'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    $auth = $_POST['auth'];

    // Check if the required parameters are set
    if (isset($_POST['auth']) && isset($_POST['profile_id']) && isset($_POST['phone']) && isset($_POST['msg'])) {
        // Retrieve the values of the parameters
      

        send_text_msg();

        // Perform your desired actions with the submitted data
       // echo "profile_id: $profile_id, phone: $phone, msg: $msg";
    } else {
        echo "One or more required parameters are missing.";
        //echo  "vars".$profile_id .$phone.$msg.$auth;
    }
} else {
    echo "This script should be accessed via a _POST request.";
}












function send_text_msg() {



    global $profile_id, $phone, $msg,  $auth;


    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://wappi.pro/api/async/message/send?profile_id='. $profile_id,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "body":"'.$msg).'",
  "recipient": "'.$phone.'"
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization:'.  $auth,
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
    
}






//get_chat();


function get_chat(){





$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://wappi.pro/api/sync/chats/get?profile_id=aedd0dc2-8453&limit=3&show_all=false&offset=0',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: 40703bb7812b727ec01c24f2da518c407342559c'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;





}



?>