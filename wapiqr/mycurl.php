<?php
$server_port=$_GET['port'];





get_qr();



function get_qr() {
  


    global $server_port;

    $url = 'http://185.182.186.101:3380?qr_id='.$server_port;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    
    $response = curl_exec($curl);
    curl_close($curl);
    
    

    if(  trim($response)==$server_port ){

        echo "connected";

    }
    else{

        echo $response;

    }

 
}







































function check_qr_status() {
  


    global $server_port;

    $url = 'http://185.182.186.101:3380/check_qr_status?qr_id='.$server_port;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    
    $response = curl_exec($curl);
    curl_close($curl);
    
    echo $response;

 
}







?>