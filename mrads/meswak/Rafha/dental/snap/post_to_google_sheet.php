<?php

error_reporting(E_ERROR | E_PARSE);
ini_set('max_execution_time', '0');
include "info.php";

$name=$_POST['name'];
$phone=$_POST['phone'];
$service=$_POST['service'];
$is_w_app=$_POST['is_w_app'];
$source=$_POST['source'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];
$branch=$_POST['branch'];

//$source="snap 1";

date_default_timezone_set("Asia/Riyadh");
$date = date('Y/m/d H:i:s');



$whatsapp_link="wa.me/966".$phone;
echo $name.$phone.$is_w_app;




$postParameter = array(
    'date_and_time' => $date,
    'name' => $name,
    'phone' => $phone,
    'service' => $service,
    'whatsapp_link' => $whatsapp_link,
    'subject' => $subject,
    'msg' => $msg,
    'branch' => $branch,
    'source' => $source
    
);



$curlHandle = curl_init($action_url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
$curlResponse = curl_exec($curlHandle);
curl_close($curlHandle);


//echo "w_api start";

if($api_notification==1){
        
    $w_app_msg1="  لديك تسجيل  جديد  باسم  ".$name;
    $w_app_msg2=$w_app_msg1." برقم جوال ".$phone;
    
    //send_w_app_msg($phone_main,$w_app_msg2,"2000");

}




//echo $curlResponse."";









if($is_w_app=="1"){


    if($api_notification==1){

        $w_app_msg1="  لديك تسجيل  جديد  باسم  ".$name;
        $w_app_msg2=$w_app_msg1." برقم جوال ".$phone;
        
        //send_w_app_msg($phone_main,$w_app_msg2,"2000");

    }
  

    header("Location:https://wa.me/".$phone_main);

}

else{



    echo '<script type="text/javascript">

   var msg=" تمت عملية التسجيل بنجاح وسيتم التواصل معك في اسرع وقت  ";   



           
alert(msg);

//window.history.go(-1);


window.location.replace("https://almeswak.ksa-ads.com/34laban/dental/snap/done.php");

</script>

';

}





















function send_w_app_msg($phone,$msg,$token) {


    

echo "w_api start 2";




 





















//echo $phone.$msg.$token;



/*
    $postParameter = array(
        
        
        'phn' => $phone,
        'token' => $token,
        'msg' => $msg
        
    );

    */


    $postParameter="phn=".$phone."&msg=".$msg."&token=".$token;
    
    $curlHandle = curl_init("http://alamerms.com/send-text");
    curl_setopt($curlHandle, CURLOPT_POST, true);
    curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curlHandle, CURLOPT_PORT, 2000);
    curl_setopt($curlHandle, CURLOPT_CONNECTTIMEOUT, 0); 

    $curlResponse = curl_exec($curlHandle);
    echo $curlResponse."res";
    curl_close($curlHandle);


    //print_r(curl_getinfo($curlHandle));

    if(curl_errno($curlHandle)){
        echo 'Curl error: ' . curl_error($curlHandle);
    }
    
  }



?>