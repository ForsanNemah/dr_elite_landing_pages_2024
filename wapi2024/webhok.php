<?php
include "index.php";

echo "this is web hook";

$data = file_get_contents("php://input");
$event = json_decode($data, true);
if(isset($event)){
    //Here, you now have event and can process them how you like e.g Add to the database or generate a response
    $file = 'log.txt';  
    $data =json_encode($event)."\n";  
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);



    $result = send_with_wapi('40703bb7812b727ec01c24f2da518c407342559c', 'aedd0dc2-8453', '966568430828@c.us',"test web hok ");

    echo print_r($result) ;





}




?>