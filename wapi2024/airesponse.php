<?php 



$profile_id= "73817eb8-ed42";
$token="40703bb7812b727ec01c24f2da518c407342559c";
$chat_gpt_phone="18002428478";







$data = file_get_contents("php://input");


$event = json_decode($data, true);
if(isset($event)){
    //Here, you now have event and can process them how you like e.g Add to the database or generate a response
    $file = 'logab.txt';  
    $data =json_encode($event)."\n";  
    //file_put_contents($file, $data, FILE_APPEND | LOCK_EX);


    //print_r($data);


   



 $chat_id = $event['messages'][0]['chatId'];
$message = $event['messages'][0]['body'];
$caption = $event['messages'][0]['caption'];
$profile_id = $event['messages'][0]['profile_id'];

$is_me = $event['messages'][0]['is_me'];
$from_user = $event['messages'][0]['from'];
$to_user = $event['messages'][0]['to'];
$message_id = $event['messages'][0]['id'];
$type = $event['messages'][0]['type'];
$is_forwarded = $event['messages'][0]['is_forwarded'];
$contact_name = $event['messages'][0]['contact_name'];










$result = send_with_wapi($token, $profile_id,'966568430828@c.us', $message." my msg to " );










}


























function send_with_wapi($auth, $profileId, $phone, $message) {
 


 


        

        
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://ads.2moh.net/wapi2024/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'auth='.$auth.'&profile_id='.$profileId.'&phone='.$phone.'&msg='.$message.'',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: 40703bb7812b727ec01c24f2da518c407342559c'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    //echo $response;
    
    
    
    
    
        }
        
        
         
     
      





?>